<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'Dan Ronsu Vned',
            'tipo_documento' => 'DNI',
            'num_documento' => '12345678',
            'direccion' => 'Jr.Liber 451',
            'telefono' => '963852740',
            'email' => 'dan@gmail.com',
            'created_at' => '2021-01-19 13:28:32',
            'updated_at' => '2021-01-19 13:21:37',
        ]);

        DB::table('personas')->insert([
            'nombre' => 'Danzo Ronsu Vned',
            'tipo_documento' => 'DNI',
            'num_documento' => '12345677',
            'direccion' => 'Jr.Liber 452',
            'telefono' => '963852741',
            'email' => 'dan@gmail.com',
            'created_at' => '2021-01-19 13:21:32',
            'updated_at' => '2021-01-19 13:21:34',
        ]);

        DB::table('personas')->insert([
            'nombre' => 'David Ronsu Vned',
            'tipo_documento' => 'DNI',
            'num_documento' => '12345676',
            'direccion' => 'Jr.Liber 453',
            'telefono' => '963852742',
            'email' => 'david@gmail.com',
            'created_at' => '2021-01-19 13:21:00',
            'updated_at' => '2021-01-19 13:21:01',
        ]);


        DB::table('personas')->insert([
            'nombre' => 'Dario Ronsu Vned',
            'tipo_documento' => 'DNI',
            'num_documento' => '12345675',
            'direccion' => 'Jr.Liber 454',
            'telefono' => '963852743',
            'email' => 'dario@gmail.com',
            'created_at' => '2021-01-19 13:21:08',
            'updated_at' => '2021-01-19 13:21:09',
        ]);


    }
}
