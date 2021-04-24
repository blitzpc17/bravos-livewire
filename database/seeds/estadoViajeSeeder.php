<?php

use Illuminate\Database\Seeder;

class estadoViajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estadoviaje')->insert([
            'nombre' => Str::random(10),
            'clave' =>Str::random(3),
        ]);
    }
}
