<?php

namespace App\Livewire\Gallery;

use Livewire\Component;

class GalleryList extends Component
{
    public $activeFilter = 'all';
    public $filters = [];
    public $images = [];
    public $hasMore = false;
    public $perPage = 12;
    public $currentPage = 1;

    public function mount()
    {
        // Define filter categories
        $this->filters = [
            ['name' => 'All', 'slug' => 'all'],
            ['name' => 'Food and Drinks', 'slug' => 'food'],
            ['name' => 'Golf View', 'slug' => 'golf-view'],
            ['name' => 'Ambiance', 'slug' => 'ambiance'],
            ['name' => 'Events', 'slug' => 'events'],
        ];

        // Load initial images
        $this->loadImages();
    }

    public function setActiveFilter($filter)
    {
        $this->activeFilter = $filter;
        $this->currentPage = 1;
        $this->loadImages();
    }

    public function loadMore()
    {
        $this->currentPage++;
        $this->loadImages(true);
    }

    public function loadImages($append = false)
    {
        // Sample gallery data - replace with your database queries
        $allImages = [
            // Food Images
            [
                'id' => 1,
                'url' => asset('assets/gallery/food-1.jpg'),
                'title' => '',
                'category' => 'Food',
                'filter' => 'food'
            ],
            [
                'id' => 2,
                'url' => asset('assets/gallery/food-4.jpg'),
                'title' => '',
                'category' => 'Drink',
                'filter' => 'food'
            ],
            [
                'id' => 3,
                'url' => asset('assets/gallery/food-3.jpg'),
                'title' => '',
                'category' => 'Food',
                'filter' => 'food'
            ],
            [
                'id' => 4,
                'url' => asset('assets/gallery/food-5.jpg'),
                'title' => '',
                'category' => 'Drink',
                'filter' => 'food'
            ],
            [
                'id' => 5,
                'url' => asset('assets/gallery/food-2.jpg'),
                'title' => '',
                'category' => 'Food',
                'filter' => 'food'
            ],
            [
                'id' => 6,
                'url' => asset('assets/gallery/food-6.jpg'),
                'title' => '',
                'category' => 'Drink',
                'filter' => 'food'
            ],

            // Golf View Images
            [
                'id' => 11,
                'url' => asset('assets/gallery/golf-1.jpeg'),
                'title' => '',
                'category' => 'Golf View',
                'filter' => 'golf-view'
            ],
            [
                'id' => 12,
                'url' => asset('assets/gallery/golf-2.jpg'),
                'title' => '',
                'category' => 'Golf View',
                'filter' => 'golf-view'
            ],
            [
                'id' => 13,
                'url' => asset('assets/gallery/golf-3.jpg'),
                'title' => '',
                'category' => 'Golf View',
                'filter' => 'golf-view'
            ],

            // Ambiance Images
            [
                'id' => 15,
                'url' => asset('assets/gallery/ambiance-1.jpeg'),
                'title' => '',
                'category' => 'Ambiance',
                'filter' => 'ambiance'
            ],
            [
                'id' => 16,
                'url' => asset('assets/gallery/ambiance-2.jpg'),
                'title' => '',
                'category' => 'Ambiance',
                'filter' => 'ambiance'
            ],
            [
                'id' => 17,
                'url' => asset('assets/gallery/ambiance-3.jpg'),
                'title' => '',
                'category' => 'Ambiance',
                'filter' => 'ambiance'
            ],
            [
                'id' => 18,
                'url' => asset('assets/gallery/ambiance-4.jpg'),
                'title' => '',
                'category' => 'Ambiance',
                'filter' => 'ambiance'
            ],
            [
                'id' => 19,
                'url' => asset('assets/gallery/ambiance-5.jpg'),
                'title' => '',
                'category' => 'Ambiance',
                'filter' => 'ambiance'
            ],
            [
                'id' => 17,
                'url' => asset('assets/gallery/ambiance-6.jpg'),
                'title' => '',
                'category' => 'Ambiance',
                'filter' => 'ambiance'
            ],

            // Events Images
            [
                'id' => 18,
                'url' => asset('assets/gallery/events-1.jpg'),
                'title' => '',
                'category' => 'Events',
                'filter' => 'events'
            ],
            [
                'id' => 19,
                'url' => asset('assets/gallery/events-2.jpg'),
                'title' => '',
                'category' => 'Events',
                'filter' => 'events'
            ],
            [
                'id' => 20,
                'url' => asset('assets/gallery/events-3.jpg'),
                'title' => '',
                'category' => 'Events',
                'filter' => 'events'
            ],
            [
                'id' => 21,
                'url' => asset('assets/gallery/events-4.jpg'),
                'title' => '',
                'category' => 'Events',
                'filter' => 'events'
            ],
            [
                'id' => 22,
                'url' => asset('assets/gallery/events-5.jpg'),
                'title' => '',
                'category' => 'Events',
                'filter' => 'events'
            ],
            [
                'id' => 23,
                'url' => asset('assets/gallery/events-6.jpg'),
                'title' => '',
                'category' => 'Events',
                'filter' => 'events'
            ],
        ];

        // Filter images based on active filter
        $filteredImages = $this->activeFilter === 'all'
            ? $allImages
            : array_filter($allImages, function ($image) {
                return $image['filter'] === $this->activeFilter;
            });

        // Paginate
        $start = ($this->currentPage - 1) * $this->perPage;
        $paginatedImages = array_slice($filteredImages, $start, $this->perPage);

        // Check if there are more images
        $this->hasMore = count($filteredImages) > ($this->currentPage * $this->perPage);

        // Append or replace images
        if ($append) {
            $this->images = array_merge($this->images, $paginatedImages);
        } else {
            $this->images = $paginatedImages;
        }
    }

    public function render()
    {
        return view('livewire.gallery.gallery-list')->layout('components.layouts.public');
    }
}
