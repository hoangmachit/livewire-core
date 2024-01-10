<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFavorite extends Model
{
    use HasFactory;

     /**
     * Summary of fillable
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'product_id',
    ];
}
