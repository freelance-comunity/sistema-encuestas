<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('students', function(Blueprint $table) {
                $table->increments('id');
                $table->string('student_id')->nullable();
                $table->string('name');
                $table->string('last_name');
                $table->string('second_last_name')->nullable();
                $table->string('gender');
                $table->date('birthdate');
                $table->string('state_birth');
                $table->string('town_birth');
                $table->string('curp');
                $table->string('sep');
                $table->string('languages')->nullable();
                $table->string('phone')->nullable();
                $table->string('cell_phone');
                $table->string('state');
                $table->string('town');
                $table->string('country');
                $table->string('street');
                $table->string('house_number');
                $table->string('colony');
                $table->string('post_code')->nullable();
                $table->string('email')->nullable();
                $table->string('social_networks')->nullable();
                $table->string('tutor_name');
                $table->string('in_law');
                $table->string('tutor_phone');
                $table->string('tutor_email');
                $table->string('tutor_address');
                $table->integer('school_origin_id')->nullable();
                $table->string('average');
                $table->string('shift')->nullable();
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
        Schema::drop('students');
    }

}
