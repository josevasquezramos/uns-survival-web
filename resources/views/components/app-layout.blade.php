<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' • Unsurvival' : 'Unsurvival' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 30px;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes colorCycle {

            0%,
            100% {
                color: #fff3a3;
                text-shadow: 0 0 14px rgba(255, 230, 120, 0.95);
            }

            25% {
                color: #8fd3ff;
                text-shadow: 0 0 14px rgba(120, 200, 255, 0.95);
            }

            50% {
                color: #a8ffcf;
                text-shadow: 0 0 14px rgba(120, 255, 190, 0.95);
            }

            75% {
                color: #ffb3e6;
                text-shadow: 0 0 14px rgba(255, 150, 220, 0.95);
            }
        }

        .animate-color-cycle {
            animation: colorCycle 3s infinite alternate;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-gray-50 text-gray-800 antialiased overflow-x-hidden flex flex-col min-h-screen">

    <a href="{{ route('home') }}" id="logo-container"
        class="fixed z-[60] -translate-x-1/2 -translate-y-1/2 transform-gpu transition-opacity duration-500 opacity-0 block">
        <img src="{{ asset('images/logo.webp') }}" alt="Logo Inicio"
            class="w-full h-auto object-contain drop-shadow-lg" />
    </a>

    @if(request()->routeIs('home'))
        <header id="hero-header" class="relative w-full overflow-hidden">
            <img id="hero-bg" src="{{ asset('images/back.webp') }}"
                class="absolute inset-0 w-full object-cover object-center z-0" alt="Background" />
            <div class="absolute inset-0 bg-black/40 z-0 transition-opacity duration-500"></div>

            <div class="relative z-10 flex flex-col items-center justify-center h-full pt-[35vh] md:pt-[40vh] pb-28 md:pb-16 text-white text-center px-6 md:px-12">

                <h1
                    class="text-3xl md:text-5xl font-bold tracking-tight animate-float drop-shadow-xl [text-shadow:_0_4px_8px_rgba(0,0,0,0.5)] flex flex-col items-center gap-2">
                    <span>¡Gran Inauguración!</span>

                    <span class="flex items-center gap-2 md:gap-3 text-4xl md:text-6xl mt-2">
                        <span class="animate-color-cycle font-black transform">Sábado 14 de Marzo</span>
                    </span>
                </h1>

                <div
                    class="mt-10 mb-4 flex items-center bg-black/50 backdrop-blur-sm border border-white/20 rounded-lg p-1.5 shadow-xl transition hover:bg-black/60">
                    <span id="server-ip"
                        class="px-4 text-white font-mono text-lg tracking-wider select-all">play.unsurvival.games</span>

                    <button id="copy-btn" onclick="copyServerIP()"
                        class="flex items-center justify-center bg-indigo-600 hover:bg-indigo-500 text-white p-2 rounded-md transition-colors cursor-pointer"
                        title="Copiar IP">
                        <x-heroicon-s-document-duplicate id="icon-copy" class="w-5 h-5" />
                        <x-heroicon-s-check-circle id="icon-check" class="w-5 h-5 hidden" />
                    </button>
                </div>

                <p
                    class="mt-4 text-lg md:text-xl max-w-2xl drop-shadow-md [text-shadow:_0_2px_4px_rgba(0,0,0,0.8)]">
                    Prepárate para un mundo donde la supervivencia es solo el comienzo.
                </p>
            </div>
        </header>
    @endif

    <x-navbar />

    <main class="relative z-10 bg-gray-50 flex-grow {{ !request()->routeIs('home') ? 'pt-10' : '' }}" id="main-content">
        {{ $slot }}
    </main>

    
    <x-donation />
    
    <x-footer />

    <script>
        function copyServerIP() {
            const ip = document.getElementById('server-ip').innerText;
            const btn = document.getElementById('copy-btn');
            const iconCopy = document.getElementById('icon-copy');
            const iconCheck = document.getElementById('icon-check');

            const showSuccess = () => {
                iconCopy.classList.add('hidden');
                iconCheck.classList.remove('hidden');
                btn.classList.remove('bg-indigo-600', 'hover:bg-indigo-500');
                btn.classList.add('bg-green-600', 'hover:bg-green-500');

                setTimeout(() => {
                    iconCheck.classList.add('hidden');
                    iconCopy.classList.remove('hidden');
                    btn.classList.add('bg-indigo-600', 'hover:bg-indigo-500');
                    btn.classList.remove('bg-green-600', 'hover:bg-green-500');
                }, 2000);
            };

            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(ip).then(showSuccess).catch(err => console.error(err));
            } else {
                let textArea = document.createElement("textarea");
                textArea.value = ip;
                textArea.style.position = "fixed";
                textArea.style.opacity = "0";
                document.body.appendChild(textArea);
                textArea.focus();
                textArea.select();
                try {
                    document.execCommand('copy');
                    showSuccess();
                } catch (err) {
                    console.error(err);
                }
                textArea.remove();
            }
        }

        const logoContainer = document.getElementById('logo-container');
        const heroHeader = document.getElementById('hero-header');
        const nav = document.getElementById('main-nav');
        const menuBtn = document.getElementById('mobile-menu-btn');
        const navLinks = document.getElementById('nav-links');
        const links = document.querySelectorAll('.nav-link');
        const navImgBg = document.getElementById('nav-bg');
        let winH = window.innerHeight;

        const isHome = heroHeader !== null;

        function closeMobileMenu() {
            navLinks.classList.add('hidden');
            navLinks.classList.remove('flex');
        }

        menuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            const isHidden = navLinks.classList.contains('hidden');
            if (isHidden) {
                navLinks.classList.remove('hidden');
                navLinks.classList.add('flex');
            } else {
                closeMobileMenu();
            }
        });

        document.addEventListener('click', (e) => {
            if (!navLinks.classList.contains('hidden')) {
                if (!navLinks.contains(e.target) && !menuBtn.contains(e.target)) {
                    closeMobileMenu();
                }
            }
        });

        links.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 768) {
                    closeMobileMenu();
                }
            });
        });

        function syncHeights() {
            winH = window.innerHeight;
            if (isHome) {
                heroHeader.style.height = winH + 'px';
                document.getElementById('hero-bg').style.height = winH + 'px';
            }
            navImgBg.style.height = winH + 'px';
        }

        function updateLayout() {
            const scrollY = window.scrollY;
            const winW = window.innerWidth;
            const navH = nav.offsetHeight;
            const navTop = nav.getBoundingClientRect().top;

            let progress = isHome ? scrollY / (winH - navH) : 1;
            progress = Math.max(0, Math.min(progress, 1));

            const initialSizeMobile = winW * 0.85;
            const initialSizeDesktop = 650;
            const finalSize = 250;

            const startSize = winW < 768 ? initialSizeMobile : initialSizeDesktop;
            const endSize = finalSize;

            const startX = winW / 2;

            const startY = winW < 768 ? Math.min(winH * 0.25, 120) : Math.min(winH * 0.35, 200);

            const maxWidth = 1280;
            const contentPadding = winW < 768 ? 24 : 48;
            const containerOffset = winW > maxWidth ? (winW - maxWidth) / 2 : 0;

            const endX = containerOffset + contentPadding + (endSize / 2);
            const endY = navH / 2;

            const currentX = startX + (endX - startX) * progress;
            const currentY = startY + (endY - startY) * progress;
            const currentSize = startSize + (endSize - startSize) * progress;

            logoContainer.style.left = `${currentX}px`;
            logoContainer.style.top = `${currentY}px`;
            logoContainer.style.width = `${currentSize}px`;

            if (winW < 768) {
                if (navTop < winH / 2) {
                    navLinks.classList.remove('bottom-full', 'mb-2');
                    navLinks.classList.add('top-full', 'mt-2');
                } else {
                    navLinks.classList.remove('top-full', 'mt-2');
                    navLinks.classList.add('bottom-full', 'mb-2');
                }
            } else {
                navLinks.classList.remove('bottom-full', 'mb-2', 'top-full', 'mt-2');
            }

            if (progress === 1) {
                nav.classList.replace('border-transparent', 'border-white/10');
                navImgBg.classList.replace('opacity-100', 'opacity-80');
            } else {
                nav.classList.replace('border-white/10', 'border-transparent');
                navImgBg.classList.replace('opacity-80', 'opacity-100');
            }
        }

        window.addEventListener('resize', () => {
            syncHeights();
            updateLayout();
        });

        window.addEventListener('scroll', updateLayout);
        syncHeights();
        updateLayout();

        logoContainer.style.opacity = '1';
    </script>
    @stack('scripts')
</body>

</html>