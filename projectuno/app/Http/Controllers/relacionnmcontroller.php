<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\tplayer;
use App\Models\ttorneo;

class relacionnmcontroller extends Controller
{
    // LIST ALL
    public function listAll()
    {
        // $playerTorneos = DB::table('player_torneo')
        //     ->join('players', 'players.id', '=', 'player_torneo.player_id')
        //     ->join('torneos', 'torneos.id', '=', 'player_torneo.torneo_id')
        //     ->select('player_torneo.*', 'players.name as player_name', 'torneos.name as torneo_name')
        //     ->get();

        $dades = tplayer::with('torneos')->get();

        $players = tplayer::all();
        $torneos = ttorneo::all();
        return view('jugadortorneoViews.jugadorestorneos', compact('players', 'torneos'), compact('dades'));
    }

    // DELETE
    public function delete(Request $request)
    {
        $player = tplayer::find($request->id_player);
        $player->torneos()->detach($request->id_torneo);

        return redirect()->route('jugadortorneo')->with('success', 'Te has desinscrito correctamente');
    }

    // INSERT
    public function insert(Request $request)
    {
        $request->validate(
            [
                'player_id' => 'required',
                'torneo_id' => 'required'
            ],
            [
                'player_id.required' => "El jugador es obligatorio",
                'torneo_id.required' => "El torneo és obligatorio"
            ]
        );

        $player = tplayer::find($request->player_id);
        $player->torneos()->attach($request->torneo_id); // Inserta un registro en la tabla intermedia con player_id = 1 y torneo_id = 3

        return redirect()->route('jugadortorneo')->with('success', 'Inscripción realizada!');

    }
}
