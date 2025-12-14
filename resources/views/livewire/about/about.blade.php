<div class="bg-black text-white py-20 md:py-32">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="flex gap-12 lg:gap-16 items-center justify-between flex-col lg:flex-row">
            <!-- Left Content -->
            <div>
                <!-- Heading -->
                <h2 class="text-2xl md:text-5xl font-semibold mb-6 leading-tight">
                    Perfect
                    <span class="text-[#FFDE68]">Blend of Taste</span>
                    <span class="block">& Premium</span>
                </h2>

                <!-- Description -->
                <p class="text-gray-300 text-lg mb-12 font-light leading-relaxed">
                    Set within the greens of Greenside Golf Club, our Restaurant pairs prime steaks and slow-cooked ribs
                </p>

                <!-- Feature Cards -->
                <div class="grid grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="bg-zinc-900 p-6 rounded-lg hover:bg-zinc-800 transition-colors duration-300">
                        <!-- Icon -->
                        <div class="mb-4">
                            <svg class="w-12 h-12 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                            </svg>
                        </div>

                        <!-- Title -->
                        <h3 class="text-xl font-medium mb-3">Premium Ingredients</h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Set within the greens of Greenside Golf Club
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-zinc-900 p-6 rounded-lg hover:bg-zinc-800 transition-colors duration-300">
                        <!-- Icon -->
                        <div class="mb-4">
                            <svg class="w-12 h-12 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                            </svg>
                        </div>

                        <!-- Title -->
                        <h3 class="text-xl font-medium mb-3">Premium Ingredients</h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Set within the greens of Greenside Golf Club
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-zinc-900 p-6 rounded-lg hover:bg-zinc-800 transition-colors duration-300">
                        <!-- Icon -->
                        <div class="mb-4">
                            <svg class="w-12 h-12 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" />
                            </svg>
                        </div>

                        <!-- Title -->
                        <h3 class="text-xl font-medium mb-3">Premium Ingredients</h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Set within the greens of Greenside Golf Club
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Image Slider -->
            <div class="relative w-1/2 max-w-md lg:max-w-full" x-data="{
                currentSlide: 0,
                slides: [
                    '{{ asset('about/about.jpg') }}',
                    '{{ asset('about/about-2.jpg') }}',
                    {{-- '{{ asset('about/about3.jpg') }}' --}}
                ],
                autoplay: null,
                init() {
                    this.startAutoplay();
                },
                startAutoplay() {
                    this.autoplay = setInterval(() => {
                        this.nextSlide();
                    }, 4000);
                },
                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                },
                prevSlide() {
                    this.currentSlide = this.currentSlide === 0 ? this.slides.length - 1 : this.currentSlide - 1;
                },
                goToSlide(index) {
                    this.currentSlide = index;
                }
            }"
                @mouseenter="clearInterval(autoplay)" @mouseleave="startAutoplay()">
                <div class="relative rounded-lg overflow-hidden shadow-2xl">
                    <!-- Image Container -->
                    <div class="relative">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div x-show="currentSlide === index" x-transition:enter="transition ease-out duration-500"
                                x-transition:enter-start="opacity-0 transform translate-x-full"
                                x-transition:enter-end="opacity-100 transform translate-x-0"
                                x-transition:leave="transition ease-in duration-500"
                                x-transition:leave-start="opacity-100 transform translate-x-0"
                                x-transition:leave-end="opacity-0 transform -translate-x-full" class="absolute inset-0">
                                <img :src="slide" alt="Premium dish"
                                    class="w-full object-cover ml-auto block">
                            </div>
                        </template>
                        <!-- Hidden image to maintain aspect ratio -->
                        <img :src="slides[0]" alt="" class="w-full object-cover ml-auto block invisible">
                    </div>

                    <!-- Optional Overlay Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent pointer-events-none">
                    </div>

                    <!-- Navigation Arrows -->
                    <button @click="prevSlide()"
                        class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button @click="nextSlide()"
                        class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <!-- Slide Indicators -->
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="goToSlide(index)"
                                :class="currentSlide === index ? 'bg-yellow-400' : 'bg-white/50'"
                                class="w-2 h-2 rounded-full transition-all duration-300 hover:bg-yellow-400">
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
