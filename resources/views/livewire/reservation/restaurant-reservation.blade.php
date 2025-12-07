<section id="reservation" class="bg-[#FDFDFA] mt-20 p-8 rounded-xl shadow-lg">
    <!-- Added ID for the observer target -->
    <div id="reservation-container" class="w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

        <!-- Left Column: Content & Info -->
        <div wire:ignore class="lg:col-span-6 space-y-8">
            <div>
                <!-- Item 1: Label -->
                <div class="reveal-item opacity-0 translate-y-8 transition-all duration-700 ease-out">
                    <span class="text-sm tracking-[0.2em] uppercase text-gray-500">
                        Reservation
                    </span>
                </div>

                <!-- Item 2: Title -->
                <h1
                    class="reveal-item opacity-0 translate-y-8 transition-all duration-700 ease-out mt-4 text-xl md:text-4xl font-serif text-[#0F172A] leading-tight">
                    Reserve a table by the greens.
                </h1>

                <!-- Item 3: Text -->
                <p
                    class="reveal-item opacity-0 translate-y-8 transition-all duration-700 ease-out mt-6 text-gray-600 leading-relaxed text-sm">
                    Send a reservation request in under a minute. We’ll confirm by phone or email. Terrace tables are
                    subject to weather and availability.
                </p>
            </div>

            <!-- Item 4: Accordion (Dropdown) -->
            <!-- Changed to open: false to show off animation on click -->
            <div class="reveal-item opacity-0 translate-y-8 transition-all duration-700 ease-out border-t border-gray-300 pt-6"
                x-data="{ open: false }">
                <button @click="open = !open"
                    class="w-full flex justify-between items-center group focus:outline-none py-2">
                    <span
                        class="text-xs font-bold tracking-[0.2em] uppercase text-[#0F172A] group-hover:text-gray-600 transition-colors">
                        How reservation requests work
                    </span>
                    <!-- Added transition-transform and duration-300 for smooth rotation -->
                    <svg class="w-4 h-4 text-gray-500 transform transition-transform duration-300 ease-in-out group-hover:text-gray-800"
                        :class="open ? 'rotate-180' : 'rotate-0'" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Added x-collapse for smooth height animation -->
                <div x-show="open" x-collapse class="text-xs text-gray-500 leading-relaxed overflow-hidden"
                    style="display: none;">
                    <div class="pt-2 pb-2">
                        This form is currently a preview only – your details are stored in your browser. In the next
                        step, we’ll connect it to our booking system so requests reach the team instantly.
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: The Form Card -->
        <!-- Item 5: Form Container -->
        <div class="reveal-item opacity-0 translate-y-8 transition-all duration-700 ease-out lg:col-span-6"
            wire:ignore.self>
            <div
                class="bg-white rounded-xl shadow-xl p-6 md:p-10 relative overflow-hidden transform transition-transform duration-300 hover:scale-[1.01]">

                <!-- Success Message Overlay -->
                @if ($isSubmitted)
                    <div
                        class="absolute inset-0 bg-white z-10 flex flex-col items-center justify-center text-center p-8 animate-fade-in">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-green-800" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-serif text-gray-900 mb-2">Request Received</h3>
                        <p class="text-gray-600">We will confirm your table shortly.</p>
                        <button wire:click="$set('isSubmitted', false)"
                            class="mt-6 text-sm underline text-gray-500 hover:text-gray-800">Send another
                            request</button>
                    </div>
                @endif

                <form wire:submit="submit">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">

                        <!-- Date -->
                        <div class="col-span-1">
                            <label for="date"
                                class="block text-xs font-bold tracking-widest text-gray-500 uppercase mb-2">
                                Date
                            </label>
                            <input type="date" id="date" wire:model.blur="date"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 py-3 px-4 text-gray-700 sm:text-sm transition-all duration-200 focus:shadow-md
                                @error('date') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('date')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Time -->
                        <div class="col-span-1">
                            <label for="time"
                                class="block text-xs font-bold tracking-widest text-gray-500 uppercase mb-2">
                                Time
                            </label>
                            <input type="time" id="time" wire:model.blur="time"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 py-3 px-4 text-gray-700 sm:text-sm transition-all duration-200 focus:shadow-md
                                @error('time') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('time')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Guests -->
                        <div class="col-span-1">
                            <label for="guests"
                                class="block text-xs font-bold tracking-widest text-gray-500 uppercase mb-2">
                                Guests
                            </label>
                            <input type="number" id="guests" min="1" wire:model.blur="guests"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 py-3 px-4 text-gray-700 sm:text-sm transition-all duration-200 focus:shadow-md
                                @error('guests') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('guests')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Name -->
                        <div class="col-span-1">
                            <label for="name"
                                class="block text-xs font-bold tracking-widest text-gray-500 uppercase mb-2">
                                Name
                            </label>
                            <input type="text" id="name" wire:model.blur="name"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 py-3 px-4 text-gray-700 sm:text-sm transition-all duration-200 focus:shadow-md
                                @error('name') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('name')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="col-span-1">
                            <label for="phone"
                                class="block text-xs font-bold tracking-widest text-gray-500 uppercase mb-2">
                                Phone
                            </label>
                            <input type="tel" id="phone" wire:model.blur="phone"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 py-3 px-4 text-gray-700 sm:text-sm transition-all duration-200 focus:shadow-md
                                @error('phone') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('phone')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Occasion -->
                        <div class="col-span-1">
                            <label for="occasion"
                                class="block text-xs font-bold tracking-widest text-gray-500 uppercase mb-2">
                                Occasion (Optional)
                            </label>
                            <input type="text" id="occasion" wire:model.blur="occasion"
                                placeholder="Birthday, after-round, meeting..."
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 py-3 px-4 text-gray-700 placeholder-gray-400 sm:text-sm transition-all duration-200 focus:shadow-md">
                        </div>

                        <!-- Notes -->
                        <div class="col-span-1 md:col-span-2">
                            <label for="notes"
                                class="block text-xs font-bold tracking-widest text-gray-500 uppercase mb-2">
                                Notes
                            </label>
                            <textarea id="notes" wire:model.blur="notes" rows="3"
                                placeholder="Preferred seating, member number, allergies..."
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-gray-900 focus:ring-gray-900 py-3 px-4 text-gray-700 placeholder-gray-400 sm:text-sm transition-all duration-200 focus:shadow-md"></textarea>
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <div class="mt-8">
                        <button type="submit"
                            class="w-full bg-[#0F172A] cursor-pointer border border-transparent rounded-lg py-4 px-4 flex items-center justify-center text-sm font-bold uppercase tracking-widest text-[#FCD34D] hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                            wire:loading.attr="disabled">
                            <span wire:loading.remove>Submit Request</span>
                            <span wire:loading class="flex items-center gap-2">
                                <svg class="animate-spin h-5 w-5 text-[#FCD34D]" xmlns="http://www.w3.org/2000/svg"
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
                            // Select both left items and the right form wrapper
                            const items = container.querySelectorAll('.reveal-item');

                            items.forEach((el, index) => {
                                setTimeout(() => {
                                    el.classList.remove('opacity-0',
                                        'translate-y-8');
                                    el.classList.add('opacity-100',
                                        'translate-y-0');
                                }, index * 150); // 150ms sequential delay
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

            // Hook for Livewire to ensure observer persists if the whole section refreshes
            if (typeof Livewire !== 'undefined') {
                Livewire.hook('message.processed', (message, component) => {
                    setupReservationObserver();
                });
            }
        });
    </script>
</section>
