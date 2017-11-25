<?php

use Illuminate\Database\Seeder;

class condicionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condicion')->insert([
        	'nombre' => 'Reprueba todos los ramos del semestre',
        	'cumple' => true,
        ]);

        DB::table('condicion')->insert([
        	'nombre' => 'Ultimo año de carrera',
        	'cumple' => true,
        ]);
    }
}
