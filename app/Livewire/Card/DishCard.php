<?php

namespace App\Livewire\Card;

use Livewire\Component;

class DishCard extends Component
{
    public $image;
    public $title;
    public $description;
    public $price;

    public function render()
    {
        return view('livewire.card.dish-card');
    }
}
