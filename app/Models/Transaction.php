<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'customer_name',
        'address',
        'payment_method',
        'total',
    ];
}
