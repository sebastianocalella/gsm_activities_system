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
        Schema::create('harness_tool_subtypes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('harness_tool_type_id')->nullable();
            $table->foreign('harness_tool_type_id')
                ->references('id')
                ->on('harness_tool_types')
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
        Schema::dropIfExists('harness_tool_subtypes');
    }
};
