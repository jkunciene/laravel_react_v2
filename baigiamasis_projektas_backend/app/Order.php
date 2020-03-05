<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'buyerName', 'buyerSurname', 'buyerAddress', 'orderStatus', 'productId', 'productQty', 'OrderSum'
    ];
}
