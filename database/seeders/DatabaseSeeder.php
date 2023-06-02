<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use App\Models\Alumno;
use App\Models\Titular;
use App\Models\Catedratico;
use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Alumno::factory(10)->create();
        Titular::factory(10)->create();
        Catedratico::factory(10)->create();
        // \App\Models\User::factory(10)->create();



        $this->call(DepartamentoSeeder::class);
        $this->call(MunicipioSeeder::class);

    }
}
