<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        auth(ADMIN)->logout();
        return redirect()->route('admin.login');
    }
    public function render()
    {
        return view('livewire.admin.logout');
    }
}
