<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App;
use Auth;
use Session;

class PrestadorController extends Controller
{
    

	public function misperfiles()
    {
        $perfil = App\User::find(Auth::user()->id);

        
        return view('misperfiles')->withPerfil($perfil);
    }

}
