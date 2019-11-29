<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PerfilProfesional;
use App\PerfilProductora;
use App\AreaDesempenio;
use App\ClaseProductora;
use App\AlquilerVentaDistribucion;
use App\Idioma;
use App;
use Auth;
use Session;
Use Image;

class GuiaAudiovisualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfilesprofesionales = App\PerfilProfesional::orderBy('created_at','desc')->paginate(9);
        $areas = App\AreaDesempenio::all();
        $idiomas = App\Idioma::all();
        return view ('/guiaaudiovisual')->withPerfiles($perfilesprofesionales)->withAreas($areas)->withIdiomas($idiomas);
    }

    public function indexproductoras()
    {
        $perfiles = App\PerfilProductora::orderBy('created_at','desc')->paginate(9);
        $areas = App\AreaDesempenio::all();
        $idiomas = App\Idioma::all();
         $alquileres = App\AlquilerVentaDistribucion::all();
        $clases = App\ClaseProductora::all();
        return view ('/guiaaudiovisual/productoras')->withPerfiles($perfiles)->withAreas($areas)->withIdiomas($idiomas)->withAlquileres($alquileres)->withClases($clases);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function area($id)
    {

        $area = App\AreaDesempenio::find($id);
        //$perfilesprofesionales = App\PerfilProfesional::paginate(9);
        $areas = App\AreaDesempenio::all();
        $idiomas = App\Idioma::all();

        
        return view('guiaaudiovisual.area')->withArea($area)->withAreas($areas)->withIdiomas($idiomas);
    }

    public function idiomas($id)
    {
        $idioma = App\Idioma::find($id);
        
        //$perfilesprofesionales = App\PerfilProfesional::paginate(9);
        $areas = App\AreaDesempenio::all();
        $idiomas = App\Idioma::all();

        
        return view('guiaaudiovisual.idioma')->withIdioma($idioma)->withAreas($areas)->withIdiomas($idiomas);
    }

     public function alquileres($id)
    {
        $alquiler = App\AlquilerVentaDistribucion::find($id);
        $alquileres = App\AlquilerVentaDistribucion::all();
        $clases = App\ClaseProductora::all();
        
        //$perfilesprofesionales = App\PerfilProfesional::paginate(9);
        
       

        
        return view('guiaaudiovisual.alquiler')->withAlquiler($alquiler)->withAlquileres($alquileres)->withClases($clases);
    }


     public function clases($id)
    {
        $clase = App\ClaseProductora::find($id);
        $alquileres = App\AlquilerVentaDistribucion::all();
        $clases = App\ClaseProductora::all();
        
        //$perfilesprofesionales = App\PerfilProfesional::paginate(9);
        
       

        
        return view('guiaaudiovisual.claseproductora')->withClase($clase)->withAlquileres($alquileres)->withClases($clases);
    }

    public function profesionales($id)
    {
        $perfil = App\PerfilProfesional::find($id);
        return view('guiaaudiovisual.profesional')->withPerfil($perfil);
    }

    public function productoras($id)
    {
        $perfil = App\PerfilProductora::find($id);
        return view('guiaaudiovisual.productora')->withPerfil($perfil);
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
