<?php

use Illuminate\Database\Seeder;

class Condicion_TramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('condicion_tramite')->insert([
          'condicion_id' => 1,
        	'tramite_id' => 1,
        ]);
        DB::table('condicion_tramite')->insert([
          'condicion_id' => 2,
        	'tramite_id' => 2,
        ]);*/
        DB::table('condicion_tramite')->insert([
          'condicion_id' => 3,
        	'tramite_id' => 1,
        ]);
    }
}
