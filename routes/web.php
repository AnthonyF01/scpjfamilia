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
    // return view('welcome');
    return redirect()->to('/login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    // Cargar Provincias y Distritos
    Route::get('getProvincia/{id}', 'TbldepartamentoController@getProvincia');
    Route::get('getDistrito/{id}', 'TblprovinciaController@getDistrito');

    // Cargar Victimas y Agresores
    Route::get('getVictima', 'VictimaController@getVictima');
    Route::get('getAgresor', 'AgresorController@getAgresor');

    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');


    //Users
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('permission:users.create');

    Route::get('users/create', 'UserController@create')->name('users.create')
        ->middleware('permission:users.create');

    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');


    // Centro de Salud
    Route::post('tblcentrosalud/store', 'TblcentrosaludController@store')->name('centrosalud.store')
        ->middleware('permission:centrosalud.create');

    Route::get('tblcentrosalud', 'TblcentrosaludController@index')->name('centrosalud.index')
        ->middleware('permission:centrosalud.index');

    Route::get('tblcentrosalud/create', 'TblcentrosaludController@create')->name('centrosalud.create')
        ->middleware('permission:centrosalud.create');

    Route::put('tblcentrosalud/{centrosalud}', 'TblcentrosaludController@update')->name('centrosalud.update')
        ->middleware('permission:centrosalud.edit');

    Route::get('tblcentrosalud/{centrosalud}', 'TblcentrosaludController@show')->name('centrosalud.show')
        ->middleware('permission:centrosalud.show');

    Route::delete('tblcentrosalud/{centrosalud}', 'TblcentrosaludController@destroy')->name('centrosalud.destroy')
        ->middleware('permission:centrosalud.destroy');

    Route::get('tblcentrosalud/{centrosalud}/edit', 'TblcentrosaludController@edit')->name('centrosalud.edit')
        ->middleware('permission:centrosalud.edit');


    // Comisaria
    Route::post('tblcomisaria/store', 'TblcomisariaController@store')->name('comisaria.store')
        ->middleware('permission:comisaria.create');

    Route::get('tblcomisaria', 'TblcomisariaController@index')->name('comisaria.index')
        ->middleware('permission:comisaria.index');

    Route::get('tblcomisaria/create', 'TblcomisariaController@create')->name('comisaria.create')
        ->middleware('permission:comisaria.create');

    Route::put('tblcomisaria/{comisaria}', 'TblcomisariaController@update')->name('comisaria.update')
        ->middleware('permission:comisaria.edit');

    Route::get('tblcomisaria/{comisaria}', 'TblcomisariaController@show')->name('comisaria.show')
        ->middleware('permission:comisaria.show');

    Route::delete('tblcomisaria/{comisaria}', 'TblcomisariaController@destroy')->name('comisaria.destroy')
        ->middleware('permission:comisaria.destroy');

    Route::get('tblcomisaria/{comisaria}/edit', 'TblcomisariaController@edit')->name('comisaria.edit')
        ->middleware('permission:comisaria.edit');

    // Instancias
    Route::post('tblinstancia/store', 'TblinstanciaController@store')->name('instancia.store')
        ->middleware('permission:instancia.create');

    Route::get('tblinstancia', 'TblinstanciaController@index')->name('instancia.index')
        ->middleware('permission:instancia.index');

    Route::get('tblinstancia/create', 'TblinstanciaController@create')->name('instancia.create')
        ->middleware('permission:instancia.create');

    Route::put('tblinstancia/{instancia}', 'TblinstanciaController@update')->name('instancia.update')
        ->middleware('permission:instancia.edit');

    Route::get('tblinstancia/{instancia}', 'TblinstanciaController@show')->name('instancia.show')
        ->middleware('permission:instancia.show');

    Route::delete('tblinstancia/{instancia}', 'TblinstanciaController@destroy')->name('instancia.destroy')
        ->middleware('permission:instancia.destroy');

    Route::get('tblinstancia/{instancia}/edit', 'TblinstanciaController@edit')->name('instancia.edit')
        ->middleware('permission:instancia.edit');

    // Motivos
    Route::post('tblmotivo/store', 'TblmotivoController@store')->name('motivo.store')
        ->middleware('permission:motivo.create');

    Route::get('tblmotivo', 'TblmotivoController@index')->name('motivo.index')
        ->middleware('permission:motivo.index');

    Route::get('tblmotivo/create', 'TblmotivoController@create')->name('motivo.create')
        ->middleware('permission:motivo.create');

    Route::put('tblmotivo/{motivo}', 'TblmotivoController@update')->name('motivo.update')
        ->middleware('permission:motivo.edit');

    Route::get('tblmotivo/{motivo}', 'TblmotivoController@show')->name('motivo.show')
        ->middleware('permission:motivo.show');

    Route::delete('tblmotivo/{motivo}', 'TblmotivoController@destroy')->name('motivo.destroy')
        ->middleware('permission:motivo.destroy');

    Route::get('tblmotivo/{motivo}/edit', 'TblmotivoController@edit')->name('motivo.edit')
        ->middleware('permission:motivo.edit');

    // Documentos
    Route::post('tbldocumento/store', 'TbldocumentoController@store')->name('documento.store')
        ->middleware('permission:documento.create');

    Route::get('tbldocumento', 'TbldocumentoController@index')->name('documento.index')
        ->middleware('permission:documento.index');

    Route::get('tbldocumento/create', 'TbldocumentoController@create')->name('documento.create')
        ->middleware('permission:documento.create');

    Route::put('tbldocumento/{documento}', 'TbldocumentoController@update')->name('documento.update')
        ->middleware('permission:documento.edit');

    Route::get('tbldocumento/{documento}', 'TbldocumentoController@show')->name('documento.show')
        ->middleware('permission:documento.show');

    Route::delete('tbldocumento/{documento}', 'TbldocumentoController@destroy')->name('documento.destroy')
        ->middleware('permission:documento.destroy');

    Route::get('tbldocumento/{documento}/edit', 'TbldocumentoController@edit')->name('documento.edit')
        ->middleware('permission:documento.edit');

    // Tipos
    Route::post('tbltipo/store', 'TbltipoController@store')->name('tipo.store')
        ->middleware('permission:tipo.create');

    Route::get('tbltipo', 'TbltipoController@index')->name('tipo.index')
        ->middleware('permission:tipo.index');

    Route::get('tbltipo/create', 'TbltipoController@create')->name('tipo.create')
        ->middleware('permission:tipo.create');

    Route::put('tbltipo/{tipo}', 'TbltipoController@update')->name('tipo.update')
        ->middleware('permission:tipo.edit');

    Route::get('tbltipo/{tipo}', 'TbltipoController@show')->name('tipo.show')
        ->middleware('permission:tipo.show');

    Route::delete('tbltipo/{tipo}', 'TbltipoController@destroy')->name('tipo.destroy')
        ->middleware('permission:tipo.destroy');

    Route::get('tbltipo/{tipo}/edit', 'TbltipoController@edit')->name('tipo.edit')
        ->middleware('permission:tipo.edit');

    // Parentescos
    Route::post('tblparentesco/store', 'TblparentescoController@store')->name('parentesco.store')
        ->middleware('permission:parentesco.create');

    Route::get('tblparentesco', 'TblparentescoController@index')->name('parentesco.index')
        ->middleware('permission:parentesco.index');

    Route::get('tblparentesco/create', 'TblparentescoController@create')->name('parentesco.create')
        ->middleware('permission:parentesco.create');

    Route::put('tblparentesco/{parentesco}', 'TblparentescoController@update')->name('parentesco.update')
        ->middleware('permission:parentesco.edit');

    Route::get('tblparentesco/{parentesco}', 'TblparentescoController@show')->name('parentesco.show')
        ->middleware('permission:parentesco.show');

    Route::delete('tblparentesco/{parentesco}', 'TblparentescoController@destroy')->name('parentesco.destroy')
        ->middleware('permission:parentesco.destroy');

    Route::get('tblparentesco/{parentesco}/edit', 'TblparentescoController@edit')->name('parentesco.edit')
        ->middleware('permission:parentesco.edit');

    // Tipos de denuncia
    Route::post('tbldenuncia/store', 'TbldenunciaController@store')->name('tdenuncia.store')
        ->middleware('permission:tdenuncia.create');

    Route::get('tbldenuncia', 'TbldenunciaController@index')->name('tdenuncia.index')
        ->middleware('permission:tdenuncia.index');

    Route::get('tbldenuncia/create', 'TbldenunciaController@create')->name('tdenuncia.create')
        ->middleware('permission:tdenuncia.create');

    Route::put('tbldenuncia/{tdenuncia}', 'TbldenunciaController@update')->name('tdenuncia.update')
        ->middleware('permission:tdenuncia.edit');

    Route::get('tbldenuncia/{tdenuncia}', 'TbldenunciaController@show')->name('tdenuncia.show')
        ->middleware('permission:tdenuncia.show');

    Route::delete('tbldenuncia/{tdenuncia}', 'TbldenunciaController@destroy')->name('tdenuncia.destroy')
        ->middleware('permission:tdenuncia.destroy');

    Route::get('tbldenuncia/{tdenuncia}/edit', 'TbldenunciaController@edit')->name('tdenuncia.edit')
        ->middleware('permission:tdenuncia.edit');

    // Victimas
    Route::post('victima/store', 'VictimaController@store')->name('victima.store')
        ->middleware('permission:victima.create');

    Route::get('victima', 'VictimaController@index')->name('victima.index')
        ->middleware('permission:victima.index');

    Route::get('victima/create', 'VictimaController@create')->name('victima.create')
        ->middleware('permission:victima.create');

    Route::put('victima/{victima}', 'VictimaController@update')->name('victima.update')
        ->middleware('permission:victima.edit');

    Route::get('victima/{victima}', 'VictimaController@show')->name('victima.show')
        ->middleware('permission:victima.show');

    Route::delete('victima/{victima}', 'VictimaController@destroy')->name('victima.destroy')
        ->middleware('permission:victima.destroy');

    Route::get('victima/{victima}/edit', 'VictimaController@edit')->name('victima.edit')
        ->middleware('permission:victima.edit');

    // Agresores
    Route::post('agresor/store', 'AgresorController@store')->name('agresor.store')
        ->middleware('permission:agresor.create');

    Route::get('agresor', 'AgresorController@index')->name('agresor.index')
        ->middleware('permission:agresor.index');

    Route::get('agresor/create', 'AgresorController@create')->name('agresor.create')
        ->middleware('permission:agresor.create');

    Route::put('agresor/{agresor}', 'AgresorController@update')->name('agresor.update')
        ->middleware('permission:agresor.edit');

    Route::get('agresor/{agresor}', 'AgresorController@show')->name('agresor.show')
        ->middleware('permission:agresor.show');

    Route::delete('agresor/{agresor}', 'AgresorController@destroy')->name('agresor.destroy')
        ->middleware('permission:agresor.destroy');

    Route::get('agresor/{agresor}/edit', 'AgresorController@edit')->name('agresor.edit')
        ->middleware('permission:agresor.edit');

    // Denuncias
    Route::get('denuncia/report', 'DenunciaController@report')->name('denuncia.report')
        ->middleware('permission:denuncia.report');

    Route::get('denuncia/estadistica', 'DenunciaController@estadistica')->name('denuncia.estadistica')
        ->middleware('permission:denuncia.estadistica');

    Route::post('denuncia/estadistica/report', 'DenunciaController@estadisticaPDF')->name('denuncia.estadisticaPDF')
        ->middleware('permission:denuncia.estadistica');
    
    Route::post('denuncia/store', 'DenunciaController@store')->name('denuncia.store')
        ->middleware('permission:denuncia.create');

    Route::get('denuncia', 'DenunciaController@index')->name('denuncia.index')
        ->middleware('permission:denuncia.index');

    Route::get('denuncia/create', 'DenunciaController@create')->name('denuncia.create')
        ->middleware('permission:denuncia.create');

    Route::put('denuncia/{denuncia}', 'DenunciaController@update')->name('denuncia.update')
        ->middleware('permission:denuncia.edit');

    Route::get('denuncia/{denuncia}', 'DenunciaController@show')->name('denuncia.show')
        ->middleware('permission:denuncia.show');

    Route::delete('denuncia/{denuncia}', 'DenunciaController@destroy')->name('denuncia.destroy')
        ->middleware('permission:denuncia.destroy');

    Route::get('denuncia/{denuncia}/edit', 'DenunciaController@edit')->name('denuncia.edit')
        ->middleware('permission:denuncia.edit');

});
