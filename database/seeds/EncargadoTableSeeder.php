<?php

use Illuminate\Database\Seeder;

class EncargadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('encargado')->insert([
        	'nombre' => 'Juan Perez',
        	'mail' => 'jperez@gmail.com',
        ]);
    }
}
