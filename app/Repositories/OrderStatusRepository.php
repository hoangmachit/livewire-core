<?php
namespace App\Repositories;

use App\Models\OrderStatus;

class OrderStatusRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return OrderStatus::class;
    }
}
