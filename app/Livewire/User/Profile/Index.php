<?php

namespace App\Livewire\User\Profile;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.user')]
    public function render()
    {
        return view('livewire.user.profile.index');
    }
}
