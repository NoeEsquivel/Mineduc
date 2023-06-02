<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'id' => '18',
            'departamento' => 'Izabal',
        ]);

        DB::table('departamentos')->insert([
            'id' => '19',
            'departamento' => 'Zacapa',
        ]);

        DB::table('departamentos')->insert([
            'id' => '20',
            'departamento' => 'Chiquimula',
        ]);

        DB::table('departamentos')->insert([
            'id' => '21',
            'departamento' => 'Jalapa',
        ]);

    }
}
