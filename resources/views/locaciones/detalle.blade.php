@extends('layouts.app')
@section('content')
<h1>Detalle de Locación</h1>
<hr />

<div class="col-sm-4">
                                                <div class="card-columns-fluid">
                                                    <div class="card  bg-light" style = "width: 980px; " >
                                                        <img class="card-img-top"  src=" https://images.unsplash.com/photo-1523978591478-c753949ff840?w=900" alt="Card image cap">

                                                        <div class="card-body">
                                                            <h5 class="card-title"><b>{{ $locacion->nombre }}</b></h5>
                                                            <p class="card-text"><b>{{ $locacion->ciudad }}</b></p>
                                                            <p class="card-text">{{ $locacion->descripción }}</p>
                                                            <p class="card-text">{{ $locacion->jurisdiccion }}</p>
                                                            <p class="card-text">{{ $locacion->address_address}}</p>
                                                            <p class="card-text">{{ $locacion->redes_sociales }}</p>
                                                            <p class="card-text">{{ $locacion->sitio_web }}</p>
                                                            <p class="card-text">{{ $locacion->email }}</p>
                                                            <p class="card-text">{{ $locacion->telefono  }}</p>
                                                            


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


@endsection