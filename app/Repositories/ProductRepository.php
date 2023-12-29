<?php
namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Product::class;
    }
}
