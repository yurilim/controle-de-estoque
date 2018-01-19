<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arquivos = scandir( dirname(__FILE__) );
        // print_r($arquivos);
        // die();
        /*
        foreach ($arquivos as $key => $arq) {
            if ($arq !== 'DatabaseSeeder.php' && $arq[0] !== ".") {
                $this->call(explode('.', $arq)[0]);
            }
        }
        */
         $this->call(UsersTableSeeder::class);
         $this->call(EquipamentoTableSeeder::class);
         $this->call(EstadosTableSeeder::class);
         $this->call(FornecedorTableSeeder::class);
         $this->call(ModeloTableSeeder::class);
         $this->call(MunicipiosTableSeeder::class);
         $this->call(TipoEquipamentoTableSeeder::class);
        
    }
}
