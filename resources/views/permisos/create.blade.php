@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Crear Permiso</span>
                    <a href="/permisos/index" class="btn btn-primary btn-sm">Volver al listado</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                        <form method="post" action="{{ route('permisos.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Información del permiso ') }}</h6>
                            <div class="pl-lg-4">

                                <div class="form-group">
                                     @if ($errors->has('nombre'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    El nombre es requerido
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    @endif
                                    <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                    <input type="text" name="nombre" id="input-name"  placeholder="{{ __('Nombre') }}" value="{{ old('nombre') }}" required autofocus>
                                </div>

                                  <div class="form-group">
                                     @if ($errors->has('descripcion'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    La descripción es requerida
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    @endif

                                    <label class="form-control-label" for="input-name">{{ __('Descripción') }}</label>
                                    <input type="textarea" name="descripción" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Descripción') }}" value="{{ old('descripción') }}" required autofocus>
                                    
                                </div>

                                  <div class="form-group">
                                    @if ($errors->has('link'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    El nombre es requerido
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    @endif
                                    <label class="form-control-label" for="input-name">{{ __('Link') }}</label>
                                    <input type="text" name="link" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Link') }}" value="{{ old('link') }}" required autofocus>
                                    
                                </div>
                               
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection