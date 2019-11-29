@extends('adminlte::page')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Usuaios') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                           
                        </div>
                    </div>
                </div>
                <div class="card-body">
                   

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
 
                                <th scope="col">{{ __('Nombre') }}</th>
                                <th scope="col">{{ __('Email') }}</th>
                               
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        

                                        
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