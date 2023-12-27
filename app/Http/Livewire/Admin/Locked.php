<?php

namespace App\Http\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Locked extends Component
{
    #[Layout('layouts.admin-auth')]
    public function render()
    {
        return view('livewire.admin.locked');
    }
}
