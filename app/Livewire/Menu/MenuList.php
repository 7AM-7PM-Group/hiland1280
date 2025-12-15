<?php

namespace App\Livewire\Menu;

use Livewire\Component;

class MenuList extends Component
{
    public $activeCategory = 'breakfast';
    public $categories = [];
    public $menuItems = [];
    public $activeCategoryName = 'BREAKFAST';

    public function mount()
    {
        // Define categories
        $this->categories = [
            ['name' => 'Breakfast', 'slug' => 'breakfast'],
            ['name' => 'Starter', 'slug' => 'starter'],
            ['name' => 'Soups', 'slug' => 'soups'],
            ['name' => 'Main Course', 'slug' => 'main-course'],
            ['name' => 'Desserts', 'slug' => 'desserts'],
            ['name' => 'Steaks', 'slug' => 'steaks'],
        ];

        // Load initial menu items
        $this->loadMenuItems();
    }

    public function setActiveCategory($category)
    {
        $this->activeCategory = $category;
        $this->loadMenuItems();

        // Update active category name
        $categoryData = collect($this->categories)->firstWhere('slug', $category);
        $this->activeCategoryName = strtoupper($categoryData['name'] ?? '');
    }

    public function loadMenuItems()
    {
        // This is sample data - replace with your database queries
        $allMenuItems = [
            'breakfast' => [
                [
                    'id' => 1,
                    'image' => asset('menu/breakfast-1.jpg'),
                    'title' => 'Beef Shawarma',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque justo urna, tristique eu dolor at, vulputate finibus mi.',
                    'price' => 'IDR 900K'
                ],
                [
                    'id' => 2,
                    'image' => asset('menu/breakfast-2.jpg'),
                    'title' => 'Classic Pancakes',
                    'description' => 'Fluffy pancakes served with maple syrup, fresh berries, and whipped cream.',
                    'price' => 'IDR 150K'
                ],
                [
                    'id' => 3,
                    'image' => asset('menu/breakfast-3.jpg'),
                    'title' => 'Eggs Benedict',
                    'description' => 'Poached eggs on English muffins with hollandaise sauce and crispy bacon.',
                    'price' => 'IDR 180K'
                ],
            ],
            'starter' => [
                [
                    'id' => 4,
                    'image' => asset('menu/starter-1.jpg'),
                    'title' => 'Caesar Salad',
                    'description' => 'Fresh romaine lettuce with parmesan cheese, croutons, and caesar dressing.',
                    'price' => 'IDR 120K'
                ],
                [
                    'id' => 5,
                    'image' => asset('menu/starter-2.jpg'),
                    'title' => 'Bruschetta',
                    'description' => 'Toasted bread topped with fresh tomatoes, garlic, basil, and olive oil.',
                    'price' => 'IDR 95K'
                ],
                [
                    'id' => 6,
                    'image' => asset('menu/starter-3.jpg'),
                    'title' => 'Calamari Fritti',
                    'description' => 'Crispy fried calamari rings served with marinara sauce.',
                    'price' => 'IDR 140K'
                ],
            ],
            'soups' => [
                [
                    'id' => 7,
                    'image' => asset('menu/soup-1.jpg'),
                    'title' => 'Tomato Soup',
                    'description' => 'Creamy tomato soup with fresh herbs and a touch of cream.',
                    'price' => 'IDR 85K'
                ],
                [
                    'id' => 8,
                    'image' => asset('menu/soup-2.jpg'),
                    'title' => 'French Onion Soup',
                    'description' => 'Rich onion soup topped with melted gruyere cheese and croutons.',
                    'price' => 'IDR 110K'
                ],
            ],
            'main-course' => [
                [
                    'id' => 9,
                    'image' => asset('menu/main-1.jpg'),
                    'title' => 'Grilled Salmon',
                    'description' => 'Fresh Atlantic salmon grilled to perfection with lemon butter sauce.',
                    'price' => 'IDR 280K'
                ],
                [
                    'id' => 10,
                    'image' => asset('menu/main-2.jpg'),
                    'title' => 'Chicken Parmigiana',
                    'description' => 'Breaded chicken breast topped with marinara sauce and mozzarella.',
                    'price' => 'IDR 220K'
                ],
                [
                    'id' => 11,
                    'image' => asset('menu/main-3.jpg'),
                    'title' => 'Lamb Chops',
                    'description' => 'Tender lamb chops marinated with herbs and grilled perfectly.',
                    'price' => 'IDR 350K'
                ],
            ],
            'desserts' => [
                [
                    'id' => 12,
                    'image' => asset('menu/dessert-1.jpg'),
                    'title' => 'Tiramisu',
                    'description' => 'Classic Italian dessert with coffee-soaked ladyfingers and mascarpone.',
                    'price' => 'IDR 95K'
                ],
                [
                    'id' => 13,
                    'image' => asset('menu/dessert-2.jpg'),
                    'title' => 'Chocolate Lava Cake',
                    'description' => 'Warm chocolate cake with a molten center, served with vanilla ice cream.',
                    'price' => 'IDR 110K'
                ],
            ],
            'steaks' => [
                [
                    'id' => 14,
                    'image' => asset('menu/steak-1.jpg'),
                    'title' => 'Ribeye Steak',
                    'description' => 'Prime ribeye steak grilled to your preference, served with sides.',
                    'price' => 'IDR 450K'
                ],
                [
                    'id' => 15,
                    'image' => asset('menu/steak-2.jpg'),
                    'title' => 'Tenderloin Steak',
                    'description' => 'Premium beef tenderloin with red wine reduction and truffle butter.',
                    'price' => 'IDR 520K'
                ],
                [
                    'id' => 16,
                    'image' => asset('menu/steak-3.jpg'),
                    'title' => 'T-Bone Steak',
                    'description' => 'Massive T-bone steak with garlic butter and grilled vegetables.',
                    'price' => 'IDR 480K'
                ],
            ],
        ];

        $this->menuItems = $allMenuItems[$this->activeCategory] ?? [];
    }

    public function render()
    {
        return view('livewire.menu.menu-list');
    }
}
