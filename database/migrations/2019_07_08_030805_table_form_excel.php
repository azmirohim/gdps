<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableFormExcel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excel_form', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('nationality');
            $table->string('nik');
            $table->string('born_date');
            $table->string('umur');
            $table->string('pendidikan');
            $table->string('jurusan');
            $table->string('nilai');
            $table->string('sekolah');
            $table->string('jenis');
            $table->string('job');
            $table->string('email')->uniqe();
            $table->string('phone');
            $table->string('address');
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
        Schema::dropIfExists('excel_form');
    }
}
