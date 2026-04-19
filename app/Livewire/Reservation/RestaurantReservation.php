<?php

namespace App\Livewire\Reservation;

use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Validate;

class RestaurantReservation extends Component
{
    #[Validate('required|date|after_or_equal:today')]
    public $date;

    #[Validate('required')]
    public $time;

    #[Validate('required|integer|min:1|max:20')]
    public $guests = 2; // Default from design

    #[Validate('required|min:2')]
    public $name;

    #[Validate('required')]
    public $phone;

    public $occasion = '';

    public $notes = '';

    // UI State for success message
    public $isSubmitted = false;

    public $isLoading = false;

    public function submit()
    {
        $this->isLoading = true;

        // Livewire automatically runs validation based on attributes above
        $this->validate();

        // Here you would typically save to database or send email
        Reservation::create([
            'reservation_time'=> Carbon::parse("{$this->date} {$this->time}"),
            'number_of_guests' => $this->guests,
            'name' => $this->name,
            'phone' => $this->phone,
            'occasion' => $this->occasion,
            'note' => $this->notes,
            'email' => 'example@email.com'
        ]);

        // Show success state
        $this->isSubmitted = true;
        $this->isLoading = false;

        // Optional: Reset form except for date maybe?
        $this->reset(['guests', 'name', 'phone', 'occasion', 'notes']);
    }

    public function render()
    {
        return view('livewire.reservation.restaurant-reservation')->layout('components.layouts.public', ['title' => 'Reservations - Hiland1280.com', 'breadcrumb' => 'Reservations']);
    }
}
