<div class="text-white py-20 md:pt-32">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="flex gap-12 lg:gap-16 items-center justify-between flex-col lg:flex-row">
            <!-- Left Content -->
            <div class="w-2/3">
                <!-- Heading -->
                <h2 class="text-2xl md:text-5xl uppercase font-serif font-semibold mb-6 leading-tight">
                    A BALANCE OF TASTE
                    <span class="text-[#FFDE68]">AND REFINEMENT</span>
                </h2>

                <!-- Description -->
                {{-- <p class="text-gray-300 text-lg mb-12 font-light leading-relaxed">
                    Thoughtfully crafted cuisine and cocktails, defined by precision, restraint, and atmosphere,
                    offering a composed experience designed for discerning evening guests.
                </p> --}}

                <!-- Feature Cards -->
                <div class="grid grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="bg-zinc-900 p-6 rounded-lg hover:bg-zinc-800 transition-colors duration-300">
                        <!-- Icon -->
                        <div class="mb-4">
                            <img src="{{ asset('icon/warranty.png') }}" alt="warranty icon" class="w-12 h-12">
                        </div>

                        <!-- Title -->
                        <h3 class="text-lg font-medium mb-3">Premium Standard</h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Uncompromising quality and restraint define every plate and pour.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-zinc-900 p-6 rounded-lg hover:bg-zinc-800 transition-colors duration-300">
                        <!-- Icon -->
                        <div class="mb-4">
                            <img src="{{ asset('icon/interlocking.png') }}" alt="interlocking icon" class="w-12 h-12">
                        </div>

                        <!-- Title -->
                        <h3 class="text-lg font-medium mb-3">Signature Craft</h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Disciplined technique and select ingredients, consistently elevate dining experience.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-zinc-900 p-6 rounded-lg hover:bg-zinc-800 transition-colors duration-300">
                        <!-- Icon -->
                        <div class="mb-4">
                            <img src="{{ asset('icon/lotus-flower.png') }}" alt="interlocking icon" class="w-12 h-12">
                        </div>

                        <!-- Title -->
                        <h3 class="text-lg font-medium mb-3">After-Hours Composure</h3>

                        <!-- Description -->
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Composed plates and measured pours define an unhurried evening.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Image Slider -->
            <div class="relative w-1/3 max-w-md lg:max-w-full" x-data="{
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
                    }, 3000);
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
                    {{-- <button @click="prevSlide()"
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
                    </button> --}}

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
