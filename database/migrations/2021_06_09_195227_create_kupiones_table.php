<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKupionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kupiones', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('creator'); 
            $table->string('title');
            $table->string('price');
            $table->string('level');
            $table->string('link');
            
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
        Schema::dropIfExists('kupiones');
    }
}
