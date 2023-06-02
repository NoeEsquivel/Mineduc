<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexact()
    {
        $datos = Alumno::orderBy('nombre', 'asc')->paginate(25);
        return view('curso/actividades', compact('datos'));
    }
}
