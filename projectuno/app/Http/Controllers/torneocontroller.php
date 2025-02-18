<?php

namespace App\Http\Controllers;
use App\Models\ttorneo;
use Illuminate\Http\Request;

class torneocontroller extends Controller {
    public function f_formulari()
    {
        $datos=ttorneo::all(); 
        return view('torneoViews.addtorneo', compact('datos'));
    }

    public function f_add(Request $request)
    { 
        $request->validate(
            [
                'id'=>'required|regex:/^t\d{1,4}$/',
                'nombre'=>'required',
                'desc'=>'required'
            ],
            [
                'id.required'=>"El ID es obligatorio",
                'id.regex'=>"El ID debe tener el siguiente formato: t0000",
                'nombre.required' => "El nombre és obligatorio",
                'desc.required'=>"La descripción es obligatoria"
            ]
        );
        
        if (ttorneo::where('id', $request->id)->exists()) {
            return redirect()->back()->with('error', 'Error: El ID ya está registrado.');
        }

        $todo=new ttorneo();
        $todo->name=$request->nombre;
        $todo->description=$request->desc;
        $todo->id=$request->id;
        $todo->save();

        return redirect()->route('datosAñadir')->with('success','creado correctamente');
    }

    public function f_buscar(Request $request)
    {
        $request->validate(
            [
                'nombre' => 'required'
            ],
            [
                'nombre.required' => 'El nombre es obligatorio'
            ]
        );

        $nombre = $request->nombre;
        $datos = ttorneo::where('name', 'like', "$nombre")->paginate();

        return view('torneoViews.buscarresultadotorneo', compact('datos'));
    }

    public function f_consultar()
    {
        $datos = ttorneo::all();
        return view('torneoViews.consultartorneo', compact('datos'));
    }

    public function f_consultardetalle($id)
    {
        if (ttorneo::where('id', $id)->exists()) {
            $fila = ttorneo::query();
            $fila->where('id', 'like', "$id");
            $datos = $fila->get();

            return view('torneoViews.consultardetalletorneo', compact('datos'));
        } else {
            $datos = [];
            return view('torneoViews.consultardetalletorneo', compact('datos'));
        }
    }

    public function f_modificar()
    {
        $datos = ttorneo::all();
        //return $datos; //Tornarà JSON
        return view('torneoViews.modificartorneo', compact('datos'));
    }

    public function f_modificarfila($id)
    {
        $fila = ttorneo::query();
        $fila->where('id', 'like', "%$id%");
        $fila = $fila->get();

        return view('torneoViews.modificarfilatorneo', compact('fila'));
    }

    public function f_actualitzarfila(Request $request, ttorneo $fila)
    {
        $request->validate(
            [
                'id' => 'required',
                'nombre' => 'required',
                'desc' => 'required',
            ],
            [
                'id.required' => "El ID es obligatorio",
                'nombre.required' => "El nombre és obligatorio",
                'desc.required' => "La descripción és obligatoria",
            ]
        );

        $fila->id = $request->id;
        $fila->name = $request->nombre;
        $fila->description = $request->desc;
        $fila->update();
        return redirect()->route('datosActualitzarfila', $fila)->with('success', 'actualitzado correctamente');
    }

    public function f_borrar()
    {
        $datos = ttorneo::all();
        //return $datos; //Tornarà JSON
        return view('torneoViews.borrartorneo', compact('datos'));
    }

    public function f_borrarfila($id)
    {
        $fila = ttorneo::query();
        $fila->where('id', 'like', "$id");
        $fila->delete();
        return redirect()->route('datosBorrar')->with('success', 'eliminado correctamente');
    }
}
