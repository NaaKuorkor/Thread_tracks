<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Measurement_Template_Items extends Model
{
    protected $table = "tblmeasurement_template_items";

    public $timestamps = false;

    protected $fillable = [
        "item_id",
        "template_id",
        "name",
        "unit",
        "deleted",
        "createuser",
        "createdate",
        "modifyuser",
        "modifydate"
    ];
}
