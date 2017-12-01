<?php

use Illuminate\Database\Seeder;

class TramiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tramite')->insert([
            'administrador_id' => 1,
        	'nombre' => 'Inscripción de alumnos laborantes',
        	'descripcion' => 'Tramite para alumnos que deseen comenzar a trabajar en sus tiempos libres para acercarlos al mundo laboral',
        ]);
    }
}
