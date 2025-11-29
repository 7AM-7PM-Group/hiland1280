<section class="bg-[#FDFDFA] mt-20 p-8 rounded-xl shadow-lg">

    {{-- HEADER --}}
    <!-- Added wire:ignore to prevent Livewire from re-rendering animations unexpectedly -->
    <div wire:ignore class="mb-10">
        <h4 class="text-sm tracking-[0.2em] text-gray-700 uppercase mb-4">
            Guests
        </h4>

        <!-- Replaced complex watcher with simple load animation -->
        <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)"
            class="flex flex-col md:flex-row justify-between items-end mb-6">
            <div class="w-full md:w-[60%] mb-4 md:mb-0 overflow-hidden">
                <h2 :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="text-xl md:text-4xl font-serif text-gray-900 leading-tight transition-all duration-700 ease-out">
                    Evenings our guests come back for.
                </h2>
            </div>

            <div class="w-full md:w-[55%] text-right overflow-hidden">
                <p :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="text-gray-700 text-xs text-start md:text-right leading-relaxed transition-all duration-700 delay-200 ease-out">
                    From club members to weekend visitors, Stunning Mediterranean Restaurant is where rounds end,
                    anniversaries begin, and coffee lingers.
                </p>
            </div>
        </div>
    </div>

    <!-- CARDS GRID -->
    <!-- Added ID for precise targeting -->
    <div id="guests-grid" class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">

        <!-- Card 1 -->
        <!-- Added initial hidden state: opacity-0 translate-y-8 -->
        <div
            class="guest-card opacity-0 translate-y-8 transition-all duration-700 ease-out
                    bg-white border border-gray-200 rounded-lg p-8 hover:shadow-lg hover:-translate-y-1 cursor-default">
            <blockquote class="text-navy-900 text-lg font-sans leading-relaxed mb-8">
                “The perfect end to 18 holes – steaks are incredible and the terrace sunsets are unbeatable.”
            </blockquote>
            <div>
                <div class="font-bold text-navy-900 text-sm">James W.</div>
                <div class="text-gray-500 text-xs mt-1 font-medium">Club Member</div>
            </div>
        </div>

        <!-- Card 2 -->
        <div
            class="guest-card opacity-0 translate-y-8 transition-all duration-700 ease-out
                    bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-lg hover:-translate-y-1 cursor-default">
            <blockquote class="text-navy-900 text-lg font-sans leading-relaxed mb-8">
                “Finally, a place that treats coffee as seriously as the food. Relaxed, elegant, never stuffy.”
            </blockquote>
            <div>
                <div class="font-bold text-navy-900 text-sm">Sofia L.</div>
                <div class="text-gray-500 text-xs mt-1 font-medium">Weekend Guest</div>
            </div>
        </div>

        <!-- Card 3 -->
        <div
            class="guest-card opacity-0 translate-y-8 transition-all duration-700 ease-out
                    bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-lg hover:-translate-y-1 cursor-default">
            <blockquote class="text-navy-900 text-lg font-sans leading-relaxed mb-8">
                “Service was flawless, the Mediterranean sharing plates were a hit, and the view sealed the night.”
            </blockquote>
            <div>
                <div class="font-bold text-navy-900 text-sm">Marcus & Elena</div>
                <div class="text-gray-500 text-xs mt-1 font-medium">Anniversary Dinner</div>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const setupGuestObserver = () => {
                const grid = document.getElementById('guests-grid');
                if (!grid) return;

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const cards = grid.querySelectorAll('.guest-card');

                            // Sequential stagger loop
                            cards.forEach((el, index) => {
                                setTimeout(() => {
                                    el.classList.remove('opacity-0',
                                        'translate-y-8');
                                    el.classList.add('opacity-100',
                                        'translate-y-0');
                                }, index * 300); // 200ms delay between cards
                            });

                            observer.unobserve(grid);
                        }
                    });
                }, {
                    threshold: 0.2
                });

                observer.observe(grid);
            };

            setupGuestObserver();

            // Re-run hook for Livewire navigations
            if (typeof Livewire !== 'undefined') {
                Livewire.hook('message.processed', (message, component) => {
                    setupGuestObserver();
                });
            }
        });
    </script>
</section>
