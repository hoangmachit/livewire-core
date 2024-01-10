<?php

namespace App\Http\Livewire\Admin;

use App\Repositories\UserRepository;
use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;
    public function render(UserRepository $userRepository)
    {
        $products = $userRepository->paginate(10);
        return view('livewire.admin.product', compact('products'));
    }
}
