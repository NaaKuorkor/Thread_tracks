<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business_User extends Model
{
    protected $table = "tblbusiness_user";

    public $timestamps = false;

    protected $fillable = [
        'userid',
        'business_id',
        'first_name',
        'middle_names',
        'surname',
        'username',
        'email',
        'phone',
        'deleted',
        'createdate',
        'createuser',
        'modifydate',
        'modifyuser'
    ];
}
