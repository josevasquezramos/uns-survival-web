<x-app-layout title="Inicio">

    <section class="max-w-7xl mx-auto px-6 md:px-12 py-20 relative z-10">

        <div class="flex flex-col md:flex-row items-center justify-between gap-12 mb-20">

            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-6">
                    Forja tu propio <span class="text-blue-600">destino</span>
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Hemos diseñado una experiencia de supervivencia equilibrada. Ya sea que quieras construir un imperio
                    pacífico, dominar el mercado global o probar tu suerte en el casino, aquí tienes las herramientas
                    para hacerlo.
                </p>
            </div>

            <div class="md:w-1/2 flex justify-center md:justify-end w-full">
                <img src="{{ asset('images/wolf.gif') }}" alt="Lobo Uns Survival"
                    class="w-full max-w-sm h-auto object-contain drop-shadow-2xl animate-float" />
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
                    class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-amber-500 transition-colors">
                    <x-heroicon-o-fire class="w-8 h-8 text-amber-600 group-hover:text-white transition-colors" />
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
                    class="w-14 h-14 bg-rose-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-rose-500 transition-colors">
                    <x-heroicon-o-users class="w-8 h-8 text-rose-600 group-hover:text-white transition-colors" />
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Rol y Comunidad</h3>
                <p class="text-gray-600 leading-relaxed">
                    Siéntate en las escaleras, acuéstate a mirar las estrellas o pasa el rato con tus amigos. Ofrecemos
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

    <div class="h-10"></div>
</x-app-layout>