<div class="bg-zinc-900 rounded-2xl p-6 flex items-center justify-between hover:shadow-lg transition-shadow duration-300">
    <!-- Left: Title -->
    <h3 class="text-white text-lg font-semibold uppercase tracking-wide">
        {{ $title }}
    </h3>

    <!-- Right: Price with Dropdown Icon -->
    <div class="flex items-center gap-4">
        <span class="text-white text-lg font-semibold">
            {{ $price }}
        </span>
        {{-- <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg> --}}
    </div>
</div>
