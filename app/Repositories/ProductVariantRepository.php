<?php
namespace App\Repositories;

use App\Models\ProductVariant;

class ProductVariantRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return ProductVariant::class;
    }
}
