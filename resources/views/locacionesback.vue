<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TDF Film Commission') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/adminlte.min.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


    <style type="text/css">
        #mymap {
            border:1px solid black;
            width: 980px;
            height: 500px;
        }
    </style>


</head>
<body>

@include('layouts.navbar')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <div class="row ">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Listado de Locaciones') }}</h4>
                        </div>
                        
                    </div>
                </div>
                <div class="card-body">
<div class="row justify-content-center">

  <div id="mymap"></div>


  <script type="text/javascript">


    var locaciones = <?php print_r(json_encode($locaciones)) ?>;


    var mymap = new GMaps({
      el: '#mymap',
      lat: -54.8062564,
      lng: -68.3113543,
      zoom:6
    });


    $.each( locaciones, function( index, value ){
        mymap.addMarker({
          lat: value.address_latitude,
          lng: value.address_longitude,
          title: value.nombre,
          click: function(e) {
            alert('Ésto es '+value.nombre+'');
          }
        });
   });


  </script>
 
                
                                        
                                        <div class="row-fluid " >
                                        
                                        @foreach ($locaciones as $locacion)
                                            <div class="col-sm-4">
                                                <div class="card-columns-fluid">
                                                    <div class="card  bg-light" style = "width: 980px; " >
                                                        <img class="card-img-top"  src=" https://images.unsplash.com/photo-1523978591478-c753949ff840?w=900" alt="Card image cap">

                                                        <div class="card-body">
                                                            <h5 class="card-title"><b>{{ $locacion->nombre }}</b></h5>
                                                            <p class="card-text"><b>{{ $locacion->ciudad }}</b></p>
                                                            <p class="card-text">{{ $locacion->descripción }}</p>
                                                            <p class="card-text">{{ $locacion->jurisdiccion }}</p>
                                                            <a href="{{route('locaciones.detalle', $locacion)}}" class="btn btn-secondary">Detalle</a>
                                                            


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    



                   

                    
                
                
    </div>
    </div>
                
            </div>
        </div>
    </div>
</body>
</html>