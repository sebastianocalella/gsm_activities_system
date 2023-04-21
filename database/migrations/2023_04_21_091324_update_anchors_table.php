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
        Schema::table('anchors', function (Blueprint $table) {
            
            $table->dropColumn('form');

            // relation
            $table->unsignedBigInteger('shape_id')->nullable();
            $table->foreign('shape_id')
                ->references('id')
                ->on('shapes')
                ->onUpdate('cascade')
                ->onDelete('set null');
            // end relation
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anchors', function (Blueprint $table) {
            $table->string('form',40);

            $table->dropForeign(['shape_id']);
            
        });
    }
};
