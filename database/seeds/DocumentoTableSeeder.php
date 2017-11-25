<?php

use Illuminate\Database\Seeder;

class DocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documento')->insert([
        	'nombre' => 'Estampilla',
        	'valor' => '1500',
        	'descripcion' => 'Estampillas que deben comprarse para realizar tramite y continuar en la UFRO',
        	'departamento_id' =>1,
        ]);

        DB::table('documento')->insert([
        	'nombre' => 'Certificado de alumno regular',
        	'valor' => 'gratuito',
        	'descripcion' => 'Puede solicitar en finanzas o obtener por intranet',
        	'departamento_id' =>1,
        ]);
    }
}
