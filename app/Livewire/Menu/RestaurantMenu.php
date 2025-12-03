<?php

namespace App\Livewire\Menu;

use Livewire\Component;

class RestaurantMenu extends Component
{
    public $activeTab = 'breakfast';

    public $menu = [
        'breakfast' => [
            ['name' => 'Sirloin Steak', 'price' => 32],
            ['name' => 'BBQ Glazed Ribs', 'price' => 28],
        ],
        'starter' => [
            ['name' => 'Lamb Shawarma Plate', 'price' => 24],
            ['name' => 'Grilled Chicken with Couscous', 'price' => 19],
        ],
        'main_course' => [
            ['name' => 'Signature Cappuccino', 'price' => 6],
            ['name' => 'Baklava', 'price' => 9],
            ['name' => 'Espresso Affogato', 'price' => 11],
        ],
        'dessert' => [
            ['name' => 'Chocolate Cake', 'price' => 8],
            ['name' => 'Cheesecake', 'price' => 7],
        ],
        'steaks' => [
            ['name' => 'Ribeye Steak', 'price' => 35],
            ['name' => 'T-Bone Steak', 'price' => 40],
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
