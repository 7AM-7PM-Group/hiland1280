<div>
    <div class="reveal-on-scroll">
        <livewire:banner.home-banner title="Exclusive Dining At" highlightedTitle="Hiland" {{-- subtitle="A place where crafted elegance meets the raw beauty of nature. <br> A destination shaped by detail, inspired by the highlands, and waiting to be revealed." --}}
            buttonText="Reserve Table" buttonLink="{{ route('reservation.restaurant-reservation') }}"
            bannerImg="{{ asset('assets/landing-page/hero-3.png') }}" />
    </div>
    <div class="reveal-on-scroll">
        <livewire:about.about />
    </div>
    <div class="reveal-on-scroll">
        <livewire:dishes.signature-dishes />
    </div>
    <div class="reveal-on-scroll">
        <livewire:golf.golf />
    </div>
    <div class="reveal-on-scroll">
        <livewire:cta.cta />
    </div>
    <div class="reveal-on-scroll">
        <div class="container mx-auto px-4 max-w-screen-xl md:text-lg mb-10">
            <div class="flex justify-center">
                <img src="{{ asset('assets/unique.jpeg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="reveal-on-scroll">
        <livewire:guest.restaurant-testimonial />
    </div>
    <div class="reveal-on-scroll" x-data="{ keyword: false }">
        <div class="flex justify-center mt-15 mb-5">
            <flux:icon x-on:click="keyword = !keyword" icon="plus-circle"></flux:icon>
        </div>

        <div x-show="keyword" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90" class="bg-black text-white py-20 overflow-hidden">
            <div class="container mx-auto px-4 max-w-screen-xl md:text-lg mb-10">
                <div class="font-semibold text-lg md:text-xl mb-4">Keywords</div>
                <div>Bedugul restaurant</div>
                <div>Restaurants Bedugul</div>
                <div>Mediterranean food Bedugul</div>
                <div>Best restaurants Bedugul</div>
                <div>Best restaurant Bedugul</div>
                <div>Steak restaurant Bedugul</div>
                <div>Mediterranean restaurant Bedugul</div>
                <div>Fine dining Bedugul</div>
                <div>Steak restaurants Bedugul</div>
                <div>Golf course restaurant Bedugul</div>
                <div>Golf restaurant Bedugul</div>
                <div>Mediterranean restaurants Bedugul</div>
                <div>Best steak restaurant Bedugul</div>
                <div>Golf course with restaurant Bedugul</div>
                <div>Golf courses with restaurants Bedugul</div>
                <div>Golf restaurants Bedugul</div>
                <div>Bedugul restaurants</div>
                <div>Bedugul mediterranean food</div>
                <div>Bedugul best restaurants</div>
                <div>Bedugul best restaurant</div>
                <div>Bedugul steak restaurant</div>
                <div>Bedugul mediterranean restaurant</div>
                <div>Bedugul steak restaurants</div>
                <div>Bedugul fine dining</div>
                <div>Bedugul golf course restaurant</div>
                <div>Bedugul golf restaurant</div>
                <div>Bedugul mediterranean restaurants</div>
                <div>Bedugul best steak restaurant</div>
                <div>Bedugul golf course with restaurant</div>
                <div>Bedugul golf courses with restaurants</div>
                <div>Bedugul golf restaurants</div>
            </div>
        </div>

    </div>

</div>
