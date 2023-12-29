<?php
namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Category::class;
    }
}
