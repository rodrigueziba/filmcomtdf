@extends('layouts.app')

@section('stylesheets')
  

@endsection


@section('content')
    <div class="row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
      <h1 > Edición | <strong>  Perfil Profesional </strong></h1>
      <hr>
       <form method="POST" action="{{ route('perfilprofesional.update', $perfil->id) }}" enctype= "multipart/form-data">
           @csrf
           @method('PUT')


              <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Datos Básicos
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">

                        <div class="form-group">
                        <label for="imagen_perfil">Imagen de Perfil</label>
                        <input type="file" name="profile_image" class="form-control-file" id="imagen_perfil">
                        </div>

                      <div class="form-group">
                      <label for="nombre_publico">Nombre Público</label>
                      <input type="text" name="nombre_publico" class="form-control" value="{{ $perfil->nombre_publico  }}" placeholder="Nombre Locación">
                      </div>

                      <div class="form-group">
                      <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                      <input type="date" name="fecha_nacimiento" class="date form-control" value="{{ $perfil->fecha_nacimiento) }}" placeholder="Fecha de Nacimiento">
                      
                      </div>

                      <div class="form-group">
                       <label  for="ubicacion">  Elegí tu ciudad:</label> <select  name="ubicacion"    id="ciudad" value="">     <option value="Ushuaia" selected>Ushuaia</option>          <option value="Tolhuin">Tolhuin</option>        <option value="Rio Grande"   >Río Grande</option>   </select>
                       </div>


                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Experiencia Laboral
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    
                    <div class="form-group">
                    <label for="descripción">Bio</label>
                    <textarea name="bio" rows="8" cols="80" class="form-control">{{ $perfil->bio  }}</textarea>
                    </div>


                    <div class="form-group">
                    <label for="descripción">Bio Inglés</label>
                    <textarea name="bio_ingles" rows="8" cols="80" class="form-control">{{ $perfil->bio_ingles  }}</textarea>
                    </div>

                    <div class="form-group">
                    <label for="nombre_publico">Reel</label>
                    <input type="text" name="reel" class="form-control" value="{{ $perfil->reel  }}" placeholder="Link a Youtube o Vimeo">
                    </div>


                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Datos de Contacto
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    
                  <div class="form-group">
                  <label for="email">Dirección de E-Mail</label>
                  <input type="text" name="email_publico" class="form-control" value="{{ $perfil->email_publico  }}" placeholder="E-Mail">
                  </div>

                  <div class="form-group">
                  <label for="telefono">Número de Teléfono</label>
                  <input type="number" name="telefono_publico" class="form-control" value="{{ $perfil->telefono_publico  }}" placeholder="Teléfono">
                  </div>



                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Área de Desempeño
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    
                  <div class="form-group">
                  <label  for="area_id">  Elegí el área de desempeño:</label>
                  <select multiple class="form-control" name="area_id[]"  multiple="multiple" >

                   @foreach($areas as $area)
                      <option value='{{ $area->id }}'>{{ $area->nombre }}</option>
                    @endforeach

                  </select>
                  </div>

              

                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingFive">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Datos Adicionales
                    </button>
                  </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="card-body">
                    
                  <div class="form-group">
                  <label  for="idioma_id">  Idiomas:</label>
                  <select multiple class="form-control select2-multi" name="idioma_id[]" multiple="multiple">
                  @foreach($idiomas as $idioma)
                      <option value='{{ $idioma->id }}'>{{ $idioma->nombre }}</option>
                    @endforeach

                  </select>
                  </div>

                  <div class="form-group">
                  <label for="redes_sociales">Link a Redes Sociales</label>
                  <input type="text" name="redes_sociales" class="form-control" value="{{ $perfil->redes_sociales  }}" placeholder="Redes Sociales">
                  </div>

              

                  </div>
                </div>
              </div>
              </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar Perfil</button>
        </form>
      </div>
    </div>
  
                

@endsection
    
@push('js')

     
 

 

 @endpush