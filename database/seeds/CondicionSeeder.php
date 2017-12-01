<?php

use Illuminate\Database\Seeder;

class CondicionSeeder extends Seeder
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
        	'descripcion' => 'El alumno reprobó todos los ramos del actual semestre lo que es causal de eliminación',
        ]);

        DB::table('condicion')->insert([
        	'nombre' => 'Ultimo año de carrera',
        	'descripcion' => 'El alumno debe estar en el ultimo año de carrera para acceder al tramite',
        ]);

        DB::table('condicion')->insert([
        	'nombre' => 'Oportunidades de continuidad',
        	'descripcion' => 'El alumno debe no haber agotado sus oportunidades de continuidad de estudios (3 oportunidades)',
        ]);
    }
}
