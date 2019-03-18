<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('begining_date');
            $table->date('ending_date');
            $table->integer('class_teacher_id')->unsigned();
            //$table->foreign('class_teacher_id')->references('id')->on('teacher');
            
            $table->timestamps();
            //Constrains: Unique ID, Index on ID, Unique(ID + class-teacher + year)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batch');
    }
}
