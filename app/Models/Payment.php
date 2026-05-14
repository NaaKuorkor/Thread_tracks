<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "tblpayment";

    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'payment_id',
        'amount',
        'deleted',
        'createdate',
        'createuser',
        'modifydate',
        'modifyuser'
    ];

    function order()
    {
        return $this->belongsTo(Order::class, "order_id", "order_id");
    }

    function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
