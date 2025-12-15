<nav x-data="{ open: false }" class="fixed top-6 left-1/2 transform -translate-x-1/2 w-[95%] max-w-5xl z-50 rounded-full bg-black shadow-xl border border-[#67bed9]/50">
    @php
        $navLinks = [
            ['label' => 'Home', 'route' => 'home'],
            ['label' => 'About', 'route' => 'about'],
            ['label' => 'Contact', 'route' => 'contact'],
        ];
    @endphp
    <div class="px-6 sm:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-1 flex items-center justify-start">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img class="h-15 w-auto object-contain" src="{{ asset('/src/images/LogoTitle.png') }}" alt="Devlog Logo">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden sm:flex space-x-8 items-center shadow-border-b border-transparent">
                @foreach($navLinks as $link)
                    <a href="{{ route($link['route']) }}" class="text-white font-bold hover:text-[#afd374] transition-all duration-300 border-b-2 {{ request()->routeIs($link['route']) ? 'text-[#1ebab7] border-[#1ebab7]' : 'border-transparent' }}">{{ $link['label'] }}</a>
                @endforeach
            </div>

            <!-- Right Side -->
            <div class="flex-1 flex items-center justify-end space-x-4">
                <a href="{{ route('login') }}" class="hidden sm:block px-8 py-2 rounded-full border border-[#1ebab7] text-[#1ebab7] font-bold hover:bg-[#1ebab7] hover:text-black transition-all duration-300">Login</a>

                <!-- Mobile Menu Button -->
                <div class="flex items-center sm:hidden">
                    <button @click="open = ! open" type="button" class="text-white hover:text-[#afd374] focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <x-sidebar :links="$navLinks" />
</nav>
