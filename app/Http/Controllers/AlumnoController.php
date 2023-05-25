<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexa()
    {
        $datos = Alumno::orderBy('nombre', 'asc')->paginate(25);
        return view('estudiante/inicio-alumno', compact('datos'));
    }


    public function createa()
    {
        //el formulario donde nosotros agregamos datos

        return view('estudiante/agregar-alumno');
    }


    public function storea(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $alumnos = new Alumno();
        $alumnos->nombre = $request->post('nombre');
        $alumnos->apellido = $request->post('apellido');
        $alumnos->no_carnet = $request->post('no_carnet');
        $alumnos->cui = $request->post('cui');
        $alumnos->fecha_nacimiento = $request->post('fecha_nacimiento');
        $alumnos->grado = $request->post('grado');
        $alumnos->save();

        return redirect()->route("alumnos.indexa")->with("success", "Agregado con exito!");
    }


    public function showa($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $alumnos = Alumno::find($id);
        return view("estudiante/eliminar-alumno", compact('alumnos'));
    }


    public function edita($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $alumnos = Alumno::find($id);
        return view("estudiante/actualizar-alumno", compact('alumnos'));

    }


    public function updatea(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $alumnos = Alumno::find($id);
        $alumnos->nombre = $request->post('nombre');
        $alumnos->apellido = $request->post('apellido');
        $alumnos->no_carnet = $request->post('no_carnet');
        $alumnos->cui = $request->post('cui');
        $alumnos->fecha_nacimiento = $request->post('fecha_nacimiento');
        $alumnos->grado = $request->post('grado');
        $alumnos->save();

        return redirect()->route("alumnos.indexa")->with("success", "Actualizado con exito!");
    }


    public function destroya($id)
    {
        //Elimina un registro
        $alumnos = Alumno::find($id);
        $alumnos->delete();
        return redirect()->route("alumnos.indexa")->with("success", "Eliminado con exito!");
    }
}
