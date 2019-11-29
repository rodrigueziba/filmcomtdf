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
				        <h4><a href="/guiaaudiovisual/productoras" class="badge badge-primary">Productoras</a></h4>
				        <h4><a href="guiaaudiovisual/empresas" class="badge badge-primary">Comercios/Empresas</a></h4>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <strong>Área de Desempeño</strong>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				      <div class="card-body">
				         @foreach ($areas as $item)
					      	<a href="{{ route('area.show', $item->id ) }}" class="badge badge-dark">{{ $item->nombre }} </a>

					      	@endforeach
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          <strong>Idiomas</strong>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				      <div class="card-body">
				        @foreach ($idiomas as $idioma)
					      	<a href="{{ route('idioma.show', $idioma->id ) }}" class="badge badge-secondary">{{ $idioma->nombre }} </a>

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
                            <h4 class="card-title"><strong>{{ __('Listado de Profesionales') }}</strong></h4>
                        </div>
                        
                    </div>
                </div>
             <div class="card-body">

             	<div class="card-deck">
					  
					  @foreach ($area->perfilprofesional as $perfil)
									        
					  <div class="card text-center"  style="min-width: 45%; max-width: 45%; margin-top: 10px; justify-content-center;min-height:40%; max-height:40%;">
					    <img src="{{asset('images/'. $perfil->profile_image)}}" class="card-img-top" alt="...">
					    <div class="card-body">
					      <h5 class="card-title"><strong>{{ $perfil->nombre_publico }}</strong></h5>
					      <p> 
					      	@foreach ($perfil->areadesempenio as $area)
					      	<h6><a href="{{ route('area.show', $area->id ) }}" class="badge badge-dark" style="line-height=150%">{{ $area->nombre }} </a></h6>


					      	@endforeach


					      	</p>
					      	<p class="card-text"> 
					      	@foreach ($perfil->idiomas as $idioma)
					       	<a href="{{ route('idioma.show', $idioma->id ) }}" class="badge badge-secondary">{{ $idioma->nombre }}</a> 
					       @endforeach
					      </p>
					      <p class="card-text justify-content-center">
					       <a href="#" class="badge badge-info">{{ $perfil->ubicacion }}</a> 
					      </p>
					    </div>
					    <div class="card-footer">
					    	<a class="btn btn-primary btn-block" href="{{ route('profesionales.show', $perfil->id ) }}" role="button">Detalle</a>
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
@endsection