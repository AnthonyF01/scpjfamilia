@php
    function permisos($permiso){
        if (count($permiso)>0) {
            $c='';
            foreach ($permiso as $key => $element) {
                $b=count($element->permisos);
                $a= '<li class="dd-item">'.
                        '<div class="dd-handle">'.
                            '<div class="form-inline">'.
                                ($b > 0 ? '<a class="fa_p"><span class="fa fa-minus fa-lg"></span></a>' : '').
                                '<div class="checkbox">'.
                                    ($b > 0 ? '<input type="checkbox" class="ip" title="Check para seleccionar todo el arbol jerarquico" style="margin-right:5px"> ' : '').
                                    '<label title="Check para seleccionar solo este permiso">'.
                                        Form::checkbox('permissions[]', $element->id, null,['class'=>'ip_li']).
                                        ' '.$element->name.
                                        '<em>'.($element->description ? '( '.$element->description.' )' : '').'</em>'.
                                    '</label>'.
                                '</div>'.
                            '</div>'.
                        '</div>'.
                        '<ol class="dd-list">';
                            if ($b>0) {
                                $a.=permisos($element->permisos);
                            }
                        $a.='</ol>'.
                    '</li>';
                $c.=$a;
            }
            return $c;
        }
        else{
            return '';
        }
    }
@endphp

<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-11">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
          @if(isset($role))
            Editar Rol
          @else
            Crear Rol
          @endif
        </div>
        <div class="box_plus-body">

          @if(isset($role))
            {!! Form::model($role, [ 'route' => ['roles.update', $role->id], 'method' => 'PUT', 'id'=>'form_role' ]) !!}
          @else
            {!! Form::open([ 'route' => 'roles.store', 'id'=>'form_role' ]) !!}
          @endif
                <div class="row">
                    <div class="col-sm-7">
                <div class="form-group">
                  {{ Form::label('name', 'Nombre') }}
                  {{ Form::text('name', null, ['class' => 'form-control'.($errors->has('name')?" is-invalid":""),   "autofocus", 'id' => 'name']) }}
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
          {{ Form::textarea('description', null, ['class' => 'form-control'.($errors->has('description')?" is-invalid":""), 'rows' => '1']) }}
          <span id="error-description" class="invalid-feedback"></span>
        </div>

        <hr>
        <h3>Permiso especial</h3>
        <div class="form-group">
          <label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
          <label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
          <label>{{ Form::radio('special', '') }} Ningun Permiso Especial</label>
        </div>

        <div class="form-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title">
                                <b>Lista de permisos</b>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div class="dd" id="nestable_list">
                                <ol class="dd-list">
                                    <li class="dd-item">
                                        <div class="dd-handle">
                                            <div class="form-inline">
                                                @if (count($permiso->permisos) > 0)
                                                    <a class="fa_p"><span class="fa fa-minus fa-lg "></span></a>
                                                @endif
                                                <div class="checkbox">
                                                    @if (count($permiso->permisos) > 0)
                                                        <input type="checkbox" class="ip" title="Check para seleccionar todo el arbol jerarquico" style="margin-right:5px">
                                                    @endif
                                                    <label title="Check para seleccionar solo este permiso">
                                                        {{ Form::checkbox('permissions[]', $permiso->id, null,['class'=>'ip_li']) }}
                                                        {{ ' '.$permiso->name }}
                                                        <em>{{ $permiso->description ? '( '.$permiso->description.' )' : '' }}</em>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            {!! permisos($permiso->permisos) !!}
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
        </div>

        <div class="form-group">
          @if( ! empty($role['id']))
            {!! Form::button("Actualizar",["type" => "submit","class"=>"btn btn-warning"])!!}
          @else
            {!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
          @endif
          <a href="javascript:ajaxLoad('{{ url('/roles') }}')" class="btn btn-default pull-right">Cancelar</a>
        </div>

          {!! Form::close() !!}

    </div>
      </div>
    </div>
  </div>
</div>
