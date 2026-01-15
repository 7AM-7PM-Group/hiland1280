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
                    'image' => asset('assets/menu/breakfast/belgian waffle.jpg'),
                    'title' => 'Belgian Waffle',
                    'description' => 'Golden waffle with Greek yogurt, homemade granola, honey purée, blueberry compote, and strawberry salad.',
                    'price' => 'IDR 95K'
                ],
                [
                    'id' => 2,
                    'image' => asset('assets/menu/breakfast/american breakfast.jpg'),
                    'title' => 'American Breakfast',
                    'description' => 'A hearty combination of pancakes, potato hashbrown, sunny-side-up eggs, tomato confit, chicken sausage, bacon, and salted butter.',
                    'price' => 'IDR 115K'
                ],
                [
                    'id' => 3,
                    'image' => asset('assets/menu/breakfast/taco-breakfast-1.jpg'),
                    'title' => 'Taco Breakfast',
                    'description' => 'Two perfectly poached eggs served on crispy corn tortillas, layered with crushed avocado, tomato salsa, Greek yogurt, sumac, and a touch of chili oil.',
                    'price' => 'IDR 95K'
                ],
                [
                    'id' => 4,
                    'image' => asset('assets/menu/breakfast/french toast.jpg'),
                    'title' => 'French Toast',
                    'description' => 'Toasted brioche soaked in vanilla sauce, topped with caramelized banana, fresh berries, and a drizzle of honey.',
                    'price' => 'IDR 105K'
                ],
                [
                    'id' => 5,
                    'image' => asset('assets/menu/breakfast/highland granola.jpg'),
                    'title' => 'Highland Granola',
                    'description' => 'House-made granola with mixed berries, pickled apple, chia pudding, ripe banana, and Greek yogurt drizzled with pure honey.',
                    'price' => 'IDR 95K'
                ],
                [
                    'id' => 6,
                    'image' => asset('assets/menu/breakfast/seasonal fruits.jpg'),
                    'title' => 'Seasonal Fruits',
                    'description' => 'A fresh daily selection of locally sourced fruits, hand-picked for the season.',
                    'price' => 'IDR 85K'
                ],
            ],
            'starter' => [
                [
                    'id' => 7,
                    'image' => asset('assets/menu/starter/hiland caesar salad.jpg'),
                    'title' => 'Hiland Caesar Salad',
                    'description' => 'Baby romaine lettuce, brioche croutons, caesar dressing, and parmesan cheese.',
                    'price' => 'IDR 95K'
                ],
                [
                    'id' => 8,
                    'image' => asset('assets/menu/starter/vegetable bowl.jpg'),
                    'title' => 'Vegetable Bowl',
                    'description' => 'Cured cucumber, zucchini, beetroot, turnip, red onion, feta, walnut, labneh, and olive oil dressing with green oil.',
                    'price' => 'IDR 95K'
                ],
                [
                    'id' => 9,
                    'image' => asset('assets/menu/starter/quinoa bowl.jpg'),
                    'title' => 'Quinoa Bowl',
                    'description' => 'Chickpeas, arugula, feta, avocado, red cabbage, dates, roasted pumpkin, and mustard dressing.',
                    'price' => 'IDR 98K'
                ],
                [
                    'id' => 10,
                    'image' => asset('assets/menu/starter/pumpkin spinach salad.jpg'),
                    'title' => 'Pumpkin & Spinach Salad',
                    'description' => 'Baby spinach, arugula, kalamata olives, feta, pumpkin seeds, red onion, mint, and wholegrain mustard dressing.',
                    'price' => 'IDR 95K'
                ],
                [
                    'id' => 11,
                    'image' => asset('assets/menu/starter/classic beef tartare.jpg'),
                    'title' => 'Classic Beef Tartare',
                    'description' => 'Finely chopped beef with mustard, shallot, chives, capers, and egg yolk. Served with potato terrine.',
                    'price' => 'IDR 145K'
                ],
                [
                    'id' => 12,
                    'image' => asset('assets/menu/starter/coleslaw leaves.jpg'),
                    'title' => 'Coleslaw Leaves',
                    'description' => 'Mixed cabbage, cherry tomatoes, guacamole, arugula, feta, grilled sweet corn, red onion, and herb mayo.',
                    'price' => 'IDR 95K'
                ],
            ],
            'soups' => [
                [
                    'id' => 13,
                    'image' => asset('assets/menu/soups/chicken clear soups.jpg'),
                    'title' => 'Chicken Clear Soup',
                    'description' => 'Light, Flavourful Broth with Carrot, Baby Bean, Potato, Leek, Celery, Herbs.',
                    'price' => 'IDR 115K'
                ],
            ],
            'main-course' => [
                [
                    'id' => 14,
                    'image' => asset('assets/menu/main-course/beef rump cap.jpg'),
                    'title' => 'Beef Rump Cap',
                    'description' => 'Tender roasted beef rump cap with shoestring fries, rosemary salt, olive oil, and watercress.',
                    'price' => 'IDR 225K'
                ],
                [
                    'id' => 15,
                    'image' => asset('assets/menu/main-course/chicken-snitzel.jpg'),
                    'title' => 'Chicken Schnitzel',
                    'description' => 'Crispy chicken sliders with shredded romaine, sweet potato chips, pickled cucumber, and mayonnaise on a brioche bun.',
                    'price' => 'IDR 180K'
                ],
                [
                    'id' => 16,
                    'image' => asset('assets/menu/main-course/cauliflower gratin.jpg'),
                    'title' => 'Cauliflower Gratin',
                    'description' => 'Baked cauliflower with labneh, herb oil, pumpkin purée, dukkah sumac, and paprika.',
                    'price' => 'IDR 90K'
                ],
                [
                    'id' => 17,
                    'image' => asset('assets/menu/main-course/wagyu beef burger.jpg'),
                    'title' => 'Wagyu Beef Burger',
                    'description' => 'Hand-pressed wagyu patty with caramelized onion, aged cheddar, and brioche bun, served with butter-coat fries and mixed salad.',
                    'price' => 'IDR 285K'
                ],
                [
                    'id' => 18,
                    'image' => asset('assets/menu/main-course/house made posk sausage.jpg'),
                    'title' => 'House Made Pork Sausage',
                    'description' => 'Served with mashed potato, green peas, sautéed mushrooms, and onion jam with black pepper sauce.',
                    'price' => 'IDR 215K'
                ],
                [
                    'id' => 19,
                    'image' => asset('assets/menu/main-course/seared-barramundi.jpg'),
                    'title' => 'Seared Barramundi',
                    'description' => 'Pan-seared barramundi with beurre blanc, dried capers, lemon, sweet potato chips, and mesclun salad.',
                    'price' => 'IDR 190K'
                ],
                [
                    'id' => 20,
                    'image' => asset('assets/menu/main-course/swedish meetball.jpg'),
                    'title' => 'Swedish Meatball',
                    'description' => 'Classic Swedish-style meatballs with mashed potato, mushroom, carrots, cranberry compote, and parsley.',
                    'price' => 'IDR 275K'
                ],
                [
                    'id' => 99,
                    'image' => asset('assets/menu/main-course/fish and chips.jpg'),
                    'title' => 'Fish and Chips',
                    'description' => 'Crispy tilapia fillet with shoestring fries, green pea purée, tartare sauce, lemon, and watercress.',
                    'price' => 'IDR 180K'
                ],
            ],
            'desserts' => [
                [
                    'id' => 21,
                    'image' => asset('assets/menu/dessert/coconut tiramisu.jpg'),
                    'title' => 'Coconut Tiramisu',
                    'description' => 'Coconut-infused tiramisu topped with cacao and crisp wafer.',
                    'price' => 'IDR 95K'
                ],
                [
                    'id' => 22,
                    'image' => asset('assets/menu/dessert/chocolate-cake.jpg'),
                    'title' => 'Chocolate Cake',
                    'description' => 'Rich chocolate cake layered with crème chantilly and citrus candy.',
                    'price' => 'IDR 105K'
                ],
                [
                    'id' => 23,
                    'image' => asset('assets/menu/dessert/warm-apple-pie.jpg'),
                    'title' => 'Warm Apple Pie',
                    'description' => 'Homemade apple compote with vanilla chantilly and chocolate sauce.',
                    'price' => 'IDR 95K'
                ],
                [
                    'id' => 24,
                    'image' => asset('assets/menu/dessert/spanish churros.jpg'),
                    'title' => 'Spanish Churros',
                    'description' => 'Classic churros dusted with sugar and cinnamon, served with vanilla sauce.',
                    'price' => 'IDR 90K'
                ],
                [
                    'id' => 25,
                    'image' => asset('assets/menu/dessert/mille-fuile.jpg'),
                    'title' => 'Mille Feuille',
                    'description' => 'Crisp pastry layers with vanilla custard and fresh berry salad.',
                    'price' => 'IDR 100K'
                ],
            ],
            'steaks' => [
                [
                    'id' => 26,
                    'title' => 'Black Angus Striploin',
                    'price' => '650K - 850K'
                ],
                [
                    'id' => 27,
                    'title' => 'Black Angus Rib Eye',
                    'price' => '700K - 920K'
                ],
                [
                    'id' => 28,
                    'title' => 'Black Angus Top Sirloin',
                    'price' => '550K - 750K'
                ],
                [
                    'id' => 29,
                    'title' => 'Black Angus Picanha',
                    'price' => '650K - 850K'
                ],

                [
                    'id' => 38,
                    'title' => 'Organic Picanha',
                    'price' => '450K - 450K'
                ],
                [
                    'id' => 39,
                    'title' => 'Organic Top Sirloin',
                    'price' => '400K - 400K'
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
