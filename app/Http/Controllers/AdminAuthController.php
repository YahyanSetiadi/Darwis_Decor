<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $user = User::query()->where('email', $data['email'])->first();

        // Validasi admin-only via is_active
        if (!$user || (int)($user->is_active ?? 0) !== 1) {
            return back()->withErrors([
                'email' => 'Email tidak terdaftar sebagai admin.',
            ])->withInput();
        }

        // Auth biasa (cek password)
        $credentials = [
            'email' => $data['email'],
            'password' => $data['password'],
        ];

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'password' => 'Password salah.',
            ])->withInput();
        }

        // Pastikan yang login memang admin
        $activeUser = Auth::user();
        if ((int)($activeUser?->is_active ?? 0) !== 1) {
            Auth::logout();
            return back()->withErrors([
                'email' => 'Akun tidak memiliki akses admin.',
            ])->withInput();
        }

        $request->session()->regenerate();

        return redirect()->route('admin.bookings.pending')
            ->with('success', 'Login admin berhasil.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}

