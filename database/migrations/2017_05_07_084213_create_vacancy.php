<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('active')->unsigned()->default(1);
            $table->integer('user_id')->unsigned();
            $table->text('title',128);
            $table->text('description');
            $table->integer('status')->unsigned();
            $table->integer('age_start')->unsigned()->nullable();
            $table->integer('age_end')->unsigned()->nullable();
            $table->integer('experience')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
