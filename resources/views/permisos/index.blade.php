@extends('adminlte::page')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Permisos') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('permisos.create') }}" class="btn btn-sm btn-primary">{{ __('Crear Permiso') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">

                                <th scope="col">{{ __('Nombre') }}</th>
                                <th scope="col">{{ __('Descripción') }}</th>
                                <th scope="col">{{ __('Link') }}</th>
                                <th scope="col">{{ __('Acciones') }}</th>
                            </thead>
                            <tbody>
                                @foreach ($permisos as $permiso)
                                    <tr>
                                        <td>
                                        <a href="{{route('permisos.detalle', $permiso)}}">
                                        {{ $permiso->nombre }}</a></td>
                                        <td>{{ $permiso->descripción }}</td>
                                        <td>{{ $permiso->link }}</td>
                                        <td>
                                        <a href="{{route('permisos.edit', $permiso)}}" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ route('permisos.destroy', $permiso) }}" class="d-inline" method="POST">
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
                
            </div>
        </div>
    </div>
@endsection