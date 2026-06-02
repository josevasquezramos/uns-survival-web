<footer class="relative z-10 bg-gray-900 text-gray-400 border-t border-gray-800">

    <div class="max-w-7xl mx-auto px-6 md:px-12 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="flex flex-col items-center md:items-start text-center md:text-left">
            <h3 class="text-xl font-bold text-white mb-4">Unsurvival</h3>
            <p class="text-sm leading-relaxed max-w-xs">
                Tu aventura de supervivencia definitiva. Construye tu legado, defiende tu territory y forma parte de
                una comunidad increíble.
            </p>
        </div>

        <div class="flex flex-col items-center md:items-start">
            <h3 class="text-lg font-bold text-white mb-4">Enlaces Rápidos</h3>
            <ul class="space-y-2 text-sm text-center md:text-left">
                <li><a href="{{ route('home') }}" class="hover:text-indigo-400 transition-colors">Inicio</a></li>
                <li><a href="{{ route('guide') }}" class="hover:text-indigo-400 transition-colors">Acerca de</a></li>
                <li><a href="{{ route('noticias.index') }}" class="hover:text-indigo-400 transition-colors">Noticias</a></li>
                <li><a href="{{ route('login') }}" class="hover:text-indigo-400 transition-colors">Ingresar</a></li>
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

    <div class="bg-gray-950 py-5 border-t border-gray-900">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-gray-500">
            
            <div class="text-center md:text-left">
                &copy; {{ date('Y') }} Unsurvival. Todos los derechos reservados.
            </div>
            
            <div class="flex flex-wrap justify-center md:justify-end items-center gap-4 md:gap-6">
                <a href="/terminos" class="hover:text-indigo-400 transition-colors">
                    Términos y Condiciones
                </a>
                <a href="/cookies" class="hover:text-indigo-400 transition-colors">
                    Privacidad y Cookies
                </a>
                <a href="mailto:jmvr16092003@gmail.com" class="hover:text-white transition-colors flex items-center gap-1.5">
                    <x-heroicon-s-envelope class="w-3.5 h-3.5" />
                    jmvr16092003@gmail.com
                </a>
            </div>

        </div>
    </div>

    {{--<div class="bg-black py-5 border-t border-gray-950 text-center text-xs text-gray-600">
    <div class="max-w-7xl mx-auto px-6 md:px-12 flex flex-col sm:flex-row items-center justify-center sm:justify-end gap-2">
        <span>Web y Servidor Desarrollado por <strong class="text-gray-400 font-medium">Jose Vasquez</strong></span>
        <span class="hidden sm:inline text-gray-800">•</span>
        <a href="https://wa.me/51993168897" target="_blank" class="text-gray-500 hover:text-green-400 transition-colors flex items-center gap-1">
            <x-fab-whatsapp class="w-3.5 h-3.5 text-green-600" />
            <span>+51 993 168 897</span>
        </a>
    </div>--}}
</div>
</footer>