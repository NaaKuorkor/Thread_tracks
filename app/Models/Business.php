<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = "tblbusiness";

    public $timestamps = false;

    protected $fillable = [
        'business_id',
        'business_name',
        'business_number',
        'business_address',
        'status',
        'deleted',
        'createdate',
        'createuser',
        'modifydate',
        'modifyuser'
    ];

    function business_users()
    {
        return $this->hasOne(Business_User::class);
    }

    function orders()
    {
        return $this->hasMany(Order::class);
    }

    function payments()
    {
        return $this->hasMany(Payment::class);
    }

    function customers()
    {
        return $this->hasMany(Customer::class);
    }

    function measurements()
    {
        return $this->hasMany(Measurement::class);
    }

    function measurement_templates()
    {
        return $this->hasMany(Measurement_Template::class);
    }
}
