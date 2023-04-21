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
        Schema::create('ropes', function (Blueprint $table) {
            $table->id();

            // realtion section
            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->foreign('equipment_id')
            ->references('id')
            ->on('equipments')
            ->onUpdate('cascade')
            ->onDelete('set null');

            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onUpdate('cascade')
                ->onDelete('set null');
            // end relation section 

            $table->date('purchase_date');
            $table->tinyInteger('length')->unsigned();
            $table->tinyInteger('diameter');


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
        Schema::dropIfExists('ropes');
    }
};
