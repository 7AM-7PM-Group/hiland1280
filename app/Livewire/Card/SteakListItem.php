<?php

namespace App\Livewire\Card;

use Livewire\Component;

class SteakListItem extends Component
{
    public $title;
    public $price;

    public function render()
    {
        return view('livewire.card.steak-list-item');
    }
}
