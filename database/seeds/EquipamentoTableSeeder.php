<?php

use Illuminate\Database\Seeder;

class EquipamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipamento')->insert([
            
           ['eqp_qtdTotal' => 300, 'eqp_patrimonio' => 07030, 'eqp_imei' => 01234567891231, 'for_id' => 1, 'tie_id' => 2 ]
            
            
        ]);
    }
}
