<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('name_id')->unsigned();
            $table->string('pas',100);
            $table->string('cv',100);
            $table->string('ktp',100);
            $table->string('others',100);
            $table->timestamps();
        });
        Schema::table('files', function (Blueprint $table) {
            $table->foreign('name_id')->references('id')->on('form_recruit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
