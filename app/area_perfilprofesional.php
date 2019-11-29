<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area_perfilprofesional extends Model
{
    protected	$table	=	'area_perfilprofesionales';
    protected $fillable = [ 'perfil_id', 'area_id'];

}
