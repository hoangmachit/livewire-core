<?php

namespace App\Http\Livewire\Admin;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{

    use WithPagination;

    public function render(UserRepository $userRepository, Request $request)
    {
        $users = $userRepository->paginate(10);
        return view('livewire.admin.user', compact('users'));
    }
}
