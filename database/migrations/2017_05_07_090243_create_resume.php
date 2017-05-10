<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResume extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('active')->unsigned()->default(1);
            $table->integer('vacancy_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('name',128);
            $table->text('descripion');
            $table->integer('birthday')->unsigned();
            $table->integer('experience');
            $table->integer('education');
            $table->text('university');
            $table->timestamps();

            $table->foreign('vacancy_id')->references('id')->on('vacancies')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('resumes');
    }
}
