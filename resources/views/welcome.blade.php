<x-app-layout title="Inicio">

    <section class="max-w-7xl mx-auto px-6 md:px-12 py-20 relative z-10">

        <div class="flex flex-col md:flex-row items-center justify-between gap-12 mb-10">

            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-8">
                    Forja tu propio <span class="text-blue-600">destino</span>
                </h2>

                <p class="text-lg text-gray-600 leading-relaxed">
                    Hemos diseñado una experiencia de supervivencia equilibrada. Ya sea que quieras construir un imperio
                    pacífico, dominar el mercado global o probar tu suerte en el casino, aquí tienes las herramientas
                    para hacerlo.
                </p>

                <div class="flex flex-wrap items-center justify-center md:justify-start gap-4 mt-8">
                    <span class="text-gray-600 font-medium text-lg">Únete a la comunidad</span>
                    <div class="flex items-center gap-3">
                        <a href="https://discord.gg/cjedJVFtb" target="_blank" rel="noopener noreferrer"
                            class="flex items-center gap-2 px-4 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-500 hover:-translate-y-0.5 transition-all"
                            title="Discord Oficial">
                            <x-fab-discord class="w-5 h-5" />
                            <span>Discord</span>
                        </a>

                        <a href="https://chat.whatsapp.com/EOuxpugAfOB3qojz11Kqxz?mode=gi_t" target="_blank"
                            rel="noopener noreferrer"
                            class="flex items-center gap-2 px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-500 hover:-translate-y-0.5 transition-all"
                            title="Grupo de WhatsApp">
                            <x-fab-whatsapp class="w-5 h-5" />
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>

                <div class="flex flex-wrap items-center justify-center md:justify-start gap-2 mt-6">
                    <span class="text-gray-600 font-medium text-lg">Soporte desde</span>
                    <span
                        class="px-3 py-1 text-sm font-bold bg-orange-100 text-orange-800 rounded-lg border border-orange-200 shadow-sm">
                        1.16.5
                    </span>
                    <span class="text-gray-600 font-medium text-lg">hasta</span>
                    <span
                        class="px-3 py-1 text-sm font-bold bg-green-100 text-green-800 rounded-lg border border-green-200 shadow-sm flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                        Última Versión
                    </span>
                </div>

                <div class="flex flex-wrap items-center justify-center md:justify-start gap-3 mt-5">
                    <span class="text-gray-600 font-medium text-lg flex items-center gap-2">
                        Multiplataforma
                    </span>
                    <div class="flex gap-2">
                        <span
                            class="px-3 py-1 text-sm font-bold bg-red-100 text-red-700 border border-red-200 rounded-lg shadow-sm flex items-center gap-1.5 cursor-default">
                            <x-heroicon-s-computer-desktop class="w-4 h-4 text-red-500" />
                            Java
                        </span>

                        <span
                            class="px-3 py-1 text-sm font-bold bg-slate-100 text-slate-700 border border-slate-200 rounded-lg shadow-sm flex items-center gap-1.5 cursor-default">
                            <x-heroicon-s-device-phone-mobile class="w-4 h-4 text-slate-500" />
                            Bedrock
                        </span>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2 flex justify-center md:justify-end w-full">
                <video src="{{ asset('videos/logo.mp4') }}"
                    class="w-full max-w-sm h-auto object-contain animate-float pointer-events-none" autoplay loop muted
                    playsinline>
                </video>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div
                class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div
                    class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-green-500 transition-colors">
                    <x-heroicon-o-currency-dollar
                        class="w-8 h-8 text-green-600 group-hover:text-white transition-colors" />
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Economía Dinámica</h3>
                <p class="text-gray-600 leading-relaxed">
                    Elige una profesión y gana dinero haciendo lo que amas. Comercia con otros jugadores en la casa de
                    subastas global o en la tienda oficial del servidor.
                </p>
            </div>

            <div
                class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div
                    class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-500 transition-colors">
                    <x-heroicon-o-shield-check class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors" />
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Protección Total</h3>
                <p class="text-gray-600 leading-relaxed">
                    Construye sin miedo a los griefers. Reclama tu territorio fácilmente utilizando nuestras piedras de
                    protección y decide quién tiene permisos para interactuar en tus tierras.
                </p>
            </div>

            <div
                class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div
                    class="w-14 h-14 bg-red-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-red-500 transition-colors">
                    <x-heroicon-o-fire class="w-8 h-8 text-red-600 group-hover:text-white transition-colors" />
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Combate a tu Estilo</h3>
                <p class="text-gray-600 leading-relaxed">
                    Practica tus habilidades en la zona PvP segura sin el riesgo de perder tus objetos. O aventúrate al
                    mundo abierto donde no hay reglas y todo está permitido.
                </p>
            </div>

            <div
                class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div
                    class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-purple-500 transition-colors">
                    <x-heroicon-o-puzzle-piece
                        class="w-8 h-8 text-purple-600 group-hover:text-white transition-colors" />
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Ocio y Casino</h3>
                <p class="text-gray-600 leading-relaxed">
                    ¿Cansado de picar piedra? Tómate un respiro superando retos de parkour en el lobby o pon a prueba tu
                    suerte en nuestro Casino para multiplicar tu fortuna.
                </p>
            </div>

            <div
                class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div
                    class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-amber-500 transition-colors">
                    <x-heroicon-o-users class="w-8 h-8 text-amber-600 group-hover:text-white transition-colors" />
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Rol y Comunidad</h3>
                <p class="text-gray-600 leading-relaxed">
                    Siéntate en las escaleras o pasa el rato con tus amigos. Ofrecemos
                    interacciones inmersivas para que la experiencia sea mucho más viva.
                </p>
            </div>

            <div
                class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                <div
                    class="w-14 h-14 bg-teal-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-teal-500 transition-colors">
                    <x-heroicon-o-sparkles class="w-8 h-8 text-teal-600 group-hover:text-white transition-colors" />
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Juega con tu Estilo</h3>
                <p class="text-gray-600 leading-relaxed">
                    Soportamos jugadores Premium y No-Premium de forma segura. Además, sin importar cómo entres, podrás
                    ponerte tu Skin favorita para que todos te reconozcan.
                </p>
            </div>

        </div>
    </section>

    <section class="relative bg-gray-900 overflow-hidden py-24">
        <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1607513746994-6b58e70eb922?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center mix-blend-overlay"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-900/95 to-indigo-950/90"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-5xl h-[500px] bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-indigo-500/20 via-transparent to-transparent pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-12 z-10">
            
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 tracking-tight flex items-center justify-center gap-3 drop-shadow-lg">
                    <x-heroicon-s-star class="w-10 h-10 md:w-12 md:h-12 text-yellow-400 animate-pulse drop-shadow-[0_0_15px_rgba(250,204,21,0.5)]" />
                    Héroes del Servidor
                    <x-heroicon-s-star class="w-10 h-10 md:w-12 md:h-12 text-yellow-400 animate-pulse drop-shadow-[0_0_15px_rgba(250,204,21,0.5)]" />
                </h2>
                <p class="text-lg md:text-xl text-indigo-200/80 max-w-3xl mx-auto leading-relaxed">
                    Nuestro más sincero agradecimiento a las leyendas que apoyan económicamente al proyecto. 
                    ¡Gracias a ustedes, esta aventura sigue viva y mejorando cada día!
                </p>
            </div>

            @if(isset($heroes) && $heroes->count() > 0)
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 md:gap-8">
                    @foreach($heroes as $index => $hero)
                        @php
                            $borderClass = 'border-white/10';
                            $bgClass = 'bg-white/5';
                            $badgeClass = 'bg-gray-800 text-gray-300 border-gray-600 shadow-md';
                            $glowClass = 'group-hover:border-white/20 group-hover:bg-white/10';

                            if ($index === 0) {
                                $borderClass = 'border-yellow-400/60';
                                $bgClass = 'bg-gradient-to-b from-yellow-400/20 to-black/40';
                                $badgeClass = 'bg-yellow-400 text-yellow-950 border-yellow-200 shadow-[0_0_15px_rgba(250,204,21,0.6)]';
                                $glowClass = 'shadow-[0_0_20px_rgba(250,204,21,0.15)] group-hover:shadow-[0_0_30px_rgba(250,204,21,0.4)] group-hover:-translate-y-3';
                            } elseif ($index === 1) {
                                $borderClass = 'border-gray-300/60';
                                $bgClass = 'bg-gradient-to-b from-gray-300/20 to-black/40';
                                $badgeClass = 'bg-gray-300 text-gray-900 border-white shadow-[0_0_15px_rgba(209,213,219,0.5)]';
                                $glowClass = 'shadow-[0_0_15px_rgba(209,213,219,0.1)] group-hover:shadow-[0_0_25px_rgba(209,213,219,0.3)] group-hover:-translate-y-2';
                            } elseif ($index === 2) {
                                $borderClass = 'border-orange-400/50';
                                $bgClass = 'bg-gradient-to-b from-orange-400/20 to-black/40';
                                $badgeClass = 'bg-orange-400 text-orange-950 border-orange-200 shadow-[0_0_15px_rgba(249,115,22,0.5)]';
                                $glowClass = 'shadow-[0_0_15px_rgba(249,115,22,0.1)] group-hover:shadow-[0_0_25px_rgba(249,115,22,0.3)] group-hover:-translate-y-2';
                            }
                        @endphp

                        <div class="relative p-6 rounded-2xl backdrop-blur-md border {{ $borderClass }} {{ $bgClass }} {{ $glowClass }} transition-all duration-300 transform group flex flex-col items-center text-center">
                            
                            <div class="absolute -top-5 -right-3 w-12 h-12 rounded-full flex items-center justify-center font-extrabold text-base border-2 z-20 transition-transform duration-300 group-hover:scale-110 {{ $badgeClass }}">
                                #{{ $index + 1 }}
                            </div>

                            <div class="w-24 h-24 mb-5 rounded-xl overflow-hidden border-2 border-white/10 shadow-inner shadow-black/80 group-hover:scale-110 group-hover:border-white/30 transition-all duration-300 relative bg-black/40">
                                <img src="{{ $hero->skin_url ?? 'https://crafatar.com/avatars/steve' }}" 
                                     alt="Skin de {{ $hero->username }}" 
                                     class="w-full h-full object-cover z-10 relative"
                                     style="image-rendering: pixelated;">
                                <div class="absolute inset-0 bg-gradient-to-tr from-transparent to-white/10 pointer-events-none z-20"></div>
                            </div>

                            <h3 class="font-bold text-white w-full truncate text-lg tracking-wide drop-shadow-md" title="{{ $hero->username }}">
                                {{ $hero->username }}
                            </h3>
                            <p class="text-sm text-indigo-200/70 w-full truncate font-medium mt-1" title="{{ $hero->name }}">
                                {{ $hero->realname }}
                            </p>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center p-12 bg-white/5 backdrop-blur-md rounded-3xl border border-white/10 shadow-2xl max-w-2xl mx-auto relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-tr from-indigo-500/10 to-transparent pointer-events-none"></div>
                    <x-heroicon-o-face-smile class="w-20 h-20 text-indigo-300/50 mx-auto mb-6 relative z-10" />
                    <h3 class="text-2xl font-bold text-white mb-3 tracking-tight relative z-10">El trono está vacío</h3>
                    <p class="text-indigo-200/80 text-lg relative z-10">
                        Aún no hay héroes registrados. ¡Sé el primero en grabar tu nombre en la historia de nuestro servidor!
                    </p>
                </div>
            @endif
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 md:px-12 py-20 relative z-10">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Echa un vistazo</h2>
            <p class="text-lg text-gray-600">
                Explora lo que el servidor tiene para ofrecer
            </p>
        </div>

        <div class="relative w-full aspect-square md:aspect-video rounded-3xl overflow-hidden shadow-2xl bg-gray-900">

            @for ($i = 1; $i <= 5; $i++)
                <img src="{{ asset('images/gallery/' . $i . '.webp') }}"
                    class="gallery-slide absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out {{ $i === 1 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}"
                    alt="Captura de pantalla del servidor {{ $i }}">
            @endfor

            <div id="prev-area"
                class="absolute left-0 top-0 w-1/2 h-full z-20 cursor-pointer group/left flex items-center justify-start p-4 md:p-8">
                <div
                    class="hidden md:flex bg-black/30 text-white p-3 rounded-full backdrop-blur-sm opacity-0 group-hover/left:opacity-100 transition-opacity duration-300">
                    <x-heroicon-o-chevron-left class="w-8 h-8" />
                </div>
            </div>

            <div id="next-area"
                class="absolute right-0 top-0 w-1/2 h-full z-20 cursor-pointer group/right flex items-center justify-end p-4 md:p-8">
                <div
                    class="hidden md:flex bg-black/30 text-white p-3 rounded-full backdrop-blur-sm opacity-0 group-hover/right:opacity-100 transition-opacity duration-300">
                    <x-heroicon-o-chevron-right class="w-8 h-8" />
                </div>
            </div>

            <div
                class="absolute bottom-0 inset-x-0 h-24 bg-gradient-to-t from-black/60 to-transparent z-10 pointer-events-none">
            </div>
        </div>
    </section>

    <section class="relative bg-gray-900 overflow-hidden">
        <div
            class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1607513746994-6b58e70eb922?q=80&w=2000&auto=format&fit=crop')] bg-cover bg-center">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 to-indigo-900/80"></div>

        <div
            class="relative max-w-7xl mx-auto px-6 md:px-12 py-20 flex flex-col md:flex-row items-center justify-between z-10">
            <div class="md:w-2/3 text-center md:text-left mb-8 md:mb-0">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">La aventura te espera dentro</h2>
                <p class="text-lg text-indigo-100 max-w-2xl">
                    Ya sea tu primera vez en un servidor survival o seas un veterano de Minecraft, en Uns Survival
                    encontrarás una comunidad lista para darte la bienvenida.
                </p>
            </div>
            <div class="md:w-1/3 flex justify-center md:justify-end">
                <a href="#hero-header" onclick="window.scrollTo(0, 0);"
                    class="px-8 py-4 bg-indigo-500 hover:bg-indigo-400 text-white font-bold rounded-xl shadow-lg transition-transform transform hover:scale-105 flex items-center gap-2">
                    <x-heroicon-s-play class="w-6 h-6" />
                    ¡Comenzar a jugar!
                </a>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const slides = document.querySelectorAll('.gallery-slide');
                const prevArea = document.getElementById('prev-area');
                const nextArea = document.getElementById('next-area');
                let currentSlide = 0;
                let slideInterval;

                function showSlide(index) {
                    slides[currentSlide].classList.remove('opacity-100', 'z-10');
                    slides[currentSlide].classList.add('opacity-0', 'z-0');

                    currentSlide = (index + slides.length) % slides.length;

                    slides[currentSlide].classList.remove('opacity-0', 'z-0');
                    slides[currentSlide].classList.add('opacity-100', 'z-10');
                }

                function nextSlide() { showSlide(currentSlide + 1); }
                function prevSlide() { showSlide(currentSlide - 1); }

                function startAutoPlay() {
                    slideInterval = setInterval(nextSlide, 5000);
                }

                function resetAutoPlay() {
                    clearInterval(slideInterval);
                    startAutoPlay();
                }

                nextArea.addEventListener('click', () => { nextSlide(); resetAutoPlay(); });
                prevArea.addEventListener('click', () => { prevSlide(); resetAutoPlay(); });

                startAutoPlay();
            });
        </script>
    @endpush

    <div class="h-10"></div>
</x-app-layout>