<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::orderByDesc('id')->paginate(10);
        return view('livewire.admin.product.index', compact('products'));
    }
}
