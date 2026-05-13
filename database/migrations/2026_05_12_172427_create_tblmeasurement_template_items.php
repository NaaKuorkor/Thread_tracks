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
        Schema::create('tblmeasurement_template_items', function (Blueprint $table) {
            $table->id();
            $table->string("item_id")->unique();
            $table->string("template_id");
            $table->foreign("template_id")->references("template_id")->on("tblmeasurement_template");
            $table->string("name");
            $table->string("unit");
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
        Schema::dropIfExists('tblmeasurement_template_items');
    }
};
