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
        Schema::create('anchors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->foreign('equipment_id')
                ->references('id')
                ->on('equipments')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->string('name',40);
            $table->string('shape',40);
            $table->tinyInteger('amount')->unsigned();
            $table->boolean('to_shop');
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
        Schema::dropIfExists('anchors');
    }
};
