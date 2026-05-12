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
}
