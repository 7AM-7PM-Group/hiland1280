<?php

namespace App\Livewire\Landingpage;

use Livewire\Component;
use Livewire\Attributes\Layout;

class LandingPage extends Component
{

    public function render()
    {
        return view('livewire.landingpage.landing-page')->layout('components.layouts.public', ['title' => 'Hiland 1280 Restaurant | Bedugul Restaurant']);
    }
}
