<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class ProductIndex extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public function render(): View
    {
        $products = Product::with('status')
            ->where(function ($q) {
                $q->where('name', 'LIKE', "%{$this->search}%")
                    ->orWhere('slug', 'LIKE', "%{$this->search}%")
                    ->orWhere('email', 'LIKE', "%{$this->search}%");
            })->orderByDesc('id')->paginate(10);
        return view('livewire.admin.product.index', compact('products'));
    }
}
