<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->text('about');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('email');
            $table->string('address');
            $table->string('fax');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('general_contents');
    }
}
