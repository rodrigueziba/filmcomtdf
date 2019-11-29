<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permiso;
use App;


class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
        $permisos = App\Permiso::all();

        return view('permisos/index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('permisos.create');
    }



    public function detalle($id){

    
    $permiso = App\Permiso::findOrFail($id);

    return view('permisos.detalle', compact('permiso'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
    'nombre' => 'required',
    'descripción' => 'required',
    'link' => 'required'
]);


        $permiso = new App\Permiso;
        $permiso->nombre = $request->nombre;
        $permiso->descripción = $request->descripción;
        $permiso->link = $request->link;

        $permiso->save();

        return back()->with('mensaje', 'Permiso Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permiso = App\Permiso::findOrFail($id);

    return view('permisos.detalle', compact('permiso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $permiso = App\Permiso::findOrFail($id);
    return view('permisos.edit', compact('permiso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $permiso = App\Permiso::find($id);
    $permiso->nombre = $request->nombre;
    $permiso->descripción = $request->descripción;
    $permiso->link = $request->link;
    $permiso->save();
    return back()->with('mensaje', 'Permiso editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permiso = App\Permiso::findOrFail($id);
    $permiso->delete();

    return back()->with('mensaje', 'Permiso Eliminado');
    }
}
