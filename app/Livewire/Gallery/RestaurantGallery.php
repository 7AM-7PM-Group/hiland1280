<?php

namespace App\Livewire\Gallery;

use Livewire\Component;

class RestaurantGallery extends Component
{
    public function render()
    {
        return view('livewire.gallery.restaurant-gallery')->layout('components.layouts.public', ['title' => "Gallery - Hiland1280.com"]);
    }
}
