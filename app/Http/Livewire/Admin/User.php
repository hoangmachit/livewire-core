<?php

namespace App\Http\Livewire\Admin;

use App\Repositories\UserRepository;
use Livewire\Component;

class User extends Component
{

    public function render(UserRepository $userRepository)
    {
        $users = $userRepository->paginate(10);
        return view('livewire.admin.user', compact('users'));
    }
}
