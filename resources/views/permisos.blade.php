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
                            <h4 class="card-title"><strong>{{ __('Listado de Permisos') }}</strong></h4>
                        </div>
                        
                    </div>
                </div>
             <div class="card-body">
                 <p class="card-text justify-content-center">
                           TDF Film Commission es la oficina encargada de tramitar los permisos para el uso de locaciones de jurisdicción provincial. Al mismo tiempo se encarga de vehiculizar la gestión de locaciones pertenecientes a otras jurisdicciones, poniendo en contacto a los interesados con las autoridades competentes y haciendo un seguimiento del proyecto en las instancias previas a la concreción del rodaje.
                          </p>
                <div class="card-deck">
                      @foreach ($permisos as $permiso)
                                            
                      <div class="card text-center" style="min-width: 45%; max-width: 45%; margin-top: 10px; justify-content-center;min-height:40%; max-height:40%;">
                        <div class="card-body">
                          <h5 class="card-title"><strong>{{ $permiso->nombre }}</strong></h5>
                          <p> 
                            <p>{{ substr(strip_tags($permiso->descripción), 0, 250) }}{{ strlen(strip_tags($permiso->descripción)) > 250 ? '...' : "" }} </p>


                            </p>
                           
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-block" href="{{  $permiso->link  }}" role="button">Link</a>
                          <small class="text-muted"></small>
                        </div>
                      </div>
                       @endforeach
                                       
                </div>
                </div>
            </div>
        </div>
        
        {{ $permisos->links() }}
    </div>  
</div>
@endsection