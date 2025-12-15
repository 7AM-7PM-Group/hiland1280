<div class="group cursor-pointer">
    <!-- Image Container -->
    <div class="relative overflow-hidden rounded-t-lg">
        <img src="{{ $image }}" alt="{{ $title }}"
            class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500">

        <!-- Hover Overlay -->
        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        </div>
    </div>

    <!-- Card Content -->
    <div class="bg-zinc-900 p-6 rounded-b-lg">
        <!-- Title -->
        <h3 class="text-[#FFDE68] text-2xl font-semibold mb-4">
            {{ $title }}
        </h3>

        <!-- Description -->
        <p class="text-gray-400 text-sm leading-relaxed mb-4">
            {{ $description }}
        </p>

        <!-- Price -->
        {{-- <p class="text-white text-lg font-medium">
            {{ $price }}
        </p> --}}
    </div>
</div>
