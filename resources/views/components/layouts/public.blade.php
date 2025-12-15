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

<body class="antialiased bg-black">
    <!-- Navigation -->
    <nav class="absolute top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-6 py-8">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="text-white">
                    <h1 class="text-3xl font-bold tracking-wide">Hiland1280</h1>
                    <p class="text-[10px] font-bold tracking-[0.2em] text-gray-400 uppercase font-sans">Bar, Resto & Coffee Golf Club</p>
                </div>

                <!-- Menu Items -->
                <div class="hidden md:flex items-center space-x-12">
                    <a href=""
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase">
                        Home
                    </a>
                    <a href=""
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase">
                        Menu
                    </a>
                    <a href=""
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase">
                        Gallery
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer (optional) -->
    <livewire:footer.footer />

    @livewireScripts
</body>

</html>
