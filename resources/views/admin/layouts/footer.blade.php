</main>
    </div>

    <script>
        (function () {
            const sidebar = document.getElementById('sidebar');
            const backdrop = document.getElementById('sidebar-backdrop');
            const btnOpen = document.getElementById('open-sidebar');
            const btnClose = document.getElementById('close-sidebar');

            if (!sidebar || !backdrop || !btnOpen || !btnClose) return;

            function toggleSidebar() {
                sidebar.classList.toggle('-translate-x-full');
                backdrop.classList.toggle('hidden');
            }

            btnOpen.addEventListener('click', toggleSidebar);
            btnClose.addEventListener('click', toggleSidebar);
            backdrop.addEventListener('click', toggleSidebar);
        })();
    </script>

</body>
</html>