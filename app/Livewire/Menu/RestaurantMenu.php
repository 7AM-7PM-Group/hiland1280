<?php

namespace App\Livewire\Menu;

use Livewire\Component;

class RestaurantMenu extends Component
{
    public $activeTab = 'grill';

    public $menu = [
        'grill' => [
            ['name' => 'Sirloin Steak', 'price' => 32],
            ['name' => 'BBQ Glazed Ribs', 'price' => 28],
        ],
        'plates' => [
            ['name' => 'Lamb Shawarma Plate', 'price' => 24],
            ['name' => 'Grilled Chicken with Couscous', 'price' => 19],
        ],
        'coffee' => [
            ['name' => 'Signature Cappuccino', 'price' => 6],
            ['name' => 'Baklava', 'price' => 9],
            ['name' => 'Espresso Affogato', 'price' => 11],
        ],
    ];

    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        return view('livewire.menu.restaurant-menu');
    }
}
