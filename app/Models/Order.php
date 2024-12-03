<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'datetime' => 'datetime:Y-m-d H:i:s',
    ];
}
