<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('cycles', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('cycle_year');
                $table->integer('cycle_quarter');
                $table->string('description');
                $table->date('start_cycle');
                $table->date('end_cycle');
                $table->integer('admin_cycle_year');
                $table->integer('admin_cycle_quarter');
                $table->string('generation');
                $table->integer('status');
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
        Schema::drop('cycles');
    }

}
