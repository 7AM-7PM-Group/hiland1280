<div>
    <div class="flex items-center gap-4">
        <div class="">
            <flux:input wire:model.live='date' type="date"></flux:input>
        </div>
        <div class="font-semibold">Summary</div>
    </div>
    <div class="flex mt-4 py-2 font-semibold gap-4">
        <div class="w-10">#</div>
        <div class="w-1/5">Reservator</div>
        <div class="w-1/5 text-center">Time</div>
        <div class="w-1/5 text-center">Number of guest</div>
        <div class="w-1/5 text-center">Occasion</div>
        <div class="w-1/5 text-center">Note</div>
    </div>

    @foreach ($reservations as $item)
        <div class="flex mt-4 items-center gap-4">
            <div class="w-10">#</div>
            <div class="w-1/5 flex flex-col">
                <div class="">{{ $item->name }}</div>
                <a href="https://wa.me/{{ $item->phone }}" class="">{{ $item->phone }}</a>
            </div>
            <div class="w-1/5 text-center">{{ $item->reservation_time->format('F d, Y H:i') }}</div>
            <div class="w-1/5 text-center">{{ $item->number_of_guests }} Pax</div>
            <div class="w-1/5 text-center">{{ $item->occasion }}</div>
            <div class="w-1/5 text-center">
                @if ($item->note)
                    <flux:button size="sm" variant="primary" color="sky" icon="eye"
                        wire:click='openNoteModal({{ $item->id }})'></flux:button>
                @endif
            </div>
        </div>
    @endforeach
    <flux:modal name="noteModal">
        <div class="mt-4">{{ $note }}</div>
    </flux:modal>
</div>
