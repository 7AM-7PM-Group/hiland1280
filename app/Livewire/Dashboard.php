<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Dashboard extends Component
{
    public $newUsers, $totalReservations, $totalPax, $month, $year, $upcomingReservations;

    // Chart properties
    public $reservationChartLabels = [];
    public $reservationChartData = [];

    public function mount()
    {
        $this->month = date('m');
        $this->year = date('Y');
        $this->newUsers = \App\Models\User::whereMonth('created_at', $this->month)->whereYear('created_at', $this->year)->count();
        $this->totalReservations = \App\Models\Reservation::whereMonth('created_at', $this->month)->whereYear('created_at', $this->year)->count();
        $this->totalPax = \App\Models\Reservation::whereMonth('created_at', $this->month)->whereYear('created_at', $this->year)->sum('number_of_guests');

        $this->upcomingReservations = \App\Models\Reservation::where('reservation_time', '>=', date('Y-m-d H:i:s'))
            ->orderBy('reservation_time', 'asc')
            ->take(8)
            ->get();

        // Build reservations chart data for range: 12 months back -> 2 months ahead
        $start = Carbon::now()->startOfMonth()->subMonths(12);
        $end = Carbon::now()->endOfMonth()->addMonths(2);

        // Aggregate counts by year-month in a single query
        $reservations = \App\Models\Reservation::selectRaw('YEAR(reservation_time) as year, MONTH(reservation_time) as month, COUNT(*) as total')
            ->whereBetween('reservation_time', [$start->toDateTimeString(), $end->toDateTimeString()])
            ->groupBy('year', 'month')
            ->get()
            ->keyBy(function ($item) {
                return $item->year . '-' . str_pad($item->month, 2, '0', STR_PAD_LEFT);
            });

        $period = $start->copy();
        $labels = [];
        $data = [];

        while ($period->lte($end)) {
            $key = $period->year . '-' . str_pad($period->month, 2, '0', STR_PAD_LEFT);
            $labels[] = $period->format('M Y');
            $data[] = isset($reservations[$key]) ? (int) $reservations[$key]->total : 0;
            $period->addMonth();
        }

        $this->reservationChartLabels = $labels;
        $this->reservationChartData = $data;

        // Frontend initializes the chart using the Blade-rendered properties; reactive updates can be added later if necessary.
    }


    public function render()
    {
        return view('livewire.dashboard')->layout('components.layouts.app', ['title' => 'Dashboard']);
    }
}