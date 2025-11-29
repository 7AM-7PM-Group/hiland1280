<div>
    <section x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)"
        class="mt-8 max-h-screen flex flex-col lg:flex-row items-center justify-between  gap-12">

        <!-- Left -->
        <div data-animate class="lg:w-[60%] opacity-0 translate-y-4 transition-all duration-700">
            <div
                class="flex items-center gap-2 text-xs border border-black/10 shadow-sm px-4 py-2 rounded-full bg-[#FDFDFA] uppercase tracking-widest text-gray-700 mb-6">
                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                Terrace Dining · After-Round Coffee · Fire-Grilled Steaks
            </div>

            <h1 class="text-xl md:text-5xl font-serif text-gray-900 leading-tight mb-4">
                Mediterranean grill & coffee <br />
                for long, easy evenings at the club.
            </h1>

            <p class="text-gray-700 text-md leading-relaxed mb-6">
                Set within the greens of Greenside Golf Club, our Mediterranean Restaurant pairs prime steaks and
                slow-cooked ribs with bright, coastal flavors — and a coffee program worthy of a final putt.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 mb-6">
                <button
                    class="px-6 py-2 bg-black text-white rounded-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                    Book an Evening
                </button>
                <button
                    class="px-6 py-2 border border-gray-900 text-gray-900 rounded-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                    Explore the Menu
                </button>
            </div>

            <ul class="space-y-3 text-gray-700 text-sm">
                <li class="flex items-center gap-2">
                    <span>🔥</span> Charcoal-grilled steaks & Mediterranean plates
                </li>
                <li class="flex items-center gap-2">
                    <span>☕</span> Specialty coffee from morning to late night
                </li>
            </ul>
        </div>

        <!-- Right Image -->
        <div data-animate class="w-full lg:w-[40%] opacity-0 translate-y-4 transition-all duration-700">
            <div class="rounded-3xl overflow-hidden shadow-2xl relative">
                <img src="/landing-page/hero.jpg" class="w-full h-[350px] object-cover" />

                <div
                    class="absolute bottom-4 left-4 right-4 bg-black/50 backdrop-blur-sm text-white p-4 rounded-xl flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                    <div>
                        <div class="text-sm tracking-wide uppercase opacity-90">
                            Tonight at the Terrace
                        </div>
                        <div class="text-xs opacity-80">
                            Golden hour from 6–8pm · Live acoustic on Fridays
                        </div>
                    </div>
                    <div class="text-right text-xs opacity-90">
                        Greenside Golf Club <br />
                        <span class="font-semibold">18th Hole View</span>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section x-data="{ show: false }" x-init="setTimeout(() => show = true, 150)" class="bg-[#FDFDFA] mt-20 p-8 rounded-xl shadow-lg">

        <h3 class="text-sm tracking-[0.2em] text-gray-700 mb-4 uppercase">
            About
        </h3>
        <div class="mx-auto flex flex-col lg:flex-row items-center justify-center gap-10">
            <div data-animate class="flex-1 opacity-0 translate-y-4 transition-all duration-700">
                <!-- Left text -->


                <h2 class="text-2xl md:text-4xl font-serif text-gray-900 leading-tight mb-4">
                    A relaxed, premium table just off the 18th.
                </h2>

                <p class="text-gray-700 text-sm leading-relaxed mb-6">
                    Unwind after a round or gather with friends over wood-fired steaks,
                    slow-cooked ribs, and vibrant Mediterranean plates. Every detail
                    is crafted for relaxed, premium moments.
                </p>

                <!-- Feature grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="bg-[#f3f2b2] p-4 rounded-2xl flex items-start gap-3">
                        <span class="text-xl">•</span>
                        <span class="text-gray-900 text-sm">
                            Prime steaks & fall-off-the-bone ribs
                        </span>
                    </div>

                    <div class="bg-[#f3f2b2] p-4 rounded-2xl flex items-start gap-3">
                        <span class="text-xl">•</span>
                        <span class="text-gray-900 text-sm">
                            Fresh Mediterranean salads, seafood & mezze
                        </span>
                    </div>

                    <div class="bg-[#f3f2b2] p-4 rounded-2xl flex items-start gap-3">
                        <span class="text-xl">•</span>
                        <span class="text-gray-900 text-sm">
                            Specialty coffee & desserts all day
                        </span>
                    </div>

                    <div class="bg-[#f3f2b2] p-4 rounded-2xl flex items-start gap-3">
                        <span class="text-xl">•</span>
                        <span class="text-gray-900 text-sm">
                            Terrace seating overlooking the golf course
                        </span>
                    </div>

                </div>
            </div>

            <!-- Right schedule box -->
            <div data-animate class="flex-1 opacity-0 translate-y-4 transition-all duration-700">
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

    <section x-data="{ show: false }" x-init="setTimeout(() => show = true, 150)" class="bg-[#FDFDFA] mt-20 p-8 rounded-xl shadow-lg">
        <!-- Top Heading -->
        <h4 class="text-sm tracking-[0.2em] text-gray-700 uppercase mb-4">
            Signature Dishes
        </h4>
        <div class="flex flex-col md:flex-row justify-between items-end mb-6">
            <div x-show="show" x-transition.opacity.duration.700ms class="w-[60%] mb-4 md:mb-0">
                <h2 class="text-xl md:text-4xl font-serif text-gray-900 leading-tight">
                    Fire, smoke & bright Mediterranean flavors.
                </h2>
            </div>

            <div x-show="show" x-transition.opacity.duration.700ms class="w-[55%] text-right">
                <p class="text-gray-700 text-xs text-start leading-relaxed">
                    A deliberately short menu so every steak is rested properly, every
                    rib is glazed twice, and every coffee is pulled to perfection.
                </p>
            </div>
        </div>

        <!-- Cards -->
        <div x-show="show" x-transition.duration.700ms class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="relative">
                    <img src="/menu/menu-1.jpg"
                        class="w-full h-72 object-cover hover:scale-105 transition-transform duration-500"
                        alt="Charcoal-Grilled Ribeye">
                    <span
                        class="absolute top-4 left-4 bg-[#0b132b] text-[#f3f2b2] px-4 py-1 text-xs tracking-widest rounded-xl uppercase">
                        Chef's Favorite
                    </span>
                </div>

                <div class="p-6 space-y-3 bg-white relative">
                    <div class="flex justify-between items-center">
                        <h3 class="font-medium text-gray-900">Charcoal-Grilled Ribeye</h3>
                        <span class="text-gray-700">$38</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        350g prime ribeye with rosemary, roasted garlic and sea salt.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="relative">
                    <img src="/menu/menu-1.jpg"
                        class="w-full h-72 object-cover hover:scale-105 transition-transform duration-500"
                        alt="Mediterranean Mixed Grill">
                    <span
                        class="absolute top-4 left-4 bg-[#0b132b] text-[#f3f2b2] px-4 py-1 text-xs tracking-widest rounded-xl uppercase">
                        For Sharing
                    </span>
                </div>

                <div class="p-6 space-y-3 relative bg-white">
                    <div class="flex justify-between items-center">
                        <h3 class="font-medium text-gray-900">Mediterranean Mixed Grill</h3>
                        <span class="text-gray-700">$42</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Lamb, chicken, and beef skewers over saffron rice with grilled vegetables.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="relative">
                    <img src="/menu/menu-1.jpg"
                        class="w-full h-72 object-cover hover:scale-105 transition-transform duration-500"
                        alt="Falafel & Hummus Bowl">
                    <span
                        class="absolute top-4 left-4 bg-[#0b132b] text-[#f3f2b2] px-4 py-1 text-xs tracking-widest rounded-xl uppercase">
                        Mediterranean Classic
                    </span>
                </div>

                <div class="p-6 space-y-3 bg-white relative">
                    <div class="flex justify-between items-center">
                        <h3 class="font-medium text-gray-900">Falafel & Hummus Bowl</h3>
                        <span class="text-gray-700">$21</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Crispy falafel, creamy hummus, pickled vegetables, and warm pita.
                    </p>
                </div>
            </div>

        </div>

    </section>

    <livewire:menu.restaurant-menu />
    <livewire:gallery.restaurant-gallery />

    <script>
        // Reveal elements with [data-animate] on scroll
        (function() {
            const els = document.querySelectorAll('[data-animate]');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-4');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '0px 0px -10% 0px',
                threshold: 0.15
            });
            els.forEach(el => observer.observe(el));
        })();
    </script>
</div>
