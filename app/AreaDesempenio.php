<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaDesempenio extends Model
{
    
 protected	$table	=	'area_desempenios';
    protected $fillable = [ 'nombre'];

    public function perfilprofesional() {
    return $this->belongsToMany('App\PerfilProfesional', 'area_perfilprofesionales', 'area_id', 'perfil_id');}

    public function perfilproductoras() {
    return $this->belongsToMany('App\PerfilProductora', 'area__productoras', 'area_id', 'perfil_id');}
}

