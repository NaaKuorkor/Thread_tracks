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
        Schema::create('tblcustomer', function (Blueprint $table) {
            $table->id();
            $table->string("customer_id");
            $table->string("business_id");
            $table->foreign("business_id")->references("business_id")->on("tblbusiness");
            $table->string("customer_name");
            $table->string("customer_number");
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
        Schema::dropIfExists('tblcustomer');
    }
};
