<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::get();
    }


    public function render()
    {
        return view('livewire.user-index')->layout('components.layouts.app', ['title' => 'Our Admins']);
    }
}
