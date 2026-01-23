<div>
    <div class="flex justify-center">
        <flux:button variant="ghost" loading="{{ false }}" wire:click='toggleKeyword' icon="plus-circle">
        </flux:button>
    </div>

    <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
        class="bg-black {{ $keyword ? 'block' : 'hidden' }} text-white py-20 overflow-hidden">
        <div class="container mx-auto px-4 max-w-screen-xl md:text-lg mb-10">
            <h3>Bedugul restaurant</h3>
            <h3>Restaurants Bedugul</h3>
            <h3>Mediterranean food Bedugul</h3>
            <h3>Best restaurants Bedugul</h3>
            <h3>Best restaurant Bedugul</h3>
            <h3>Steak restaurant Bedugul</h3>
            <h3>Mediterranean restaurant Bedugul</h3>
            <h3>Fine dining Bedugul</h3>
            <h3>Steak restaurants Bedugul</h3>
            <h3>Golf course restaurant Bedugul</h3>
            <h3>Golf restaurant Bedugul</h3>
            <h3>Mediterranean restaurants Bedugul</h3>
            <h3>Best steak restaurant Bedugul</h3>
            <h3>Golf course with restaurant Bedugul</h3>
            <h3>Golf courses with restaurants Bedugul</h3>
            <h3>Golf restaurants Bedugul</h3>
            <h3>Bedugul restaurants</h3>
            <h3>Bedugul Mediterranean food</h3>
            <h3>Bedugul best restaurants</h3>
            <h3>Bedugul best restaurant</h3>
            <h3>Bedugul steak restaurant</h3>
            <h3>Bedugul Mediterranean restaurant</h3>
            <h3>Bedugul steak restaurants</h3>
            <h3>Bedugul fine dining</h3>
            <h3>Bedugul golf course restaurant</h3>
            <h3>Bedugul golf restaurant</h3>
            <h3>Bedugul Mediterranean restaurants</h3>
            <h3>Bedugul best steak restaurant</h3>
            <h3>Bedugul golf course with restaurant</h3>
            <h3>Bedugul golf courses with restaurants</h3>
            <h3>Bedugul golf restaurants</h3>
            <h3>Restaurant</h3>
            <h3>Restaurants</h3>

        </div>
    </div>

</div>
