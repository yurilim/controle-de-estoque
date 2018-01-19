<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('for_id');
		    $table->string('for_nome', 100);
		    $table->string('for_cnpj', 14)->unique()->nullable()->default(null);
		    $table->string('for_endereco', 120)->nullable()->default(null);
            $table->string('for_telefone', 11)->nullable()->default(null);
            $table->string('for_email', 100)->nullable()->default(null);
		
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
        Schema::drop('fornecedor');
    }
}
