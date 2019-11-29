<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locacion;
use App\CategoriaLocaciones;
use App;

use Auth;

class PaginaController extends Controller
{
    //

       public function gmaps()
    {
    	$locaciones = App\Locacion::orderBy('created_at','desc')->paginate(9);
        $categorias = App\CategoriaLocaciones::all();
    	return view('locaciones')->withLocaciones($locaciones)->withCategorias($categorias);;
    }


   public function categorias($id)
    {
        $categoria = App\CategoriaLocaciones::find($id);
        $categorias = App\CategoriaLocaciones::all();
        

        
        return view('locaciones.categorias')->withCategoria($categoria)->withCategorias($categorias);
    }

    public function locacionshow($id)
    {
        $locacion = App\Locacion::find($id);
        
        

        
        return view('locaciones.locacion')->withLocacion($locacion);
    }

      public function usuarios()
    {
    	$usuarios = App\User::all();
    	return view('usuarios/index',compact('usuarios'));
    }

     public function permisos()
    {
    	$permisos = App\Permiso::orderBy('created_at','desc')->paginate(9);
    	return view('permisos',compact('permisos'));
    }

    

}
