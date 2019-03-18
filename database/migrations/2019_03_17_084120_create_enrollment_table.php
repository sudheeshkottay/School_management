<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('batch_id')->unsigned();
            $table->foreign('batch_id')->references('id')->on('batch');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('student');

            $table->timestamps();
            //Constrains: Unique(batch_id + student_id)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollment');
    }
}
