<div class="p-6">
    <!-- Statistik Ringkasan -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white flex flex-col p-4 aspect-video rounded-lg shadow">
            <h3 class="xl:text-2xl text-lg font-semibold">Total Reservasi</h3>
            <p class="xl:text-7xl xl:mt-12 mt-4 text-xl font-bold text-blue-600">{{ $totalReservations }}</p>
        </div>
        <div class="bg-white flex flex-col p-4 aspect-video rounded-lg shadow">
            <h3 class="xl:text-2xl text-lg font-semibold">Reservasi Hari Ini</h3>
            <p class="xl:text-7xl xl:mt-12 mt-4 text-xl font-bold text-green-600">{{ $todayReservations }}</p>
        </div>
        <div class="bg-white flex flex-col p-4 aspect-video rounded-lg shadow">
            <h3 class="xl:text-2xl text-lg font-semibold">Total Member</h3>
            <p class="xl:text-7xl xl:mt-12 mt-4 text-xl font-bold text-purple-600">{{ $totalMembers }}</p>
        </div>
        <div class="bg-white flex flex-col p-4 aspect-video rounded-lg shadow">
            <h3 class="xl:text-2xl text-lg font-semibold">Reservasi Belum Dimulai</h3>
            <p class="xl:text-7xl xl:mt-12 mt-4 text-xl font-bold text-orange-600">{{ $pendingReservations }}</p>
        </div>
    </div>

    <!-- Notifikasi atau Alert -->
    @if ($pendingReservations > 0)
        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-6">
            <p>Ada {{ $pendingReservations }} reservasi yang belum dimulai. Siapkan persiapan yang diperlukan.</p>
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Tabel Reservasi Terbaru -->
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Reservasi Terbaru</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-4 py-2 text-left">Nama</th>
                            <th class="px-4 py-2 text-left">Tanggal & Waktu</th>
                            <th class="px-4 py-2 text-left">Jumlah Tamu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recentReservations as $reservation)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $reservation->name }}</td>
                                <td class="px-4 py-2">
                                    {{ $reservation->reservation_time ? \Carbon\Carbon::parse($reservation->reservation_time)->format('d/m/Y H:i') : 'N/A' }}
                                </td>
                                <td class="px-4 py-2">{{ $reservation->number_of_guests }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Grafik atau Chart -->
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Tren Reservasi</h3>
            <canvas id="reservationChart" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function initReservationChart() {
        const canvas = document.getElementById('reservationChart');
        if (!canvas) {
            return;
        }

        const ctx = canvas.getContext('2d');
        const data = @json($chartData);
        const labels = @json($chartLabels);

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Reservasi',
                    data: data,
                    borderColor: 'rgb(75, 192, 192)',
                    backgroundColor: 'rgba(75, 192, 192, 0.1)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    document.addEventListener('DOMContentLoaded', initReservationChart);
    document.addEventListener('livewire:load', initReservationChart);
</script>
