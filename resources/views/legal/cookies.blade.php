<x-app-layout title="Políticas de Privacidad y Cookies">

    <header class="py-12 md:py-16">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4 tracking-tight">
                Políticas de Privacidad y Cookies
            </h1>
            <p class="text-gray-600 text-lg">
                Transparencia y seguridad para la comunidad de Unsurvival.
            </p>
        </div>
    </header>

    <section class="max-w-4xl mx-auto px-6 py-12">
        <div class="bg-white p-8 md:p-12 rounded-3xl shadow-sm border border-gray-100 text-gray-700 leading-relaxed space-y-8">
            
            <div class="border-b border-gray-100 pb-6">
                <p class="text-sm text-gray-500 font-medium">Última actualización: 22 de Mayo de 2026</p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Introducción</h2>
                <p class="mb-4">
                    Bienvenido a Unsurvival (en adelante, "el sitio web" o "el servidor"). Nos tomamos muy en serio la privacidad de nuestra comunidad. Esta política explica cómo recopilamos, utilizamos y protegemos su información cuando visita nuestro sitio web o juega en nuestro servidor de Minecraft.
                </p>
                <p>
                    Al utilizar nuestros servicios, usted acepta las prácticas descritas en este documento. Nuestro objetivo es garantizar una experiencia de juego segura, justa y transparente para todos los jugadores.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">2. ¿Qué son las Cookies y cómo las utilizamos?</h2>
                <p class="mb-4">
                    Las cookies son pequeños archivos de texto que los sitios web guardan en su navegador para recordar sus preferencias y asegurar el correcto funcionamiento de la plataforma. En Unsurvival, utilizamos estrictamente las cookies necesarias para fines técnicos y de seguridad:
                </p>
                <ul class="list-disc pl-6 space-y-3 mt-4">
                    <li>
                        <strong>Cookies de Sesión (Laravel):</strong> Nuestro sistema utiliza cookies técnicas (como <code>laravel_session</code> y <code>XSRF-TOKEN</code>) para mantener su sesión activa de forma segura y prevenir ataques de falsificación de peticiones entre sitios (CSRF). Estas cookies son esenciales para el funcionamiento del portal web.
                    </li>
                    <li>
                        <strong>Cookies de Seguridad (Cloudflare):</strong> Utilizamos los servicios de red de Cloudflare para proteger nuestro sitio web contra ataques maliciosos y tráfico no deseado. Cloudflare puede alojar cookies técnicas (como <code>__cf_bm</code>) en su navegador para distinguir entre visitantes humanos reales y bots automatizados, garantizando la estabilidad de nuestros servidores.
                    </li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Información que Recopilamos</h2>
                <p class="mb-4">
                    Para ofrecer nuestros servicios, recopilamos información técnica y de juego de forma automática:
                </p>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Datos de conexión:</strong> Direcciones IP temporales para mantener la seguridad de la red y prevenir ataques DDoS.</li>
                    <li><strong>Datos del juego:</strong> Nombres de usuario (Nicknames), UUIDs de Minecraft, estadísticas de juego, inventario y progreso dentro del servidor survival.</li>
                    <li><strong>Datos de registro:</strong> Contraseñas encriptadas de forma irreversible cuando utiliza el comando <code>/register</code> en el servidor.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Protección y Retención de Datos</h2>
                <p class="mb-4">
                    Toda la información recopilada se utiliza exclusivamente para el mantenimiento del servidor de Minecraft, la moderación de la comunidad y la mejora técnica de nuestra infraestructura. <strong>Unsurvival no vende, alquila ni comparte su información personal o datos de juego con terceros para fines comerciales.</strong>
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Enlaces a Terceros</h2>
                <p class="mb-4">
                    Nuestro sitio web puede contener enlaces a plataformas externas (como Discord o WhatsApp) para fomentar la comunicación de la comunidad. Tenga en cuenta que estas plataformas tienen sus propias políticas de privacidad, por lo que le recomendamos revisarlas al abandonar nuestro sitio web.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Contacto</h2>
                <p class="mb-4">
                    Si tiene alguna duda sobre cómo manejamos sus datos o sobre el uso de cookies en nuestro sistema, nuestro equipo de soporte está a su disposición.
                </p>
                
                <div class="inline-flex items-center gap-3 bg-gray-50 px-5 py-3 rounded-xl border border-gray-200 shadow-sm mt-2">
                    <x-heroicon-s-envelope class="w-6 h-6 text-indigo-600" />
                    <span class="font-medium text-gray-800">
                        Correo electrónico: 
                        <a href="mailto:jmvr16092003@gmail.com" class="text-indigo-600 hover:text-indigo-800 hover:underline transition-colors ml-1">
                            jmvr16092003@gmail.com
                        </a>
                    </span>
                </div>
            </div>

        </div>
    </section>

</x-app-layout>