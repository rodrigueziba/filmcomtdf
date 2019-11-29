@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Editar Locación</span>
                    <a href="/locaciones/index" class="btn btn-primary btn-sm">Volver al listado</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                        <form method="post" action="{{ route('locaciones.update', $locacion->id) }}" autocomplete="off">
                            @csrf
                            @method('PUT')

                            <h6 class="heading-small text-muted mb-4">{{ __('Información de la locación ') }}</h6>
                            <div class="pl-lg-4">
                                 <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" class="form-control" value="{{ $locacion->nombre  }}" placeholder="Nombre Locación">
                </div>

                <div class="form-group">
                  <label for="descripción">Descripción</label>
                   <textarea name="descripción" rows="8" cols="80" class="form-control">{{ $locacion->descripción  }}</textarea>
                </div>
                <div class="form-group">
                 <label  for="ciudad">  Elegí la ciudad:</label> <select  name="ciudad"    id="ciudad">     <option value="ushuaia" selected>Ushuaia</option>          <option value="tolhuin">Tolhuin</option>        <option value="rio grande"   >Río Grande</option>   </select>
                 </div>
                    <div class="form-group">
                 <label  for="jurisdiccion">  Elegí la Jurisdicción:</label> 
                 <select  name="jurisdiccion"    id="jurisdiccion">     <option value="estatal" selected>Estatal</option>          <option value="privado">Privado</option>           </select>
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

                <div class="form-group">
                  <label for="redes_sociales">Link a Redes Sociales</label>
                  <input type="text" name="redes_sociales" class="form-control" value="{{ $locacion->redes_sociales }}" placeholder="Redes Sociales">
                </div>

                <div class="form-group">
                  <label for="sitio_web">Link a Sitio Web</label>
                  <input type="text" name="sitio_web" class="form-control" value="{{ $locacion->sitio_web }}" placeholder="Sitio Web">
                </div>

                <div class="form-group">
                  <label for="email">Dirección de E-Mail</label>
                  <input type="text" name="email" class="form-control" value="{{ $locacion->email }}" placeholder="E-Mail">
                </div>

                 <div class="form-group">
                  <label for="telefono">Número de Teléfono</label>
                  <input type="number" name="telefono" class="form-control" value="{{ $locacion->telefono }}" placeholder="Teléfono">
                </div>
                <button type="submit" class="btn btn-primary">Editar Locación</button>
              </form>
            </div>
          </div>
        </div>
   

</div>
                <div class="card-footer py-4">
                                   </div>
            </div>
        </div>
    </div>

@endsection
    
@push('js')

      <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="/js/mapInput.js"></script>
 @endpush