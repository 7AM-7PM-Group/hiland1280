<div>
    <div class="reveal-on-scroll">
        <livewire:banner.home-banner title="Exclusive Dining At" highlightedTitle="Hiland" {{-- subtitle="A place where crafted elegance meets the raw beauty of nature. <br> A destination shaped by detail, inspired by the highlands, and waiting to be revealed." --}}
            buttonText="Reserve Table" buttonLink="{{ route('reservation.restaurant-reservation') }}"
            bannerImg="{{ asset('assets/landing-page/dCogv1UDgA.png') }}" />
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
                <img src="{{ asset('assets/nbhKh0G9dx.jpeg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="reveal-on-scroll">
        <livewire:landingpage.keyword />
    </div>

    <div class="reveal-on-scroll">
        <livewire:guest.restaurant-testimonial />
    </div>
    <section class="relative w-full h-[70vh] mb-10 md:h-[65vh]">
        <!-- Google Maps -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.5779445139606!2d115.15905447576682!3d-8.24512369178818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd18f66ccab8663%3A0xc6fd89b6dc5a7d8c!2sHiland%201280%20Restaurant!5e0!3m2!1sid!2sid!4v1768884632426!5m2!1sid!2sid"
            class="absolute inset-0 w-full h-full grayscale contrast-125" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">
            <h2 class="text-3xl md:text-4xl font-semibold tracking-widest text-white">
                FIND US IN <span class="text-mine-200">BEDUGUL</span>
            </h2>

            <p class="mt-4 text-sm md:text-base text-gray-300 max-w-xl">
                A destination worth the journey
            </p>

            <a href="https://maps.app.goo.gl/Qx5izdcwCAH23LYc8" target="_blank"
                class="mt-6 inline-flex items-center gap-2 border border-mine-200 text-mine-200 px-6 py-3 rounded-full text-sm uppercase tracking-wider hover:bg-yellow-400 hover:text-black transition">
                Get Directions
            </a>
        </div>
    </section>


</div>
