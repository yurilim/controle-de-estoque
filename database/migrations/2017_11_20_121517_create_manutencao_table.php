<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManutencaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manutencao', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('man_id');
            $table->string('man_observacao', 200)->nullable();
            $table->date('man_data_entrada')->nullable();
            $table->date('man_data_saida')->nullable();
            
            $table->integer('eqp_id')->unsigned();
            $table->foreign('eqp_id')->references('eqp_id')->on('equipamento');

            $table->integer('sta_id')->unsigned();
            $table->foreign('sta_id')->references('sta_id')->on('status');

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
        Schema::drop('manutencao');
    }
}
