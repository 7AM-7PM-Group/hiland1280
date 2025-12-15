<?php

namespace App\Livewire\Banner;

use Livewire\Component;

class HomeBanner extends Component
{
    public $title = '';
    public $highlightedTitle = '';
    public $subtitle = '';
    public $buttonText = '';
    public $buttonLink = '/menu-list';
    public $bannerImg = '';

    public $secondButtonText = null;
    public $secondButtonLink = null;

    public function render()
    {
        return view('livewire.banner.home-banner');
    }
}
