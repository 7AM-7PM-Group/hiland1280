<div class="bg-black text-white py-20 md:py-32">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center">
            <!-- Left Content -->
            <div class="w-full lg:w-2/3 text-center lg:text-left order-2 lg:order-1">
                <!-- Heading -->
                <h2 class="text-2xl sm:text-3xl md:text-5xl font-sans uppercase font-semibold mb-6 leading-tight">
                    AN INVITATION TO EXCLUSIVE
                    <span class="text-[#FFDE68]">DINING EXPERIENCE</span>
                </h2>

                <!-- Description -->
                {{-- <p class="text-gray-300 text-md mb-10 leading-relaxed max-w-xl">
                    An invitation to linger over exceptional pours and assured cuisine
                    framed by fairway calm and
                    attentive service, where time slows naturally and each reservation is treated with deliberate care.
                </p> --}}

                <!-- CTA Button -->
                <a href="{{ route('reservation.restaurant-reservation') }}"
                    class="inline-block px-8 py-4 bg-[#FFDE68] text-black font-medium uppercase tracking-wider text-base md:text-sm hover:bg-[#ffd84d] transition-colors duration-300 rounded-full">
                    Reserve Table
                </a>
            </div>

            <!-- Right Image -->
            <div class="relative w-full lg:w-1/3 order-1 lg:order-2">
                <div class="relative overflow-hidden rounded-lg shadow-2xl group">
                    <img src="{{ asset('cta/cocktail.jpg') }}" alt="Premium Cocktails"
                        class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">

                    <!-- Overlay Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                    <div
                        class="absolute top-6 right-6 bg-[#FFDE68] text-black px-4 py-2 rounded-full text-sm font-semibold">
                        Fresh
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
