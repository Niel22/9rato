<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.user')]
    public function render()
    {
        return view('livewire.user.dashboard');
    }
}
