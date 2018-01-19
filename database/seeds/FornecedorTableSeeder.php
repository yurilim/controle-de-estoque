<?php

use Illuminate\Database\Seeder;

class FornecedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fornecedor')->insert([

            ['for_nome' => 'Brava'],
            ['for_nome' => 'ICC'],
            ['for_nome' => 'Multilaser'],
            ['for_nome' => 'Samsung']

        ]);
    }
}
