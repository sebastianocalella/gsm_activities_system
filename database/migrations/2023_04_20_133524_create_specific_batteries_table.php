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
        Schema::create('specific_batteries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('electronic_tool_id')->nullable();
            $table->foreign('electronic_tool_id')
                ->references('id')
                ->on('electronic_tools')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedBigInteger('charger_id')->nullable();
            $table->foreign('charger_id')
                ->references('id')
                ->on('chargers')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedBigInteger('battery_type_id')->nullable();
            $table->foreign('battery_type_id')
                ->references('id')
                ->on('battery_types')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->string('name',40);
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
        Schema::dropIfExists('specific_batteries');
    }
};
