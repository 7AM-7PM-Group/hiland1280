<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')

    <style>
      @keyframes slide-down { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
      .animate-slide-down { animation: slide-down 500ms ease-out forwards; }
    </style>
</head>
<body class="bg-[#F7F6E5] min-h-screen text-gray-900">
    <!-- Navigation Container -->
    <nav x-data="{ mobileMenuOpen: false }" class="w-full sticky top-0 pt-8 relative z-50">

        <div class="w-[90%] rounded-full px-4 py-2 md:px-8 md:py-3 bg-white mx-auto border border-black/10 shadow-sm flex items-center justify-between text-black">

            <div class="flex gap-4 items-center opacity-0 animate-slide-down" style="animation-delay: 100ms;">
                <!-- Vertical Pill Logo -->
                {{-- <div class="h-16 w-8 bg-navy-900 rounded-full flex flex-col items-center justify-center gap-0.5 shadow-lg group hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <span class="text-[10px] text-gold font-bold tracking-widest leading-none transform -rotate-90 origin-center translate-y-2">THE</span>
                    <span class="text-xs text-gold font-bold font-serif">SM</span>
                </div> --}}

                <div class="flex flex-col max-w-[250px]">
                    <h1 class="font-serif text-2xl md:text-3xl leading-tight text-gray-900">
                        Hiland1280
                    </h1>
                    <div class="hidden md:block text-[10px] font-bold tracking-[0.2em] text-gray-500 uppercase font-sans">
                        Mediterranean Grill & Coffee Golf Club
                    </div>
                </div>
            </div>

            <div class="hidden xl:flex items-center gap-8 2xl:gap-12 opacity-0 animate-slide-down group" style="animation-delay: 300ms;">
                <a href="#" class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-gray-900 hover:text-gray-700 transition-all duration-300 hover:tracking-[0.2em] relative after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-0 after:h-px after:bg-gray-900 after:transition-all after:duration-300 hover:after:w-full">
                    About
                </a>
                <a href="#" class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-gray-900 hover:text-gray-700 transition-all duration-300 hover:tracking-[0.2em] text-center">
                    Signature<br>Dishes
                </a>
                <a href="#" class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-navy-900 hover:text-navy-800 transition-all duration-300 hover:tracking-[0.2em]">
                    Menu
                </a>
                <a href="#" class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-navy-900 hover:text-navy-800 transition-all duration-300 hover:tracking-[0.2em]">
                    Gallery
                </a>
                <a href="#" class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-navy-900 hover:text-navy-800 transition-all duration-300 hover:tracking-[0.2em]">
                    Guests
                </a>
                <a href="#" class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-navy-900 hover:text-navy-800 transition-all duration-300 hover:tracking-[0.2em]">
                    Reserve
                </a>
            </div>

            <div class="flex items-center gap-6 mt-2 opacity-0 animate-slide-down" style="animation-delay: 500ms;">
                <span class="hidden md:block text-[11px] font-bold tracking-[0.15em] text-center uppercase text-gray-900">
                    Visit<br>Us
                </span>

                <button class="hidden md:block px-4 py-2 border border-black rounded-full text-[11px] font-bold tracking-[0.15em] uppercase hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                    View Menu
                </button>

                <button class="hidden md:block px-4 py-2 bg-black text-yellow-300 rounded-full text-[11px] font-bold tracking-[0.15em] uppercase shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                    Reserve Table
                </button>

                <button @click="mobileMenuOpen = !mobileMenuOpen" class="xl:hidden p-2 text-gray-900 z-50 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenuOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-x-full"
             x-transition:enter-end="opacity-100 translate-x-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-x-0"
             x-transition:leave-end="opacity-0 translate-x-full"
             class="fixed inset-0 z-40 bg-white/95 backdrop-blur-sm text-gray-900 flex flex-col items-center justify-center gap-8 xl:hidden">

            <button @click="mobileMenuOpen = false" class="absolute top-8 right-8 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <a href="#" class="text-2xl font-serif text-gray-900 hover:text-gray-700 transition-colors">About</a>
            <a href="#" class="text-2xl font-serif text-gray-900 hover:text-gray-700 transition-colors">Signature Dishes</a>
            <a href="#" class="text-2xl font-serif text-gray-900 hover:text-gray-700 transition-colors">Menu</a>
            <a href="#" class="text-2xl font-serif text-gray-900 hover:text-gray-700 transition-colors">Gallery</a>
            <button class="mt-8 px-8 py-4 border border-gray-900 rounded-full text-sm font-bold tracking-widest uppercase">View Menu</button>
        </div>

    </nav>

    <main class="w-[90%] m-auto bg-white">
        {{ $slot }}
    </main>

</body>
</html>
