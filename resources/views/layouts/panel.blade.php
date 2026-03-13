<!DOCTYPE html>
<html lang="es" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }} • Unsurvival</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body
    class="antialiased bg-gray-50 dark:bg-gray-950 text-gray-900 dark:text-gray-100 font-sans transition-colors duration-200">

    @php
        $user = Auth::guard('minecraft')->user();
    @endphp

    <div class="min-h-screen flex w-full relative">
        <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden transition-opacity opacity-0">
        </div>

        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-50 w-64 flex-col bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 h-screen transform -translate-x-full md:relative md:translate-x-0 transition-transform duration-300 ease-in-out flex">

            <div class="h-16 flex items-center px-4 border-b border-gray-200 dark:border-gray-800 shrink-0">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 w-full">
                    <img src="{{ asset('images/icon.webp') }}" alt="Logo" class="w-10 h-10 object-contain">
                    <span class="font-semibold text-lg">Unsurvival</span>
                </a>
            </div>

            <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 px-3 py-2 font-medium rounded-md {{ request()->routeIs('dashboard') ? 'bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white' }} transition-colors">
                    <x-heroicon-o-home class="w-5 h-5" /> Inicio
                </a>
                <a href="{{ route('shop.index') }}"
                    class="flex items-center gap-3 px-3 py-2 font-medium rounded-md {{ request()->routeIs('shop.index') ? 'bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800' }} transition-colors">
                    <x-heroicon-o-shopping-bag class="w-5 h-5" /> Tienda
                </a>
                <a href="{{ route('orders.index') }}"
                    class="flex items-center gap-3 px-3 py-2 font-medium rounded-md {{ request()->routeIs('orders.*') ? 'bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white' : 'text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800' }} transition-colors">
                    <x-heroicon-o-banknotes class="w-5 h-5" /> Mis Pagos
                </a>
            </nav>

            <div class="p-4 border-t border-gray-200 dark:border-gray-800 relative shrink-0">
                <div id="user-dropdown"
                    class="hidden absolute bottom-full left-4 right-4 mb-2 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-md shadow-lg py-1 z-20 overflow-hidden">
                    <a href="{{ route('profile.edit') }}"
                        class="flex items-center gap-2 px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                        <x-heroicon-o-user class="w-5 h-5" /> Mi Cuenta
                    </a>
                    <div class="h-px bg-gray-200 dark:bg-gray-800 my-1"></div>
                    <form method="POST" action="{{ route('logout') }}" class="m-0">
                        @csrf
                        <button type="submit"
                            class="cursor-pointer flex items-center gap-2 w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 dark:hover:bg-red-950/50">
                            <x-heroicon-o-arrow-right-on-rectangle class="w-5 h-5" /> Cerrar Sesión
                        </button>
                    </form>
                </div>
                <button id="user-menu-btn"
                    class="cursor-pointer flex items-center w-full gap-3 p-2 -mx-2 rounded-md hover:bg-gray-50 dark:hover:bg-gray-800/50 text-left focus:outline-none">
                    <img src="{{ $user->skin_url }}" alt="Avatar"
                        class="w-9 h-9 rounded-md object-cover bg-gray-100 dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <div class="flex-1 min-w-0">
                        <p class="font-medium truncate">{{ $user->name }}</p>
                        <p class="text-xs text-gray-500 truncate">{{ $user->username }}</p>
                    </div>
                    <x-heroicon-o-chevron-up class="w-5 h-5 text-gray-400" />
                </button>
            </div>
        </aside>

        <div class="flex flex-col flex-1 min-w-0 h-screen overflow-hidden">
            <header
                class="h-16 shrink-0 flex items-center justify-between px-4 md:px-6 border-b border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 z-10 transition-colors duration-200">
                <div class="flex items-center">
                    <button id="mobile-menu-btn"
                        class="md:hidden mr-4 text-gray-500 hover:text-gray-900 p-1 rounded-md hover:bg-gray-100 focus:outline-none">
                        <x-heroicon-o-bars-3 class="w-5 h-5" />
                    </button>
                    <h2 class="font-semibold">{{ $header_title ?? 'Panel' }}</h2>
                </div>
                <button id="theme-toggle" class="p-2 rounded-md text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-800">
                    <x-heroicon-o-sun class="w-5 h-5 hidden dark:block" />
                    <x-heroicon-o-moon class="w-5 h-5 block dark:hidden" />
                </button>
            </header>

            <main class="flex-1 p-4 md:p-6 overflow-y-auto">
                <div class="w-full max-w-7xl mx-auto">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggleBtn = document.getElementById('theme-toggle');
            themeToggleBtn.addEventListener('click', function () {
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('theme', 'dark');
                } else {
                    localStorage.setItem('theme', 'light');
                }
            });
            const userMenuBtn = document.getElementById('user-menu-btn');
            const userDropdown = document.getElementById('user-dropdown');
            userMenuBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                userDropdown.classList.toggle('hidden');
            });
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            function openSidebar() { sidebar.classList.remove('-translate-x-full'); overlay.classList.remove('hidden'); setTimeout(() => overlay.classList.remove('opacity-0'), 10); }
            function closeSidebar() { sidebar.classList.add('-translate-x-full'); overlay.classList.add('opacity-0'); setTimeout(() => overlay.classList.add('hidden'), 300); }
            mobileMenuBtn.addEventListener('click', function (e) { e.stopPropagation(); if (sidebar.classList.contains('-translate-x-full')) { openSidebar(); } else { closeSidebar(); } });
            document.addEventListener('click', function (e) {
                if (!userMenuBtn.contains(e.target) && !userDropdown.contains(e.target)) { userDropdown.classList.add('hidden'); }
                if (window.innerWidth < 768) { if (overlay.contains(e.target)) { closeSidebar(); } }
            });
        });
    </script>
</body>

</html>