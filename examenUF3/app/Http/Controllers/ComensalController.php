<?php

namespace App\Http\Controllers;

use App\Models\Comensal;
use Illuminate\Http\Request;

class ComensalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comensal $comensal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comensal $comensal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comensal $comensal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comensal $comensal)
    {
        //
    }


    public function f_buscar(Request $request)
    {
        $request->validate(
            [
                'fecha' => 'required'
            ],
            [
                'fecha.required' => 'La fecha es obligatoria'
            ],
            [

                'id_mesa' => 'required'

            ],
            [
                'id_mesa.required' => 'El id de la mesa es obligatoria'
            ]

        );

        $fecha = $request->fecha;
        $id_mesa = $request->id_mesa;

        $datos = Comensal::where('fecha', 'like', "$fecha")->where('id_mesa', 'like', "%$id_mesa%")->paginate();


        return view('buscarcomensalesResultado', compact('datos'));
    }
}
