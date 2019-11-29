<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locacion extends Model
{
    protected	$table	=	'locaciones';
    protected $fillable = ['nombre', 'descripción', 'ciudad','jurisdiccion','address_address', 'redes_sociales', 'profile_image', 'sitio_web', 'address_latitude', 'address_longitude', 'email', 'telefono', 'categoria'];

    public function categoriaLocaciones() {
    return $this->belongsToMany('App\CategoriaLocaciones', 'categorias_locaciones', 'locacion_id', 'categoriaLocaciones_id');
  }
}
