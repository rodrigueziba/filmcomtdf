@extends('adminlte::page')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Locaciones') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('Locacion.create') }}" class="btn btn-sm btn-primary">{{ __('Crear Locación') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                   

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">

                                <th scope="col">{{ __('Nombre') }}</th>
                                <th scope="col">{{ __('Descripción') }}</th>
                                <th scope="col">{{ __('Ciudad') }}</th>
                                <th scope="col">{{ __('Jurisdicción') }}</th>
                                <th scope="col">{{ __('Dirección') }}</th>
                                <th scope="col">{{ __('Redes Sociales') }}</th>
                                <th scope="col">{{ __('Sitio Web') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Teléfono') }}</th>
                                <th scope="col">{{ __('Categoria') }}</th>
                                <th scope="col">{{ __('Acciones') }}</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($locaciones as $locacion)
                                    <tr>
                                        <td>{{ $locacion->nombre }}</td>
                                        <td>{{ $locacion->descripción }}</td>
                                        <td>{{ $locacion->ciudad }}</td>
                                        <td>{{ $locacion->jurisdiccion }}</td>
                                        <td>{{ $locacion->address_address }}</td>
                                        <td>{{ $locacion->redes_sociales }}</td>
                                        <td>{{ $locacion->sitio_web }}</td>
                                        <td>
                                            <a href="mailto:{{ $locacion->email }}">{{ $locacion->email }}</a>
                                        </td>
                                        <td>{{ $locacion->telefono }}</td>
                                        <td>{{ $locacion->categoria }}</td>
                                        <td>
                                        <a href="{{route('locaciones.edit', $locacion)}}" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ route('locaciones.destroy', $locacion) }}" class="d-inline" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form> 
                                        </td> 

                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{ $locaciones->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection