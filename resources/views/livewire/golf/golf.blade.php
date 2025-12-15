<div class="bg-black text-white py-20 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0"
            style="background-image: repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255, 222, 104, 0.1) 35px, rgba(255, 222, 104, 0.1) 70px);">
        </div>
    </div>

    <div class="container mx-auto px-4 max-w-screen-xl relative z-10">
        <div class="flex gap-12 lg:gap-16 items-center">
            <!-- Left Image with Multiple Images -->
            <div class="w-1/3 space-y-6">
                <!-- Main Large Image -->
                <div class="relative overflow-hidden rounded-lg shadow-2xl group">
                    <img src="{{ asset('golf/golf-view-portrait.png') }}" alt="Golf Course View"
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>

                    <!-- Floating Badge -->
                    <div
                        class="absolute top-6 left-6 bg-[#FFDE68] text-black px-4 py-2 rounded-full text-sm font-semibold">
                        Scenic View
                    </div>
                </div>

                <!-- Small Images Grid -->
                {{-- <div class="grid grid-cols-2 gap-4">
                    <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer">
                        <img src="{{ asset('golf/golf-detail-1.jpg') }}" alt="Golf Detail"
                            class="w-full h-32 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors duration-300">
                        </div>
                    </div>
                    <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer">
                        <img src="{{ asset('golf/golf-detail-2.jpg') }}" alt="Golf Detail"
                            class="w-full h-32 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors duration-300">
                        </div>
                    </div>
                </div> --}}
            </div>

            <!-- Right Content -->
            <div class="w-2/3">
                <!-- Heading -->
                <h2 class="text-4xl md:text-5xl font-semibold font-serif uppercase mb-6 leading-tight">
                    Perfect
                    <span class="text-[#FFDE68]">FAIRWAY VIEWS</span>
                    <span class="block">A COMPOSED SETTING</span>
                </h2>

                <!-- Description -->
                {{-- <p class="text-gray-300 text-md mb-8 leading-relaxed">
                    Overlooking the Greenside Golf Club fairways, the setting offers privacy, restraint, and a refined
                    atmosphere designed for unhurried dining, measured conversation, and evenings defined by calm
                    restraint alone.
                </p> --}}

                <!-- Features List -->
                {{-- <div class="grid grid-cols-2 gap-6 mb-8">
                    <!-- Feature 1 -->
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-[#FFDE68]/10 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-[#FFDE68]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">18-Hole Course</h4>
                            <p class="text-gray-400 text-sm">Championship golf course</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-[#FFDE68]/10 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-[#FFDE68]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Panoramic Views</h4>
                            <p class="text-gray-400 text-sm">Mountain & valley scenery</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-[#FFDE68]/10 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-[#FFDE68]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Premium Dining</h4>
                            <p class="text-gray-400 text-sm">Overlooking the greens</p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="flex items-start gap-3">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-[#FFDE68]/10 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-[#FFDE68]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Natural Beauty</h4>
                            <p class="text-gray-400 text-sm">Lush green landscapes</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Stats Section -->
                {{-- <div class="grid grid-cols-3 gap-6 mb-8 p-6 bg-zinc-900 rounded-lg">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#FFDE68] mb-1">18</div>
                        <div class="text-sm text-gray-400">Holes</div>
                    </div>
                    <div class="text-center border-l border-r border-zinc-700">
                        <div class="text-3xl font-bold text-[#FFDE68] mb-1">6,500</div>
                        <div class="text-sm text-gray-400">Yards</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-[#FFDE68] mb-1">Par 72</div>
                        <div class="text-sm text-gray-400">Course</div>
                    </div>
                </div> --}}

                <!-- CTA Button -->
                <a href="{{ route('gallery.restaurant-gallery') }}"
                    class="inline-block px-8 py-4 border-2 border-[#FFDE68] text-[#FFDE68] font-medium uppercase tracking-wider text-sm hover:bg-[#FFDE68] hover:text-black transition-all duration-300 rounded-full">
                    View Gallery
                </a>
            </div>
        </div>
    </div>
</div>
