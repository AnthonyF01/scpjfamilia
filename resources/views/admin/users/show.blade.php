@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Categorías
@endsection

@section('contentheader_title')
    Categorías
@endsection

@section('categories')
    active
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Categoria</div>
                <div class="panel-body">                                        
                    <p><strong>Nombre: </strong>      {{ $category->name }}</p>
                    <p><strong>Estado: </strong>      @if ($category->state == 1) <span class="label bg-green">Activo</span> @else <span class="label bg-red">Inactivo</span> @endif</p>
                    <p><strong>Descripción: </strong> {{ $category->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection