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

    function business()
    {
        return $this->belongsTo(Business::class, "business_id", "business_id");
    }

    function orders()
    {
        return $this->hasMany(Order::class);
    }

    function measurements()
    {
        return $this->hasMany(Measurement::class);
    }

    function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
