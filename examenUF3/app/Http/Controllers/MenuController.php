<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('listarmenu', compact('menus'));

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
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
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
        $datos = Menu::where('nombre', 'like', "$nombre")->paginate();

        // ->orderBy('precio','desc')

        return view('buscarMenuResultado', compact('datos'));
    }

    public function f_modificarfila($id)
    {
        $fila = Menu::query();
        $fila->where('id', 'like', "%$id%");
        $fila = $fila->get();

        return view('modificarfilamenu', compact('fila'));
    }

    public function f_actualitzarfila(Request $request, Menu $fila)
    {
        $request->validate(
            [
                'id' => 'required',
                'nombre' => 'required',
                'descripcion' => 'required',
                'precio' => 'required'

            ],
            [
                'id.required' => "El ID es obligatori",
                'nombre.required' => "El nombre és obligatori",
                'descripcion.required' => "La descripció és obligatoria",
                'precio.required' => "El preu és obligatori",

            ]
        );

        $fila->id = $request->id;
        $fila->nombre = $request->nombre;
        $fila->descripcion = $request->descripcion;
        $fila->descripcion = $request->descripcion;
        $fila->precio = $request->precio;


        $fila->update();
        return redirect()->route('datosActualitzarfila', $fila)->with('success', 'actualitzado correctamente');
    }

    
}
