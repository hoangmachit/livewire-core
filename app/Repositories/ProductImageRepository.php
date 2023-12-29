<?php
namespace App\Repositories;

use App\Models\ProductImage;

class ProductImageRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return ProductImage::class;
    }
}
