<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

     /**
     * Summary of fillable
     *
     * @var array
     */
    protected $fillable = [
        'color_id',
        'size_id',
        'type',
        'inventory',
        'limit',
        'file_id',
    ];
}
