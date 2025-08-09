<?php

namespace App\Livewire\User\Profile;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Kyc extends Component
{
    #[Layout('components.layouts.user')]
    public function render()
    {
        return view('livewire.user.profile.kyc');
    }
}
