<footer class="relative z-10 bg-gray-900 text-gray-400 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="flex flex-col items-center md:items-start text-center md:text-left">
            <h3 class="text-xl font-bold text-white mb-4">Unsurvival</h3>
            <p class="text-sm leading-relaxed max-w-xs">
                Tu aventura de supervivencia definitiva. Construye tu legado, defiende tu territorio y forma parte de
                una comunidad increíble.
            </p>
        </div>

        <div class="flex flex-col items-center md:items-start">
            <h3 class="text-lg font-bold text-white mb-4">Enlaces Rápidos</h3>
            <ul class="space-y-2 text-sm text-center md:text-left">
                <li><a href="{{ route('home') }}#main-content" class="hover:text-indigo-400 transition-colors">Inicio</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-indigo-400 transition-colors">Servicios /
                        Tienda</a></li>
                <li><a href="#" class="hover:text-indigo-400 transition-colors">Reglas del Servidor</a></li>
            </ul>
        </div>

        <div class="flex flex-col items-center md:items-start">
            <h3 class="text-lg font-bold text-white mb-4">Comunidad</h3>
            <p class="text-sm mb-4 text-center md:text-left">
                Únete a nuestra comunidad para soporte y enterarte de las últimas novedades.
            </p>
            <div class="flex space-x-5 mt-2">
                <a href="https://discord.gg/uUMM4qmEV" class="text-gray-400 hover:text-indigo-500 transition-colors"
                    title="Únete a nuestro Discord" target="_blank">
                    <x-fab-discord class="w-7 h-7" />
                </a>

                <a href="https://chat.whatsapp.com/EOuxpugAfOB3qojz11Kqxz?mode=gi_t" class="text-gray-400 hover:text-green-500 transition-colors"
                    title="Contáctanos por WhatsApp" target="_blank">
                    <x-fab-whatsapp class="w-7 h-7" />
                </a>
            </div>
        </div>
    </div>

    <div class="bg-gray-950 py-10">
        <div class="max-w-7xl mx-auto px-6 md:px-12 text-center text-xs text-gray-500">
            &copy; {{ date('Y') }} Unsurvival. Todos los derechos reservados.
        </div>
    </div>
</footer>