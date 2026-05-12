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
        Schema::create('tblbusiness_user', function (Blueprint $table) {
            $table->id();
            $table->string("business_id");
            $table->foreign("business_id")->references('business_id')->on("tblbusiness");
            $table->string("first_name");
            $table->string("middle_names")->nullable();
            $table->string("surname");
            $table->string("username");
            $table->string("email");
            $table->string("phone");
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
        Schema::dropIfExists('tblbusiness_user');
    }
};
