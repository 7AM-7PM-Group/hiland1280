<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    @include('partials.head')

    <style>
        @keyframes slide-down {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-down {
            animation: slide-down 500ms ease-out forwards;
        }

        html {
            scroll-padding-top: 120px;
            /* Adjust this value based on your navbar height */
        }
    </style>
</head>

<body class="bg-[#F7F6E5] min-h-screen text-gray-900">
    <!-- Navigation Container -->
    <nav x-data="{ mobileMenuOpen: false }" class="w-full sticky top-0 pt-4 relative z-50">

        <div
            class="w-[80%] rounded-xl px-4 py-2 md:px-8 md:py-4 bg-white/70 backdrop-blur-xl mx-auto border border-black/10 shadow-sm flex items-center justify-between text-black">

            <div class="flex gap-4 items-center opacity-0 animate-slide-down" style="animation-delay: 100ms;">
                <!-- Vertical Pill Logo -->
                {{-- <div class="h-16 w-8 bg-navy-900 rounded-full flex flex-col items-center justify-center gap-0.5 shadow-lg group hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <span class="text-[10px] text-gold font-bold tracking-widest leading-none transform -rotate-90 origin-center translate-y-2">THE</span>
                    <span class="text-xs text-gold font-bold font-serif">SM</span>
                </div> --}}

                <a href="#">
                    <div class="flex flex-col max-w-[250px]">
                        <h1 class="font-serif text-2xl md:text-3xl leading-tight text-gray-900">
                            Hiland1280
                        </h1>
                        <div
                            class="hidden md:block text-[10px] font-bold tracking-[0.2em] text-gray-500 uppercase font-sans">
                            Bar, Resto & Coffee Golf Club
                        </div>
                    </div>
                </a>
            </div>

            <div class="hidden xl:flex items-center gap-8 2xl:gap-12 opacity-0 animate-slide-down group"
                style="animation-delay: 300ms;">
                <a href="#about"
                    class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-gray-900 hover:text-gray-700 transition-all duration-300 hover:tracking-[0.2em] relative after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-0 after:h-px after:bg-gray-900 after:transition-all after:duration-300 hover:after:w-full">
                    About
                </a>
                <a href="#signature-dishes"
                    class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-gray-900 hover:text-gray-700 transition-all duration-300 hover:tracking-[0.2em] text-center">
                    Signature<br>Dishes
                </a>
                <a href="#gallery"
                    class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-navy-900 hover:text-navy-800 transition-all duration-300 hover:tracking-[0.2em]">
                    Gallery
                </a>
                <a href="#testimonials"
                    class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-navy-900 hover:text-navy-800 transition-all duration-300 hover:tracking-[0.2em]">
                    Guests
                </a>
                <a href="#location"
                    class="nav-item text-[11px] font-bold tracking-[0.15em] uppercase text-navy-900 hover:text-navy-800 transition-all duration-300 hover:tracking-[0.2em]">
                    Visit Us
                </a>
            </div>

            <div class="flex items-center gap-6 mt-2 opacity-0 animate-slide-down" style="animation-delay: 500ms;">
                <a href="#menu">
                    <button
                        class="hidden md:block px-4 py-2 border border-black rounded-full text-[11px] font-bold tracking-[0.15em] uppercase hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                        View Menu
                    </button>
                </a>

                <a href="#reservation">
                    <button
                        class="hidden md:block px-4 py-2 bg-black text-yellow-300 rounded-full text-[11px] font-bold tracking-[0.15em] uppercase shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                        Reserve Table
                    </button>
                </a>
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="xl:hidden p-2 text-gray-900 z-50 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 translate-x-full"
            class="fixed inset-0 z-40 bg-white/95 backdrop-blur-sm text-gray-900 flex flex-col items-center justify-center gap-8 xl:hidden">

            <button @click="mobileMenuOpen = false" class="absolute top-8 right-8 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <a href="#about" @click="mobileMenuOpen = false"
                class="text-2xl font-serif text-gray-900 hover:text-gray-700 transition-colors">About</a>
            <a href="#signature-dishes" @click="mobileMenuOpen = false"
                class="text-2xl font-serif text-gray-900 hover:text-gray-700 transition-colors">Signature
                Dishes</a>
            <a href="#gallery" @click="mobileMenuOpen = false"
                class="text-2xl font-serif text-gray-900 hover:text-gray-700 transition-colors">Gallery</a>
            <a href="#testimonials" @click="mobileMenuOpen = false"
                class="text-2xl font-serif text-gray-900 hover:text-gray-700 transition-colors">Guest</a>
            <a href="#location" @click="mobileMenuOpen = false"
                class="text-2xl font-serif text-gray-900 hover:text-gray-700 transition-colors">Visit Us</a>

            <a href="#menu">
                <button @click="mobileMenuOpen = false"
                    class="mt-8 px-8 py-4 border border-gray-900 rounded-full text-sm font-bold tracking-widest uppercase">View
                    Menu</button>
            </a>
            <a href="#reservation">
                <button
                    @click="mobileMenuOpen = false"
                    class="px-8 py-4 bg-black text-yellow-300 rounded-full text-sm font-bold tracking-[0.15em] uppercase shadow-lg">
                    Reserve Table
                </button>
            </a>
        </div>

    </nav>

    <main class="w-[80%] mx-auto ">
        {{ $slot }}
    </main>

    <footer id="main-footer" class="bg-[#0b132b] text-white py-12 mt-20 rounded-t-xl relative overflow-hidden">

        <!-- Background Decor (Subtle Glow) -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[80%] h-[300px] bg-[#FCD34D] opacity-5 blur-[100px] pointer-events-none">
        </div>

        <div class="w-[80%] mx-auto relative z-10">

            <!-- Top Section: Brand & Newsletter -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 mb-20 items-start">

                <!-- Brand -->
                <div class="reveal-footer-item opacity-0 translate-y-8 transition-all duration-700 ease-out">
                    <div class="flex flex-col max-w-[250px] mb-4">
                        <h1 class="font-serif text-2xl md:text-3xl leading-tight text-white">
                            Hiland1280
                        </h1>
                        <div
                            class="hidden md:block text-[10px] font-bold tracking-[0.2em] text-gray-500 uppercase font-sans">
                            Bar, Resto & Coffee Golf Club
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-sm">
                        A culinary escape within Greenside Golf Club. <br>
                        Fire-grilled flavors, coastal vibes, and unforgettable evenings.
                    </p>
                </div>

                <!-- Newsletter -->
                <div
                    class="reveal-footer-item opacity-0 translate-y-8 transition-all duration-700 ease-out lg:text-right">
                    <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-[#F7F6E5] mb-4">
                        Join the Club
                    </h3>
                    <p class="text-gray-400 text-xs mb-6 lg:ml-auto max-w-xs">
                        Sign up for exclusive event invites, seasonal menu previews, and member-only perks.
                    </p>

                    <form class="flex flex-col sm:flex-row gap-2 lg:justify-end">
                        <input type="email" placeholder="Email address"
                            class="px-4 py-3 bg-white/5 border border-white/10 rounded-lg text-sm text-white placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-[#F7F6E5] focus:border-[#F7F6E5] transition-all w-full sm:w-64">
                        <button type="submit"
                            class="px-6 py-3 bg-[#F7F6E5] text-[#0b132b] text-xs font-bold uppercase tracking-widest rounded-lg hover:bg-white transition-colors duration-300">
                            Subscribe
                        </button>
                    </form>
                </div>

            </div>

            <!-- Copyright -->
            <div
                class="reveal-footer-item opacity-0 translate-y-8 transition-all duration-700 ease-out pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
                <p>&copy; {{ date('Y') }} Hiland1280. All rights reserved.</p>
                <p>Designed with <span class="text-red-400">♥</span> by Alresh.</p>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const footer = document.getElementById('main-footer');
            if (!footer) return;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Reveal items
                        const items = footer.querySelectorAll('.reveal-footer-item');
                        items.forEach((el, index) => {
                            setTimeout(() => {
                                el.classList.remove('opacity-0', 'translate-y-8',
                                    'scale-x-0');
                                el.classList.add('opacity-100', 'translate-y-0',
                                    'scale-x-100');
                            }, index * 100);
                        });
                        observer.unobserve(footer);
                    }
                });
            }, {
                threshold: 0.1
            }); // Trigger when 10% of footer is visible

            observer.observe(footer);
        });
    </script>
</body>

</html>
