@extends('layouts.app')


<style type="text/css">
        #map {
            border:1px solid black;
            width: 100%;
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
                            <h4 class="card-title"><strong>{{ __('Locación') }}</strong></h4>


                        </div>
                        
                    </div>
                </div>
            
      		
				  <div id="accordion">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h5 class="mb-0">
				        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				          <strong>Datos Básicos</strong>
				        </button>
				      </h5>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				      <div class="card-body">

				      	

				        <h2><strong>{{ $locacion->nombre }}</strong></h2>
				        
				        <h6><strong>Localidad:</strong>{{ $locacion->ciudad }}</h6>
				        <h6><strong>Jurisdicción:</strong>{{ $locacion->jurisdiccion }}</h6>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <strong>Datos Adicionales</strong>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				      <div class="card-body">
				      	    <h5><strong>Sitio Web:</strong></h5>
					       <h5><a href="{{ $locacion->sitio_web}}" class="badge badge-info">Link</a></h5>

							<h5><strong>Redes Sociales:</strong></h5>
					       <h5><a href="{{ $locacion->redes_sociales}}" class="badge badge-info">Link</a></h5>

				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          <strong>Datos de Contacto</strong>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				      <div class="card-body">
				        @auth
						   <h5><strong>Teléfono:</strong></h5>
					       <h5><a href="tel:{{ $locacion->telefono}}" class="badge badge-info">Teléfono</a></h5>
					       <h5><strong>Email:</strong></h5>
					       <h5><a href="mailto:{{ $locacion->email}}" class="badge badge-info">Email</a></h5>
					       <h5><strong>Dirección:</strong></h5>
					       <h3><small>{{ $locacion->address_address}}</small></h3>
						@endauth
						@guest
						   <h5><strong>Tenés que estar registrado para ver los datos de contacto</strong></h5>
						@endguest
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
                            <h4 class="card-title"><strong>{{ __('Descripción') }}</strong></h4>
                        </div>
                        
                    </div>
                </div>
             <div class="card-body">

             	<div class="card-deck">
					  <img src="{{asset('images/'. $locacion->profile_image)}}" alt="..." style="width:100%">

									        
					  <div class="card text-left">
					    
					    <div class="card-body">
							
						<h3><p>{{ $locacion->descripción }}</p></h3>
					    	
					      <h3><p>
                            @foreach ($locacion->categoriaLocaciones as $item1)
                            <a href="{{ route('categoria.show', $item1->id ) }}" class="badge badge-secondary">{{ $item1->nombre }}</a> 
                           @endforeach 
                            </p></h3>

                            <div id="map"></div>
					    </div>
					  </div>
					  
									   
				</div>
  				</div>
			</div>
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
          zoom: 10
          
        });

        
        addPoint();
      }
         
         function addPoints(){
          var locaciones = <?php print_r(json_encode($locacion)) ?>;
      $.each( locaciones.data, function( index, value ){

      var point ={lat: value.address_latitude,  lng: value.address_longitude}; 
      var marker = new google.maps.Marker({position: point, map: map});
        
        });};

      function addPoint(){
          var locacion = <?php print_r(json_encode($locacion)) ?>;
          var point ={lat: locacion.address_latitude,  lng: locacion.address_longitude};
          var marker = new google.maps.Marker({position: point, map: map});
        
        };
    
   

    </script>


 @endpush