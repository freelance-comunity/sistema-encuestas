<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('subjects', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('key');
                $table->text('description');
                $table->string('tag');
                $table->integer('status')->default(1);
                $table->integer('credits');
                $table->integer('career_id')->unsigned();
                $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');
                $table->integer('campus_id')->unsigned();
                $table->foreign('campus_id')->references('id')->on('campuses')->onDelete('cascade');

                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subjects');
    }

}
