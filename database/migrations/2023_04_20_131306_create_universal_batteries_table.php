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
        Schema::create('universal_batteries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('charger_id')->nullable();
            $table->foreign('charger_id')
                ->references('id')
                ->on('chargers')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->string('name',40);
            $table->tinyInteger('amount');
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
        Schema::dropIfExists('universal_batteries');
    }
};
