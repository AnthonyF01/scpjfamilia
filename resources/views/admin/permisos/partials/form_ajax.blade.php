<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
            @if(isset($permiso))
                Editar Permiso
            @else
                Crear Permiso
            @endif
        </div>
        <div class="box_plus-body">

            @if(isset($permiso))
            {!! Form::model($permiso, [ 'route' => ['permisos.update', $permiso->id], 'method' => 'PUT', 'id'=>'form_permiso' ]) !!}
            @else
              {!! Form::open([ 'route' => 'permisos.store', 'id'=>'form_permiso' ]) !!}
            @endif
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="depende_de">Dependencia de permiso</label>
                            <select class="form-control" name="depende_de" id="depende_de">
                                @if (isset($permiso))
                                    @if ($permiso->permiso==1)
                                        <option value="{{ $padre }}">{{ $depende_de }}</option>
                                    @else
                                        <option value="{{ $permiso->padre->id }}">{{ $permiso->padre->name }}</option>
                                    @endif
                                @else
                                    <option value="{{ $padre }}">{{ $depende_de }}</option>
                                @endif
                            </select>
                            <span id="error-depende_de" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nivel">Nivel de Permiso</label>
                            <select class="form-control" name="nivel" id="nivel">
                                <option value="1" {{ isset($permiso) ? ($permiso->nivel==1 ? 'selected' : '') : '' }}>Agrupador de Permisos</option>
                                <option value="0" {{ isset($permiso) ? ($permiso->nivel==0 ? 'selected' : '') : '' }} {{ isset($permiso) ? ($permiso->ugel==1 ? 'disabled' : (count($permiso->permisos) > 0 ? 'disabled' : '')) : '' }} >Permiso</option>
                            </select>
                            <span id="error-nivel" class="invalid-feedback"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            {{ Form::label('name', 'Nombre') }}
                            {{ Form::text('name', null, ['class' => 'form-control'.($errors->has('name')?" is-invalid":""),     "autofocus", 'id' => 'name']) }}
                            <span id="error-name" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            {{ Form::label('slug', 'URL Amigable') }}
                            {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Descripción') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control'.($errors->has('description')?" is-invalid":""), 'rows' => '2']) }}
                    <span id="error-description" class="invalid-feedback"></span>
                </div>

                <div class="form-group">
                    <div class="alert alert-info alert-sm">
                        <strong>Importante</strong>
                        <span class="mensaje">
                            @if (isset($permiso))
                                @if ($permiso->nivel==1)
                                    Esta oficina no gestionará documentos, servirá para agrupar otras oficinas
                                @else
                                    Permiso en el sistema.
                                @endif
                            @else
                                Esta oficina no gestionará documentos, servirá para agrupar otras oficinas
                            @endif
                        </span>.
                    </div>

                </div>

                <div class="form-group">
                    @if( ! empty($permiso['id']))
                        {!! Form::button("Actualizar",["type" => "submit","class"=>"btn btn-warning"])!!}
                    @else
                        {!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
                    @endif
                    <a href="javascript:ajaxLoad('{{ url('/permisos') }}')" class="btn btn-default pull-right">Cancelar</a>
                </div>

          {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>
</div>
