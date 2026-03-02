<nav id="main-nav"
    class="sticky top-0 z-50 w-full h-20 {{ request()->routeIs('home') ? '-mt-20' : '' }} border-b border-transparent transition-colors duration-500 ease-in-out">
    <div class="absolute inset-0 w-full h-full overflow-hidden -z-20">
        <img id="nav-bg" src="{{ asset('images/back.webp') }}"
            class="absolute bottom-0 left-0 w-full object-cover object-center max-w-none transition-opacity duration-500 ease-in-out"
            alt="Nav Background" />
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute inset-0 backdrop-blur-md bg-white/10"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto h-full flex justify-end items-center px-6 md:px-12">
        <button id="mobile-menu-btn"
            class="md:hidden text-white/80 hover:text-white transition-colors focus:outline-none p-2 z-20">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <ul id="nav-links"
            class="hidden absolute bottom-full mb-2 left-4 right-4 rounded-2xl bg-gray-900/95 backdrop-blur-md flex-col items-center py-8 gap-8 md:text-base md:static md:bg-transparent md:backdrop-blur-none md:flex md:flex-row md:w-auto md:py-0 md:gap-10 md:mt-0 md:mb-0 md:border-none shadow-2xl md:shadow-none transition-all duration-300 z-40">
            <li><a href="{{ route('home') }}#main-content"
                    class="nav-link font-semibold transition-colors duration-200 block px-4 py-2 transform-gpu backface-hidden {{ request()->routeIs('home') ? 'text-white' : 'text-white/60 hover:text-white' }}">Inicio</a>
            </li>
            <li><a href="{{ route('services') }}"
                    class="nav-link font-semibold transition-colors duration-200 block px-4 py-2 transform-gpu backface-hidden {{ request()->routeIs('services') ? 'text-white' : 'text-white/60 hover:text-white' }}">Servicios</a>
            </li>
        </ul>
    </div>
</nav>