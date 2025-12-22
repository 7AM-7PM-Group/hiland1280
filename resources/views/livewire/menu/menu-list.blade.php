<div class="bg-black text-white min-h-screen py-24 md:py-32">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <!-- Category Tabs -->
        <div class="flex justify-center mb-6">
            <div class="flex lg:inline-flex overflow-x-auto whitespace-nowrap bg-zinc-900 rounded-full p-2 gap-2 -mx-4 px-4 md:mx-0 md:px-2">
                @foreach ($categories as $category)
                    <button wire:click="setActiveCategory('{{ $category['slug'] }}')" wire:loading.attr="disabled"
                        wire:target="setActiveCategory"
                        class="px-5 py-2 md:px-8 md:py-3 rounded-full text-xs sm:text-sm font-medium uppercase tracking-wider shrink-0 transition-all duration-300
                            {{ $activeCategory === $category['slug'] ? 'bg-[#FFDE68] text-black' : 'text-white hover:text-[#FFDE68]' }}">
                        {{ $category['name'] }}
                    </button>
                @endforeach
            </div>
        </div>

        <div class="text-center mb-12">
            <p class="text-gray-300 font-sans-serif text-sm tracking-wider uppercase transition-opacity duration-500 ease-out opacity-100">
                These are some of our delicious offerings
            </p>
        </div>

        <!-- Category Title -->
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-semibold font-sans uppercase tracking-wider transition-opacity duration-500 ease-out opacity-100"
                wire:loading.class="opacity-50" wire:target="setActiveCategory">
                {{ $activeCategoryName }}
            </h2>
        </div>

        <!-- Check if Steaks Category -->
        @if ($activeCategory === 'steaks')
            <!-- Steak List Layout (Bar Style) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 transition-opacity duration-500 ease-out opacity-100"
                wire:loading.class="opacity-50" wire:target="setActiveCategory">
                @foreach ($menuItems as $item)
                    <livewire:card.steak-list-item :title="$item['title']" :price="$item['price']" :key="'steak-' . $item['id']" />
                @endforeach
            </div>
        @else
            <!-- Regular Menu Items Grid (Card Style) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 transition-opacity duration-500 ease-out opacity-100"
                wire:loading.class="opacity-50" wire:target="setActiveCategory">
                @foreach ($menuItems as $item)
                    <livewire:card.dish-card :image="$item['image']" :title="$item['title']" :description="$item['description']" :price="$item['price']"
                        :key="$item['id']" />
                @endforeach
            </div>
        @endif

        <div class="text-center mt-16">
            <a href="https://linktr.ee/hiland1280" target="_blank"
                class="text-sm border py-4 px-6 rounded-full border-white font-semibold uppercase tracking-wider hover:bg-[#FFDE68] hover:border-[#FFDE68] hover:text-black transition-all duration-300">
                View Full Menu
            </a>
        </div>

        <!-- Empty State -->
        @if (count($menuItems) === 0)
            <div class="text-center py-16">
                <p class="text-gray-400 text-lg">No items available in this category yet.</p>
            </div>
        @endif
    </div>
</div>
