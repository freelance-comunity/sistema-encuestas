<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('studies', function(Blueprint $table) {
                $table->increments('id');
                $table->string('key');
                $table->text('description');
                $table->string('short_description');
                $table->integer('credits');
                $table->integer('number_grades');
                $table->integer('status')->default(1);
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
        Schema::drop('studies');
    }

}
