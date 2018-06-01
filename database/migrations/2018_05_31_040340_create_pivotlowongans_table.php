<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotlowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivotlowongans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pers_id');
            $table->foreign('pers_id')->references('id')
            ->on('perusahaans')->onDelete('cascade');
            $table->unsignedInteger('low_id');
            $table->foreign('low_id')->references('id')
            ->on('lowongans')->onDelete('cascade');     
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
        Schema::dropIfExists('pivotlowongans');
    }
}
