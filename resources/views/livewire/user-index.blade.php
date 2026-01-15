<div>
    <div class="flex gap-4 py-2">
        <div class="w-10">#</div>
        <div class="w-1/4">Name</div>
        <div class="w-1/4 text-center">Email</div>
        <div class="w-1/4 text-center">Verified</div>
        <div class="w-1/4 text-center">Action</div>
    </div>
    @foreach ($users as $item)
        <div class="flex gap-4 py-2">
            <div class="w-10">#</div>
            <div class="w-1/4">{{ $item->name }}</div>
            <div class="w-1/4 text-center">{{ $item->email }}</div>
            <div class="w-1/4 text-center flex justify-center">
                @if ($item->email_verified_at)
                    <flux:icon icon="check-check"></flux:icon>
                @else
                    <flux:icon icon="x"></flux:icon>
                @endif
            </div>
            <div class="w-1/4 text-center flex gap-2 justify-center">
                <flux:tooltip content="Edit Data">
                    <flux:button size="sm" variant="primary" color="amber" icon="pencil-square"></flux:button>
                </flux:tooltip>

                <flux:tooltip content="Delete Data">
                    <flux:modal.trigger name="delete-{{ $item->id }}">
                        <flux:button size="sm" variant="primary" color="red" icon="trash"></flux:button>
                    </flux:modal.trigger>
                </flux:tooltip>
            </div>
        </div>
    @endforeach
</div>
