<?php

namespace App\Livewire\Dishes;

use Livewire\Component;

class SignatureDishes extends Component
{
    public $dishes;

    public function mount()
    {
        $this->dishes = [
            [
                'id' => 1,
                'image' => asset('menu/menu-4.jpg'),
                'title' => 'Beef Shawarma',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque justo urna, tristique eu dolor at, vulputate finibus mi.',
                'price' => 'IDR 900K'
            ],
            [
                'id' => 2,
                'image' => asset('menu/menu-4.jpg'),
                'title' => 'Beef Shawarma',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque justo urna, tristique eu dolor at, vulputate finibus mi.',
                'price' => 'IDR 900K'
            ],
            [
                'id' => 3,
                'image' => asset('menu/menu-4.jpg'),
                'title' => 'Beef Shawarma',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque justo urna, tristique eu dolor at, vulputate finibus mi.',
                'price' => 'IDR 900K'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.dishes.signature-dishes');
    }
}
