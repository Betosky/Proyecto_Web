<?php

use Illuminate\Database\Seeder;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento')->insert([
        	'nombre' => 'Direccion de deportes',
        	'encargado_id' => 1,
        ]);
    }
}
