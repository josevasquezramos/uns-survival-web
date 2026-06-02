<x-app-layout title="Noticias y Novedades">
    <header class="py-8 md:py-12">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4 tracking-tight">
                Noticias de Unsurvival
            </h1>
            <p class="text-gray-600 text-lg">
                Entérate de los últimos eventos, actualizaciones y hazañas de nuestra comunidad.
            </p>
        </div>
    </header>

    <section class="max-w-5xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <a href="{{ route('noticias.inauguracion') }}" class="group bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all">
                <div class="p-8">
                    <span class="text-sm font-bold text-green-600 mb-2 block">Comunidad</span>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">La Gran Inauguración: Caos, Dragones y Supervivencia</h2>
                    <p class="text-gray-600 line-clamp-3">
                        Hacemos un repaso de nuestra increíble primera semana. Desde speedrunners aniquilando a la Dragona el primer día hasta torneos improvisados de waterdrop.
                    </p>
                    <div class="mt-6 text-sm text-gray-500 font-medium">Publicado el 22 de Marzo, 2026</div>
                </div>
            </a>

            <a href="{{ route('noticias.bingo') }}" class="group bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all">
                <div class="p-8">
                    <span class="text-sm font-bold text-indigo-600 mb-2 block">Eventos</span>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors">Primer Gran Evento: Bingo Extremo en Unsurvival</h2>
                    <p class="text-gray-600 line-clamp-3">
                        Más de 30 jugadores, transmisión en vivo por Twitch y una tensión increíble. Descubre cómo se vivió nuestro primer evento oficial este último domingo.
                    </p>
                    <div class="mt-6 text-sm text-gray-500 font-medium">Publicado el 16 de Marzo, 2026</div>
                </div>
            </a>

        </div>
    </section>
</x-app-layout>