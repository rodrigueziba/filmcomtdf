@extends('layouts.app')


<head>
       
        


    </head>

 

@section('content')
 <div class="container">        
     <div class="row">  
        
        <div class="<col-md-12></col-md-12>">
            
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"><strong>{{ __('Listado de Perfiles') }}</strong></h4>
                        </div>
                        
                    </div>
                </div>
             <div class="card-body">
                 <p class="card-text justify-content-center">
                         
                          </p>
                <div class="card-deck">

                	 @foreach ($perfil->perfilprofesional as $perfilpro)
                                            
                      <div class="card text-center" style="min-width: 45%; max-width: 45%; margin-top: 10px; justify-content-center;min-height:40%; max-height:40%;">
                        <div class="card-body">
                          <h5 class="card-title"><strong>{{ $perfilpro->nombre_publico }}</strong></h5>
                          <p> 
                            <p>{{ substr(strip_tags($perfilpro->bio), 0, 250) }}{{ strlen(strip_tags($perfilpro->bio)) > 250 ? '...' : "" }} </p>


                            </p>
                           
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-block" href="{{ route('profesionales.show', $perfilpro->id ) }}" role="button">Detalle</a>
                            <a class="btn btn-secondary btn-block" href="{{ route('perfilprofesional.edit', $perfilpro->id ) }}" role="button">Editar</a>
                          <small class="text-muted"></small>
                        </div>
                      </div>
                       @endforeach
                     


                       @foreach ($perfil->perfilproductora as $perfil1)
                                            
                      <div class="card text-center" style="min-width: 45%; max-width: 45%; margin-top: 10px; justify-content-center;min-height:40%; max-height:40%;">
                        <div class="card-body">
                          <h5 class="card-title"><strong>{{ $perfil1->nombre_entidad }}</strong></h5>
                          <p> 
                            <p>{{ substr(strip_tags($perfil1->bio), 0, 250) }}{{ strlen(strip_tags($perfil1->bio)) > 250 ? '...' : "" }} </p>


                            </p>
                           
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-block" href="{{ route('productoras.show', $perfil1->id ) }}" role="button">Detalle</a>
                            <a class="btn btn-secondary btn-block" href="{{ route('perfilproductoras.edit', $perfil1->id ) }}" role="button">Editar</a>
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