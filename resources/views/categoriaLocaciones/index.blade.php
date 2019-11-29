@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Gestión de Categorías de Locaciones') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                           
                        </div>
                    </div>
                </div>
                <div class="card-body">


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       
        <script src="{{ asset('js/app.js') }}" defer></script>


    </head>
    <body>

         
          <div class="container py-3">

            <div class="modal" tabindex="-1" role="dialog" id="editCategoryModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Editar Categorias de Locaciones</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <form action="" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                      <div class="form-group">
                        <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre de Categoria de Locaciones" required>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>1
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                  </div>
                  </form>
              </div>
            </div>

          <div class="row">
            <div class="col-md-8">

              <div class="card">
                <div class="card-header">
                  <h3>Categorias</h3>
                </div>
                <div class="card-body">
                  <ul class="list-group" >
                    @foreach ($categoriasLocaciones as $categoriaLocaciones)
                      <li class="list-group-item" >
                        <div class="d-flex justify-content-between">
                          {{ $categoriaLocaciones->nombre }}

                          <div class="button-group d-flex">
                            <button type="button" class="btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal" data-target="#editCategoryModal" data-id="{{ $categoriaLocaciones->id }}" data-name="{{ $categoriaLocaciones->nombre }}">Editar</button>

                            <form action="{{ route('CategoriaLocaciones.destroy', $categoriaLocaciones->id) }}" method="POST">
                              @csrf
                              @method('DELETE')

                              <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                          </div>
                        </div>

                        @if ($categoriaLocaciones->children)
                          <ul class="list-group mt-2">
                            @foreach ($categoriaLocaciones->children as $child)
                              <li class="list-group-item" >
                                <div class="d-flex justify-content-between" >
                                  {{ $child->nombre }}

                                  <div class="button-group d-flex">
                                    <button type="button" class="btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal" data-target="#editCategoryModal" data-id="{{ $child->id }}" data-name="{{ $child->nombre }}">Editar</button>

                                    <form action="{{ route('CategoriaLocaciones.destroy', $child->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')

                                      <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                  </div>
                                </div>
                              </li>
                            @endforeach
                          </ul>
                        @endif
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h3>Crear Categoría de Locaciones</h3>
                </div>

                <div class="card-body">
                  <form action="{{ route('CategoriaLocaciones.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                      <select class="form-control" name="parent_id"  >
                        <option value="">Seleccionar Categoria Padre</option>

                        @foreach ($categoriasLocaciones as $categoriaLocaciones)
                          <option value="{{ $categoriaLocaciones->id }}">{{ $categoriaLocaciones->nombre }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Nombre de Categoría" required>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

        <script type="text/javascript">
          $('.edit-category').on('click', function() {
            var id = $(this).data('id');
            var nombre = $(this).data('nombre');
            var url = "{{ url('CategoriaLocaciones') }}/" + id;

            $('#editCategoryModal form').attr('action', url);
            $('#editCategoryModal form input[name="nombre"]').val(nombre);
          });
        </script>
    </body>


</html>

</div>
                
            </div>
        </div>
    </div>
@endsection