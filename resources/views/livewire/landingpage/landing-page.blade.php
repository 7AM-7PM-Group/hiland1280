<div class="overflow-x-hidden">

    {{-- HERO SECTION --}}
    <section class="mt-8 flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-20">

        <!-- Left Content -->
        <div data-animate data-stagger="120" data-animate-targets=".hero-item"
            class="w-full lg:w-[60%] order-2 lg:order-1">

            <!-- Badge -->
            <div
                class="hero-item opacity-0 translate-y-4 transition-all duration-700 inline-flex items-center gap-2 text-[10px] sm:text-xs border border-black/10 shadow-sm px-3 py-1.5 sm:px-4 sm:py-2 rounded-full bg-[#FDFDFA] uppercase tracking-widest text-gray-700 mb-6">
                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                <span class="truncate tracking-[0.2em]">Terrace Dining · After-round Coffee · Fire-grilled Steaks</span>
            </div>

            <!-- Title -->
            <h1
                class="hero-item opacity-0 translate-y-4 transition-all duration-700 text-4xl sm:text-5xl lg:text-6xl font-serif text-gray-900 leading-[1.1] mb-6">
                Mediterranean grill & coffee <br class="hidden lg:block" />
                for long, easy evenings.
            </h1>

            <!-- Description -->
            <p
                class="hero-item opacity-0 translate-y-4 transition-all duration-700 text-gray-600 text-sm leading-relaxed mb-8 max-w-xl">
                Set within the greens of Greenside Golf Club, our Mediterranean Restaurant pairs prime steaks and
                slow-cooked ribs with bright, coastal flavors — and a coffee program worthy of a final putt.
            </p>

            <!-- Buttons -->
            <div
                class="hero-item opacity-0 translate-y-4 transition-all duration-700 flex flex-col sm:flex-row gap-4 mb-8">
                <button
                    class="w-full sm:w-auto px-8 py-3.5 bg-black text-white rounded-xl uppercase text-xs tracking-[0.2em] font-medium hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                    Book an Evening
                </button>
                <button
                    class="w-full sm:w-auto px-8 py-3.5 border border-black text-gray-900 uppercase text-xs tracking-[0.2em] rounded-xl font-medium hover:border-gray-900 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                    Explore the Menu
                </button>
            </div>

            <!-- Features List -->
            <ul
                class="hero-item opacity-0 translate-y-4 transition-all duration-700 space-y-3 text-gray-600 text-sm font-medium">
                <li class="flex items-center gap-3">
                    <span class="flex-shrink-0 bg-orange-100 p-1 rounded-full">🔥</span>
                    Charcoal-grilled steaks & Mediterranean plates
                </li>
                <li class="flex items-center gap-3">
                    <span class="flex-shrink-0 bg-blue-100 p-1 rounded-full">☕</span>
                    Specialty coffee from morning to late night
                </li>
            </ul>
        </div>

        <!-- Right Image -->
        <div data-animate data-delay="600"
            class="w-full lg:w-[40%] order-1 lg:order-2 opacity-0 translate-y-4 transition-all duration-700">
            <div class="rounded-[2rem] overflow-hidden shadow-2xl relative group">
                <img src="/landing-page/hero.jpg"
                    class="w-full h-[350px]  object-cover transition-transform duration-1000 group-hover:scale-105"
                    alt="Restaurant Terrace" />

                <!-- Image Overlay Card -->
                <div
                    class="absolute bottom-4 left-4 right-4 bg-black/50 backdrop-blur-sm text-white p-4 rounded-xl flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                    <div>
                        <div class="text-sm font-bold tracking-widest uppercase mb-1">
                            Tonight at the Terrace
                        </div>
                        <div class="text-xs text-gray-200">
                            Golden hour 6–8pm · Live acoustic
                        </div>
                    </div>
                    <div class="text-right text-xs sm:text-sm hidden sm:block border-l border-gray-200 pl-4">
                        <span class="block text-xs uppercase tracking-wide">View</span>
                        <span>18th Hole</span>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- ABOUT SECTION --}}
    <section id='about' x-data="{ show: false }" x-init="setTimeout(() => show = true, 150)"
        class="bg-[#FDFDFA] mt-12 p-8 rounded-xl shadow-lg border border-gray-100 reveal-grid">
        <h3 class="text-sm tracking-[0.2em] text-gray-700 mb-4 uppercase">
            About
        </h3>
        <div class="mx-auto flex flex-col lg:flex-row items-start justify-center gap-10">
            <div data-animate class="flex-1 opacity-0 translate-y-4 transition-all duration-700">
                <!-- Left text -->
                <h2 data-animate
                    class="about-item opacity-0 translate-y-4 transition-all duration-700 text-2xl md:text-4xl font-serif text-gray-900 leading-tight mb-4">
                    A relaxed, premium table just off the 18th.
                </h2>
                <p data-animate
                    class="about-item opacity-0 translate-y-4 transition-all duration-700 text-gray-700 text-sm leading-relaxed mb-6">
                    Unwind after a round or gather with friends over wood-fired steaks,
                    slow-cooked ribs, and vibrant Mediterranean plates. Every detail
                    is crafted for relaxed, premium moments.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div data-animate
                        class="bg-[#f3f2b2] p-4 rounded-2xl flex items-start gap-3 about-item opacity-0 translate-y-4 transition-all duration-700">
                        <span class="text-xl">•</span>
                        <span class="text-gray-900 text-sm">
                            Prime steaks & fall-off-the-bone ribs
                        </span>
                    </div>

                    <div data-animate
                        class="bg-[#f3f2b2] p-4 rounded-2xl flex items-start gap-3 about-item opacity-0 translate-y-4 transition-all duration-700">
                        <span class="text-xl">•</span>
                        <span class="text-gray-900 text-sm">
                            Fresh Mediterranean salads, seafood & mezze
                        </span>
                    </div>

                    <div data-animate
                        class="bg-[#f3f2b2] p-4 rounded-2xl flex items-start gap-3 about-item opacity-0 translate-y-4 transition-all duration-700">
                        <span class="text-xl">•</span>
                        <span class="text-gray-900 text-sm">
                            Specialty coffee & desserts all day
                        </span>
                    </div>

                    <div data-animate
                        class="bg-[#f3f2b2] p-4 rounded-2xl flex items-start gap-3 about-item opacity-0 translate-y-4 transition-all duration-700">
                        <span class="text-xl">•</span>
                        <span class="text-gray-900 text-sm">
                            Terrace seating overlooking the golf course
                        </span>
                    </div>
                </div>
            </div>
            <div data-animate class="flex-1 w-full opacity-0 translate-y-4 transition-all duration-700">
                <div class="bg-white rounded-3xl p-6 shadow-xl border border-gray-100">
                    <div class="flex items-center gap-2 text-sm tracking-widest text-gray-700 uppercase mb-6">
                        <span>📅</span>
                        Today at Stunning Mediterranean
                    </div>
                    <div class="space-y-4 text-gray-900">
                        <div class="flex justify-between">
                            <span class="font-medium">Lunch on the terrace</span>
                            <span class="text-gray-700">12:00 – 15:00</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="font-medium">Golden hour menu</span>
                            <span class="text-gray-700">17:00 – 19:00</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="font-medium">Steaks from the grill</span>
                            <span class="text-gray-700">From 18:00</span>
                        </div>
                    </div>

                    <!-- Member CTA -->
                    <div class="bg-[#0b132b] text-white rounded-2xl p-5 mt-10">
                        <div class="text-sm tracking-widest mb-1 text-[#f3f2b2] uppercase">
                            Club Members
                        </div>
                        <p class="text-[#f3f2b2]/80 text-sm leading-relaxed">
                            Priority terrace seating when you reserve online
                            with your member number.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SIGNATURE DISHES --}}
    <section id="signature-dishes" x-data="{ show: false }" x-init="setTimeout(() => show = true, 150)"
        class="mt-12 bg-[#FDFDFA] p-8 rounded-xl shadow-lg reveal-grid">
        <!-- Top Heading -->
        <h4 class="text-sm tracking-[0.2em] uppercase mb-4">
            Signature Dishes
        </h4>

        <div data-animate data-stagger="120" data-animate-targets=".sig-item"
            class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-10 gap-6">
            <div class="sig-item opacity-0 translate-y-4 transition-all duration-700 w-full lg:w-[60%]">
                <h2 class="text-xl md:text-4xl font-serif text-gray-900 leading-tight">
                    Fire, smoke & bright Mediterranean flavors.
                </h2>
            </div>

            <div class="sig-item opacity-0 translate-y-4 transition-all duration-700 w-full lg:w-[40%] lg:text-left">
                <p class="text-gray-600 text-sm leading-relaxed lg:ml-auto max-w-md">
                    A deliberately short menu so every steak is rested properly, every
                    rib is glazed twice, and every coffee is pulled to perfection.
                </p>
            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

            <!-- Card 1 -->
            <div data-animate
                class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden about-item opacity-0 translate-y-4 transition-all duration-500">
                <div class="relative overflow-hidden">
                    <img src="/menu/menu-1.jpg"
                        class="w-full h-64 md:h-72 object-cover transform group-hover:scale-105 transition-transform duration-700"
                        alt="Charcoal-Grilled Ribeye">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                    <span
                        class="absolute top-4 left-4 bg-white/95 backdrop-blur text-gray-900 px-3 py-1.5 text-[10px] font-bold tracking-widest rounded-full uppercase shadow-sm">
                        Chef's Favorite
                    </span>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-serif text-xl text-gray-900 group-hover:text-orange-700 transition-colors">
                            Charcoal Ribeye</h3>
                        <span class="font-bold text-gray-900 bg-gray-50 px-2 py-1 rounded-md">$38</span>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        350g prime ribeye with rosemary, roasted garlic and sea salt.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div data-animate
                class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden about-item opacity-0 translate-y-4 transition-all duration-500 delay-100">
                <div class="relative overflow-hidden">
                    <img src="/menu/menu-2.jpg"
                        class="w-full h-64 md:h-72 object-cover transform group-hover:scale-105 transition-transform duration-700"
                        alt="Mediterranean Mixed Grill">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                    <span
                        class="absolute top-4 left-4 bg-white/95 backdrop-blur text-gray-900 px-3 py-1.5 text-[10px] font-bold tracking-widest rounded-full uppercase shadow-sm">
                        For Sharing
                    </span>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-serif text-xl text-gray-900 group-hover:text-orange-700 transition-colors">
                            Mixed Grill</h3>
                        <span class="font-bold text-gray-900 bg-gray-50 px-2 py-1 rounded-md">$42</span>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Lamb, chicken, and beef skewers over saffron rice with grilled vegetables.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div data-animate
                class="group bg-white rounded-2xl shadow-sm hover:shadow-xl border border-gray-100 overflow-hidden about-item opacity-0 translate-y-4 transition-all duration-500 delay-200">
                <div class="relative overflow-hidden">
                    <img src="/menu/menu-3.jpg"
                        class="w-full h-64 md:h-72 object-cover transform group-hover:scale-105 transition-transform duration-700"
                        alt="Falafel & Hummus Bowl">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                    <span
                        class="absolute top-4 left-4 bg-white/95 backdrop-blur text-gray-900 px-3 py-1.5 text-[10px] font-bold tracking-widest rounded-full uppercase shadow-sm">
                        Classic
                    </span>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-serif text-xl text-gray-900 group-hover:text-orange-700 transition-colors">
                            Falafel Bowl</h3>
                        <span class="font-bold text-gray-900 bg-gray-50 px-2 py-1 rounded-md">$21</span>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Crispy falafel, creamy hummus, pickled vegetables, and warm pita.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Additional Livewire Components -->
    <div class="space-y-12 md:space-y-24">
        <livewire:menu.restaurant-menu />
        <livewire:gallery.restaurant-gallery />
        <livewire:guest.restaurant-testimonial />
        <livewire:reservation.restaurant-reservation />
        <livewire:visitus.restaurant-visitus />
    </div>

    <script>
        // Reveal elements with [data-animate] on scroll
        (function() {
            const els = document.querySelectorAll('[data-animate]');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;

                    const el = entry.target;
                    const baseDelay = parseInt(el.dataset.delay || '0', 10);

                    // If stagger is set, reveal child items in order
                    if (el.dataset.stagger) {
                        const step = parseInt(el.dataset.stagger, 10) || 120;
                        const selector = el.dataset.animateTargets || '[data-animate-item]';
                        const items = el.querySelectorAll(selector);
                        items.forEach((item, i) => {
                            setTimeout(() => {
                                item.classList.remove('opacity-0', 'translate-y-4');
                                item.classList.add('opacity-100', 'translate-y-0');
                            }, baseDelay + i * step);
                        });
                        observer.unobserve(el);
                        return;
                    }

                    // Single element reveal with optional delay
                    setTimeout(() => {
                        el.classList.remove('opacity-0', 'translate-y-4');
                        el.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(el);
                    }, baseDelay);
                });
            }, {
                rootMargin: '0px 0px -10% 0px',
                threshold: 0.15
            });
            els.forEach(el => observer.observe(el));
        })();
    </script>
</div>
