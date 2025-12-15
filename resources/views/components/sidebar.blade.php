@props(['links'])

<template x-teleport="body">
    <div x-show="open" class="fixed inset-0 z-[9999] flex justify-end" style="display: none;">
        <!-- Backdrop -->
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="open = false"
             class="fixed inset-0 bg-black/60 backdrop-blur-sm"></div>

        <!-- Sidebar Panel -->
        <div x-show="open"
             x-transition:enter="transition transform ease-out duration-300"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition transform ease-in duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             class="relative w-64 h-full bg-black border-l border-[#67bed9]/50 shadow-2xl flex flex-col">
            
            <!-- Close Button -->
            <div class="flex justify-end p-6">
                <button @click="open = false" class="text-white hover:text-[#afd374] focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <div class="flex-1 px-6 py-4 flex flex-col space-y-6 items-start">
                @foreach($links as $link)
                    <a href="{{ route($link['route']) }}" class="text-white text-xl font-bold hover:text-[#afd374] transition-all border-b-2 block w-full {{ request()->routeIs($link['route']) ? 'text-[#1ebab7] border-[#1ebab7]' : 'border-transparent' }}">{{ $link['label'] }}</a>
                @endforeach
                <a href="{{ route('login') }}" class="px-14 py-2 mt-2 rounded-full border border-[#1ebab7] text-[#1ebab7] font-bold hover:bg-[#1ebab7] hover:text-black transition-all duration-300 self-center">Login</a>
            </div>

            <!-- Bottom Text -->
            <div class="p-6 text-center border-t border-[#67bed9]/20">
                <span class="text-[#67bed9] font-mono text-sm">jear.dev</span>
            </div>
        </div>
    </div>
</template>