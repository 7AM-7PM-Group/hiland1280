<?php

namespace App\Livewire\Landingpage;

use Livewire\Component;

class Keyword extends Component
{

    public $keyword;

    public function toogleKeyword()
    {
        $this->keyword = !$this->keyword;
    }

    public function render()
    {
        return view('livewire.landingpage.keyword');
    }
}
