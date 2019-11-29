@extends('layouts.app')



       <script src="http://maps.google.com/maps/api/js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

   <script type="text/javascript">


    var value = <?php print_r(json_encode($perfil)) ?>;


    var mymap = new GMaps({
      el: '#mymap',
      lat: -54.8062564,
      lng: -68.3113543,
      zoom:9
    });

mymap.addMarker({
          lat: value.address_latitude,
          lng: value.address_longitude,
          title: value.nombre,
          click: function(e) {
            alert('Ésto es '+value.nombre+'');
          }
        });


   


  </script>

  

								    <style type="text/css">
								        #mymap {
								            border:1px solid black;
								            width: 100%;
								            height: 380px;
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
                            <h4 class="card-title"><strong>{{ __('Productora') }}</strong></h4>


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

				      	<img src="{{asset('images/'. $perfil->profile_image)}}" alt="..." class="img-thumbnail">


				        <h4><strong>{{ $perfil->nombre_entidad }}</strong></h4>
				        
				        <h6><strong>Localidad:</strong>{{ $perfil->ubicacion }}</h6>
				        <h6><strong>Dirección:</strong>{{ $perfil->address_address }}</h6>
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
				      	    <h5><strong>Idiomas:</strong></h5>
				      		@foreach ($perfil->idiomas as $idioma)
					       	<h5><a href="{{ route('idioma.show', $idioma->id ) }}" class="badge badge-secondary">{{ $idioma->nombre }}</a> </h5>
					       @endforeach

							<h5><strong>Redes Sociales:</strong></h5>
					       <h5><a href="{{ $perfil->redes_sociales}}" class="badge badge-info">Link</a></h5>

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
					       <h5><a href="tel:{{ $perfil->telefono_publico}}" class="badge badge-info">Teléfono</a></h5>
					       <h5><strong>Email:</strong></h5>
					       <h5><a href="mailto:{{ $perfil->email_publico}}" class="badge badge-info">Email</a></h5>
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
                            <h4 class="card-title"><strong>{{ __('Experiencia Laboral') }}</strong></h4>
                        </div>
                        
                    </div>
                </div>
             <div class="card-body">

             	<div class="card-deck">
					  
									        
					  <div class="card text-left">
					    <iframe width="100%" height="315"
						src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
						</iframe>
					    <div class="card-body">


					    	<nav id="navbar-example2" class="navbar navbar-light bg-light">
							  <a class="navbar-brand" href="#">Reel</a>
							  <ul class="nav nav-pills">
							  	<li class="nav-item">
							      <a class="nav-link" href="#fat">Bio</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" href="#fat1">Bio Inglés</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" href="#mdo">Áreas de Desempeño</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" href="#mdo1">Clase de Productora</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" href="#mdo2">Alquiler, venta o distribución</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" href="#mdo3">Ubicación</a>
							    </li>
							    
							  </ul>
							</nav>
							<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
							  <h4 id="fat">Bio</h4>
							  <p>{{ $perfil->bio }}</p>
							  <h4 id="fat1">Bio Inglés</h4>
							  <p>{{ $perfil->bio_ingles }}</p>
							  
							  <h4 id="mdo">Áreas de Desempeño</h4>
							  	<p>@foreach ($perfil->areadesempenio as $area)
						      	<h4><a href="{{ route('area.show', $area->id ) }}" class="badge badge-dark" style="line-height=150%">{{ $area->nombre }} </a></h4>
						      	@endforeach</p>

						      	<h4 id="mdo1">Clase de Productora</h4>
							  	<p>@foreach ($perfil->clases as $clase)
						      	<h4><a href="{{ route('clase.show', $clase->id ) }}" class="badge badge-dark" style="line-height=150%">{{ $clase->nombre }} </a></h4>
						      	@endforeach</p>

						      	<h4 id="mdo2">Alquiler, venta o distribución</h4>
							  	<p>@foreach ($perfil->alquileres as $alquiler)
						      	<h4><a href="{{ route('alquiler.show', $alquiler->id ) }}" class="badge badge-dark" style="line-height=150%">{{ $alquiler->nombre }} </a></h4>
						      	@endforeach</p>

						      	<h4 id="mdo3"> Ubicación:</h4>
							  	<p>
									 <div id="mymap"></div>
							  		
							  		


							  	</p>
							  
							</div>
					     

					    </div>
					  </div>
					  
									   
				</div>
  				</div>
			</div>
		</div>
		
	
	</div>	
</div>



@endsection