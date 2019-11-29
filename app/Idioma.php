<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected	$table	=	'idiomas';
    protected $fillable = [ 'nombre'];

   
   public function perfilprofesional() {
    return $this->belongsToMany('App\PerfilProfesional', 'idiomas_perfilprofesionales', 'idioma_id', 'perfil_id');}

     public function perfilproductoras() {
    return $this->belongsToMany('App\PerfilProductora', 'idioma__productoras', 'idioma_id', 'perfil_id');}

}
