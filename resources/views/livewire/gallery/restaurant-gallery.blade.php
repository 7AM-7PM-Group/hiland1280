<section id="gallery" class="bg-[#FDFDFA] mt-20 p-8 rounded-xl shadow-lg">

    {{-- HEADER --}}
    <!-- Added wire:ignore to prevent Livewire from re-rendering/breaking the header animation state -->
    <div wire:ignore class="mb-8">
        <h4 class="text-sm tracking-[0.2em] text-gray-700 uppercase mb-4">
            Gallery
        </h4>
        <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)"
            class="flex flex-col md:flex-row justify-between items-end mb-6">
            <div class="w-full md:w-[60%] mb-4 md:mb-0 overflow-hidden">
                <h2 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="text-xl md:text-4xl font-serif text-gray-900 leading-tight transition-all duration-700 ease-out">
                    Greens, fire, and warm evenings.
                </h2>
            </div>

            <div class="w-full md:w-[55%] text-right overflow-hidden">
                <p :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="text-gray-700 text-xs text-start md:text-right leading-relaxed transition-all duration-700 delay-200 ease-out">
                    A glimpse of the terrace, plates from the grill, and the calm that settles over the course as the
                    sun dips.
                </p>
            </div>
        </div>
    </div>

    {{-- GALLERY GRID --}}
    <div id="gallery-grid" class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- 1. LEFT BIG IMAGE --}}
        <div
            class="gallery-item col-span-1 md:col-span-2 relative h-[300px] md:h-[460px] group overflow-hidden rounded-xl opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <img src="/gallery/gallery-4.jpeg"
                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">

            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-80"></div>

            <div class="absolute bottom-6 left-6 text-sm text-white font-medium tracking-wide">
                Terrace overlooking the greens
            </div>
            <div class="absolute bottom-6 right-6">
                <span
                    class="px-3 py-1 bg-white/20 backdrop-blur-md text-white text-[10px] font-bold rounded-full tracking-widest uppercase border border-white/10">
                    Space
                </span>
            </div>
        </div>

        {{-- 2. RIGHT TALL IMAGE (Span 1) --}}
        <div
            class="gallery-item relative h-[300px] md:h-[460px] group overflow-hidden rounded-xl opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <img src="/gallery/gallery-1.jpg"
                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">

            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-80"></div>

            <div class="absolute bottom-6 left-6 text-sm text-white font-medium tracking-wide">
                Lunch Dish Perfection
            </div>
            <div class="absolute bottom-6 right-6">
                <span
                    class="px-3 py-1 bg-white/20 backdrop-blur-md text-white text-[10px] font-bold rounded-full tracking-widest uppercase border border-white/10">
                    Dish
                </span>
            </div>
        </div>

        {{-- 3. BOTTOM LEFT SMALL IMAGE (Span 1) --}}
        <div
            class="gallery-item relative h-[240px] group overflow-hidden rounded-2xl opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <img src="/gallery/gallery-5.jpg"
                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">

            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-80"></div>

            <div class="absolute bottom-6 left-6 text-sm text-white font-medium tracking-wide">
                After-round drinks ritual
            </div>
            <div class="absolute bottom-6 right-6">
                <span
                    class="px-3 py-1 bg-white/20 backdrop-blur-md text-white text-[10px] font-bold rounded-full tracking-widest uppercase border border-white/10">
                    Coffee
                </span>
            </div>
        </div>

        {{-- 4. BOTTOM RIGHT WIDE IMAGE (Span 2) --}}
        <div
            class="gallery-item col-span-1 md:col-span-2 relative h-[240px] group overflow-hidden rounded-2xl opacity-0 translate-y-8 transition-all duration-700 ease-out">
            <img src="/gallery/gallery-3.jpeg"
                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">

            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-80"></div>

            <div class="absolute bottom-6 left-6 text-sm text-white font-medium tracking-wide">
                Warm evening glow
            </div>
            <div class="absolute bottom-6 right-6">
                <span
                    class="px-3 py-1 bg-white/20 backdrop-blur-md text-white text-[10px] font-bold rounded-full tracking-widest uppercase border border-white/10">
                    Ambience
                </span>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Function to setup observer
            const setupGalleryObserver = () => {
                const grid = document.getElementById('gallery-grid');
                if (!grid) return;

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const items = grid.querySelectorAll('.gallery-item');

                            // Loop through items and add the visible class sequentially
                            items.forEach((el, index) => {
                                setTimeout(() => {
                                    el.classList.remove('opacity-0',
                                        'translate-y-8');
                                    el.classList.add('opacity-100',
                                        'translate-y-0');
                                }, index * 400); // 200ms delay between each item
                            });

                            observer.unobserve(grid);
                        }
                    });
                }, {
                    threshold: 0.2
                }); // Trigger when 20% of the grid is visible

                observer.observe(grid);
            };

            // Run immediately
            setupGalleryObserver();

            // Re-run if Livewire navigates (optional robustness)
            if (typeof Livewire !== 'undefined') {
                Livewire.hook('message.processed', (message, component) => {
                    setupGalleryObserver();
                });
            }
        });
    </script>
</section>
