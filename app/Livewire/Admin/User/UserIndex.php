<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;
    public function render(): View
    {
        $users = User::orderByDesc('id')->paginate(10);
        return view('livewire.admin.user.index', compact('users'));
    }
}
