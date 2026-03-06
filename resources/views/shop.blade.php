<x-app-layout title="Tienda">
    <div class="flex items-center justify-center min-h-[80vh] p-4 md:p-8 bg-gray-50 mb-16">
        
        <div class="w-full max-w-6xl bg-white rounded-3xl shadow-xl border border-gray-100 flex flex-col md:flex-row overflow-hidden">
            
            <div class="md:w-1/2 bg-indigo-900 flex flex-col items-center justify-center p-12 border-b md:border-b-0 md:border-r border-gray-100">
                
                <img src="{{ asset('images/cat-wolf.gif') }}" alt="Trabajando en la tienda" class="relative z-10 w-full max-w-sm h-auto object-contain">
                
                <div class="mt-8 flex items-center gap-3 text-indigo-900 text-sm tracking-widest bg-white/70 px-5 py-2.5 rounded-full border border-indigo-100">
                    <x-heroicon-s-arrow-path class="w-5 h-5 animate-spin" />
                    Generando Chunks...
                </div>
            </div>

            <div class="md:w-1/2 p-8 md:p-16 flex flex-col justify-center bg-white">
                
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-50 text-amber-700 font-bold text-xs tracking-wider uppercase w-fit mb-6 border border-amber-100">
                    <x-heroicon-s-wrench-screwdriver class="w-4 h-4" />
                    En Construcción
                </div>

                <h1 class="text-3xl md:text-5xl font-black text-gray-900 tracking-tight mb-5 leading-tight">
                    La Tienda de <span class="text-indigo-600">Unsurvival</span>
                </h1>

                <p class="text-gray-600 text-base md:text-lg mb-10 leading-relaxed">
                    Parece que alguien dejó escapar a las mascotas y están desordenando el inventario. Estamos acomodando los estantes y afilando las espadas para ofrecerte lo mejor.
                </p>

                <div class="bg-indigo-50 rounded-2xl p-6 mb-10 border border-indigo-100">
                    <div class="flex items-start gap-4">
                        <div class="bg-white p-2.5 rounded-xl shrink-0 border border-indigo-100 shadow-inner">
                            <x-heroicon-s-clock class="w-7 h-7 text-indigo-500" />
                        </div>
                        <div>
                            <h4 class="text-indigo-950 font-bold text-xl mb-1">Apertura Programada</h4>
                            <p class="text-gray-700 text-base leading-relaxed">
                                La tienda estará 100% operativa y disponible para todos los jugadores poco después de la gran apertura del servidor.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mb-10">
                    <div class="flex justify-between text-xs font-bold text-gray-400 mb-2.5 uppercase tracking-wider">
                        <span>Progreso de construcción</span>
                        <span class="text-indigo-600">85%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-3 overflow-hidden border border-gray-200">
                        <div class="bg-indigo-600 h-3 rounded-full w-[85%] relative">
                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-white/20 w-full animate-pulse"></div>
                        </div>
                    </div>
                </div>

                <div>
                    <a href="{{ route('home') }}" class="inline-flex items-center justify-center gap-2 px-7 py-4 bg-gray-900 hover:bg-gray-800 text-white font-bold rounded-xl transition-all duration-300 w-full sm:w-auto shadow-md hover:shadow-lg">
                        <x-heroicon-s-arrow-left class="w-5 h-5" />
                        Volver al Inicio
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>