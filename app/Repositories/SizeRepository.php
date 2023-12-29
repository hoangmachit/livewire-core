<?php
namespace App\Repositories;

use App\Models\Size;

class SizeRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Size::class;
    }
}
