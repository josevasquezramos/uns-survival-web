<x-app-layout title="Primer Gran Evento: Bingo Extremo en Unsurvival">
    <section class="max-w-3xl mx-auto px-6 py-8 md:py-12">
        <a href="{{ route('noticias.index') }}"
            class="text-indigo-600 hover:text-indigo-800 font-medium flex items-center gap-2 mb-8 transition-colors">
            <x-heroicon-s-arrow-left class="w-4 h-4" /> Volver a Noticias
        </a>

        <div class="bg-white p-8 md:p-12 rounded-3xl shadow-sm border border-gray-100">
            <span
                class="px-3 py-1 bg-indigo-100 text-indigo-700 font-bold rounded-lg text-sm mb-6 inline-block">Eventos</span>

            <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-6 tracking-tight leading-tight">
                Primer Gran Evento: Bingo Extremo en Unsurvival
            </h1>

            <p class="text-gray-500 font-medium mb-10 pb-10 border-b border-gray-100">
                Publicado el 16 de Marzo, 2026
            </p>

            <div class="space-y-6 text-lg text-gray-700 leading-relaxed">
                <p>
                    La supervivencia pura tiene su encanto, pero de vez en cuando necesitamos una inyección de
                    adrenalina para romper la rutina. Así nació nuestro primer gran evento oficial este último domingo
                    15 de marzo: un <strong>Bingo Extremo</strong> dentro de Minecraft que puso a prueba tanto la
                    velocidad como la suerte de nuestra increíble comunidad.
                </p>

                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Una convocatoria masiva</h3>
                <p>
                    La respuesta de los jugadores superó nuestras expectativas. Tuvimos un promedio de 30 participantes
                    activos compitiendo de manera simultánea. El objetivo era sencillo en teoría, pero agotador en la
                    práctica: ser el primero en conseguir una lista específica de objetos raros y completar los
                    desafiantes retos de la cartilla de bingo antes que los demás.
                </p>

                <figure class="my-10">
                    <img src="{{ asset('images/blog/bingo.jpeg') }}"
                        alt="Captura de pantalla de los participantes del evento Bingo en Unsurvival"
                        class="w-full h-auto rounded-2xl shadow-lg border border-gray-200">
                    <figcaption class="text-center text-sm text-gray-500 mt-3 font-medium">Pirx_ y Vectorjr coronándose
                        como los campeones del evento.</figcaption>
                </figure>

                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Transmisión en directo por Twitch</h3>
                <p>
                    Para que nadie se perdiera esta locura, el evento fue transmitido totalmente en vivo a través de
                    Twitch. La audiencia pudo disfrutar en tiempo real de la tensión, los <em>fails</em> épicos al
                    intentar conseguir recursos en zonas peligrosas y la frenética carrera contra el reloj. La
                    interacción y el apoyo en el chat del stream le inyectaron una energía espectacular a la
                    competencia.
                </p>

                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Los Campeones Indiscutibles</h3>
                <p>
                    Después de una intensa jornada llena de emociones, la competencia se cerró coronando a dos grandes
                    ganadores que demostraron su destreza y lograron gritar "¡Bingo!" antes que el resto: <strong>¡Pirx_
                        y Vectorjr!</strong>
                </p>
                <p>
                    Nuestras más sinceras felicidades a los campeones y un enorme agradecimiento a todos los que
                    participaron y nos acompañaron en el directo. Manténganse atentos a nuestras redes y al servidor,
                    porque este ha sido solo el primero de muchos eventos épicos que tenemos preparados para ustedes.
                </p>
            </div>
        </div>
    </section>
</x-app-layout>