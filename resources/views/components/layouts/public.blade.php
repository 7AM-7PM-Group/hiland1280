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
        }

        .nav-scrolled {
            background-color: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3);
        }

        /* Mobile menu animation */
        #mobile-menu {
            animation: slide-down 300ms ease-out;
        }

        /* Logo responsive sizing */
        @media (max-width: 768px) {
            .logo-img {
                width: 180px;
            }
        }

        @media (max-width: 480px) {
            .logo-img {
                width: 150px;
            }
        }
    </style>
</head>

<body class="antialiased bg-black">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6RGCZDC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Navigation -->
    <nav id="navbar" class="top-0 fixed left-0 right-0 z-50 h-auto transition-all duration-300">
        <div class="container mx-auto px-6 py-8  h-auto" id="navbar-container">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="text-white">
                    <img src="{{ asset('assets/9rtjSTBaSb.png') }}" alt="logo" class="h-auto w-60 logo-img">
                </div>

                <!-- Desktop Menu Items -->
                <div class="hidden md:flex items-center space-x-12" x-data="{ open: false }">
                    <div x-cloak x-show="!open" x-on:click="open = true"
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase">
                        <flux:icon.search></flux:icon.search>
                    </div>
                    <form x-cloak x-transition:enter="transition ease-out duration-300" class="flex items-center gap-4"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                        x-show="open" action="{{ route('search') }}" method="GET" class="me-4">
                        <input name="q" placeholder="Search"
                            class="rounded-lg bg-black/90 border border-white text-white h-10 p-2" />
                        <div x-show="open" x-on:click="open = false"
                            class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase">
                            <flux:icon.x-mark></flux:icon.x-mark>
                        </div>
                    </form>
                    <a href="{{ route('landingpage.landing-page') }}"
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase">
                        Home
                    </a>
                    <a href="{{ route('menu.restaurant-menu') }}"
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase">
                        Menu
                    </a>
                    <a href="{{ route('gallery.restaurant-gallery') }}"
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase">
                        Gallery
                    </a>
                    <a href="{{ route('reservation.restaurant-reservation') }}"
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase">
                        Reservations
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none z-50 relative">
                    <svg id="menu-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="w-7 h-7 hidden" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu (moved outside the flex container) -->
            <div id="mobile-menu" class="hidden md:hidden mt-6 pb-6 z-50 border-t h-auto border-gray-800">
                <div class="flex flex-col space-y-4 pt-6">
                    <form action="{{ route('search') }}" method="GET" class="me-4">
                        <input name="q" placeholder="Search"
                            class="rounded-lg bg-black/90 border border-white text-white h-10 p-2" />
                    </form>
                    <a href="{{ route('landingpage.landing-page') }}"
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase py-2">
                        Home
                    </a>
                    <a href="{{ route('menu.restaurant-menu') }}"
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase py-2">
                        Menu
                    </a>
                    <a href="{{ route('gallery.restaurant-gallery') }}"
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase py-2">
                        Gallery
                    </a>
                    <a href="{{ route('reservation.restaurant-reservation') }}"
                        class="text-white hover:text-[#FFDE68] transition-colors duration-300 tracking-wider text-sm uppercase py-2">
                        Reservations
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <div id="menu-overlay" class="fixed inset-0 bg-black/90 z-40 hidden transition-opacity">
    </div>

    <!-- Footer -->
    <livewire:footer.footer />

    @livewireScripts



    <script>
        function initializeNavigation() {
            // ==============================
            // Navbar scroll effect
            // ==============================
            const navbar = document.getElementById('navbar');
            const navbarContainer = document.getElementById('navbar-container');

            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;

                if (currentScroll > 50) {
                    navbar.classList.add('nav-scrolled');
                    navbarContainer.classList.remove('py-8');
                    navbarContainer.classList.add('py-4');
                } else {
                    navbar.classList.remove('nav-scrolled');
                    navbarContainer.classList.remove('py-4');
                    navbarContainer.classList.add('py-8');
                }
            });

            // ==============================
            // Mobile menu logic
            // ==============================
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            const overlay = document.getElementById('menu-overlay');

            if (!mobileMenuButton || !mobileMenu || !menuIcon || !closeIcon || !overlay) {
                console.warn('Navigation elements not found');
                return;
            }

            // Remove existing listeners (safe re-init)
            const newButton = mobileMenuButton.cloneNode(true);
            mobileMenuButton.parentNode.replaceChild(newButton, mobileMenuButton);

            // ==============================
            // Toggle menu
            // ==============================
            function openMenu() {
                mobileMenu.classList.remove('hidden');
                overlay.classList.remove('hidden');

                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');

                document.body.classList.add('overflow-hidden');
            }

            function closeMenu() {
                mobileMenu.classList.add('hidden');
                overlay.classList.add('hidden');

                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');

                document.body.classList.remove('overflow-hidden');
            }

            newButton.addEventListener('click', (e) => {
                e.preventDefault();

                if (mobileMenu.classList.contains('hidden')) {
                    openMenu();
                } else {
                    closeMenu();
                }
            });

            // ==============================
            // Close when clicking overlay
            // ==============================
            overlay.addEventListener('click', closeMenu);

            // ==============================
            // Close when clicking menu link
            // ==============================
            const mobileMenuLinks = mobileMenu.querySelectorAll('a');
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', closeMenu);
            });

            // ==============================
            // Auto reset on desktop resize
            // ==============================
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) {
                    closeMenu();
                }
            });
        }

        // Initialize on DOM load
        document.addEventListener('DOMContentLoaded', initializeNavigation);

        // Reinitialize after Livewire updates
        document.addEventListener('livewire:navigated', initializeNavigation);
        document.addEventListener('livewire:load', initializeNavigation);
    </script>
</body>

</html>
