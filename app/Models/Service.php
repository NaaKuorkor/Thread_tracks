<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "tblservice";

    public $timestamps = false;

    protected $fillable = [
        'service_id',
        'service_name',
        'deleted',
        'createdate',
        'createuser',
        'modifydate',
        'modifyuser'
    ];
}
