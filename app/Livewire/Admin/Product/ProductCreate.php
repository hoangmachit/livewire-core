<?php

namespace App\Livewire\Admin\Product;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductCreate extends Component
{
    public function render(): View
    {
        return view('livewire.admin.product.create');
    }
}
