<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tpartida;
use App\Models\tplayer;
use Illuminate\Database\Eloquent\Model;


class partidacontroller extends Controller {
    //$table->integer('id');
    //$table->integer('score');
    //$table->primary(['id']); /NO
    /**
     * store = guardar uno      C
     * index = mostrar partida    R
     * update = actualizar uno  U
     * destroy = eliminar uno   D
     * edit = mostrar formulario de edicion
     */
    //CREATE
    public function store(Request $request) {
        $request->validate(
            [
                'score'=>'required',
                'id_player' => 'required|exists:tplayers,id'
            ]
        );
        $partida=new tpartida();
        $partida->score = $request->score;
        $partida->id_player = $request->id_player;
        $partida->save();
        return redirect()->route('partidas')->with('success', 'Partida insertada');
    }

    //READ MINMAX
    public function minmax(Request $request) {
        $partidaMinMax = tpartida::where('score', '>=', $request->scoremin)
                                ->where('score','<=', $request->scoremax)
                                ->orderBy('score','desc')
                                ->get();
        // dd($partidaMinMax);
        return view('partidas', compact('partidaMinMax'));
    }

    //READ
    public function index() {
        $partidas = tpartida::orderBy('score', 'desc')->get();
        $players = tplayer::all();
        return view('partidas', compact('partidas'), compact('players'));
    }

    public function show($id) {
        $partida = tpartida::findOrFail($id);
        return view('showPartida', ['partida'=>$partida]);
    }

    // function f_consultarDetalle(Request $request) {
    //     $fila = tpartida::query();
    //     $fila->where('id','like', "%$request%");
    //     $datos = $fila->get();
    //     return view('consultardetalle', compact('dades'));
    // }
    //UPDATE
    public function update(Request $request, $id) {
        $partida = tpartida::findOrFail($id);
        $partida->score = $request->score;
        $partida->save();
        // dd($todo);
        // dd($request);
        return redirect()->route('partidas')->with('success','Partida actualizada');
    }

    public function destroy($id) {
        $partida = tpartida::find($id);
        $partida->delete();
        return redirect()->route('partidas')->with('success','La partida ha sido eliminada');
    }
}
