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
            <h2 class="text-2xl md:text-5xl uppercase font-serif font-semibold text-white mb-6 leading-tight">
                {{ $title }} <br>
                <span class="text-[#FFDE68] italic">{{ $highlightedTitle }}</span>
            </h2>

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
