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
        	'documento_id' => 1,
        	'nombre' => 'Solicitud de coninuidad de estudios',
        	'descripcion' => 'Tramite que se realiza para alumnos que presenten causal de eliminacion',
        	'condicion_id' => 1,
        	'administrador_id' => 1,
        ]);
    }
}
