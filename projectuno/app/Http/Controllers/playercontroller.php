<?php

namespace App\Http\Controllers;
use App\Models\tplayer;
use App\Models\tpartida;
use Illuminate\Http\Request;

class playercontroller extends Controller {
    public function f_formulari()
    {
        $datos=tplayer::all(); 
        return view('jugadorViews.addjugador', compact('datos'));
    }

    public function f_add(Request $request)
    { 
        $request->validate(
            [
                'id'=>'required',
                'nombre'=>'required',
                'apellido'=>'required',
                'usuario'=>'required'
            ],
            [
                'id.required'=>"El ID es obligatorio",
                'nombre.required' => "El nombre és obligatorio",
                'apellido.required' => "El apellido és obligatorio",
                'usuario.required'=>"El usuario és obligatorio"
            ]
        );
        
        if (tplayer::where('id', $request->id)->exists()) {
            return redirect()->back()->with('error', 'Error: El ID ya está registrado.');
        }

        $todo=new tplayer();
        $todo->name=$request->nombre;
        $todo->surname=$request->apellido;
        $todo->username=$request->usuario;
        $todo->id=$request->id;
        $todo->save();

        return redirect()->route('datosAñadirJ')->with('success','creado correctamente');
    }

    public function f_consultar()
    {
        $datos = tplayer::all();
        return view('jugadorViews.consultarjugador', compact('datos'));
    }

    public function f_consultardetalle($id)
    {
        if (tplayer::where('id', $id)->exists()) {
            $fila = tplayer::query();
            $fila->where('id', 'like', "$id");
            $datos = $fila->get();

            return view('jugadorViews.consultardetallejugador', compact('datos'));
        } else {
            $datos = [];
            return view('jugadorViews.consultardetallejugador', compact('datos'));
        }
    }

    public function f_modificar()
    {
        $datos = tplayer::all();
        //return $datos; //Tornarà JSON
        return view('jugadorViews.modificarjugador', compact('datos'));
    }

    public function f_modificarfila($id)
    {
        $fila = tplayer::query();
        $fila->where('id', 'like', "%$id%");
        $fila = $fila->get();

        return view('jugadorViews.modificarfilajugador', compact('fila'));
    }

    public function f_actualitzarfila(Request $request, tplayer $fila)
    {
        $request->validate(
            [
                'id'=>'required',
                'nombre'=>'required',
                'apellido'=>'required',
                'usuario'=>'required'
            ],
            [
                'id.required'=>"El ID es obligatorio",
                'nombre.required' => "El nombre és obligatorio",
                'apellido.required' => "El apellido és obligatorio",
                'usuario.required'=>"El usuario és obligatorio"
            ]
        );

        $fila->id = $request->id;
        $fila->name = $request->nombre;
        $fila->surname = $request->apellido;
        $fila->username = $request->usuario;
        $fila->update();
        return redirect()->route('datosActualitzarfilaJ', $fila)->with('success', 'actualitzado correctamente');
    }

    public function f_borrar()
    {
        $datos = tplayer::all();
        //return $datos; //Tornarà JSON
        return view('jugadorViews.borrarjugador', compact('datos'));
    }

    public function f_borrarfila($id)
    {
        // $partida = tpartida::find($id);
        // $partida->delete();

        $fila = tplayer::query();
        $fila->where('id', 'like', "$id");
        $fila->delete();
        return redirect()->route('datosBorrarJ')->with('success', 'eliminado correctamente');
    }
}
