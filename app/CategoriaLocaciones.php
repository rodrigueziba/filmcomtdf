<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaLocaciones extends Model
{
    protected	$table	=	'categoria_locaciones';
    protected $fillable = ['parent_id', 'nombre'];

     public function children()
  {
    return $this->hasMany('App\CategoriaLocaciones', 'parent_id');


  }

  public function locaciones()
  {
    return $this->belongsToMany('App\Locacion','categorias_locaciones', 'categoriaLocaciones_id','locacion_id',);
  }

}
