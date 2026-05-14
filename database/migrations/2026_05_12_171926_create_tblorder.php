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
        Schema::create('tblorder', function (Blueprint $table) {
            $table->id();
            $table->string("order_id")->unique();
            $table->string("business_id");
            $table->foreign("business_id")->references("business_id")->on("tblbusiness");
            $table->string("customer_id");
            $table->foreign("customer_id")->references("customer_id")->on("tblcustomer");
            $table->string("measurement_id");
            $table->foreign("measurement_id")->references("measurement_id")->on("tblmeasurement");
            $table->string("service_id");
            $table->foreign("service_id")->references("service_id")->on("tblservice");
            $table->integer("price");
            $table->boolean("is_fully_paid")->default(0);
            $table->date("due_date")->nullable();
            $table->string("status")->default("pending");
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
        Schema::dropIfExists('tblorder');
    }
};
