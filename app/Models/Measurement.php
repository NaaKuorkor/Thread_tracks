<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected $table = "tblmeasurement";

    public $timestamps = false;

    protected $fillable = [
        "measurement_id",
        "customer_id",
        "measurement_title",
        "deleted",
        "createuser",
        "createdate",
        "modifyuser",
        "modifydate"
    ];
}
