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
        Schema::create('activity_specific_battery', function (Blueprint $table) {
            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id') 
                ->references('id')
                ->on('activities')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('specific_battery_id');
            $table->foreign('specific_battery_id')
                ->references('id')
                ->on('specific_batteries')
                ->onDelete('cascade')
                ->onDelete('cascade');

            $table->primary(['activity_id', 'specific_battery_id']);
            
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
        Schema::dropIfExists('activity_specific_battery');
    }
};
