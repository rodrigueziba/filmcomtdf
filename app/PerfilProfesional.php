<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilProfesional extends Model
{
   protected	$table	=	'perfiles_profesionales';
    protected $fillable = [ 'usuario_id', 'nombre_publico' ,'profile_image', 'fecha_nacimiento', 'bio', 'bio_ingles', 'reel', 'ubicacion', 'email_publico', 'telefono_publico', 'redes_sociales'];

   
    public function areadesempenio() {
    return $this->belongsToMany('App\AreaDesempenio', 'area_perfilprofesionales', 'perfil_id', 'area_id');}

    public function idiomas() {
    return $this->belongsToMany('App\Idioma', 'idiomas_perfilprofesionales', 'perfil_id', 'idioma_id');}



      public function usuario()
    {
        return $this->belongsTo('App\User', 'usuario_id');
    }


}

