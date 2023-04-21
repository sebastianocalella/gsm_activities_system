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
        Schema::create('activity_bag', function (Blueprint $table) {
            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id') 
                ->references('id')
                ->on('activities')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('bag_id');
            $table->foreign('bag_id')
                ->references('id')
                ->on('bags')
                ->onDelete('cascade')
                ->onDelete('cascade');

            $table->smallInteger('amount');

            $table->primary(['activity_id', 'bag_id']);
            
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
        Schema::dropIfExists('activity_bag');
    }
};
