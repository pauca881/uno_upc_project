<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tpartida;
use Illuminate\Database\Eloquent\Model;

class partidacontroller extends Controller {
    //$table->integer('id');
    //$table->integer('score');
    //$table->primary(['id']); /NO
    function f_formulario() {
        $datos = tpartida::all();
        return view('insertar', compact('datos'));
    }

    function f_insertPartida(Request $request) {
        // $request->validate(
        //     [
        //         'score'=>'required'
        //     ]
        // );
        // $todo=new tpartida();
        // $todo->score = $request->score;
        // $todo->save();
        // return redirect()->route('datosInsertar')->with('success', 'Partida insertada')
    }
}
