<?php
namespace App\Repositories;

use App\Models\PostImage;

class PostImageRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return PostImage::class;
    }
}
