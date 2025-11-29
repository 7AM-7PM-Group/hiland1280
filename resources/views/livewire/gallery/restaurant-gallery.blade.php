<section class="bg-[#FDFDFA] mt-20 p-8 rounded-xl shadow-lg">

    <!-- Header -->
    <h4 class="text-sm tracking-[0.2em] text-gray-700 uppercase mb-4">
        Signature Dishes
    </h4>
    <div x-data="{ show: true }" x-init="$wire.$watch('activeTab', () => {
        show = false;
        setTimeout(() => show = true, 150)
    })" class="flex flex-col md:flex-row justify-between items-end mb-6">
        <div x-show="show" x-transition.opacity.duration.700ms class="w-[60%] mb-4 md:mb-0">
            <h2 class="text-xl md:text-4xl font-serif text-gray-900 leading-tight">
                Greens, fire, and warm evenings.

            </h2>
        </div>

        <div x-show="show" x-transition.opacity.duration.700ms class="w-[55%] text-right">
            <p class="text-gray-700 text-xs text-start leading-relaxed">
                A glimpse of the terrace, plates from the grill, and the calm that settles over the course as the sun
                dips.
            </p>
        </div>
    </div>

    <!-- Images -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Big Left Image -->
        <div class="col-span-2">
            <img src="/images/gallery-terrace.jpg" alt="Terrace" class="w-full h-[520px] object-cover rounded-3xl">
        </div>

        <!-- Right Column -->
        <div class="flex flex-col gap-6">

            <!-- Top Food Image -->
            <img src="/images/gallery-steak-fries.jpg" alt="Steak and fries"
                class="w-full h-[250px] object-cover rounded-3xl">

            <!-- Bottom Gradient / Placeholder -->
            <div class="w-full h-[250px] rounded-3xl bg-gradient-to-b from-gray-200 to-white"></div>

        </div>
    </div>
</section>
