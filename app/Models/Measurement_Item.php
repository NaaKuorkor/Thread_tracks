<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measurement_Item extends Model
{
    protected $table = "tblmeasurement_item";

    public $timestamps = false;

    protected $fillable = [
        "item_id",
        "measurement_id",
        "name",
        "unit",
        "deleted",
        "createuser",
        "createdate",
        "modifyuser",
        "modifydate"
    ];
}
