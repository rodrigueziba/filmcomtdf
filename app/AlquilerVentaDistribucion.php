<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlquilerVentaDistribucion extends Model
{
    protected	$table	=	'alquiler_venta_distribucion';
    protected $fillable = [ 'nombre'];

    public function perfilproductoras() {
    return $this->belongsToMany('App\PerfilProductora', 'alquiler_venta_distribucion_productoras', 'alquiler_id', 'perfil_id');}
}
