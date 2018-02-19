<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('careers', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('career_key');
                $table->text('description');
                $table->string('dependence');
                $table->string('key_incorporation');
                $table->string('turn');
                $table->integer('id_department')->unsigned();
                $table->foreign('id_department')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::drop('careers');
    }

}
