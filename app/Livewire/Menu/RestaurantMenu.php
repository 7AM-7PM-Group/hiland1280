<?php

namespace App\Livewire\Menu;

use Livewire\Component;

class RestaurantMenu extends Component
{
    public function render()
    {
        return view('livewire.menu.restaurant-menu')->layout('components.layouts.public', ['title' => 'Menu - Hiland1280.com', 'breadcrumb' => 'Menu']);
    }
}
