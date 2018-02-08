<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('teachers', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('last_name');
                $table->string('second_lastname');
                $table->string('email');
                $table->integer('status')->default(1);

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
        Schema::drop('teachers');
    }

}
