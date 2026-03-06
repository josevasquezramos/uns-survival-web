<x-app-layout title="Guía">

    <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">

        <div class="mb-12 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            <div class="text-center lg:text-left">
                <div
                    class="inline-flex items-center gap-2 bg-indigo-50 border border-indigo-100 text-indigo-600 rounded-full px-4 py-1.5 text-sm font-semibold mb-4">
                    <x-heroicon-s-book-open class="w-4 h-4" />
                    Guía del Jugador
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 tracking-tight">Lo que necesitas saber
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto lg:mx-0 leading-relaxed">Unsurvival nació como un
                    proyecto creado por la comunidad y para la comunidad de la <a href="https://www.uns.edu.pe/"
                        target="_blank" class="text-indigo-600 hover:text-indigo-800">UNS</a>. Un espacio
                    pensado para divertirnos, colaborar y construir juntos dentro de Minecraft. Aunque está inspirado en
                    nuestra comunidad universitaria, todos son bienvenidos a unirse, explorar y formar parte de esta
                    aventura.</p>
            </div>

            <div class="flex justify-center lg:justify-end w-full">
                <img src="{{ asset('images/wolf.gif') }}" alt="Lobo Guía Unsurvival"
                    class="w-full max-w-sm h-auto object-contain drop-shadow-2xl animate-float pointer-events-none" />
            </div>

        </div>

        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">

            <aside class="lg:w-64 shrink-0">
                <div class="sticky top-24 bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                    <p class="text-xs font-bold uppercase tracking-widest text-gray-400 mb-4">En esta página</p>
                    <nav class="flex flex-col gap-3 text-sm font-medium text-gray-600">
                        <a href="#empezar" class="flex items-center gap-2 hover:text-indigo-600">
                            <x-heroicon-o-rocket-launch class="w-4 h-4 text-indigo-400" />
                            Cómo empezar
                        </a>
                        <a href="#reglas" class="flex items-center gap-2 hover:text-red-600">
                            <x-heroicon-o-shield-check class="w-4 h-4 text-red-400" />
                            Reglas
                        </a>
                        <a href="#economia" class="flex items-center gap-2 hover:text-yellow-600">
                            <x-heroicon-o-currency-dollar class="w-4 h-4 text-yellow-500" />
                            Economía
                        </a>
                        <a href="#proteccion" class="flex items-center gap-2 hover:text-green-600">
                            <x-heroicon-o-home-modern class="w-4 h-4 text-green-500" />
                            Protección
                        </a>
                        <a href="#teletransporte" class="flex items-center gap-2 hover:text-sky-600">
                            <x-heroicon-o-map-pin class="w-4 h-4 text-sky-500" />
                            Teletransporte
                        </a>
                        <a href="#trabajos" class="flex items-center gap-2 hover:text-orange-600">
                            <x-heroicon-o-briefcase class="w-4 h-4 text-orange-400" />
                            Trabajos
                        </a>
                        <a href="#tienda" class="flex items-center gap-2 hover:text-pink-600">
                            <x-heroicon-o-shopping-cart class="w-4 h-4 text-pink-400" />
                            Tienda & Subastas
                        </a>
                        <a href="#misc" class="flex items-center gap-2 hover:text-purple-600">
                            <x-heroicon-o-sparkles class="w-4 h-4 text-purple-400" />
                            Extras
                        </a>
                        <a href="#consejos" class="flex items-center gap-2 hover:text-amber-600">
                            <x-heroicon-o-light-bulb class="w-4 h-4 text-amber-400" />
                            Consejos
                        </a>
                    </nav>
                </div>
            </aside>

            <main class="flex-1 min-w-0 flex flex-col gap-12">

                <p class="text-gray-600">Para que puedas aprovechar al máximo el servidor, a continuación encontrarás la guía con
                    los comandos y funciones disponibles, que te ayudarán a moverte, proteger tus construcciones y usar
                    todas las herramientas.</p>

                <section id="empezar" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-indigo-100 rounded-xl p-2">
                            <x-heroicon-s-rocket-launch class="w-6 h-6 text-indigo-600" />
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Cómo empezar</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-full flex items-center justify-center font-bold bg-indigo-600 text-white flex-shrink-0 text-sm">
                                    1</div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Conéctate al servidor</h3>
                                    <p class="text-sm text-gray-500 mb-3">Abre Minecraft 1.16.5 y añade el servidor:</p>
                                    <span
                                        class="inline-flex items-center gap-1.5 bg-gray-100 text-gray-800 font-mono text-xs sm:text-sm px-2.5 py-1 rounded-md border border-gray-200">
                                        <x-heroicon-s-server class="w-3.5 h-3.5 text-gray-500" /> play.unsurvival.games
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-full flex items-center justify-center font-bold bg-indigo-600 text-white flex-shrink-0 text-sm">
                                    2</div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Regístrate</h3>
                                    <p class="text-sm text-gray-500 mb-3">Al entrar, crea tu cuenta con:</p>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs sm:text-sm px-2.5 py-1 rounded-md border border-gray-200 break-all">
                                        /register &lt;pass&gt; &lt;pass&gt;
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-full flex items-center justify-center font-bold bg-indigo-600 text-white flex-shrink-0 text-sm">
                                    3</div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Inicia sesión</h3>
                                    <p class="text-sm text-gray-500 mb-3">Cada vez que entres usa:</p>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs sm:text-sm px-2.5 py-1 rounded-md border border-gray-200">
                                        /login &lt;contraseña&gt;
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-8 h-8 rounded-full flex items-center justify-center font-bold bg-indigo-600 text-white flex-shrink-0 text-sm">
                                    4</div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Explora y busca terreno</h3>
                                    <p class="text-sm text-gray-500 mb-3">Teleporta a una zona aleatoria: Atraviesa al
                                        portal principal del lobby</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-indigo-50 border border-indigo-100 rounded-2xl p-6">
                        <div class="flex items-center gap-2 mb-3 font-bold text-indigo-800">
                            <x-heroicon-s-information-circle class="w-5 h-5" />
                            Comandos de cuenta
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center bg-white text-gray-700 font-mono text-xs px-2.5 py-1 rounded border border-indigo-200">/login
                                &lt;pass&gt;</span>
                            <span
                                class="inline-flex items-center bg-white text-gray-700 font-mono text-xs px-2.5 py-1 rounded border border-indigo-200">/register
                                &lt;pass&gt; &lt;pass&gt;</span>
                            <span
                                class="inline-flex items-center bg-white text-gray-700 font-mono text-xs px-2.5 py-1 rounded border border-indigo-200">/changepassword
                                &lt;vieja&gt; &lt;nueva&gt;</span>
                            <span
                                class="inline-flex items-center bg-white text-gray-700 font-mono text-xs px-2.5 py-1 rounded border border-indigo-200">/logout</span>
                        </div>
                    </div>
                </section>

                <section id="reglas" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-red-100 rounded-xl p-2">
                            <x-heroicon-s-shield-check class="w-6 h-6 text-red-500" />
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Reglas básicas</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div
                            class="bg-white border border-gray-100 border-l-4 border-l-red-500 rounded-r-2xl rounded-l-md p-5 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-2 font-bold text-gray-900 mb-2">
                                <x-heroicon-s-x-circle class="w-5 h-5 text-red-500" />
                                No Grief
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">Destruir construcciones ajenas sin permiso
                                está prohibido. Protege tu zona y respeta la de los demás.</p>
                        </div>
                        <div
                            class="bg-white border border-gray-100 border-l-4 border-l-orange-500 rounded-r-2xl rounded-l-md p-5 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-2 font-bold text-gray-900 mb-2">
                                <x-heroicon-s-no-symbol class="w-5 h-5 text-orange-500" />
                                No Hacks ni Exploits
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">Clientes modificados, trampas o explotación
                                de bugs otorgan ventaja injusta. Usa solo el cliente oficial.</p>
                        </div>
                        <div
                            class="bg-white border border-gray-100 border-l-4 border-l-yellow-400 rounded-r-2xl rounded-l-md p-5 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-2 font-bold text-gray-900 mb-2">
                                <x-heroicon-s-chat-bubble-left-ellipsis class="w-5 h-5 text-yellow-500" />
                                Respeto en el chat
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">Evita insultos, spam y discriminación.
                                Trata a todos con respeto. El chat es para todos.</p>
                        </div>
                        <div
                            class="bg-white border border-gray-100 border-l-4 border-l-green-500 rounded-r-2xl rounded-l-md p-5 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-2 font-bold text-gray-900 mb-2">
                                <x-heroicon-s-bug-ant class="w-5 h-5 text-green-600" />
                                No abuso de bugs
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">Si encuentras un error en el servidor,
                                repórtalo al staff. Aprovecharlo para beneficio personal es trampa.</p>
                        </div>
                        <div
                            class="bg-white border border-gray-100 border-l-4 border-l-indigo-500 rounded-r-2xl rounded-l-md p-5 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-2 font-bold text-gray-900 mb-2">
                                <x-heroicon-s-eye-slash class="w-5 h-5 text-indigo-500" />
                                No publicidad
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">Está prohibido anunciar otros servidores o
                                servicios externos en el chat o mediante mensajes privados.</p>
                        </div>
                        <div
                            class="bg-white border border-gray-100 border-l-4 border-l-pink-500 rounded-r-2xl rounded-l-md p-5 shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-2 font-bold text-gray-900 mb-2">
                                <x-heroicon-s-user-group class="w-5 h-5 text-pink-500" />
                                Escucha al Staff
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">Las decisiones del equipo de administración
                                son finales. Las apelaciones se hacen por los canales oficiales.</p>
                        </div>
                    </div>
                </section>

                <section id="economia" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-yellow-100 rounded-xl p-2">
                            <x-heroicon-s-currency-dollar class="w-6 h-6 text-yellow-600" />
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Economía y Dinero</h2>
                    </div>

                    <div class="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden mb-6">
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm min-w-[500px]">
                                <thead class="bg-gray-50 border-b border-gray-200">
                                    <tr>
                                        <th class="text-left px-6 py-4 font-bold text-gray-700">Comando</th>
                                        <th class="text-left px-6 py-4 font-bold text-gray-700">Descripción</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/balance</span>
                                            <span class="text-gray-400 font-mono text-xs ml-2">/bal</span>
                                        </td>
                                        <td class="px-6 py-4 text-gray-600">Ver tu saldo actual</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4"><span
                                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/baltop</span>
                                        </td>
                                        <td class="px-6 py-4 text-gray-600">Ranking de jugadores más ricos</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4"><span
                                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/pay
                                                &lt;jugador&gt; &lt;cantidad&gt;</span></td>
                                        <td class="px-6 py-4 text-gray-600">Transferir dinero a otro jugador</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="bg-yellow-50 border border-yellow-100 rounded-2xl p-5 text-sm text-yellow-800">
                        <div class="flex items-center gap-2 font-bold mb-2">
                            <x-heroicon-s-light-bulb class="w-5 h-5" />
                            ¿Cómo ganar dinero?
                        </div>
                        <p class="leading-relaxed">Completa trabajos con <span
                                class="inline-flex items-center bg-white font-mono text-xs px-2 py-0.5 rounded border border-yellow-200">/jobs
                                join</span>, vende items en la tienda o pon tus objetos en la casa de subastas.</p>
                    </div>
                </section>

                <section id="proteccion" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-green-100 rounded-xl p-2">
                            <x-heroicon-s-home-modern class="w-6 h-6 text-green-600" />
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Protección de Terreno</h2>
                    </div>

                    <p class="text-gray-600 mb-6 leading-relaxed">Usa <strong>ProtectionStones</strong> para reclamar y
                        proteger tu terreno contra otros jugadores. Tienes hasta <span
                            class="bg-green-100 text-green-800 font-bold px-2 py-0.5 rounded-lg border border-green-200">4
                            regiones</span> disponibles.</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <x-heroicon-s-plus-circle class="w-5 h-5 text-green-500" />
                                Crear y gestionar
                            </h3>
                            <div class="flex flex-col gap-3 text-sm">
                                <div class="flex items-center justify-between gap-2 border-b border-gray-50 pb-2">
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/ps
                                        get</span>
                                    <span class="text-gray-500 text-right">Obtener piedra</span>
                                </div>
                                <div class="flex items-center justify-between gap-2 border-b border-gray-50 pb-2">
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/ps
                                        info</span>
                                    <span class="text-gray-500 text-right">Ver información</span>
                                </div>
                                <div class="flex items-center justify-between gap-2 border-b border-gray-50 pb-2">
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/ps
                                        list</span>
                                    <span class="text-gray-500 text-right">Listar regiones</span>
                                </div>
                                <div class="flex items-center justify-between gap-2 border-b border-gray-50 pb-2">
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/ps
                                        count</span>
                                    <span class="text-gray-500 text-right">Límite actual</span>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/ps
                                        unclaim</span>
                                    <span class="text-gray-500 text-right">Desproteger</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <x-heroicon-s-user-plus class="w-5 h-5 text-indigo-500" />
                                Miembros y accesos
                            </h3>
                            <div class="flex flex-col gap-3 text-sm">
                                <div
                                    class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 border-b border-gray-50 pb-2">
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 w-fit">/ps
                                        members add &lt;user&gt;</span>
                                    <span class="text-gray-500 sm:text-right">Añadir miembro</span>
                                </div>
                                <div
                                    class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 border-b border-gray-50 pb-2">
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 w-fit">/ps
                                        members remove &lt;user&gt;</span>
                                    <span class="text-gray-500 sm:text-right">Quitar miembro</span>
                                </div>
                                <div
                                    class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 border-b border-gray-50 pb-2">
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 w-fit">/ps
                                        owners add &lt;user&gt;</span>
                                    <span class="text-gray-500 sm:text-right">Añadir dueño</span>
                                </div>
                                <div
                                    class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 border-b border-gray-50 pb-2">
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 w-fit">/ps
                                        name &lt;nombre&gt;</span>
                                    <span class="text-gray-500 sm:text-right">Renombrar</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 w-fit">/ps
                                        sethome</span>
                                    <span class="text-gray-500 sm:text-right">Punto de home</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm mb-6">
                        <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                            <x-heroicon-s-arrows-pointing-out class="w-5 h-5 text-blue-500" />
                            Fusionar regiones
                        </h3>
                        <p class="text-sm text-gray-600 mb-4">Si tienes regiones adyacentes puedes unirlas en una sola
                            con:</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-sm px-3 py-1.5 rounded-md border border-gray-200">/ps
                                merge</span>
                            <span
                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-sm px-3 py-1.5 rounded-md border border-gray-200">/ps
                                setparent &lt;región&gt;</span>
                        </div>
                    </div>

                    <div class="bg-green-50 border border-green-100 rounded-2xl p-5 text-sm text-green-800">
                        <div class="flex items-center gap-2 font-bold mb-2">
                            <x-heroicon-s-information-circle class="w-5 h-5" />
                            ¿Cómo proteger?
                        </div>
                        <p class="leading-relaxed">Obtén la piedra con <span
                                class="inline-flex items-center bg-white font-mono text-xs px-2 py-0.5 rounded border border-green-200">/ps
                                get</span>, colócala en el suelo de tu terreno y quedará protegido automáticamente.</p>
                    </div>
                </section>

                <section id="teletransporte" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-sky-100 rounded-xl p-2">
                            <x-heroicon-s-map-pin class="w-6 h-6 text-sky-600" />
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Teletransporte y Hogares</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <x-heroicon-s-home class="w-5 h-5 text-sky-500" />
                                Hogares
                            </h3>
                            <div class="flex flex-col gap-3 text-sm">
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/sethome
                                        &lt;nombre&gt;</span>
                                    <p class="text-gray-500">Guardar posición actual</p>
                                </div>
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/home
                                        &lt;nombre&gt;</span>
                                    <p class="text-gray-500">Ir a tu hogar</p>
                                </div>
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/homes</span>
                                    <p class="text-gray-500">Ver todos tus hogares</p>
                                </div>
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/delhome
                                        &lt;nombre&gt;</span>
                                    <p class="text-gray-500">Eliminar un hogar</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <x-heroicon-s-arrows-right-left class="w-5 h-5 text-indigo-500" />
                                Jugadores
                            </h3>
                            <div class="flex flex-col gap-3 text-sm">
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/tpa
                                        &lt;jugador&gt;</span>
                                    <p class="text-gray-500">Pedir TP a alguien</p>
                                </div>
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/tpaccept</span>
                                    <p class="text-gray-500">Aceptar solicitud</p>
                                </div>
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/tpdeny</span>
                                    <p class="text-gray-500">Rechazar solicitud</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <x-heroicon-s-globe-americas class="w-5 h-5 text-green-500" />
                                General
                            </h3>
                            <div class="flex flex-col gap-3 text-sm">
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/spawn</span>
                                    <p class="text-gray-500">Ir al spawn principal</p>
                                </div>
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/warp
                                        &lt;nombre&gt;</span>
                                    <p class="text-gray-500">Ir a un punto público</p>
                                </div>
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/warps</span>
                                    <p class="text-gray-500">Lista de warps</p>
                                </div>
                                <div>
                                    <span
                                        class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200 mb-1">/rtp</span>
                                    <p class="text-gray-500">Teleporte aleatorio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="trabajos" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-orange-100 rounded-xl p-2">
                            <x-heroicon-s-briefcase class="w-6 h-6 text-orange-500" />
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Trabajos (Jobs)</h2>
                    </div>

                    <p class="text-gray-600 mb-6 leading-relaxed">Los trabajos te permiten ganar dinero realizando
                        actividades como minar, talar, pescar, construir y más. A mayor nivel en un trabajo, más dinero
                        ganas.</p>

                    <div class="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm min-w-[500px]">
                                <thead class="bg-gray-50 border-b border-gray-200">
                                    <tr>
                                        <th class="text-left px-6 py-4 font-bold text-gray-700">Comando</th>
                                        <th class="text-left px-6 py-4 font-bold text-gray-700">Descripción</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4"><span
                                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/jobs
                                                browse</span></td>
                                        <td class="px-6 py-4 text-gray-600">Ver todos los trabajos disponibles</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4"><span
                                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/jobs
                                                join &lt;trabajo&gt;</span></td>
                                        <td class="px-6 py-4 text-gray-600">Unirte a un trabajo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4"><span
                                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/jobs
                                                leave &lt;trabajo&gt;</span></td>
                                        <td class="px-6 py-4 text-gray-600">Abandonar un trabajo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4"><span
                                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/jobs
                                                info &lt;trabajo&gt;</span></td>
                                        <td class="px-6 py-4 text-gray-600">Ver detalles y pagos del trabajo</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4"><span
                                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/jobs
                                                stats</span></td>
                                        <td class="px-6 py-4 text-gray-600">Ver tu progreso y nivel actual</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4"><span
                                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/jobs
                                                top</span></td>
                                        <td class="px-6 py-4 text-gray-600">Ranking de jugadores por trabajo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section id="tienda" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-pink-100 rounded-xl p-2">
                            <x-heroicon-s-shopping-cart class="w-6 h-6 text-pink-500" />
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Tienda y Subastas</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <x-heroicon-s-building-storefront class="w-5 h-5 text-pink-500" />
                                Tienda del servidor
                            </h3>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Compra y vende items a precios fijos
                                directamente al servidor.</p>
                            <span
                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-sm px-3 py-1.5 rounded-md border border-gray-200">/shop</span>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <x-heroicon-s-megaphone class="w-5 h-5 text-indigo-500" />
                                Casa de Subastas
                            </h3>
                            <p class="text-sm text-gray-600 mb-4 leading-relaxed">Compra y vende con otros jugadores.
                                Mejores precios y items únicos.</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-sm px-3 py-1.5 rounded-md border border-gray-200">/ah</span>
                                <span
                                    class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-sm px-3 py-1.5 rounded-md border border-gray-200">/ah
                                    sell &lt;precio&gt;</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="misc" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-purple-100 rounded-xl p-2">
                            <x-heroicon-s-sparkles class="w-6 h-6 text-purple-500" />
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Extras y Diversión</h2>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <x-heroicon-s-chat-bubble-left-right class="w-5 h-5 text-blue-500" />
                                Mensajes
                            </h3>
                            <div class="flex flex-col gap-2">
                                <span
                                    class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/msg
                                    &lt;user&gt; &lt;msj&gt;</span>
                                <span
                                    class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-xs px-2.5 py-1 rounded border border-gray-200">/reply
                                    &lt;msj&gt;</span>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <x-heroicon-s-face-smile class="w-5 h-5 text-amber-500" />
                                Sentarse
                            </h3>
                            <p class="text-sm text-gray-600 mb-3">Siéntate en cualquier lugar con:</p>
                            <span
                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-sm px-3 py-1.5 rounded-md border border-gray-200">/sit</span>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                            <h3 class="font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <x-heroicon-s-user-circle class="w-5 h-5 text-rose-500" />
                                Skins
                            </h3>
                            <p class="text-sm text-gray-600 mb-3">Cambia tu apariencia:</p>
                            <span
                                class="inline-flex items-center bg-gray-100 text-gray-800 font-mono text-sm px-3 py-1.5 rounded-md border border-gray-200">/skin
                                &lt;nombre&gt;</span>
                        </div>
                    </div>
                </section>

                <section id="consejos" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-amber-100 rounded-xl p-2">
                            <x-heroicon-s-light-bulb class="w-6 h-6 text-amber-500" />
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Consejos para empezar bien</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm flex items-start gap-4">
                            <div class="bg-amber-50 p-2 rounded-lg shrink-0">
                                <x-heroicon-s-map class="w-6 h-6 text-amber-500" />
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 mb-1">Explora con /rtp</p>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    Cruza el portal al mundo principal y usa /rtp para teletransportarte lejos del
                                    spawn.
                                </p>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm flex items-start gap-4">
                            <div class="bg-green-50 p-2 rounded-lg shrink-0">
                                <x-heroicon-s-shield-check class="w-6 h-6 text-green-500" />
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 mb-1">Protege tu base pronto</p>
                                <p class="text-sm text-gray-600 leading-relaxed">Usa <span
                                        class="font-mono bg-gray-100 px-1 rounded text-xs">/ps get</span> y coloca la
                                    piedra antes de construir demasiado.</p>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm flex items-start gap-4">
                            <div class="bg-orange-50 p-2 rounded-lg shrink-0">
                                <x-heroicon-s-briefcase class="w-6 h-6 text-orange-500" />
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 mb-1">Únete a trabajos rápido</p>
                                <p class="text-sm text-gray-600 leading-relaxed">Los Jobs acumulan experiencia y dinero
                                    pasivamente mientras juegas normalmente.</p>
                            </div>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm flex items-start gap-4">
                            <div class="bg-indigo-50 p-2 rounded-lg shrink-0">
                                <x-heroicon-s-home class="w-6 h-6 text-indigo-500" />
                            </div>
                            <div>
                                <p class="font-bold text-gray-900 mb-1">Guarda tus puntos clave</p>
                                <p class="text-sm text-gray-600 leading-relaxed">Usa <span
                                        class="font-mono bg-gray-100 px-1 rounded text-xs">/sethome base</span> para no
                                    perder tu hogar. Tienes varios slots.</p>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>

    <div class="h-10"></div>
</x-app-layout>