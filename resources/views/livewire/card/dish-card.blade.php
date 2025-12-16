<div class="group">
    <!-- Image Container -->
    <div class="relative overflow-hidden rounded-t-lg">
        <img src="{{ $image }}" alt="{{ $title }}"
            class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">

        <!-- Hover Overlay -->
        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        </div>
    </div>

    <!-- Card Content -->
    <div class="{{ $price ? 'bg-zinc-900 p-6 rounded-b-lg h-[13rem] overflow-hidden flex flex-col' : 'bg-zinc-900 p-6 rounded-b-lg overflow-hidden' }}">
        <!-- Title -->
        <h3 class="text-[#FFDE68] text-2xl font-serif font-semibold mb-4">
            {{ $title }}
        </h3>

        <!-- Description -->
        <p class="text-gray-400 text-sm leading-relaxed mb-4">
            {{ $description }}
        </p>

        <!-- Price -->
        @if ($price)
            <p class="text-white text-lg font-medium mt-auto">
                {{ $price }}
            </p>
        @endif
    </div>
</div>
