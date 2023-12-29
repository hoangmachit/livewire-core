<?php
namespace App\Repositories;

use App\Models\Order;

class OrderRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Order::class;
    }
}
