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
        Schema::create('caves', function (Blueprint $table) {
            $table->id();
            $table->string('name',80);
            $table->string('location',120)->nullable();
            $table->float('latitude',20,15)->nullable();
            $table->float('longitude',20,15)->nullable();
            $table->smallInteger('deep')->nullable();
            $table->smallInteger('length')->nullable();
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
        Schema::dropIfExists('caves');
    }
};
