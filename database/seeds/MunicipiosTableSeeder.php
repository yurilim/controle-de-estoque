<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            
            ['mun_nome' => 'Águas Formosas', 'est_id'=> 11],
            ['mun_nome' => 'Barra', 'est_id'=> 5],
            ['mun_nome' => 'Buritirama', 'est_id'=> 5],
            ['mun_nome' => 'Capão Bonito do Sul', 'est_id'=> 21],
            ['mun_nome' => 'Caravelas', 'est_id'=> 5],
            ['mun_nome' => 'Carlos Chagas', 'est_id'=> 11],
            ['mun_nome' => 'Carnaíba', 'est_id'=> 16],
            ['mun_nome' => 'Catú', 'est_id'=> 5],
            ['mun_nome' => 'Cruz das Almas', 'est_id'=> 5],
            ['mun_nome' => 'Flores', 'est_id'=> 16],
            ['mun_nome' => 'Gravatá', 'est_id'=> 16],
            ['mun_nome' => 'Ibirapuã', 'est_id'=> 5],
            ['mun_nome' => 'Ibotirama', 'est_id'=> 5],
            ['mun_nome' => 'Ilha das Flores', 'est_id'=> 25],
            ['mun_nome' => 'Itambé', 'est_id'=> 5],
            ['mun_nome' => 'Itamarajú', 'est_id'=> 5],
            ['mun_nome' => 'Itaparica', 'est_id'=> 5],
            ['mun_nome' => 'Itatim', 'est_id'=> 5],
            ['mun_nome' => 'Jucuruçu', 'est_id'=> 5],
            ['mun_nome' => 'Lauro de Freitas', 'est_id'=> 5],
            ['mun_nome' => 'Madre de Deus', 'est_id'=> 5],
            ['mun_nome' => 'Muritiba', 'est_id'=> 5],
            ['mun_nome' => 'Nanuque', 'est_id'=> 11],
            ['mun_nome' => 'Neópolis', 'est_id'=> 25],
            ['mun_nome' => 'Piaçabuçu', 'est_id'=> 2],
            ['mun_nome' => 'Prado', 'est_id'=> 5],
            ['mun_nome' => 'Riachuelo', 'est_id'=> 20],
            ['mun_nome' => 'Rio Real', 'est_id'=> 5],
            ['mun_nome' => 'São José do Egito', 'est_id'=> 16],
            ['mun_nome' => 'Salvador', 'est_id'=> 5],
            ['mun_nome' => 'Santa Helena de Minas', 'est_id'=> 11],
            ['mun_nome' => 'Serra dos Aimorés', 'est_id'=> 11],
            ['mun_nome' => 'Sobradinho', 'est_id'=> 5],
            ['mun_nome' => 'Suzano', 'est_id'=> 26],
            ['mun_nome' => 'Tabira', 'est_id'=> 16],
            ['mun_nome' => 'Tanhaçú', 'est_id'=> 5],
            ['mun_nome' => 'Tuparetama', 'est_id'=> 16]
            
        ]);
    }
}
