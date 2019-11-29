@extends('adminlte::page')
@section('content')
    <body>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Locaciones') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                             <a href="{{ route('Locacion.index') }}" class="btn btn-sm btn-primary">{{ __('Volver al listado') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
          
         
          <div class="container py-3">
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <form method="POST" action="{{ route('locaciones.store') }}">
                @csrf

                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Nombre Locación">
                </div>

                <div class="form-group">
                  <label for="descripción">Descripción</label>
                   <textarea name="descripción" rows="8" cols="80" class="form-control">{{ old('descripción') }}</textarea>
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
                  <input type="text" name="redes_sociales" class="form-control" value="{{ old('redes_sociales') }}" placeholder="Redes Sociales">
                </div>

                <div class="form-group">
                  <label for="sitio_web">Link a Sitio Web</label>
                  <input type="text" name="sitio_web" class="form-control" value="{{ old('sitio_web') }}" placeholder="Sitio Web">
                </div>

                <div class="form-group">
                  <label for="email">Dirección de E-Mail</label>
                  <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="E-Mail">
                </div>

                 <div class="form-group">
                  <label for="telefono">Número de Teléfono</label>
                  <input type="number" name="telefono" class="form-control" value="{{ old('telefono') }}" placeholder="Teléfono">
                </div>
                <div class="form-group">
                  <label for="category_id">Categoría</label>
                  <select class="form-control" name="categoria_id" required>
                    <option value="">Seleccionar una Categoría</option>

                    @foreach ($categorias as $categoria)
                      <option value="{{ $categoria->id }}" {{ $categoria->id == old('categoria_id') ? 'selected' : '' }}>{{ $categoria->nombre }}</option>

                      @if ($categoria->children)
                        @foreach ($categoria->children as $child)
                          <option value="{{ $child->id }}" {{ $child->id == old('categoria_id') ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->nombre }}</option>
                        @endforeach
                      @endif
                    @endforeach
                  </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar Locación</button>
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