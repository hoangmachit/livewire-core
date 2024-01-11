<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
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
        'language',
    ];

    /**
     * Summary of options
     *
     * @return HasMany
     */
    public function options(): HasMany
    {
        return $this->hasMany(Option::class, 'product_id', 'id');
    }
}
