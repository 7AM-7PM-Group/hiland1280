<section class="bg-[#FDFDFA] mt-20 p-8 rounded-xl shadow-lg">

    <!-- Header -->
    <div wire:ignore x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)" class="mb-6">
        <h4 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'" class="transition-all duration-700 text-sm tracking-[0.2em] text-gray-700 uppercase mb-4">
            Menu
        </h4>
        <div class="flex flex-col md:flex-row justify-between items-end">
            <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'" class="transition-all duration-700 delay-100 w-full md:w-[60%] mb-4 md:mb-0">
                <h2 class="text-xl md:text-4xl font-serif text-gray-900 leading-tight">
                    A focused menu for long conversations.
                </h2>
            </div>
            <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'" class="transition-all duration-700 delay-200 w-full md:w-[55%] md:text-right">
                <p class="text-gray-700 text-xs text-start md:text-right leading-relaxed">
                    Browse a preview of our menu. Seasonal specials for the course, the clubhouse, and the late-night crowd are shared daily on-site.
                </p>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="flex flex-wrap md:flex-nowrap bg-gray-200 rounded-3xl p-1 w-full text-xs mb-10 overflow-hidden">

        <button wire:click="setTab('grill')"
            class="px-8 py-2 rounded-full font-bold tracking-widest transition-all duration-300
                {{ $activeTab === 'grill' ? 'bg-[#0b132b] text-[#f3f2b2] shadow-md' : 'text-gray-600 hover:bg-gray-300' }}">
            FROM THE GRILL
        </button>

        <button wire:click="setTab('plates')"
            class="px-8 py-2 rounded-full font-bold tracking-widest transition-all duration-300
                {{ $activeTab === 'plates' ? 'bg-[#0b132b] text-[#f3f2b2] shadow-md' : 'text-gray-600 hover:bg-gray-300' }}">
            MEDITERRANEAN PLATES
        </button>

        <button wire:click="setTab('coffee')"
            class="px-8 py-2 rounded-full font-bold tracking-widest transition-all duration-300
                {{ $activeTab === 'coffee' ? 'bg-[#0b132b] text-[#f3f2b2] shadow-md' : 'text-gray-600 hover:bg-gray-300' }}">
            COFFEE & DESSERTS
        </button>
    </div>

    <!-- Menu Items Content -->
    <div wire:key="{{ $activeTab }}"
         x-data="{ show: false }"
         x-init="setTimeout(() => show = true, 50)"
         class="min-h-[200px]"> <!-- min-h prevents layout jump -->

        <div class="grid md:grid-cols-2 gap-4">
            @foreach ($menu[$activeTab] as $index => $item)
                <!-- Using Alpine classes for stagger effect based on index -->
                <div :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                     style="transition-delay: {{ $index * 100 }}ms"
                     class="transition-all duration-500 bg-white shadow-sm border border-gray-100 rounded-2xl px-4 py-2 flex justify-between items-center group hover:border-gray-300">

                    <span class="text-gray-900 font-serif text-md group-hover:text-[#0b132b] transition-colors">
                        {{ $item['name'] }}
                    </span>
                    <span class="text-[#0b132b] font-bold">
                        ${{ $item['price'] }}
                    </span>
                </div>
            @endforeach
        </div>

        <!-- Loading State (Optional polish) -->
        <div wire:loading class="absolute inset-0 bg-white/50 backdrop-blur-sm flex items-center justify-center z-10">
            <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-[#0b132b]"></div>
        </div>
    </div>

</section>
