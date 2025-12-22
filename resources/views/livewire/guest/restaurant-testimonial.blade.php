<div class="bg-black text-white py-20 overflow-hidden">
    <div class="container mx-auto px-4 max-w-screen-xl mb-16">
        <!-- Section Header -->
        <div class="text-center">
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-sans uppercase font-semibold mb-6">
                Guest's <span class="text-[#FFDE68]">Review</span>
            </h2>
            {{-- <p class="text-gray-300 text-md max-w-4xl mx-auto">
                Reflections from guests who value composed dining, assured service, and an atmosphere defined by calm
                confidence, shared through moments experienced and remembered.
            </p> --}}
        </div>
    </div>

    <!-- Scrolling Testimonials -->
    <div class="relative">
        <!-- Gradient Overlays -->
        <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-24 md:w-32 bg-gradient-to-r from-black to-transparent z-10"></div>
        <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-24 md:w-32 bg-gradient-to-l from-black to-transparent z-10"></div>

        <!-- Scrolling Container -->
        <div x-data="{}" class="flex gap-6 animate-scroll">
            <!-- First Set of Testimonials -->
            <div class="flex gap-6 flex-shrink-0">
                <!-- Testimonial 1 -->
                <div class="w-[400px] bg-black border-2 border-white rounded-3xl p-8 flex-shrink-0">
                    <p class="text-white text-xs lg:text-lg mb-6 leading-relaxed">
                        "The perfect end to 18 holes – steaks are incredible and the terrace sunsets are unbeatable."
                    </p>
                    <div>
                        <h4 class="text-white font-semibold text-xl mb-1">James Wand</h4>
                        <p class="text-gray-400 text-sm">Club Member</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="w-[400px] bg-black border-2 border-white rounded-3xl p-8 flex-shrink-0">
                    <p class="text-white text-xs lg:text-lg mb-6 leading-relaxed">
                        "Exceptional dining experience with breathtaking views. The slow-cooked ribs are absolutely
                        divine!"
                    </p>
                    <div>
                        <h4 class="text-white font-semibold text-xl mb-1">Sarah Mitchell</h4>
                        <p class="text-gray-400 text-sm">Regular Guest</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="w-[400px] bg-black border-2 border-white rounded-3xl p-8 flex-shrink-0">
                    <p class="text-white text-xs lg:text-lg mb-6 leading-relaxed">
                        "A hidden gem! The combination of premium steaks and golf course ambiance is simply perfect."
                    </p>
                    <div>
                        <h4 class="text-white font-semibold text-xl mb-1">Michael Chen</h4>
                        <p class="text-gray-400 text-sm">Food Critic</p>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="w-[400px] bg-black border-2 border-white rounded-3xl p-8 flex-shrink-0">
                    <p class="text-white text-xs lg:text-lg mb-6 leading-relaxed">
                        "Every visit exceeds expectations. The attention to detail in both food and service is
                        remarkable."
                    </p>
                    <div>
                        <h4 class="text-white font-semibold text-xl mb-1">Emily Rodriguez</h4>
                        <p class="text-gray-400 text-sm">VIP Member</p>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="w-[400px] bg-black border-2 border-white rounded-3xl p-8 flex-shrink-0">
                    <p class="text-white text-xs lg:text-lg mb-6 leading-relaxed">
                        "The coffee is perfection, the atmosphere is serene, and the views are unforgettable. Highly
                        recommended!"
                    </p>
                    <div>
                        <h4 class="text-white font-semibold text-xl mb-1">David Thompson</h4>
                        <p class="text-gray-400 text-sm">Coffee Enthusiast</p>
                    </div>
                </div>
            </div>

            <!-- Duplicate Set for Seamless Loop -->
            <div class="flex gap-6 flex-shrink-0">
                <!-- Testimonial 1 (Duplicate) -->
                <div class="w-[400px] bg-black border-2 border-white rounded-3xl p-8 flex-shrink-0">
                    <p class="text-white text-xs lg:text-lg mb-6 leading-relaxed">
                        "The perfect end to 18 holes – steaks are incredible and the terrace sunsets are unbeatable."
                    </p>
                    <div>
                        <h4 class="text-white font-semibold text-xl mb-1">James Wand</h4>
                        <p class="text-gray-400 text-sm">Club Member</p>
                    </div>
                </div>

                <!-- Testimonial 2 (Duplicate) -->
                <div class="w-[400px] bg-black border-2 border-white rounded-3xl p-8 flex-shrink-0">
                    <p class="text-white text-xs lg:text-lg mb-6 leading-relaxed">
                        "Exceptional dining experience with breathtaking views. The slow-cooked ribs are absolutely
                        divine!"
                    </p>
                    <div>
                        <h4 class="text-white font-semibold text-xl mb-1">Sarah Mitchell</h4>
                        <p class="text-gray-400 text-sm">Regular Guest</p>
                    </div>
                </div>

                <!-- Testimonial 3 (Duplicate) -->
                <div class="w-[400px] bg-black border-2 border-white rounded-3xl p-8 flex-shrink-0">
                    <p class="text-white text-xs lg:text-lg mb-6 leading-relaxed">
                        "A hidden gem! The combination of premium steaks and golf course ambiance is simply perfect."
                    </p>
                    <div>
                        <h4 class="text-white font-semibold text-xl mb-1">Michael Chen</h4>
                        <p class="text-gray-400 text-sm">Food Critic</p>
                    </div>
                </div>

                <!-- Testimonial 4 (Duplicate) -->
                <div class="w-[400px] bg-black border-2 border-white rounded-3xl p-8 flex-shrink-0">
                    <p class="text-white text-xs lg:text-lg mb-6 leading-relaxed">
                        "Every visit exceeds expectations. The attention to detail in both food and service is
                        remarkable."
                    </p>
                    <div>
                        <h4 class="text-white font-semibold text-xl mb-1">Emily Rodriguez</h4>
                        <p class="text-gray-400 text-sm">VIP Member</p>
                    </div>
                </div>

                <!-- Testimonial 5 (Duplicate) -->
                <div class="w-[400px] bg-black border-2 border-white rounded-3xl p-8 flex-shrink-0">
                    <p class="text-white text-xs lg:text-lg mb-6 leading-relaxed">
                        "The coffee is perfection, the atmosphere is serene, and the views are unforgettable. Highly
                        recommended!"
                    </p>
                    <div>
                        <h4 class="text-white font-semibold text-xl mb-1">David Thompson</h4>
                        <p class="text-gray-400 text-sm">Coffee Enthusiast</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-scroll {
            animation: scroll 30s linear infinite;
        }

        .animate-scroll:hover {
            animation-play-state: paused;
        }
        .animate-scroll:hover {
            animation-play-state: paused;
        }
        @media (max-width: 640px) {
            .animate-scroll { animation: scroll 5s linear infinite; }
            .animate-scroll .rounded-3xl { width: 280px; padding: 1.5rem; }
            .animate-scroll p { font-size: 12px; margin-bottom: 1rem; }
            .animate-scroll h4 { font-size: 1.125rem; }
            .animate-scroll .w-32 { width: 4rem; }
        }
    </style>
</div>
