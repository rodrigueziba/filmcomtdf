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
				        <h4><a href="/guiaaudiovisual/" class="badge badge-primary">Profesionales	</a></h4>
				        <h4><a href="guiaaudiovisual/empresas" class="badge badge-primary">Comercios/Empresas</a></h4>
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree1">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
				          <strong>Clases de Productora</strong>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordion">
				      <div class="card-body">
				        @foreach ($clases as $clase)
					      	<a href="{{ route('clase.show', $clase->id ) }}" class="badge badge-secondary">{{ $clase->nombre }} </a>

					      	@endforeach
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree12">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree12" aria-expanded="false" aria-controls="collapseThree12">
				          <strong>Alquiler, Venta o Distribución</strong>
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree12" class="collapse" aria-labelledby="headingThree12" data-parent="#accordion">
				      <div class="card-body">
				        @foreach ($alquileres as $alquiler)
					      	<a href="{{ route('alquiler.show', $alquiler->id ) }}" class="badge badge-secondary">{{ $alquiler->nombre }} </a>

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
                            <h4 class="card-title"><strong>{{ __('Listado de Productoras') }}</strong></h4>
                        </div>
                        
                    </div>
                </div>
             <div class="card-body">

             	<div class="card-deck">
					  @foreach ($perfiles as $perfil)
									        
					  <div class="card text-center"  style="min-width: 45%; max-width: 45%; margin-top: 10px; justify-content-center;min-height:40%; max-height:40%;">
					    <img src="{{asset('images/'. $perfil->profile_image)}}" class="card-img-top" alt="...">
					    <div class="card-body">
					      <h5 class="card-title"><strong>{{ $perfil->nombre_entidad }}</strong></h5>
					      <p>
					      	@foreach ($perfil->clases as $item)
					       	<a href="{{ route('clase.show', $item->id ) }}" class="badge badge-secondary">{{ $item->nombre }}</a> 
					       @endforeach 
					      	</p>
					      	<p class="card-text"> 
					      	@foreach ($perfil->alquileres as $item)
					      	<h6><a href="{{ route('alquiler.show', $item->id ) }}" class="badge badge-dark" style="line-height=150%">{{ $item->nombre }} </a></h6>
					      	@endforeach
					      </p>
					      <p class="card-text justify-content-center">
					       <a href="#" class="badge badge-info">{{ $perfil->ubicacion }}</a> 
					      </p>
					    </div>
					    <div class="card-footer">
					    	<a class="btn btn-primary btn-block" href="{{ route('productoras.show', $perfil->id ) }}" role="button">Detalle</a>
					      <small class="text-muted"></small>
					    </div>
					  </div>
					   @endforeach
									   
				</div>
  				</div>
			</div>
		</div>
		
		{{ $perfiles->links() }}
	</div>	
</div>
@endsection