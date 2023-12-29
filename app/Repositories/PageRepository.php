<?php
namespace App\Repositories;

use App\Models\Page;

class PageRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Page::class;
    }
}
