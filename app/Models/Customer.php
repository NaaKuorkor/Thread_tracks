<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "tblcustomer";

    public $timestamps = false;

    protected $fillable = [
        'business_id',
        'customer_id',
        'customer_name',
        'customer_number',
        'deleted',
        'createdate',
        'createuser',
        'modifydate',
        'modifyuser'
    ];
}
