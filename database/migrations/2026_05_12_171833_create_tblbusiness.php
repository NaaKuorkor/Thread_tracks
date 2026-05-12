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
        Schema::create('tblbusiness', function (Blueprint $table) {
            $table->id();
            $table->string("business_id")->unique();
            $table->string("business_name");
            $table->string("business_desc")->nullable();
            $table->string("business_number");
            $table->string("business_address")->nullable();
            $table->enum("status", ["active", "inactive"]);
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
        Schema::dropIfExists('tblbusiness');
    }
};
