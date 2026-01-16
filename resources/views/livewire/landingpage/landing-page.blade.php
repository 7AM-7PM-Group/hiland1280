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
    <div class="reveal-on-scroll">
        <livewire:landingpage.keyword />
    </div>

</div>
