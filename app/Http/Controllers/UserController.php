<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function paketOnlyDecor()
    {
        return view('user.paket.paket-only-decor');
    }

    public function paketAllIn()
    {
        return view('user.paket.paket-all-in');
    }

} 