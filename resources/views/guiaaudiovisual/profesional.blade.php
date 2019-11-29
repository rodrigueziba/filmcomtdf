@extends('layouts.app')


<head>
       
        


    </head>

 

@section('content')
 <div class="container">     	
     <div class="row">	
      	<div class="col-md-3">
			<div class="card text-center">
                <div class="card-header">
                   	<div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>{{ __('Profesional') }}</strong></h4>


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


				        <h4><strong>{{ $perfil->nombre_publico }}</strong></h4>
				        <h6><strong>Fecha de Nacimiento:</strong>{{ $perfil->fecha_nacimiento }}</h6>
				        <h6><strong>Localidad:</strong>{{ $perfil->ubicacion }}</h6>
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