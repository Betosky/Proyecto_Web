<?php

use Illuminate\Database\Seeder;

class Documento_TramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documento_tramite')->insert([
        	'documento_id' => 1,
        	'tramite_id' => 1,
        ]);

        DB::table('documento_tramite')->insert([
        	'documento_id' => 2,
        	'tramite_id' => 2,
        ]);
    }
}
