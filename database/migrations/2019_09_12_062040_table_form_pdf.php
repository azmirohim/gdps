<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableFormPdf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdf_form', function (Blueprint $table) {
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
        Schema::dropIfExists('pdf_form');
    }
}
