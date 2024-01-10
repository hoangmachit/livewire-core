<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'content',
        'type',
        'file_id',
        'language',
    ];
}
