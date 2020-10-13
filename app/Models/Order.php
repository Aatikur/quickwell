<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'order_id',	'full_name', 'days', 'expires_at', 'amount', 'status' 
    ];
    protected $primaryKey = 'id';
}
