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
        $this->call(DepartamentoTableSeeder::class);
        $this->call(DocumentoTableSeeder::class);
        $this->call(TramiteTableSeeder::class);
    }
}
