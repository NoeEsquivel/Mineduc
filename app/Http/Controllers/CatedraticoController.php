<?php

namespace App\Http\Controllers;

use App\Models\Catedratico;
use Illuminate\Http\Request;

class CatedraticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexc()
    {
        $datos = Catedratico::orderBy('nombre', 'asc')->paginate(25);
        return view('catedratico/inicio-catedratico', compact('datos'));
    }


    public function createc()
    {
        //el formulario donde nosotros agregamos datos

        return view('catedratico/agregar-catedratico');
    }

    public function storec(Request $request)
    {
        //Sirve para guardar datos en la base de datos
        $catedraticos = new Catedratico();
        $catedraticos->nombre = $request->post('nombre');
        $catedraticos->apellido = $request->post('apellido');
        $catedraticos->codigoid = $request->post('codigoid');
        $catedraticos->cui = $request->post('cui');
        $catedraticos->email = $request->post('email');
        $catedraticos->direccion = $request->post('direccion');
        $catedraticos->telefono = $request->post('telefono');
        $catedraticos->grado = $request->post('grado');
        $catedraticos->departamento = $request->post('departamento');
        $catedraticos->save();

        return redirect()->route("catedraticos.indexc")->with("success", "Agregado con exito!");
    }


    public function showc($id)
    {
        //Servira para obtener un registro de nuestra tabla
        $catedraticos = Catedratico::find($id);
        return view("catedratico/eliminar-catedratico", compact('catedraticos'));
    }


    public function editc($id)
    {
        //Este método nos sirve para traer los datos que se van a editar
        //y los coloca en un formulario"
        $catedraticos = Catedratico::find($id);
        return view("catedratico/actualizar-catedratico", compact('catedraticos'));

    }


    public function updatec(Request $request, $id)
    {
        //Este método actualiza los datos en la base de datos
        $catedraticos = Catedratico::find($id);
        $catedraticos->nombre = $request->post('nombre');
        $catedraticos->apellido = $request->post('apellido');
        $catedraticos->codigoid = $request->post('codigoid');
        $catedraticos->cui = $request->post('cui');
        $catedraticos->email = $request->post('email');
        $catedraticos->direccion = $request->post('direccion');
        $catedraticos->telefono = $request->post('telefono');
        $catedraticos->grado = $request->post('grado');
        $catedraticos->departamento = $request->post('departamento');
        $catedraticos->save();

        return redirect()->route("catedraticos.indexc")->with("success", "Actualizado con exito!");
    }


    public function destroyc($id)
    {
        //Elimina un registro
        $catedraticos = Catedratico::find($id);
        $catedraticos->delete();
        return redirect()->route("catedraticos.indexc")->with("success", "Eliminado con exito!");
    }
}
