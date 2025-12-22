<section id="reservation" class="bg-black pt-42">
    <!-- Added ID for the observer target -->
    <div id="reservation-container" class="container mx-auto px-4 max-w-screen-xl">
        {{-- <div class="text-center mb-16">
            <h2 class="text-2xl md:text-5xl font-semibold mb-6">
                Reservation <span class="text-[#FFDE68]">Form</span>
            </h2>
            <p class="text-gray-300 text-md max-w-4xl mx-auto">
                A deliberately short menu so every steak is rested properly, every rib is glazed twice, and every coffee
                is pulled to perfection.
            </p>
        </div> --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- Left Column: Content & Info -->
            <div wire:ignore class="lg:col-span-6 space-y-8">
                <div>
                    <!-- Item 1: Label -->
                    {{-- <div class="reveal-item opacity-0 translate-y-8 transition-all duration-700 ease-out">
                        <span class="text-sm tracking-[0.2em] uppercase text-gray-400">
                            Reservation
                        </span>
                    </div> --}}

                    <!-- Item 2: Title -->
                    <h1
                        class="reveal-item opacity-0 font-sans uppercase translate-y-8 transition-all duration-700 ease-out mt-4 text-2xl md:text-4xl font-semibold text-white leading-tight">
                        Reserve a table by <span class="text-[#FFDE68]">the greens</span>
                    </h1>

                    <!-- Item 3: Text -->
                    {{-- <p
                        class="reveal-item opacity-0 translate-y-8 transition-all duration-700 ease-out mt-6 text-gray-300 leading-relaxed text-md">
                        Send a reservation request in under a minute. We'll confirm by phone or email. Terrace tables
                        are
                        subject to weather and availability.
                    </p> --}}
                </div>

                <!-- Item 4: Accordion (Dropdown) -->
                <div class="reveal-item opacity-0 translate-y-8 transition-all duration-700 ease-out border-t border-gray-800 pt-6"
                    x-data="{ open: false }">
                    <button @click="open = !open"
                        class="w-full flex justify-between items-center group focus:outline-none py-2">
                        <span
                            class="text-sm font-semibold tracking-[0.2em] uppercase text-white group-hover:text-[#FFDE68] transition-colors">
                            How reservation requests work
                        </span>
                        <svg class="w-5 h-5 text-gray-400 transform transition-transform duration-300 ease-in-out group-hover:text-[#FFDE68]"
                            :class="open ? 'rotate-180' : 'rotate-0'" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" x-collapse class="text-sm text-gray-400 leading-relaxed overflow-hidden"
                        style="display: none;">
                        <div class="pt-4 pb-2">
                            <p class="mb-2">
                                After submitting your reservation request, our team will review the details and check
                                availability for your desired date and time.
                            </p>
                            <p class="mb-2">
                                We will then reach out to you via phone or email to confirm your reservation or discuss
                                alternative options if necessary.
                            </p>
                            <p>
                                Please note that submitting a request does not guarantee a reservation until you receive
                                confirmation from us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: The Form Card -->
            <!-- Item 5: Form Container -->
            <div class="reveal-item opacity-0 translate-y-8 transition-all duration-700 ease-out lg:col-span-6"
                wire:ignore.self>
                <div
                    class="bg-zinc-900 rounded-xl shadow-2xl p-6 md:p-10 relative overflow-hidden border border-zinc-800">

                    <!-- Success Message Overlay -->
                    @if ($isSubmitted)
                        <div
                            class="absolute inset-0 bg-zinc-900 z-10 flex flex-col items-center justify-center text-center p-8 animate-fade-in">
                            <div class="w-16 h-16 bg-[#FFDE68]/20 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-[#FFDE68]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-semibold text-white mb-2">Request Received</h3>
                            <p class="text-gray-400">We will confirm your table shortly.</p>
                            <button wire:click="$set('isSubmitted', false)"
                                class="mt-6 text-sm underline text-gray-400 hover:text-[#FFDE68] transition-colors">Send
                                another
                                request</button>
                        </div>
                    @endif

                    <form wire:submit="submit">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">

                            <!-- Date -->
                            <div class="col-span-1">
                                <label for="date"
                                    class="block text-xs font-semibold tracking-widest text-gray-400 uppercase mb-2">
                                    Date
                                </label>
                                <input type="date" id="date" wire:model.blur="date"
                                    class="w-full rounded-md bg-black border-zinc-700 text-white shadow-sm focus:border-[#FFDE68] focus:ring-[#FFDE68] py-3 px-4 sm:text-sm transition-all duration-200
                                    @error('date') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                                @error('date')
                                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Time -->
                            <div class="col-span-1">
                                <label for="time"
                                    class="block text-xs font-semibold tracking-widest text-gray-400 uppercase mb-2">
                                    Time
                                </label>
                                <input type="time" id="time" wire:model.blur="time"
                                    class="w-full rounded-md bg-black border-zinc-700 text-white shadow-sm focus:border-[#FFDE68] focus:ring-[#FFDE68] py-3 px-4 sm:text-sm transition-all duration-200
                                    @error('time') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                                @error('time')
                                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Guests -->
                            <div class="col-span-1">
                                <label for="guests"
                                    class="block text-xs font-semibold tracking-widest text-gray-400 uppercase mb-2">
                                    Guests
                                </label>
                                <input type="number" id="guests" min="1" wire:model.blur="guests"
                                    class="w-full rounded-md bg-black border-zinc-700 text-white shadow-sm focus:border-[#FFDE68] focus:ring-[#FFDE68] py-3 px-4 sm:text-sm transition-all duration-200
                                    @error('guests') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                                @error('guests')
                                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Name -->
                            <div class="col-span-1">
                                <label for="name"
                                    class="block text-xs font-semibold tracking-widest text-gray-400 uppercase mb-2">
                                    Name
                                </label>
                                <input type="text" id="name" wire:model.blur="name"
                                    class="w-full rounded-md bg-black border-zinc-700 text-white shadow-sm focus:border-[#FFDE68] focus:ring-[#FFDE68] py-3 px-4 sm:text-sm transition-all duration-200
                                    @error('name') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                                @error('name')
                                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div class="col-span-1">
                                <label for="phone"
                                    class="block text-xs font-semibold tracking-widest text-gray-400 uppercase mb-2">
                                    Phone
                                </label>
                                <input type="tel" id="phone" wire:model.blur="phone"
                                    class="w-full rounded-md bg-black border-zinc-700 text-white shadow-sm focus:border-[#FFDE68] focus:ring-[#FFDE68] py-3 px-4 sm:text-sm transition-all duration-200
                                    @error('phone') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                                @error('phone')
                                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Occasion -->
                            <div class="col-span-1">
                                <label for="occasion"
                                    class="block text-xs font-semibold tracking-widest text-gray-400 uppercase mb-2">
                                    Occasion (Optional)
                                </label>
                                <input type="text" id="occasion" wire:model.blur="occasion"
                                    placeholder="Birthday, after-round, meeting..."
                                    class="w-full rounded-md bg-black border-zinc-700 text-white shadow-sm focus:border-[#FFDE68] focus:ring-[#FFDE68] py-3 px-4 placeholder-gray-500 sm:text-sm transition-all duration-200">
                            </div>

                            <!-- Notes -->
                            <div class="col-span-1 md:col-span-2">
                                <label for="notes"
                                    class="block text-xs font-semibold tracking-widest text-gray-400 uppercase mb-2">
                                    Notes
                                </label>
                                <textarea id="notes" wire:model.blur="notes" rows="3"
                                    placeholder="Preferred seating, member number, allergies..."
                                    class="w-full rounded-md bg-black border-zinc-700 text-white shadow-sm focus:border-[#FFDE68] focus:ring-[#FFDE68] py-3 px-4 placeholder-gray-500 sm:text-sm transition-all duration-200"></textarea>
                            </div>

                        </div>

                        <!-- Submit Button -->
                        <div class="mt-8">
                            <button type="submit"
                                class="w-full bg-[#FFDE68] cursor-pointer border border-transparent rounded-full py-4 px-4 flex items-center justify-center text-sm font-bold uppercase tracking-widest text-black hover:bg-[#ffd84d] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-zinc-900 focus:ring-[#FFDE68] transition-colors duration-200"
                                wire:loading.attr="disabled" wire:loading.class="opacity-75">

                                <span class="inline-block" wire:loading.class="hidden">
                                    Submit Request
                                </span>

                                <span class="hidden items-center gap-2" wire:loading.class="!flex">
                                    <svg class="animate-spin h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                    Processing...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const setupReservationObserver = () => {
                const container = document.getElementById('reservation-container');
                if (!container) return;

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const items = container.querySelectorAll('.reveal-item');

                            items.forEach((el, index) => {
                                setTimeout(() => {
                                    el.classList.remove('opacity-0',
                                        'translate-y-8');
                                    el.classList.add('opacity-100',
                                        'translate-y-0');
                                }, index * 150);
                            });

                            observer.unobserve(container);
                        }
                    });
                }, {
                    threshold: 0.15
                });

                observer.observe(container);
            };

            setupReservationObserver();

            if (typeof Livewire !== 'undefined') {
                Livewire.hook('message.processed', (message, component) => {
                    setupReservationObserver();
                });
            }
        });
    </script>
</section>
