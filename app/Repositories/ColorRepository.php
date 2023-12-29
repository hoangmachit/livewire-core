<?php
namespace App\Repositories;

use App\Models\Color;

class ColorRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Color::class;
    }
}
