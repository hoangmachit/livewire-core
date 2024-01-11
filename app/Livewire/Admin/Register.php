<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Register extends Component
{
    #[Layout('layouts.admin-auth')]
    public function render()
    {
        return view('livewire.admin.register');
    }
}
