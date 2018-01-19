<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
            $table->increments('mun_id');
		    $table->string('mun_nome', 50);
		    $table->string('mun_cep', 9)->nullable()->default(null);
            $table->string('mun_telefone', 11)->nullable()->default(null);
            $table->string('mun_endereco', 100)->nullable()->default(null);
            $table->string('mun_email', 100)->nullable()->default(null);
            
            $table->integer('est_id')->unsigned();
            $table->foreign('est_id')->references('est_id')->on('estados');

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
        Schema::drop('municipios');
    }
}
