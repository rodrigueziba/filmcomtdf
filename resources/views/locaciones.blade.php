@extends('layouts.app')

<style type="text/css">
        #map {
            border:1px solid black;
            width: 97%;
            height: 300px;
        }
    </style>

 

@section('content')
 <div class="container">        
     <div class="row">  
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>{{ __('Filtros') }}</strong></h4>


                        </div>
                        
                    </div>
                </div>
            
            
                  <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <strong>Mostrar</strong>
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        
                         @foreach ($categorias as $item)
                            <a href="{{ route('categoria.show', $item->id ) }}" class="badge badge-secondary">{{ $item->nombre }} </a>

                            @endforeach


                      </div>
                    </div>
                  </div>
                  

                  

                 

                  




                </div>














                
                            

                            
            
            </div>
        </div>
        <div class="col-md-9">
            
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>{{ __('Listado de Locaciones') }}</strong></h4>
                        </div>
                        
                    </div>
                </div>
             <div class="card-body">
                    <div id="map"></div>

                <div class="card-deck">
                      @foreach ($locaciones as $locacion)

                <div class="card text-center"  style="min-width: 45%; max-width: 45%; margin-top: 10px; justify-content-center;min-height:40%; max-height:40%;">
                        <img src="{{asset('images/'. $locacion->profile_image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><strong>{{ $locacion->nombre }}</strong></h5>
                          <p>
                            @foreach ($locacion->categoriaLocaciones as $item1)
                            <a href="{{ route('categoria.show', $item1->id ) }}" class="badge badge-secondary">{{ $item1->nombre }}</a> 
                           @endforeach 
                            </p>
                            <p class="card-text"> 
                        
                            <h4><a href="" class="badge badge-dark" style="line-height=150%">{{ $locacion->ciudad }} </a></h4>
                           
                          </p>
                          <p class="card-text justify-content-center">
                           <h6><a href="#" class="badge badge-info">{{ $locacion->jurisdiccion }}</a> 
                          </p><h6>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-block" href="{{ route('locaciones.show', $locacion->id ) }}" role="button">Detalle</a>
                          <small class="text-muted"></small>
                        </div>
                      </div>
                      @endforeach 
                    </div> 
                    </div> 
                        
                     
                                       
                </div>
                </div>
            </div>
       </div>
        
        {{ $locaciones->links() }}
     </div>
</div>


</div>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap"
    async defer></script>

    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -54.825, lng: -68.328},
          zoom: 6
        });

        
        addPoints();
      }
         
         function addPoints(){
          var locaciones = <?php print_r(json_encode($locaciones)) ?>;
      $.each( locaciones.data, function( index, value ){

      var point ={lat: value.address_latitude,  lng: value.address_longitude}; 
      var marker = new google.maps.Marker({position: point, map: map});
        
        });};
    
   

    </script>


 @endpush