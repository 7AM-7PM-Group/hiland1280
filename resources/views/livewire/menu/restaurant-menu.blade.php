<section id="menu" class="bg-[#FDFDFA] mt-20 p-8 rounded-xl shadow-lg">

    <!-- Header -->
    <div wire:ignore x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 100)" class="mb-6">
        <h4 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
            class="transition-all duration-700 text-sm tracking-[0.2em] text-gray-700 uppercase mb-4">
            Menu
        </h4>
        <div class="flex flex-col md:flex-row justify-between items-end">
            <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                class="transition-all duration-700 delay-100 w-full md:w-[60%] mb-4 md:mb-0">
                <h2 class="text-xl md:text-4xl font-serif text-gray-900 leading-tight">
                    A focused menu for long conversations.
                </h2>
            </div>
            <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                class="transition-all duration-700 delay-200 w-full md:w-[55%] md:text-right">
                <p class="text-gray-700 text-xs text-start md:text-right leading-relaxed">
                    Browse a preview of our menu. Seasonal specials for the course, the clubhouse, and the late-night
                    crowd are shared daily on-site.
                </p>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="flex flex-wrap md:flex-nowrap bg-gray-200 rounded-3xl p-1 w-full text-xs mb-10 overflow-hidden">

        <button wire:click="setTab('breakfast')"
            class="px-8 py-2 rounded-full font-bold tracking-widest transition-all duration-300
                {{ $activeTab === 'breakfast' ? 'bg-[#0b132b] text-[#f3f2b2] shadow-md' : 'text-gray-600 hover:bg-gray-300' }}">
            BREAKFAST
        </button>

        <button wire:click="setTab('starter')"
            class="px-8 py-2 rounded-full font-bold tracking-widest transition-all duration-300
                {{ $activeTab === 'starter' ? 'bg-[#0b132b] text-[#f3f2b2] shadow-md' : 'text-gray-600 hover:bg-gray-300' }}">
            STARTER
        </button>

        <button wire:click="setTab('soups')"
            class="px-8 py-2 rounded-full font-bold tracking-widest transition-all duration-300
                {{ $activeTab === 'soups' ? 'bg-[#0b132b] text-[#f3f2b2] shadow-md' : 'text-gray-600 hover:bg-gray-300' }}">
            SOUPS
        </button>

        <button wire:click="setTab('main_course')"
            class="px-8 py-2 rounded-full font-bold tracking-widest transition-all duration-300
                {{ $activeTab === 'main_course' ? 'bg-[#0b132b] text-[#f3f2b2] shadow-md' : 'text-gray-600 hover:bg-gray-300' }}">
            MAIN COURSE
        </button>

        <button wire:click="setTab('dessert')"
            class="px-8 py-2 rounded-full font-bold tracking-widest transition-all duration-300
                {{ $activeTab === 'dessert' ? 'bg-[#0b132b] text-[#f3f2b2] shadow-md' : 'text-gray-600 hover:bg-gray-300' }}">
            DESSERT
        </button>

        <button wire:click="setTab('steaks')"
            class="px-8 py-2 rounded-full font-bold tracking-widest transition-all duration-300
                {{ $activeTab === 'steaks' ? 'bg-[#0b132b] text-[#f3f2b2] shadow-md' : 'text-gray-600 hover:bg-gray-300' }}">
            STEAKS
        </button>
    </div>

    <!-- Menu Items Content -->
    <div wire:key="{{ $activeTab }}" x-data="{ show: false }" x-init="setTimeout(() => show = true, 50)" class="min-h-[200px] relative">

        <div class="grid md:grid-cols-2 gap-4">
            @foreach ($menu[$activeTab] as $index => $item)
                <!-- Menu Item Card - Each has its own Alpine scope -->
                <div x-data="{ expanded: false }" :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                    style="transition-delay: {{ $index * 100 }}ms"
                    class="transition-all duration-500 bg-white shadow-sm border rounded-2xl overflow-hidden"
                    :class="expanded ? 'border-[#0b132b] shadow-lg' : 'border-gray-100 hover:border-gray-300'">

                    <!-- Main Item (Clickable) -->
                    <div @click="expanded = !expanded"
                        class="w-full px-4 py-3 flex justify-between items-center group cursor-pointer">
                        <div class="flex-1">
                            <span
                                class="text-gray-900 uppercase text-md group-hover:text-[#0b132b] transition-colors block">
                                {{ $item['name'] }}
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            @if (isset($item['weight_options']) && count($item['weight_options']) > 0)
                                <!-- Show weight range for items with weight options -->
                                <span class="text-[#0b132b] font-bold text-sm">
                                    {{ number_format($item['weight_options'][0]['price'], 0) }}K -
                                    {{ number_format(end($item['weight_options'])['price'], 0) }}K
                                </span>
                            @else
                                <!-- Show single price -->
                                <span class="text-[#0b132b] font-bold">
                                    {{ number_format($item['price'], 0) }}K
                                </span>
                            @endif
                            <!-- Chevron Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 text-gray-400 transition-transform duration-300"
                                :class="expanded ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Expanded Content -->
                    <div class="overflow-hidden transition-all duration-300" x-show="expanded" x-collapse>
                        <div class="px-4 pb-4 pt-2 border-t border-gray-100">
                            <!-- Description -->
                            <p class="text-gray-600 text-xs leading-relaxed mb-3 tracking-wide">
                                {{ $item['description'] }}
                            </p>

                            <!-- Weight Options (if any) -->
                            @if (isset($item['weight_options']) && count($item['weight_options']) > 0)
                                <div class="mb-4 pb-3 border-b border-gray-100">
                                    <p class="text-[10px] font-bold tracking-widest text-gray-500 uppercase mb-2">
                                        Choose Weight
                                    </p>
                                    <div class="flex gap-2">
                                        @foreach ($item['weight_options'] as $weight)
                                            <div
                                                class="flex-1 bg-[#0b132b]/5 border border-[#0b132b]/20 rounded-lg px-3 py-2 hover:bg-[#0b132b]/10 hover:border-[#0b132b] transition-all cursor-pointer">
                                                <div class="text-center">
                                                    <span
                                                        class="block text-xs font-bold text-gray-900">{{ $weight['weight'] }}</span>
                                                    <span
                                                        class="block text-sm font-bold text-[#0b132b] mt-0.5">{{ number_format($weight['price'], 0) }}K</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Add-ons (if any) -->
                            @if (count($item['addons']) > 0)
                                <div class="mt-4 pt-3 border-t border-gray-100">
                                    <p class="text-[10px] font-bold tracking-widest text-gray-500 uppercase mb-2">
                                        Add-ons
                                    </p>
                                    <div class="space-y-1">
                                        @foreach ($item['addons'] as $addon)
                                            <div class="flex justify-between items-center text-xs">
                                                <span class="text-gray-700">{{ $addon['name'] }}</span>
                                                <span
                                                    class="text-gray-900 font-semibold">+{{ $addon['price'] }}K</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Extra Dishes Section -->
        @if (isset($extraDishes[$activeTab]) && count($extraDishes[$activeTab]) > 0)
            <div class="mt-12 pt-8 border-t-2 border-gray-200" :class="show ? 'opacity-100' : 'opacity-0'"
                style="transition: opacity 500ms ease-out 400ms;">

                <div class="mb-6">
                    <h3 class="text-lg font-serif text-gray-900 mb-2">Extra Dishes</h3>
                    <p class="text-[10px] tracking-widest text-gray-500 uppercase">Enhance your meal with these
                        additions</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                    @foreach ($extraDishes[$activeTab] as $index => $extra)
                        <div :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                            style="transition-delay: {{ $index * 50 + 500 }}ms"
                            class="transition-all duration-500 bg-white border border-gray-200 rounded-xl px-4 py-3 hover:border-[#0b132b] hover:shadow-md group">
                            <div class="flex flex-col gap-1">
                                <span
                                    class="text-xs font-bold tracking-wider text-gray-900 uppercase group-hover:text-[#0b132b] transition-colors">
                                    {{ $extra['name'] }}
                                </span>
                                <span class="text-sm text-[#0b132b]">
                                    {{ $extra['price'] }}K
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Extra Sauces Section -->
        @if (isset($extraSauces[$activeTab]) && count($extraSauces[$activeTab]) > 0)
            <div class="mt-12 pt-8 border-t-2 border-gray-200" :class="show ? 'opacity-100' : 'opacity-0'"
                style="transition: opacity 500ms ease-out 400ms;">

                <div class="mb-6">
                    <h3 class="text-lg font-serif text-gray-900 mb-2">Extra Sauces</h3>
                    <p class="text-[10px] tracking-widest text-gray-500 uppercase">Enhance your meal with these
                        Sauces</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                    @foreach ($extraSauces[$activeTab] as $index => $extra)
                        <div :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
                            style="transition-delay: {{ $index * 50 + 500 }}ms"
                            class="transition-all duration-500 bg-white border border-gray-200 rounded-xl px-4 py-3 hover:border-[#0b132b] hover:shadow-md group">
                            <div class="flex flex-col gap-1">
                                <span
                                    class="text-xs font-bold tracking-wider text-gray-900 uppercase group-hover:text-[#0b132b] transition-colors">
                                    {{ $extra['name'] }}
                                </span>
                                <span class="text-sm text-[#0b132b]">
                                    {{ $extra['price'] }}K
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Loading State -->
        <div wire:loading
            class="absolute inset-0 bg-white/50 backdrop-blur-sm flex items-center justify-center z-10 rounded-2xl">
            <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-[#0b132b]"></div>
        </div>
    </div>

</section>
