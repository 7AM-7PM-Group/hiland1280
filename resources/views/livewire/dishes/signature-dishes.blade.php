<div class="bg-black text-white py-20">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-2xl md:text-5xl font-serif uppercase font-semibold mb-6">
                Our <span class="text-[#FFDE68]">Signature</span> Dishes
            </h2>
            {{-- <p class="text-gray-300 text-md max-w-4xl mx-auto">
                A deliberately short menu so every steak is rested properly, every rib is glazed twice, and every coffee
                is pulled to perfection.
            </p> --}}
        </div>

        <!-- Dishes Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @foreach ($dishes as $dish)
                <livewire:card.dish-card :image="$dish['image']" :title="$dish['title']" :description="$dish['description']"
                    :key="$dish['id']" />
            @endforeach
        </div>

        <!-- View All Button -->
        <div class="flex justify-end">
            <a href="{{ route('menu.restaurant-menu') }}"
                class="inline-flex items-center gap-3 text-white hover:text-[#FFDE68] transition-colors duration-300 text-lg font-medium group">
                View More
                <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</div>
