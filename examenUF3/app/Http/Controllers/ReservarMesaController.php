<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa;
use App\Models\Comensal;
use App\Models\ReservaMesa;


class ReservarMesaController extends Controller
{
    


    public function f_formulari()
    {
   
        $mesas = Mesa::all();
        $comensales = Comensal::all();
        return view('nuevareserva', compact('mesas', 'comensales'));
    }

    public function f_add(Request $request){

        $request->validate([
            'mesa_id' => 'required|exists:mesas,id', 
            'comensal_id' => 'required|exists:comensals,id',
        ]);

        ReservaMesa::create([
            'mesa_id' => $request->mesa_id,
            'comensal_id' => $request->comensal_id,
            'fecha_reserva' => now(), 
        ]);

        return redirect()->back()->with('success', 'Reserva realizada con éxito');

    }

}
