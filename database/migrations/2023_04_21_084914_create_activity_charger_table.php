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
        Schema::create('activity_charger', function (Blueprint $table) {
            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id') 
                ->references('id')
                ->on('activities')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('charger_id');
            $table->foreign('charger_id')
                ->references('id')
                ->on('chargers')
                ->onDelete('cascade')
                ->onDelete('cascade');

            $table->primary(['activity_id', 'charger_id']);
            
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
        Schema::dropIfExists('activity_charger');
    }
};
