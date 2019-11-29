<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClaseProductora extends Model
{
     protected	$table	=	'clase_productoras';
    protected $fillable = [ 'nombre'];

    public function perfilproductoras() {
    return $this->belongsToMany('App\PerfilProductora', 'clase_productora_productoras', 'clase_id', 'perfil_id');}
}
