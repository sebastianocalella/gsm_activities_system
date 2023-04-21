<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harness_tools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('harness_id')->nullable();
            $table->foreign('harness_id')
                ->references('id')
                ->on('harnesses')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->foreign('equipment_id')
                ->references('id')
                ->on('equipments')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedBigInteger('harness_tool_type_id')->nullable();
            $table->foreign('harness_tool_type_id')
                ->references('id')
                ->on('harness_tool_types')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->date('purchase_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harness_tools');
    }
};
