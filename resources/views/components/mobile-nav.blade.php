<div x-data="{ open: false }" class="block lg:hidden">
    <div @click="open = ! open" class="bg-white/[0.3] text-white py-2 rounded-lg px-4 block lg:hidden">
        <i class="fa-solid fa-bars text-xl"></i>
    </div>
    <div  x-show="open" @click.away="open = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
        class="z-50 w-full left-0 p-4 absolute top-0">
        <nav class="bg-white rounded-lg pb-2 pt-8 relative">
            <div class="absolute top-5 right-5" @click="open = ! open">
                <i class="fa-solid text-2xl fa-xmark"></i>
            </div>
            <h1 class="px-5 font-bold text-gray-500 uppercase text-sm tracking-widest">Menu</h1>
            <ul class="px-5 mt-3 mb-3">
                <x-mobile-nav-item href="/" title="Home" />
                <x-mobile-nav-item href="#how_it_works" title="How it works" />
                <x-mobile-nav-item href="#support" title="Contact Support" />
            </ul>

        </nav>
    </div>
</div>
