<?php

namespace App\Livewire\Reservation;

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

        // Simulate a delay for visual feedback (remove this in production)
        sleep(1);

        // Here you would typically save to database or send email
        // Reservation::create($this->all());

        // Show success state
        $this->isSubmitted = true;
        $this->isLoading = false;

        // Optional: Reset form except for date maybe?
        $this->reset(['guests', 'name', 'phone', 'occasion', 'notes']);
    }

    public function render()
    {
        return view('livewire.reservation.restaurant-reservation')->layout('components.layouts.public', ['title' => 'Make a Reservation']);
    }
}
