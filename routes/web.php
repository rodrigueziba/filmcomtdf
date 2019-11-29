<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/guiaaudiovisual', function () {
    return view('guiaaudiovisual');
});

Route::get('/guiaaudiovisual','GuiaAudiovisualController@index');
Route::get('/guiaaudiovisual/area/{id}', 'GuiaAudiovisualController@area')->name('area.show');
Route::get('/guiaaudiovisual/profesionales/{id}', 'GuiaAudiovisualController@profesionales')->name('profesionales.show');

Route::get('/guiaaudiovisual/productoras/', 'GuiaAudiovisualController@indexproductoras')->name('productoras.index');

Route::get('/guiaaudiovisual/productoras/{id}', 'GuiaAudiovisualController@productoras')->name('productoras.show');
Route::get('/guiaaudiovisual/idioma/{id}', 'GuiaAudiovisualController@idiomas')->name('idioma.show');
Route::get('/guiaaudiovisual/claseproductora/{id}', 'GuiaAudiovisualController@clases')->name('clase.show');
Route::get('/guiaaudiovisual/alquiler/{id}', 'GuiaAudiovisualController@alquileres')->name('alquiler.show');

Route::get('/locaciones/categorias/{id}', 'PaginaController@categorias')->name('categoria.show');
Route::get('/locaciones/show/{id}', 'PaginaController@locacionshow')->name('locaciones.show');

Route::get('/misperfiles', 'PrestadorController@misperfiles')->name('misperfiles');



//Route::get('/locaciones', function () {
 //   return view('locaciones');
//});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/locaciones', 'PaginaController@gmaps');
Route::get('/usuarios/index', 'PaginaController@usuarios');
Route::get('/permisos', 'PaginaController@permisos');

Route::get('/admin', 'HomeController@index');

Route::get('/locaciones/create', 'LocacionesController@create')->name('Locacion.create');
Route::get('/locaciones/index', 'LocacionesController@index')->name('Locacion.index');
Route::post('/locaciones/create','LocacionesController@store')->name('locaciones.store');
Route::get('/locaciones/detalle/{id}', 'LocacionesController@detalle')->name('locaciones.detalle');
Route::get('/locaciones/edit/{id}', 'LocacionesController@edit' )->name('locaciones.edit');
Route::put('/locaciones/editar/{id}', 'LocacionesController@update' )->name('locaciones.update');
Route::delete('/locaciones/destroy/{id}', 'LocacionesController@destroy')->name('locaciones.destroy');



Route::get('/permisos/detalle/{id}', 'PermisosController@detalle')->name('permisos.detalle');
Route::post('/', 'PermisosController@store')->name('permisos.store');
Route::get('/permisos/index', 'PermisosController@index')->name('permisos.index');
Route::get('/permisos/create', 'PermisosController@create')->name('permisos.create');
Route::get('/permisos/edit/{id}', 'PermisosController@edit' )->name('permisos.edit');
Route::put('/permisos/editar/{id}', 'PermisosController@update' )->name('permisos.update');
Route::delete('/permisos/destroy/{id}', 'PermisosController@destroy')->name('permisos.destroy');

Route::resource('CategoriaLocaciones', 'CategoriaLocacionesController');
Route::resource('perfilprofesional', 'PerfilProfesionalController');
Route::get('/misperfiles/perfilprofesional/editar/{id}', 'PerfilProfesionalController@edit' )->name('perfilprofesional.edit');
Route::get('/misperfiles/perfilproductora/editar/{id}', 'PerfilProductoraController@edit' )->name('perfilproductoras.edit');
Route::resource('perfilproductora', 'PerfilProductoraController');
//Route::resource('idioma', 'IdiomaController');
Route::resource('areaDesempenio', 'AreaDesempenioController');

Route::get('/categorialocaciones/index', 'CategoriaLocacionesController@index')->name('categoriaLocaciones.index');