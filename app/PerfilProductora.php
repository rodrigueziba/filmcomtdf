<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilProductora extends Model
{
    protected	$table	=	'perfiles_productoras';
    protected $fillable = [ 'usuario_id', 'nombre_entidad' ,'profile_image', 'bio', 'bio_ingles', 'reel', 'ubicacion', 'address_address', 'address_latitude', 'address_longitude' ,'email_publico', 'telefono_publico', 'redes_sociales'];




   
    public function areadesempenio() {
    return $this->belongsToMany('App\AreaDesempenio', 'area__productoras', 'perfil_id', 'area_id');}

    public function idiomas() {
    return $this->belongsToMany('App\Idioma', 'idioma__productoras', 'perfil_id', 'idioma_id');}

    public function clases() {
    return $this->belongsToMany('App\ClaseProductora', 'clase_productora_productoras', 'perfil_id', 'clase_id');}

     public function alquileres() {
    return $this->belongsToMany('App\AlquilerVentaDistribucion', 'alquiler_venta_distribucion_productoras', 'perfil_id', 'alquiler_id');}




      public function usuario()
    {
        return $this->belongsTo('App\User', 'usuario_id');
    }
}
