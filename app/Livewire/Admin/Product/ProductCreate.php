<?php

namespace App\Livewire\Admin\Product;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\Attributes\Url;
use App\Models\Product;
use App\Models\ProductStatus;

class ProductCreate extends Component
{
    public string $name = '';
    public string $slug = '';
    public string $description = '';
    public string $content = '';
    public string $seo_title = '';
    public string $seo_keyword = '';
    public string $seo_description = '';
    public int $status_id = 0;

    #[Url]
    public string $type = '';

    public function rules(): array
    {
        return [
            'type' => 'required|max:255',
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'description' => 'nullable|max:255',
            'content' => 'nullable|max:1000',
            'status_id' => 'required|integer|min:1',
            'seo_title' => 'required|max:255',
            'seo_keyword' => 'required|max:255',
            'seo_description' => 'required|max:255',
        ];
    }

    public function save(): mixed
    {
        $this->validate();
        dd($this->all());
    }

    public function render(): View
    {
        $status = ProductStatus::all();
        return view('livewire.admin.product.create', compact('status'));
    }
}
