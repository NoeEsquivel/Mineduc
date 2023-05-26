<?php

namespace App\Http\Controllers;

use App\Models\Titular;
use Illuminate\Http\Request;

class TitularController extends Controller
{

    public function indext()

    {
        $datos = Titular::orderBy('nombre', 'asc')->paginate(25);
        return view('iniciot', compact('datos'));
    }


    public function createt()
    {
        //el formulario donde nosotros agregamos datos

        return view('agregar-encargado');
    }


    public function storet(Request $request)
    {

        //Sirve para guardar datos en la base de datos
        $titulares = new Titular();
        $titulares->paterno = $request->post('paterno');
        $titulares->materno = $request->post('materno');
        $titulares->cui = $request->post('cui');
        $titulares->telefono = $request->post('telefono');
        $titulares->email = $request->post('email');
        $titulares->direccion = $request->post('direccion');
        $titulares->municipio = $request->post('municipio');
        $titulares->departamento = $request->post('departamento');
        $titulares->save();

        return redirect()->route("titulares.indext")->with("success", "Agregado con exito!");
    }


    public function showt($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $titulares = Titular::find($id);
        return view("eliminar-encargado", compact('titulares'));
    }

    public function editt($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $titulares = Titular::find($id);
        return view("actualizar-encargado", compact('titulares'));
        //echo $id;
    }


    public function updatet(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $titulares = Titular::find($id);
        $titulares->paterno = $request->post('paterno');
        $titulares->materno = $request->post('materno');
        $titulares->cui = $request->post('cui');
        $titulares->telefono = $request->post('telefono');
        $titulares->email = $request->post('email');
        $titulares->direccion = $request->post('direccion');
        $titulares->municipio = $request->post('municipio');
        $titulares->departamento = $request->post('departamento');
        $titulares->save();

        return redirect()->route("titulares.indext")->with("success", "Actualizado con exito!");
    }


    public function destroyt($id)
    {
        //Elimina un registro
        $titulares = Titular::find($id);
        $titulares->delete();
        return redirect()->route("titulares.indext")->with("success", "Eliminado con exito!");

    }
}
