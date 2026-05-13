<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tblmeasurement', function (Blueprint $table) {
            $table->id();
            $table->string("measurement_id")->unique();
            $table->string("customer_id");
            $table->foreign("customer_id")->references("customer_id")->on("tblcustomer");
            $table->string("business_id");
            $table->foreign("business_id")->references("business_id")->on("tblbusiness");
            $table->string("measurement_title");
            $table->boolean("deleted")->default(0);
            $table->string("createuser");
            $table->timestamp("createdate")->useCurrent();
            $table->string("modifyuser");
            $table->timestamp("modifydate")->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblmeasurement');
    }
};
