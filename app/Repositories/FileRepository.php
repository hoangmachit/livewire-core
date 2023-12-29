<?php
namespace App\Repositories;

use App\Models\File;

class FileRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return File::class;
    }
}
