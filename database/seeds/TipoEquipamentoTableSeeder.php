<?php

use Illuminate\Database\Seeder;

class TipoEquipamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_equipamento')-> insert([

            ['tie_nome' => 'Smartphone'],
            ['tie_nome' => 'Tablet'],
            ['tie_nome' => 'Outro']
            
        ]);
    }
}
