<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormRecruitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_recruit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unik');
            $table->string('name');
            $table->string('nationality');
            $table->string('born_date');
            $table->string('umur');
            $table->string('jenis');
            $table->string('job');
            $table->string('nik');
            $table->string('sekolah');
            $table->string('nilai');
            $table->string('email')->uniqe();
            $table->string('phone');
            $table->string('address');
            $table->string('pendidikan', 100);
            $table->string('jurusan', 100);            
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
        Schema::dropIfExists('form_recruit');
    }
}
