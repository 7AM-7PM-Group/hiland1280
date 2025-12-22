<div class="bg-black text-white min-h-screen py-32">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <!-- Page Header -->
        {{-- <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-serif uppercase font-semibold mb-6">
                Our <span class="text-[#FFDE68]">Gallery</span>
            </h1>
            <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                Explore the ambiance, cuisine, and scenic views that make Hiland1280 a unique dining destination at
                Greenside Golf Club.
            </p>
        </div> --}}

        <!-- Filter Tabs -->
        <div class="flex justify-center mb-12">
            <div class="inline-flex bg-zinc-900 rounded-full p-2 gap-2 flex-wrap justify-center">
                @foreach ($filters as $filter)
                    <button wire:click="setActiveFilter('{{ $filter['slug'] }}')" wire:loading.attr="disabled" wire:target="setActiveFilter"
                        class="px-6 py-2 rounded-full text-sm font-medium uppercase tracking-wider transition-all duration-300
                            {{ $activeFilter === $filter['slug'] ? 'bg-[#FFDE68] text-black' : 'text-white hover:text-[#FFDE68]' }}">
                        {{ $filter['name'] }}
                    </button>
                @endforeach
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 transition-opacity duration-500 ease-out opacity-100" wire:loading.class="opacity-0" wire:target="setActiveFilter" x-data="{
            lightboxOpen: false,
            currentImage: '',
            currentTitle: '',
            openLightbox(image, title) {
                this.currentImage = image;
                this.currentTitle = title;
                this.lightboxOpen = true;
                document.body.style.overflow = 'hidden';
            },
            closeLightbox() {
                this.lightboxOpen = false;
                document.body.style.overflow = 'auto';
            }
        }">
            @foreach ($images as $image)
                <div class="group relative overflow-hidden rounded-lg cursor-pointer aspect-square"
                    @click="openLightbox('{{ $image['url'] }}', '{{ $image['title'] }}')">
                    <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white text-xl font-semibold mb-2">{{ $image['title'] }}</h3>
                            @if (!empty($image['category']))
                                <span
                                    class="text-[#FFDE68] text-sm uppercase tracking-wider">{{ $image['category'] }}</span>
                            @endif
                        </div>

                        <!-- View Icon -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <div class="w-16 h-16 bg-[#FFDE68] rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Lightbox -->
            <div x-show="lightboxOpen" x-cloak @keydown.escape.window="closeLightbox()"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black/95 p-4" @click="closeLightbox()">

                <!-- Close Button -->
                <button @click="closeLightbox()"
                    class="absolute top-4 right-4 text-white hover:text-[#FFDE68] transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Image Container -->
                <div @click.stop class="max-w-7xl max-h-[90vh] flex flex-col items-center">
                    <img :src="currentImage" :alt="currentTitle"
                        class="max-w-full max-h-[80vh] object-contain rounded-lg shadow-2xl">
                    <p x-text="currentTitle" class="text-white text-xl font-semibold mt-4"></p>
                </div>
            </div>
        </div>

        <!-- Empty State -->
        @if (count($images) === 0)
            <div class="text-center py-16">
                <p class="text-gray-400 text-lg">No images available in this category yet.</p>
            </div>
        @endif

        <!-- Load More Button (Optional) -->
        @if ($hasMore)
            <div class="flex justify-center mt-12">
                <button wire:click="loadMore"
                    class="px-8 py-4 bg-[#FFDE68] text-black font-medium uppercase tracking-wider text-sm hover:bg-[#ffd84d] transition-colors duration-300 rounded-full">
                    Load More Images
                </button>
            </div>
        @endif
    </div>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</div>
