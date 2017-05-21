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
            $table->integer('status');
            $table->integer('user_id')->unsigned();
            $table->text('name',128);
            $table->text('description');
            $table->dateTime('birthday');
            $table->integer('experience');
            $table->integer('education');
            $table->text('university');
            $table->text('email');
            $table->text('phone', 64);
            $table->text('link', 128);
            $table->text('position', 128);
            $table->text('source', 128);
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
        Schema::table('resumes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['vacancy_id']);
        });
        Schema::dropIfExists('resumes');
    }
}
