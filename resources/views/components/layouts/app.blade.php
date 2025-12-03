<x-layouts.app.sidebar :title="$title ?? null" class="">
    <flux:main>
        <flux:session>{{ $title }}</flux:session>
        <flux:container-sidebar class="">
            {{ $slot }}
        </flux:container-sidebar>
    </flux:main>
</x-layouts.app.sidebar>
