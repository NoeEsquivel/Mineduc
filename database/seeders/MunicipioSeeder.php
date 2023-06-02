<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            'id' => '01',
            'municipio' => 'Puerto Barrios',
            'id_departamento'  => '18'
        ]);

        DB::table('municipios')->insert([
            'id' => '02',
            'municipio' => 'Livingston',
            'id_departamento'  => '18'
        ]);

        DB::table('municipios')->insert([
            'id' => '03',
            'municipio' => 'El Estor',
            'id_departamento'  => '18'
        ]);

        DB::table('municipios')->insert([
            'id' => '04',
            'municipio' => 'Morales',
            'id_departamento'  => '18'
        ]);

        DB::table('municipios')->insert([
            'id' => '05',
            'municipio' => 'Los Amates',
            'id_departamento'  => '18'
        ]);


//ZACAPA
        DB::table('municipios')->insert([
            'id' => '06',
            'municipio' => 'Zacapa',
            'id_departamento'  => '19'
        ]);

        DB::table('municipios')->insert([
            'id' => '07',
            'municipio' => 'Estanzuela',
            'id_departamento'  => '19'
        ]);

        DB::table('municipios')->insert([
            'id' => '08',
            'municipio' => 'Rio Hondo',
            'id_departamento'  => '19'
        ]);

        DB::table('municipios')->insert([
            'id' => '09',
            'municipio' => 'Gualan',
            'id_departamento'  => '19'
        ]);




    }
}
