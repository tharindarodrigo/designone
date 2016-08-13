<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectProjectTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_project_type', function(Blueprint $table){
            $table->increments('id');
            $table->integer('project_id')->unsigned()->index();
            $table->integer('project_type_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('restrict');
            $table->foreign('project_type_id')->references('id')->on('project_types')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('project_project_type');
    }
}
