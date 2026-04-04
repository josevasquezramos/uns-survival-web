<div class="fixed bottom-4 left-4 z-50 flex flex-col items-start group" id="ghast-container">
    <div id="ghast-tooltip" class="mb-2 px-4 py-2 bg-gray-900/90 backdrop-blur-sm text-white text-sm font-medium rounded-lg shadow-lg opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 pointer-events-none transform origin-bottom flex flex-col items-center text-center">
        <span>¡No dejes que el Ghast llore!</span>
        <span class="text-sm text-red-400 flex items-center gap-2 mt-1">
            Apoya al servidor <x-heroicon-s-heart class="w-4 h-4 text-red-500" />
        </span>
        <div class="absolute -bottom-2 left-6 w-0 h-0 border-l-[6px] border-l-transparent border-t-[8px] border-t-gray-900/90 border-r-[6px] border-r-transparent"></div>
    </div>

    <button onclick="toggleDonationModal(true)" class="relative focus:outline-none hover:scale-110 transition-transform duration-300 animate-float cursor-pointer">
        <img src="{{ asset('images/ghast.gif') }}" alt="Donar al servidor" class="relative w-16 h-16 md:w-20 md:h-20 object-contain -scale-x-100">
    </button>
</div>

<div id="donation-modal" class="fixed inset-0 z-[100] hidden opacity-0 transition-opacity duration-300">
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm cursor-pointer" onclick="toggleDonationModal(false)"></div>
    
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0 pointer-events-none">
        <div class="relative bg-white border border-gray-200 rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:max-w-md w-full pointer-events-auto">
            
            <button onclick="toggleDonationModal(false)" class="absolute top-3 right-3 p-2 text-gray-400 hover:text-gray-700 hover:bg-gray-100 rounded-full transition-colors cursor-pointer z-10" title="Cerrar">
                <x-heroicon-s-x-mark class="h-6 w-6" />
            </button>

            <div class="px-6 py-6 mt-2">
                <div class="text-center mb-5">
                    <h3 class="text-xl md:text-2xl font-black text-gray-800 tracking-tight flex items-center justify-center gap-2">
                        ¡Apoya a Unsurvival! <x-heroicon-s-heart class="w-6 h-6 md:w-7 md:h-7 text-red-500" />
                    </h3>
                    <p class="text-gray-600 text-sm mt-4">
                        Las donaciones ayudarán a mantener el servidor en línea. 
                        <span class="block text-red-500 font-bold mt-1">¡Cualquier monto será inmensamente apreciado y recompensado! 🥺</span>
                    </p>
                </div>

                <div class="bg-gray-50 p-3 rounded-xl max-w-[240px] sm:max-w-[260px] mx-auto shadow-sm border border-gray-100 mb-5">
                    <img src="{{ asset('images/qr.png') }}" alt="QR Yape/Plin" class="w-full h-auto rounded-lg">
                </div>

                <div class="bg-indigo-50 border border-indigo-100 rounded-lg p-4">
                    <h4 class="text-indigo-800 font-bold mb-2 flex items-center justify-center gap-2 text-sm">
                        <x-heroicon-s-information-circle class="w-5 h-5 text-indigo-600" />
                        ¡Beneficios Exclusivos!
                    </h4>
                    <p class="text-gray-700 text-sm text-center">
                        No olvides <a href="{{ route('orders.create') }}" class="text-blue-600 hover:text-blue-800 underline">registrar</a> tu pago.
                    </p>
                    <ul class="mt-3 text-sm text-gray-600 space-y-2">
                        <li class="flex items-center gap-2">
                            <x-heroicon-s-star class="w-4 h-4 text-yellow-500" />
                            Aparecerás en la lista oficial de auspiciadores.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-heroicon-s-gift class="w-4 h-4 text-pink-500" />
                            Recibirás recompensas especiales.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleDonationModal(show) {
        const modal = document.getElementById('donation-modal');
        if (show) {
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.classList.add('opacity-100');
            }, 10);
        } else {
            modal.classList.remove('opacity-100');
            modal.classList.add('opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const tooltip = document.getElementById('ghast-tooltip');
        const container = document.getElementById('ghast-container');
        
        setInterval(() => {
            if (!container.matches(':hover')) {
                tooltip.classList.remove('opacity-0', 'translate-y-2');
                tooltip.classList.add('opacity-100', 'translate-y-0');
                
                setTimeout(() => {
                    if (!container.matches(':hover')) {
                        tooltip.classList.remove('opacity-100', 'translate-y-0');
                        tooltip.classList.add('opacity-0', 'translate-y-2');
                    }
                }, 5000);
            }
        }, 30000);
    });
</script>