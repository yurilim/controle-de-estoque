<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            ['est_UF' => 'AC'],
            ['est_UF' => 'AL'],
            ['est_UF' => 'AM'],
            ['est_UF' => 'AP'],
            ['est_UF' => 'BA'],
            ['est_UF' => 'CE'],
            ['est_UF' => 'DF'],
            ['est_UF' => 'ES'],
            ['est_UF' => 'GO'],
            ['est_UF' => 'MA'],
            ['est_UF' => 'MG'],
            ['est_UF' => 'MS'],
            ['est_UF' => 'MT'],
            ['est_UF' => 'PA'],
            ['est_UF' => 'PB'],
            ['est_UF' => 'PE'],
            ['est_UF' => 'PI'],
            ['est_UF' => 'PR'],
            ['est_UF' => 'RJ'],
            ['est_UF' => 'RN'],
            ['est_UF' => 'RO'],
            ['est_UF' => 'RR'],
            ['est_UF' => 'RS'],
            ['est_UF' => 'SC'],
            ['est_UF' => 'SE'],
            ['est_UF' => 'SP'],
            ['est_UF' => 'TO']
        ]);

        
    }
}
