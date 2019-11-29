<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locacion;
use App;
use Auth;
use Session;
Use Image;
use App\CategoriaLocaciones;


class LocacionesController extends Controller
{

	    public function __construct()
{
    $this->middleware('auth');
}
     public function create()
    {
        $categorias = App\CategoriaLocaciones::all();
        return view('locaciones.create', compact('categorias'));





    }

    public function index(Locacion $model)
    {
        //'users.index', ['users' => $model->paginate(15)]
        return view('locaciones/index', ['locaciones' => $model->paginate(15)]);
    }

    public function store(Request $request)
    {
    
        $locacion = new App\Locacion($request->all());
        //$perfil->usuario_id = Auth::user()->id;
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path ('images/' . $filename);
            Image::make($image)->resize(800,400)->save($location);
            $locacion->profile_image = $filename;}    
        $locacion->save();

        $locacion->categoriaLocaciones()->sync($request->categoria_id, false);
        Session::flash('success', 'Locación creada con éxito');

        return back()->with('mensaje', 'Locación Agregada');


    //abort_unless(\Gate::allows('company_create'), 403);
    //$Locacion = Locacion::create($request->all());
    

      //return back()->with('mensaje', 'Locación Agregada');
    }



    public function inicio(){

        $locaciones = App\Locacion::all();

        return view('locaciones', compact('locaciones'));
    }


     public function detalle($id){

    
    $locacion = App\Locacion::findOrFail($id);

    return view('locaciones.detalle', compact('locacion'));
}

    public function edit($id)
    {
         $locacion = App\Locacion::findOrFail($id);
    return view('locaciones.edit', compact('locacion'));
    }

    public function update(Request $request, $id)
    {
         $locacion = App\Locacion::find($id);
    $locacion->nombre = $request->nombre;
    $locacion->descripción = $request->descripción;
    $locacion->ciudad = $request->ciudad;
    $locacion->jurisdiccion = $request->jurisdiccion;
    $locacion->address_address = $request->address_address;
    $locacion->redes_sociales = $request->redes_sociales;
    $locacion->profile_image = $request->profile_image;
    $locacion->sitio_web = $request->sitio_web;
    $locacion->address_latitude = $request->address_latitude;
    $locacion->address_longitude = $request->address_longitude;
    $locacion->email = $request->email;
    $locacion->telefono = $request->telefono;
    //$locacion->categoria = $request->categoria;
    $locacion->save();
    return back()->with('mensaje', 'Locación editada');
    }

        public function destroy($id)
    {
        $locacion = App\locacion::findOrFail($id);
    $locacion->delete();

    return back()->with('mensaje', 'Locación Eliminada');
    }

}
