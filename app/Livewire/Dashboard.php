<?php

namespace App\Livewire;

use App\Models\Reservation;
use App\Models\Member;
use Livewire\Component;
use Carbon\Carbon;

class Dashboard extends Component
{
    public $title = "Dashboard";

    public $totalReservations;
    public $todayReservations;
    public $totalMembers;
    public $pendingReservations;
    public $recentReservations;
    public $chartData;
    public $chartLabels;

    public function mount()
    {
        $this->loadStatistics();
        $this->loadRecentReservations();
        $this->loadChartData();
    }

    private function loadStatistics()
    {
        $this->totalReservations = Reservation::count();
        $this->todayReservations = Reservation::whereDate('reservation_time', Carbon::today())->count();
        $this->totalMembers = Member::count();
        $this->pendingReservations = Reservation::where('reservation_time', '>', now())->count();
    }

    private function loadRecentReservations()
    {
        $this->recentReservations = Reservation::latest()->take(12)->get();
    }

    private function loadChartData()
    {
        // Data untuk chart sejak 7 hari lalu sampai 7 hari ke depan
        $data = [];
        $labels = [];

        for ($i = 7; $i >= -7; $i--) {
            $date = Carbon::today()->subDays($i);
            $count = Reservation::whereDate('reservation_time', $date)->count();
            $data[] = $count;
            $labels[] = $date->format('d/m');
        }

        $this->chartData = $data;
        $this->chartLabels = $labels;
    }

    public function render()
    {
        return view('livewire.dashboard')->layout('components.layouts.app', ['title' => $this->title]);
    }
}
