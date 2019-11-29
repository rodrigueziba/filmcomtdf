<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PerfilProfesional;
use App;
use Auth;
use Session;
Use Image;
use App\AlquilerVentaDistribucion;
use App\Idioma;
use App\ClaseProductora;
use App\AreaDesempenio;
use App\PerfilProductora;

class PerfilProductoraController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $idiomas = App\Idioma::all();
        $areas = App\AreaDesempenio::all();
        $alquileres = App\AlquilerVentaDistribucion::all();
        $clases = App\ClaseProductora::all();
        return view('perfilesproductoras.create')->withIdiomas($idiomas)->withAreas($areas)->withAlquileres($alquileres)->withClases($clases);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil = new PerfilProductora($request->all());
        $perfil->usuario_id = Auth::user()->id;
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path ('images/' . $filename);
            Image::make($image)->resize(800,400)->save($location);
            $perfil->profile_image = $filename;}    
        $perfil->save();

        $perfil->areadesempenio()->sync($request->area_id, false);
        $perfil->idiomas()->sync($request->idioma_id, false);
        $perfil->clases()->sync($request->clase_id, false);
        $perfil->alquileres()->sync($request->alquiler_id, false);
        Session::flash('success', 'Perfil creado con éxito');

        return back()->with('mensaje', 'Perfil Profesional Agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
