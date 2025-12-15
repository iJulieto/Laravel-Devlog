<div
    x-data="{ show: false, message: '' }"
    x-on:notify.window="show = true; message = $event.detail; setTimeout(() => show = false, 3000)"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform -translate-y-2"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform -translate-y-2"
    class="fixed top-6 right-6 z-[60] bg-gradient-to-r from-[#1ebab7] to-[#afd374] text-black px-6 py-4 rounded-2xl shadow-2xl border border-white/20 flex items-center space-x-3 min-w-[300px]"
    style="display: none;"
>
    <div class="bg-black/10 p-2 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
    </div>
    <div>
        <h4 class="font-bold text-lg">Success!</h4>
        <p x-text="message" class="text-sm font-medium opacity-90"></p>
    </div>
</div>