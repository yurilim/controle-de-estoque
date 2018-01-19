<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamento', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('eqp_id');
		    $table->integer('eqp_qtdTotal');
		    $table->integer('eqp_patrimonio')->unique();
            $table->integer('eqp_imei');
		    $table->string('eqp_modelo', 30)->nullable();
            $table->date('eqp_data_entrada')->nullable();
            $table->text('eqp_observacao')->nullable();

            $table->integer('for_id')->unsigned();
            $table->foreign('for_id')->references('for_id')->on('fornecedor');
            
            $table->integer('tie_id')->unsigned();
            $table->foreign('tie_id')->references('tie_id')->on('tipo_equipamento');
		
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
        Schema::drop('equipamento');
    }
}
