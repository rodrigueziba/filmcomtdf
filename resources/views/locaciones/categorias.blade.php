@extends('layouts.app')

<style type="text/css">
        #mymap {
            border:1px solid black;
            width: 800px;
            height: 500px;
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
                    <div id="mymap"></div>

                <div class="card-deck">
                      @foreach ($categoria->locaciones as $locacion)

                <div class="card text-center">
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
        
      
     </div>
</div>


</div>
@endsection

 @push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
     

     <script type="text/javascript">


    var locaciones = <?php print_r(json_encode($categoria->locaciones)) ?>;


    var mymap = new GMaps({
      el: '#mymap',
      lat: 21.170240,
      lng: 72.831061,
      zoom:6
    });


    $.each( locaciones, function( index, value ){
        mymap.addMarker({
          lat: value.address_latitude, 
          lng: value.address_longitude,
          title: value.nombre,
          click: function(e) {
            alert('This is '+value.nombre+', gujarat from India.');
          }
        });
   });


  </script>
 @endpush