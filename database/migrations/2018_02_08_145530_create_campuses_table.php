<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('campuses', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('campus_id');
                $table->string('name');
                $table->string('corporate_name');
                $table->string('rfc');
                $table->string('address');
                $table->string('number_outside');
                $table->string('number_inside')->nullable();
                $table->string('reference')->nullable();
                $table->string('postal_code');
                $table->string('city');
                $table->string('colony');
                $table->string('federal_entity');
                $table->string('country');
                $table->string('campus_key');
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
        Schema::drop('campuses');
    }

}
