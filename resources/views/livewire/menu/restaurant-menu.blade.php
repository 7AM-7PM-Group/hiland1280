<section class="bg-[#FDFDFA] mt-20 p-8 rounded-xl shadow-lg">

    <!-- Header -->
    <h4 class="text-sm tracking-[0.2em] text-gray-700 uppercase mb-4">
        Signature Dishes
    </h4>
    <div x-data="{ show: true }" x-init="$wire.$watch('activeTab', () => { show = false;
        setTimeout(() => show = true, 150) })" class="flex flex-col md:flex-row justify-between items-end mb-6">
        <div x-show="show" x-transition.opacity.duration.700ms class="w-[60%] mb-4 md:mb-0">
            <h2 class="text-xl md:text-4xl font-serif text-gray-900 leading-tight">
                A focused menu for long conversations.
            </h2>
        </div>

        <div x-show="show" x-transition.opacity.duration.700ms class="w-[55%] text-right">
            <p class="text-gray-700 text-xs text-start leading-relaxed">
                Browse a preview of our menu. Seasonal specials for the course, the clubhouse, and the late-night crowd
                are shared daily on-site.
            </p>
        </div>
    </div>

    <!-- Tabs -->
    <div class="flex bg-gray-200 rounded-full p-1 w-full text-xs mb-10">

        <!-- Grill -->
        <button wire:click="setTab('grill')"
            class="px-4 py-2 rounded-full font-semibold tracking-widest
                {{ $activeTab === 'grill' ? 'bg-[#0b132b] text-[#f3f2b2]' : 'text-gray-600' }}">
            FROM THE GRILL
        </button>

        <!-- Plates -->
        <button wire:click="setTab('plates')"
            class="px-6 py-2 rounded-full font-semibold tracking-widest
                {{ $activeTab === 'plates' ? 'bg-[#0b132b] text-[#f3f2b2]' : 'text-gray-600' }}">
            MEDITERRANEAN PLATES
        </button>

        <!-- Coffee -->
        <button wire:click="setTab('coffee')"
            class="px-6 py-2 rounded-full font-semibold tracking-widest
                {{ $activeTab === 'coffee' ? 'bg-[#0b132b] text-[#f3f2b2]' : 'text-gray-600' }}">
            COFFEE & DESSERTS
        </button>

    </div>

    <!-- Menu Items -->
    <div x-data="{ show: true }" x-init="$wire.$watch('activeTab', () => { show = false;
        setTimeout(() => show = true, 150) })">
        <div x-show="show" x-transition.opacity.scale.origin.top.duration.250ms>

            <div class="grid md:grid-cols-2 gap-4" key="{{ $activeTab }}">
                @foreach ($menu[$activeTab] as $item)
                    <div
                        class="bg-white shadow-md border border-gray-100 rounded-2xl px-4 py-2 flex justify-between items-center text-sm">
                        <span class="text-gray-900">
                            {{ $item['name'] }}
                        </span>

                        <span class="text-gray-700 font-medium">
                            ${{ $item['price'] }}
                        </span>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

    <script>
        // Reveal [data-animate] elements on scroll; re-init after Livewire DOM updates
        (function() {
            let observer;

            function initAnimations() {
                if (observer) observer.disconnect();
                observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('opacity-0', 'translate-y-4');
                            entry.target.classList.add('opacity-100', 'translate-y-0');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1,
                    rootMargin: '0px 0px -10% 0px'
                });
                document.querySelectorAll('[data-animate]').forEach(el => observer.observe(el));
            }
            // Initial run
            initAnimations();
            // Re-run after Livewire updates (e.g., tab changes)
            if (window.Livewire?.hook) {
                window.Livewire.hook('message.processed', () => {
                    initAnimations();
                });
            }
        })();
    </script>
</section>
