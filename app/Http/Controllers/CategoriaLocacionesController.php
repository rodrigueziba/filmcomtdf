<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaLocaciones;
use App;

class CategoriaLocacionesController extends Controller
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
        $categoriasLocaciones = CategoriaLocaciones::with('children')->whereNull('parent_id')->get();

      return view('CategoriaLocaciones.index')->with([
        'categoriasLocaciones'  => $categoriasLocaciones
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = new CategoriaLocaciones;
      $categoria->nombre = $data->nombre;
      $categoria->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'nombre'  => 'required|min:3|max:255|string'
      ]);

      $data = $request->except('_token');

      CategoriaLocaciones::create($data);

      

      return redirect()->route('CategoriaLocaciones.index')->withSuccess('Categoria de Locaciones creada con éxito');
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
        $this->validate($request, [
        'nombre'  => 'required|min:3|max:255|string'
      ]);

      $data = $request->except(['_token', '_method']);

      CategoriaLocaciones::find($id)->update($data);

      return redirect()->route('CategoriaLocaciones.index')->withSuccess('Categoria de Locaciones actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $CategoriaLocaciones = CategoriaLocaciones::find($id);

      if ($CategoriaLocaciones->children) {
        foreach ($CategoriaLocaciones->children as $child) {
          if ($child->locacion) {
            foreach ($child->locacion as $locacion) {
              $locacion->categoria_id = NULL;
              $locacion->save();
            }
          }
        }
        
        $CategoriaLocaciones->children()->delete();
      }

      if ($CategoriaLocaciones->locacion) {
        foreach ($CategoriaLocaciones->locacion as $locacion) {
          $post->category_id = NULL;
          $post->save();
        }
      }

      $CategoriaLocaciones->delete();

      return redirect()->route('CategoriaLocaciones.index')->withSuccess('Eliminaste la Categoria de Locaciones con éxito');
    
    }
}
