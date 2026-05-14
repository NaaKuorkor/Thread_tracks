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
        'measurement_id',
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

    function customer()
    {
        return $this->belongsTo(Customer::class, "customer_id", "customer_id");
    }

    function business()
    {
        return $this->belongsTo(Business::class, "business_id", "business_id");
    }

    function service()
    {
        return $this->belongsTo(Service::class, "service_id", "service_id");
    }

    function payment()
    {
        return $this->hasMany(Payment::class);
    }

    function measurement()
    {
        return $this->belongsTo(Measurement::class, "measurement_id", "measurement_id");
    }
}
