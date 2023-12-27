<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
class ResetPassword extends Component
{
    #[Layout('layouts.admin-auth')]
    public function render()
    {
        return view('livewire.admin.reset-password');
    }
}
