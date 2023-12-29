<?php
namespace App\Repositories;

use App\Models\OrderItem;

class OrderItemRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return OrderItem::class;
    }
}
