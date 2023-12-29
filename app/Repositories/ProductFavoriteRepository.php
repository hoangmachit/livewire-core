<?php
namespace App\Repositories;

use App\Models\ProductFavorite;

class ProductFavoriteRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return ProductFavorite::class;
    }
}
