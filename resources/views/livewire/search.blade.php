<div class=" h-screen w-full flex items-center justify-center bg-black text-white">
    <div class="relative w-2xl mx-auto">
        <form wire:submit="search" class="flex gap-4">
            <flux:input loading="{{ false }}" type="text" wire:model.live="query" placeholder="Search..." />
        </form>

        @if ($query && count($this->results))
            <div class="absolute left-0 right-0 mt-4 bg-neutral-700 shadow-lg rounded-lg z-50">
                @foreach ($this->results as $item)
                    <a href="{{ $item['url'] }}" class="block px-4 py-3 transition">
                        <div class="font-semibold">
                            {{ $item['title'] }}
                        </div>
                        <div class="text-sm text-gray-500">
                            {{ $item['content'] }}
                        </div>
                    </a>
                @endforeach
            </div>
        @elseif($query)
            <div
                class="absolute left-0 right-0 mt-4 bg-neutral-700 shadow-lg rounded-lg px-4 py-3 text-sm text-white z-50">
                No results found
            </div>
        @endif
    </div>
</div>
