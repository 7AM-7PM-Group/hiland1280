<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url;

class Search extends Component
{
    #[Url('q')]
    public $query;

    public function mount()
    {
        if (!$this->query) {
            // Perform search logic here, e.g., querying the database
            // $this->results = Model::where('field', 'like', '%' . $this->query . '%')->get();
            return redirect()->route('landingpage.landing-page');
        }
    }


    public function render()
    {
        return view('livewire.search')->layout('components.layouts.public', ['title' => 'Search results for "' . $this->query . '"']);
    }
}
