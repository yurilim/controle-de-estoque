<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo', function (Blueprint $table){
            $table->engine = 'InnoDB';

            $table->increments('mod_id');
            $table->string('mod_nome')->nullable();

            $table->integer('for_id')->unsigned();
		    $table->foreign('for_id')->references('for_id')->on('fornecedor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('modelo');
    }
}
