<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    use HasFactory;

    protected $table = 'user_status';

    /**
     * Summary of fillable
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
