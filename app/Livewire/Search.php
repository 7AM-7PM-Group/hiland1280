<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url;
use Illuminate\Support\Str;

class Search extends Component
{
    #[Url('query')]
    public $query;

    public $pages;

    public function mount()
    {
        if (!$this->query) {
            // Perform search logic here, e.g., querying the database
            // $this->results = Model::where('field', 'like', '%' . $this->query . '%')->get();
            return redirect()->route('landingpage.landing-page');
        }
        $this->pages = $this->getPages();
    }

    public function getPages()
    {
        return [
            [
                'title' => 'Home',
                'url' => route('landingpage.landing-page'),
                'content' => 'Restaurant bar dining experience hiland 1280'
            ],
            [
                'title' => 'Menu',
                'url' => route('menu.restaurant-menu'),
                'content' => 'Food drinks cocktails wine menu'
            ],
            [
                'title' => 'Gallery',
                'url' => route('gallery.restaurant-gallery'),
                'content' => 'Restaurant ambience interior photos'
            ],
            [
                'title' => 'Reservation',
                'url' => route('reservation.restaurant-reservation'),
                'content' => 'Book table restaurant reservation'
            ],
        ];
    }

    public function search()
    {
        $this->getResultsProperty();
    }

    public function getResultsProperty()
    {
        if (strlen($this->query) < 2) {
            return [];
        }

        // dd(collect($this->pages), $this->query);

        return collect($this->pages)->filter(function ($page) {
            return Str::contains(
                Str::lower($page['title'] . ' ' . $page['content']),
                Str::lower($this->query)
            );
        });
    }

    public function render()
    {
        return view('livewire.search')->layout('components.layouts.public', ['title' => 'Search results' . $this->query . ' - Hiland1280.com']);
    }
}
