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
        Schema::create('connectors', function (Blueprint $table) {
            $table->id();

            // relation
            $table->unsignedBigInteger('shape_id')->nullable();
            $table->foreign('shape_id')
                ->references('id')
                ->on('shapes')
                ->onUpdate('cascade')
                ->onDelete('set null');
            // end relation

            $table->string('color', 50)->nullable();
            $table->date('purchase_date');
            $table->boolean('with_ferrule');
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
        Schema::dropIfExists('connectors');
    }
};
