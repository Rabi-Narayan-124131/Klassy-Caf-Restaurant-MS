<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodOrders extends Model
{
    use HasFactory;

    protected $fillable = [

        'food_name',
        'food_price',
        'food_quantity',

        'user_name',
        'user_email',
        'user_phone',
        'user_city',
        'user_state',
        'user_address',
    ];


}
