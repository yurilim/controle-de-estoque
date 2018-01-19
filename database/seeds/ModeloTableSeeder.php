<?php

use Illuminate\Database\Seeder;

class ModeloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modelo')->insert([
            ['mod_nome' => 'M7S Quad Core', 'for_id' => 3],
            ['mod_nome' => 'M9 Quad Core', 'for_id' => 3],
            ['mod_nome' => 'Galaxy Tab A', 'for_id' => 4],
            ['mod_nome' => 'BV-Quad', 'for_id' => 1]

        ]);
    }
}
