<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "tblpayment";

    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'amount',
        'deleted',
        'createdate',
        'createuser',
        'modifydate',
        'modifyuser'
    ];
}
