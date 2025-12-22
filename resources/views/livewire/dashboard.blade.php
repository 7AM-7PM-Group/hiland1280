<div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
    <div class="lg:col-span-2">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 aspect-video rounded shadow dark:bg-neutral-600">
                <h3 class="text-lg font-semibold">Total Reservations</h3>
                <p class="text-7xl text-center  mt-12">{{ $totalReservations }}</p>
            </div>
            <div class="bg-white p-4 aspect-video rounded shadow dark:bg-neutral-600">
                <h3 class="text-lg font-semibold">Total Pax</h3>
                <p class="text-7xl text-center  mt-12">{{ $totalPax }}</p>
            </div>
            <div class="bg-white p-4 aspect-video rounded shadow dark:bg-neutral-600">
                <h3 class="text-lg font-semibold">Upcoming Reservations in 30 Days</h3>
                <p class="text-7xl text-center  mt-12">{{ $newUsers }}</p>
            </div>
        </div>

        <!-- Reservations Chart -->
        <div class="mt-4 bg-white p-4 rounded shadow dark:bg-neutral-600 col-span-full">
            <h3 class="text-lg font-semibold mb-2">Reservations Growth</h3>
            <div class="w-full h-64">
                <canvas id="reservationsChart" class="w-full h-full"></canvas>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const ctx = document.getElementById('reservationsChart').getContext('2d');
                const labels = @json($reservationChartLabels);
                const data = @json($reservationChartData);
                const reservationsChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Total Reservations',
                            data: data,
                            backgroundColor: '#000',
                            borderColor: '#FFDE68',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    precision: 0
                                }
                            }
                        }
                    }
                });

                Livewire.on('reservationsUpdated', payload => {
                    if (!payload) return;
                    reservationsChart.data.labels = payload.labels;
                    reservationsChart.data.datasets[0].data = payload.data;
                    reservationsChart.update();
                });
            });
        </script>

    </div>
    <div class=" bg-white p-4 rounded shadow dark:bg-neutral-600">
        <h3 class="text-lg font-semibold">Upcoming Reservations</h3>
        @if ($upcomingReservations->count() > 0)
            @foreach ($upcomingReservations as $reservation)
                <div class="border-b border-gray-200 py-4">
                    <div class="flex justify-between">
                        <div class="">{{ $reservation->name }} </div>
                        <div class="">
                            {{ $reservation->reservation_time }}
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No upcoming reservations.</p>
        @endif
    </div>
</div>
