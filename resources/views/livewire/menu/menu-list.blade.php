<div class="bg-black text-white min-h-screen py-32">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <!-- Category Tabs -->
        <div class="flex justify-center mb-16">
            <div class="inline-flex bg-zinc-900 rounded-full p-2 gap-2">
                @foreach ($categories as $category)
                    <button wire:click="setActiveCategory('{{ $category['slug'] }}')" wire:loading.attr="disabled" wire:target="setActiveCategory"
                        class="px-8 py-3 rounded-full text-sm font-medium uppercase tracking-wider transition-all duration-300
                            {{ $activeCategory === $category['slug'] ? 'bg-[#FFDE68] text-black' : 'text-white hover:text-[#FFDE68]' }}">
                        {{ $category['name'] }}
                    </button>
                @endforeach
            </div>
        </div>

        <!-- Category Title -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-semibold font-serif uppercase tracking-wider transition-opacity duration-500 ease-out opacity-100" wire:loading.class="opacity-0" wire:target="setActiveCategory">
                {{ $activeCategoryName }}
            </h2>
        </div>

        <!-- Menu Items Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 transition-opacity duration-500 ease-out opacity-100" wire:loading.class="opacity-0" wire:target="setActiveCategory">
            @foreach ($menuItems as $item)
                <livewire:card.dish-card :image="$item['image']" :title="$item['title']" :description="$item['description']" :price="$item['price']"
                    :key="$item['id']" />
            @endforeach
        </div>

        <div class="text-center mt-16">
            <a href="https://linktr.ee/hiland1280" target="_blank" class="text-sm border py-4 px-6 rounded-4xl border-white font-semibold font-sans-serif uppercase tracking-wider hover:bg-[#FFDE68] hover:border-[#FFDE68] hover:text-black transition-all duration-300">
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
