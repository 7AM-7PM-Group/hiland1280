<?php

namespace App\Livewire;

use App\Models\Reservation;
use Livewire\Attributes\Url;
use Livewire\Component;

class ReservationIndex extends Component
{
    public $reservations, $note;

    #[Url(except: '')]
    public $date;

    public function mount()
    {
        // dd($this->date);

        $this->getReservations();
    }

    public function updatedDate()
    {
        $this->getReservations();
    }

    public function getReservations()
    {
        $this->reservations = Reservation::whereDate('reservation_time', $this->date)->get();
    }

    public function openNoteModal($id)
    {
        $reservation = Reservation::find($id);
        $this->note = $reservation->note;
        $this->dispatch('modal-show', name: 'noteModal');
    }

    public function render()
    {
        return view('livewire.reservation-index')->layout('components.layouts.app', ['title' => 'Reservations']);
    }
}
