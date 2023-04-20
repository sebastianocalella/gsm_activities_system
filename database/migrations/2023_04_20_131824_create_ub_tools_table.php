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
        Schema::create('ub_tools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->foreign('equipment_id')
                ->references('id')
                ->on('equipments')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedBigInteger('universal_battery_id')->nullable();
            $table->foreign('universal_battery_id')
                ->references('id')
                ->on('universal_batteries')
                ->onUpdate('cascade')
                ->onDelete('set null');
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
        Schema::dropIfExists('ub_tools');
    }
};
