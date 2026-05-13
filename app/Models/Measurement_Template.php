<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measurement_Template extends Model
{
    protected $table = "tblmeasurement_template";

    public $timestamps = false;

    protected $fillable = [
        "template_id",
        "template_name",
        "deleted",
        "createuser",
        "createdate",
        "modifyuser",
        "modifydate"
    ];
}
