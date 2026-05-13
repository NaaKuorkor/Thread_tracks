<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "tblorder";

    public $timestamps = false;

    protected $fillable = [
        'business_id',
        'order_id',
        'customer_id',
        'service_id',
        'price',
        'is_fully_paid',
        'due_date',
        'status',
        'deleted',
        'createdate',
        'createuser',
        'modifydate',
        'modifyuser'
    ];
}
