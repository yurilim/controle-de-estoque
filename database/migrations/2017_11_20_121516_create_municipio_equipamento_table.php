<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipioEquipamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('municipio_equipamento', function(Blueprint $table){
            $table->engine = 'InnoDb';

            $table->integer('mue_quantidade')->nullable();
            $table->date('mue_data')->nullable();
            
            $table->integer('mun_id')->unsigned();
            $table->foreign('mun_id')->references('mun_id')->on('municipios');
            
            $table->integer('eqp_id')->unsigned();
            $table->foreign('eqp_id')->references('eqp_id')->on('equipamento');

            $table->timestamps();

            $table->primary(['mun_id', 'eqp_id']);

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('municipio_equipamento');
    }
}
