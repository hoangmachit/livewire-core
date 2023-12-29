<?php
namespace App\Repositories;

use App\Models\Post;

class PostRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Post::class;
    }
}
