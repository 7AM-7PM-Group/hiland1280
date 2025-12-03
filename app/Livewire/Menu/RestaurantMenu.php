<?php

namespace App\Livewire\Menu;

use Livewire\Component;

class RestaurantMenu extends Component
{
    public $activeTab = 'breakfast';

    public $expandedItem = null; // Track which item is expanded

    public $menu = [
        'breakfast' => [
            [
                'name' => 'Taco Breakfast',
                'price' => 95,
                'description' => 'Two perfectly poached eggs served on crispy corn tortillas, layered with crushed avocado, tomato salsa, Greek yogurt, sumac, and a touch of chili oil.',
                'addons' => [
                    ['name' => 'Crispy Bacon', 'price' => 25],
                    ['name' => 'Salmon Gravlax', 'price' => 40],
                    ['name' => 'Grilled Chicken', 'price' => 25],
                ],
            ],
            [
                'name' => 'Prawn & Crab Omelet',
                'price' => 115,
                'description' => 'A light and creamy omelette filled with prawn and crab, paired with avocado, spicy mayo, and tomato jam. Served with toasted focaccia and coriander pesto.',
                'addons' => [],
            ],

            [
                'name' => 'Highland Granola',
                'price' => 95,
                'description' => 'House-made granola with mixed berries, pickled apple, chia pudding, ripe banana, and Greek yogurt drizzled with pure honey.',
                'addons' => [],
            ],

            [
                'name' => 'Truffle Scrambled Eggs',
                'price' => 98,
                'description' => 'Soft scrambled eggs enriched with truffle, topped with crispy pancetta, fresh chives, and sour cream on sourdough toast.',
                'addons' => [],
            ],

            [
                'name' => 'Beef and Eggs',
                'price' => 155,
                'description' => 'Your choice of eggs, served with roasted beef, sautéed potatoes, spinach, kale, tomato salad, chimichurri, and hollandaise sauce.',
                'addons' => [],
            ],

            [
                'name' => 'Pulled Duck Confit',
                'price' => 130,
                'description' => 'Pulled duck confit on crispy potato hashbrown, with sautéed spinach, mushrooms, parmesan, hollandaise, and a touch of balsamic glaze.',
                'addons' => [],
            ],

            [
                'name' => 'Coconut Pancake',
                'price' => 105,
                'description' => 'Fluffy coconut pancake with coconut-lime ice cream, almond sponge, honeycomb, and sugarcane syrup dusted with mint.',
                'addons' => [],
            ],

            // --- Right column ---
            [
                'name' => 'American Breakfast',
                'price' => 115,
                'description' => 'A hearty combination of pancakes, potato hashbrown, sunny-side-up eggs, tomato confit, chicken sausage, bacon, and salted butter.',
                'addons' => [],
            ],

            [
                'name' => 'Belgian Waffle',
                'price' => 95,
                'description' => 'Golden waffle with Greek yogurt, homemade granola, honey purée, blueberry compote, and strawberry salad.',
                'addons' => [
                    ['name' => 'Crispy Bacon', 'price' => 25],
                    ['name' => 'Fried Chicken', 'price' => 30],
                ],
            ],

            [
                'name' => 'Turkish Breakfast',
                'price' => 98,
                'description' => 'Two poached eggs with hummus, labneh, chili oil, cumin, and paprika, served with pita bread and micro herbs.',
                'addons' => [
                    ['name' => 'Crispy Bacon', 'price' => 25],
                    ['name' => 'Fried Chicken', 'price' => 30],
                ],
            ],

            [
                'name' => 'Corn Fritter',
                'price' => 95,
                'description' => 'Crispy corn fritters topped with poached eggs, Greek yogurt, avocado, tomato salsa, watercress, parmesan, and chili oil.',
                'addons' => [
                    ['name' => 'Crispy Bacon', 'price' => 25],
                    ['name' => 'Fried Chicken', 'price' => 30],
                ],
            ],

            [
                'name' => 'Potato Terrine Benedict',
                'price' => 95,
                'description' => 'Two poached eggs on layered potato terrine with spinach, kale, jalapeño salsa, smoked paprika, hollandaise, and micro herbs.',
                'addons' => [
                    ['name' => 'Crispy Bacon', 'price' => 25],
                    ['name' => 'Salmon Gravlax', 'price' => 40],
                ],
            ],

            [
                'name' => 'Eggs Shakshuka',
                'price' => 105,
                'description' => 'Baked eggs in a rich tomato and capsicum sauce with feta, chimichurri, and toasted sourdough.',
                'addons' => [],
            ],

            [
                'name' => 'Seasonal Fruits',
                'price' => 85,
                'description' => 'A fresh daily selection of locally sourced fruits, hand-picked for the season.',
                'addons' => [],
            ],

            [
                'name' => 'French Toast',
                'price' => 105,
                'description' => 'Toasted brioche soaked in vanilla sauce, topped with caramelized banana, fresh berries, and a drizzle of honey.',
                'addons' => [],
            ],
        ],
        'starter' => [
            [
                'name' => 'Hiland Caesar Salad',
                'price' => 95,
                'description' => 'Baby romaine lettuce, brioche croutons, caesar dressing, and parmesan cheese.',
                'addons' => [
                    ['name' => 'Crispy Bacon', 'price' => 25],
                    ['name' => 'Salmon Gravlax', 'price' => 40],
                    ['name' => 'Grilled Chicken', 'price' => 25],
                ]
            ],

            [
                'name' => 'Vegetable Bowl',
                'price' => 95,
                'description' => 'Cured cucumber, zucchini, beetroot, turnip, red onion, feta, walnut, labneh, and olive oil dressing with green oil.',
                'addons' => [
                    ['name' => 'Crispy Bacon', 'price' => 25],
                    ['name' => 'Salmon Gravlax', 'price' => 40],
                    ['name' => 'Grilled Chicken', 'price' => 25],
                ]
            ],

            [
                'name' => 'Hiland Quinoa Bowl',
                'price' => 98,
                'description' => 'Chickpeas, arugula, feta, avocado, red cabbage, dates, roasted pumpkin, and mustard dressing.',
                'addons' => [
                    ['name' => 'Salmon Gravlax', 'price' => 40],
                    ['name' => 'Grilled Chicken', 'price' => 25],
                ]
            ],

            [
                'name' => 'Pumpkin & Spinach Salad',
                'price' => 95,
                'description' => 'Baby spinach, arugula, kalamata olives, feta, pumpkin seeds, red onion, mint, and wholegrain mustard dressing.',
                'addons' => []
            ],

            [
                'name' => 'Classic Beef Tartare',
                'price' => 145,
                'description' => 'Finely chopped beef with mustard, shallot, chives, capers, and egg yolk. Served with potato terrine.',
                'addons' => []
            ],

            [
                'name' => 'Coleslaw Leaves',
                'price' => 95,
                'description' => 'Mixed cabbage, cherry tomatoes, guacamole, arugula, feta, grilled sweet corn, red onion, and herb mayo.',
                'addons' => [
                    ['name' => 'Fried Chicken', 'price' => 30],
                ]
            ],
        ],
        'soups' => [
            [
                'name' => 'Chicken Clear Soup',
                'price' => 115,
                'description' => 'Light, Flavourful Broth with Carrot, Baby Bean, Potato, Leek, Celery, Herbs',
                'addons' => [],
            ],
            [
                'name' => 'Osso Bucco Soup',
                'price' => 135,
                'description' => 'Slow-Braised Beef Broth With Leek, Shallot, Radish, Carrot, Tomato, And Fresh Parsley.',
                'addons' => [],
            ],
        ],
        'main_course' => [
            [
                'name' => 'Cauliflower Gratin',
                'price' => 90,
                'description' => 'Baked cauliflower with labneh, herb oil, pumpkin purée, dukkah sumac, and paprika.',
                'addons' => []
            ],

            [
                'name' => 'Fish & Chips',
                'price' => 180,
                'description' => 'Crispy tilapia fillet with shoestring fries, green pea purée, tartare sauce, lemon, and watercress.',
                'addons' => []
            ],

            [
                'name' => 'Chicken Schnitzel Sliders',
                'price' => 180,
                'description' => 'Crispy chicken sliders with shredded romaine, sweet potato chips, pickled cucumber, and mayonnaise on a brioche bun.',
                'addons' => []
            ],

            [
                'name' => 'Seared Barramundi',
                'price' => 190,
                'description' => 'Pan-seared barramundi with beurre blanc, dried capers, lemon, sweet potato chips, and mesclun salad.',
                'addons' => []
            ],

            [
                'name' => 'Housemade Pork Sausage',
                'price' => 215,
                'description' => 'Served with mashed potato, green peas, sautéed mushrooms, and onion jam with black pepper sauce.',
                'addons' => []
            ],

            [
                'name' => 'Grilled Half Chicken',
                'price' => 235,
                'description' => 'Juicy grilled half chicken with mashed potato, sautéed vegetables, and natural jus.',
                'addons' => []
            ],

            [
                'name' => 'Braised Baby Back Ribs (400g)',
                'price' => 255,
                'description' => 'Slow-cooked ribs glazed in house BBQ sauce, served with coleslaw leaves, grilled corn, and chives.',
                'addons' => []
            ],

            [
                'name' => '200g Wagyu Beef Burger',
                'price' => 285,
                'description' => 'Hand-pressed wagyu patty with caramelized onion, aged cheddar, and brioche bun, served with butter-coat fries and mixed salad.',
                'addons' => []
            ],

            [
                'name' => 'Crispy Pork Belly',
                'price' => 275,
                'description' => 'Crisp-skin pork belly with potato purée, mesclun salad, apple compote, and mustard sauce.',
                'addons' => []
            ],

            [
                'name' => 'Beef Swedish Meatballs',
                'price' => 275,
                'description' => 'Classic Swedish-style meatballs with mashed potato, mushroom, carrots, cranberry compote, and parsley.',
                'addons' => []
            ],

            [
                'name' => 'Chilled Roasted Beef Rump Cap',
                'price' => 225,
                'description' => 'Tender roasted beef rump cap with shoestring fries, rosemary salt, olive oil, and watercress.',
                'addons' => []
            ],
        ],
        'dessert' => [
           [
                'name' => 'Coconut Tiramisu',
                'price' => 95,
                'description' => 'Coconut-infused tiramisu topped with cacao and crisp wafer.',
                'addons' => []
            ],

            [
                'name' => 'Chocolate Cake',
                'price' => 105,
                'description' => 'Rich chocolate cake layered with crème chantilly and citrus candy.',
                'addons' => []
            ],

            [
                'name' => 'Warm Apple Pie',
                'price' => 95,
                'description' => 'Homemade apple compote with vanilla chantilly and chocolate sauce.',
                'addons' => []
            ],

            [
                'name' => 'Spanish Churros',
                'price' => 90,
                'description' => 'Classic churros dusted with sugar and cinnamon, served with vanilla sauce.',
                'addons' => []
            ],

            [
                'name' => 'Matcha Crème Brûlée',
                'price' => 95,
                'description' => 'Silky matcha custard with almond tuile and lemon cream.',
                'addons' => []
            ],

            [
                'name' => 'Mille-Feuille',
                'price' => 100,
                'description' => 'Crisp pastry layers with vanilla custard and fresh berry salad.',
                'addons' => []
            ],
        ],
        'steaks' => [
            [
                'name' => 'Black Angus Striploin',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 650],
                    ['weight' => '400g', 'price' => 850],
                ],
                'addons' => []
            ],
            [
                'name' => 'Black Angus Rib Eye',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 700],
                    ['weight' => '400g', 'price' => 920],
                ],
                'addons' => []
            ],
            [
                'name' => 'Black Angus Top Sirloin',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 550],
                    ['weight' => '400g', 'price' => 750],
                ],
                'addons' => []
            ],
            [
                'name' => 'Black Angus Picanha',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 650],
                    ['weight' => '400g', 'price' => 850],
                ],
                'addons' => []
            ],
            [
                'name' => 'Wagyu MB 8–9 Top Sirloin',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 650],
                    ['weight' => '400g', 'price' => 850],
                ],
                'addons' => []
            ],
            [
                'name' => 'Wagyu MB 8–9 Picanha',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 750],
                    ['weight' => '400g', 'price' => 950],
                ],
                'addons' => []
            ],
            [
                'name' => 'Australian Striploin',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 550],
                    ['weight' => '400g', 'price' => 750],
                ],
                'addons' => []
            ],
            [
                'name' => 'Australian Cube Roll',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 500],
                    ['weight' => '400g', 'price' => 700],
                ],
                'addons' => []
            ],
            [
                'name' => 'Black Angus OP Rib 1.2KG',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '1.2Kg', 'price' => 2250],
                ],
                'addons' => []
            ],

            // -------------------------
            // GRASS-FED (300g only)
            // -------------------------
            [
                'name' => 'Organic Cube Roll',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 550],
                ],
                'addons' => []
            ],
            [
                'name' => 'Organic Striploin',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 500],
                ],
                'addons' => []
            ],
            [
                'name' => 'Organic Hanging Tender',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 450],
                ],
                'addons' => []
            ],
            [
                'name' => 'Organic Picanha',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 450],
                ],
                'addons' => []
            ],
            [
                'name' => 'Organic Top Sirloin',
                'price' => null,
                'description' => null,
                'weight_options' => [
                    ['weight' => '300g', 'price' => 400],
                ],
                'addons' => []
            ],
        ],
    ];

    public $extraDishes = [
        'breakfast' => [
            ['name' => 'Avocado', 'price' => 25],
            ['name' => 'Bacon', 'price' => 25],
            ['name' => 'Salmon Gravlax', 'price' => 40],
            ['name' => 'Corn Fritter', 'price' => 25],
            ['name' => 'Hummus', 'price' => 30],
            ['name' => 'Pumpkin Purée', 'price' => 25],
            ['name' => 'Spinach & Kale', 'price' => 25],
            ['name' => 'Sauces', 'price' => 20],
            ['name' => 'Potato Terrine', 'price' => 25],
            ['name' => 'Breads', 'price' => 20],
            ['name' => 'Cream Cheese', 'price' => 25],
            ['name' => 'Cheese', 'price' => 30],
            ['name' => 'Egg', 'price' => 15],
        ],
        'starter' => [
            ['name' => 'Mashed Potato', 'price' => 40],
            ['name' => 'Buttercoat Fries', 'price' => 40],
            ['name' => 'Shoestring Fries', 'price' => 40],
            ['name' => 'Sautéed Vegetables', 'price' => 40],
            ['name' => 'Roasted Baby Carrot', 'price' => 40],
            ['name' => 'Grilled Sweet Corn', 'price' => 40],
            ['name' => 'Sautéed Mushroom', 'price' => 40],
            ['name' => 'Mixed Salad', 'price' => 40],
            ['name' => 'Coleslaw Salad', 'price' => 40],
            ['name' => 'Spinach and Arugula Salad', 'price' => 40],
        ],
        'main_course' => [
            ['name' => 'Mashed Potato', 'price' => 40],
            ['name' => 'Buttercoat Fries', 'price' => 40],
            ['name' => 'Shoestring Fries', 'price' => 40],
            ['name' => 'Sautéed Vegetables', 'price' => 40],
            ['name' => 'Roasted Baby Carrot', 'price' => 40],
            ['name' => 'Grilled Sweet Corn', 'price' => 40],
            ['name' => 'Sautéed Mushroom', 'price' => 40],
            ['name' => 'Mixed Salad', 'price' => 40],
            ['name' => 'Coleslaw Salad', 'price' => 40],
            ['name' => 'Spinach and Arugula Salad', 'price' => 40],
        ],
    ];

    public $extraSauces = [
        'main_course' => [
            ['name' => 'Mushroom Sauce', 'price' => 20],
            ['name' => 'Black Pepper Sauce', 'price' => 20],
            ['name' => 'Red Wine Sauce', 'price' => 20],
            ['name' => 'Mustard Sauce', 'price' => 20],
            ['name' => 'Hollandise', 'price' => 20],
            ['name' => 'Cafe De Paris', 'price' => 20],
            ['name' => 'L\'Entrecote', 'price' => 20],
            ['name' => 'Chimichurri', 'price' => 20],
        ],
    ];

    public function toggleItem($tab, $index)
    {
        $itemKey = "{$tab}-{$index}";
        $this->expandedItem = ($this->expandedItem === $itemKey) ? null : $itemKey;
    }

    public function setTab($tab)
    {
        $this->activeTab = $tab;
        $this->expandedItem = null; // Reset expanded item when changing tabs
    }

    public function render()
    {
        return view('livewire.menu.restaurant-menu');
    }
}
