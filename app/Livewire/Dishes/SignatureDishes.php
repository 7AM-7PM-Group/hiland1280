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
                'image' => asset('menu/main-course/beef rump cap.jpg'),
                'title' => 'Beef Rump Cap',
                'description' => 'Roasted beef rump cap served with shoestring fries and seasonal vegetables',
            ],
            [
                'id' => 2,
                'image' => asset('menu/dessert/chocolate-cake.jpg'),
                'title' => 'Chocolate Cake',
                'description' => 'Rich chocolate cake layered with crème chantilly and citrus candy',
            ],
            [
                'id' => 3,
                'image' => asset('menu/main-course/wagyu beef burger.jpg'),
                'title' => 'Wagyu Beef Burger',
                'description' => 'Hand-pressed wagyu patty served with butter-coat fries and mixed salad',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.dishes.signature-dishes');
    }
}
