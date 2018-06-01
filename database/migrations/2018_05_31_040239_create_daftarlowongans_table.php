<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarlowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarlowongans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('pendidikan');
            $table->string('keahlian');
            $table->string('telepon');
            $table->string('cv');
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
        Schema::dropIfExists('daftarlowongans');
    }
}
