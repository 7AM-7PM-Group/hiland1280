<div class="relative min-h-screen">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-right bg-no-repeat"
        style="background-image: url({{ $bannerImg }}); background-size: auto; background-position: right center;">
        <!-- Dark Overlay -->
        <div class="absolute inset-0"
            style="background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.1) 10%, rgba(0,0,0,0) 100%);">
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 min-h-screen flex items-center">
        <div class="max-w-3xl">
            <!-- Heading -->
            @if ($breadcrumb ?? false)
                <div class="flex"> <a class="hover:text-mine-200 text-white transition-colors duration-300"
                        href="{{ route('landingpage.landing-page') }}">Home</a>
                    <flux:icon icon="chevron-right" size="micro" class="text-white "></flux:icon>

                    <div class="capitalize text-white">
                        {{ $highlightedTitle }}
                    </div>
                </div>
                <h1 class="text-2xl md:text-5xl uppercase font-sans font-semibold text-white mb-6 leading-tight">
                    @if ($title)
                        {{ $title }} <br>
                    @endif
                    <span class="text-[#FFDE68] italic">{{ $highlightedTitle }}</span>
                </h1>
            @else
                <h1 class="mb-1 font-semibold text-white">Restaurant Bedugul</h1>
                <h3 class="text-2xl md:text-5xl uppercase font-sans font-semibold text-white mb-6 leading-tight">
                    @if ($title)
                        {{ $title }} <br>
                    @endif
                    <span class="text-[#FFDE68] italic">{{ $highlightedTitle }}</span>
                </h3>
            @endif



            <!-- Description -->
            <p class="text-gray-300 md:text-lg leading-relaxed mb-10 font-light">
                {!! $subtitle !!}
            </p>

            <!-- Call to Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4">
                <!-- Reserve Table Button -->
                @if ($buttonLink && $buttonText)
                    <a href="{{ $buttonLink }}"
                        class="inline-block py-3 px-6 bg-[#FFDE68] text-black font-medium uppercase tracking-[0.1em] text-sm hover:bg-yellow-500 transition-colors duration-300 text-center rounded-3xl">
                        {{ $buttonText }}
                    </a>
                @endif

                <!-- Explore Menu Button -->
                @if ($secondButtonLink && $secondButtonText)
                    <a href="{{ $secondButtonLink }}"
                        class="inline-block py-3 px-6 bg-transparent border-2 border-white text-white font-medium uppercase tracking-[0.1em] text-sm hover:bg-white hover:text-black transition-all duration-300 text-center rounded-3xl">
                        {{ $secondButtonText }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
