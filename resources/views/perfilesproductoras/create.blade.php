@extends('layouts.app')

@section('stylesheets')
  
  <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
 


@endsection


@section('content')
    <div class="row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
      <h1 > Registro | <strong>  Perfil Productora </strong></h1>
      <hr>
       <form method="POST" action="{{ route('perfilproductora.store') }}" enctype= "multipart/form-data">
           @csrf


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
                      <label for="nombre_entidad">Nombre Entidad</label>
                      <input type="text" name="nombre_entidad" class="form-control" value="{{ old('nombre_entidad') }}" placeholder="Nombre Locación">
                      </div>


                      <div class="form-group">
                       <label  for="ubicacion">  Elegí tu ciudad:</label> <select  name="ubicacion"    id="ciudad">     <option value="Ushuaia" selected>Ushuaia</option>          <option value="Tolhuin">Tolhuin</option>        <option value="Rio Grande"   >Río Grande</option>   </select>
                       </div>

                       <div class="form-group">
                        <label for="address_address">Dirección</label>
                        <input type="text" id="address-input" name="address_address" class="form-control map-input">
                        <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                        <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                        </div>
                        <div id="address-map-container" style="width:100%;height:400px; ">
                        <div style="width: 100%; height: 100%" id="address-map"></div>
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
                    <label for="bion">Bio</label>
                    <textarea name="bio" rows="8" cols="80" class="form-control">{{ old('bio') }}</textarea>
                    </div>


                    <div class="form-group">
                    <label for="bio_ingles">Bio Inglés</label>
                    <textarea name="bio_ingles" rows="8" cols="80" class="form-control">{{ old('bio_ingles') }}</textarea>
                    </div>

                    <div class="form-group">
                    <label for="reel">Reel</label>
                    <input type="text" name="reel" class="form-control" value="{{ old('reel') }}" placeholder="Link a Youtube o Vimeo">
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
                  <input type="text" name="email_publico" class="form-control" value="{{ old('email_publico') }}" placeholder="E-Mail">
                  </div>

                  <div class="form-group">
                  <label for="telefono">Número de Teléfono</label>
                  <input type="number" name="telefono_publico" class="form-control" value="{{ old('telefono_publico') }}" placeholder="Teléfono">
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
                  <select multiple class="form-control select2-multi " name="area_id[]"  multiple="multiple" >

                   @foreach($areas as $area)
                      <option value='{{ $area->id }}'>{{ $area->nombre }}</option>
                    @endforeach

                  </select>
                  </div>

              

                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingFour1">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                      Clase de Productora
                    </button>
                  </h2>
                </div>
                <div id="collapseFour1" class="collapse" aria-labelledby="headingFour1" data-parent="#accordionExample">
                  <div class="card-body">
                    
                  <div class="form-group">
                  <label  for="clase_id">  Elegí la Clase de la Productora:</label>
                  <select multiple class="form-control select2-multi " name="clase_id[]"  multiple="multiple" >

                   @foreach($clases as $clase)
                      <option value='{{ $clase->id }}'>{{ $clase->nombre }}</option>
                    @endforeach

                  </select>
                  </div>

              

                  </div>
                </div>
              </div>


              <div class="card">
                <div class="card-header" id="headingFour12">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour12" aria-expanded="false" aria-controls="collapseFour12">
                      Alquiler, venta o distribución
                    </button>
                  </h2>
                </div>
                <div id="collapseFour12" class="collapse" aria-labelledby="headingFour12" data-parent="#accordionExample">
                  <div class="card-body">
                    
                  <div class="form-group">
                  <label  for="alquiler_id">  Elegí si tu productora, alquila, vende o distribuye:</label>
                  <select multiple class="form-control select2-multi " name="alquiler_id[]"  multiple="multiple" >

                   @foreach($alquileres as $alquiler)
                      <option value='{{ $alquiler->id }}'>{{ $alquiler->nombre }}</option>
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
                  <input type="text" name="redes_sociales" class="form-control" value="{{ old('redes_sociales') }}" placeholder="Redes Sociales">
                  </div>

              

                  </div>
                </div>
              </div>
              </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Perfil</button>
        </form>
      </div>
    </div>
  
              <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="/js/mapInput.js"></script>  

@endsection
    
@push('js')

      
 @endpush