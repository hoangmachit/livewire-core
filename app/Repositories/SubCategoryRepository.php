<?php
namespace App\Repositories;

use App\Models\SubCategory;

class SubCategoryRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return SubCategory::class;
    }
}
