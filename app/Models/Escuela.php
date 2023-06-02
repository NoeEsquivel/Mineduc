<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    use HasFactory;

    //    //Relación de uno a muchos
    public function alumno()
    {
        return $this->hasMany('App\Models\Alumno');
    }

}
