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
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-6 py-8" id="navbar-container">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="text-white">
                    <img src="{{ asset('assets/white-logo-1.png') }}" alt="logo" class="h-auto w-60 logo-img">
                </div>

                <!-- Desktop Menu Items -->
                <div class="hidden md:flex items-center space-x-12">
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
            <div id="mobile-menu" class="hidden md:hidden mt-6 pb-6 border-t border-gray-800">
                <div class="flex flex-col space-y-4 pt-6">
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

    <!-- Footer -->
    <livewire:footer.footer />

    @livewireScripts



    <script>
        function initializeNavigation() {
            // Navbar scroll effect
            const navbar = document.getElementById('navbar');
            const navbarContainer = document.getElementById('navbar-container');
            let lastScroll = 0;

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

                lastScroll = currentScroll;
            });

            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');

            console.log('Mobile menu button:', mobileMenuButton); // Debug log
            console.log('Mobile menu:', mobileMenu); // Debug log

            if (mobileMenuButton && mobileMenu && menuIcon && closeIcon) {
                // Remove any existing event listeners by cloning
                const newButton = mobileMenuButton.cloneNode(true);
                mobileMenuButton.parentNode.replaceChild(newButton, mobileMenuButton);

                newButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    console.log('Hamburger clicked!'); // Debug log

                    mobileMenu.classList.toggle('hidden');

                    const newMenuIcon = document.getElementById('menu-icon');
                    const newCloseIcon = document.getElementById('close-icon');

                    newMenuIcon.classList.toggle('hidden');
                    newCloseIcon.classList.toggle('hidden');
                });

                // Close mobile menu when clicking on a link
                const mobileMenuLinks = mobileMenu.querySelectorAll('a');
                mobileMenuLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                        document.getElementById('menu-icon').classList.remove('hidden');
                        document.getElementById('close-icon').classList.add('hidden');
                    });
                });
            }
        }

        // Initialize on DOM load
        document.addEventListener('DOMContentLoaded', initializeNavigation);

        // Reinitialize after Livewire updates
        document.addEventListener('livewire:navigated', initializeNavigation);
        document.addEventListener('livewire:load', initializeNavigation);
    </script>
</body>

</html>
