<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
            @if(isset($victima) && !empty($victima['id']))
                Editar Victima
            @else
                Crear Victima
            @endif
        </div>
        <div class="box_plus-body">

            @if(isset($victima) && !empty($victima['id']))
            {!! Form::model($victima, [ 'route' => ['victima.update', $victima->id], 'method' => 'PUT', 'id'=>'form_victima' ]) !!}
            @else
              {!! Form::open([ 'route' => 'victima.store', 'id'=>'form_victima' ]) !!}
          @endif

            <div class="form-group has-feedback {{ $errors->has('nombre')? 'has-error':'' }}">
              {{ Form::label('nombre', 'Nombre') }}
              {{ Form::text('nombre', null, ['class' => 'form-control input-sm'.($errors->has('nombre')?" is-invalid":""), "autofocus", 'id' => 'nombre', 'autocomplete' => 'off']) }}
              <span id="error-nombre" class="invalid-feedback"></span>
            </div>

            <div class="form-group has-feedback {{ $errors->has('apellido')? 'has-error':'' }}">
              {{ Form::label('apellido', 'Apellido') }}
              {{ Form::text('apellido', null, ['class' => 'form-control input-sm'.($errors->has('apellido')?" is-invalid":""), "autofocus", 'id' => 'apellido', 'autocomplete' => 'off']) }}
              <span id="error-apellido" class="invalid-feedback"></span>
            </div>

            <div class="form-group">
              {{ Form::label('Tipo de Documento') }}
              {{ Form::select('tbldocumento_id', $documentos, null, array('class'=>'form-control input-sm'.($errors->has('tbldocumento_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Tipo de Documento')) }}
              <span id="error-tbldocumento_id" class="invalid-feedback"></span>
            </div>

            <div class="form-group has-feedback {{ $errors->has('nro_doc')? 'has-error':'' }}">
              {{ Form::label('nro_doc', 'Numero de Documento') }}
              {{ Form::text('nro_doc', null, ['class' => 'form-control input-sm'.($errors->has('nro_doc')?" is-invalid":""), "autofocus", 'id' => 'nro_doc', 'autocomplete' => 'off']) }}
              <span id="error-nro_doc" class="invalid-feedback"></span>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  {{ Form::label('Tipo') }}
                  {{ Form::select('tbltipo_id', $tipos, null, array('class'=>'form-control input-sm'.($errors->has('tbltipo_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Tipo')) }}
                  <span id="error-tbltipo_id" class="invalid-feedback"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group has-feedback {{ $errors->has('edad')? 'has-error':'' }}">
                  {{ Form::label('edad', 'Edad') }}
                  {{ Form::number('edad', '0', ['min' => '0', 'class' => 'form-control input-sm'.($errors->has('edad')?" is-invalid":""), "autofocus", 'id' => 'edad', 'autocomplete' => 'off', 'style' => 'padding-right:10px']) }}
                  <span id="error-edad" class="invalid-feedback"></span>
                </div>                
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <div class="form-group has-feedback {{ $errors->has('hijos')? 'has-error':'' }}">
                  {{ Form::label('hijos', 'Hijos') }}
                  {{ Form::number('hijos', '0', ['min' => '0', 'class' => 'form-control input-sm'.($errors->has('hijos')?" is-invalid":""), "autofocus", 'id' => 'hijos', 'autocomplete' => 'off', 'style' => 'padding-right:10px']) }}
                  <span id="error-hijos" class="invalid-feedback"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group has-feedback {{ $errors->has('telefono')? 'has-error':'' }}">
                  {{ Form::label('telefono', 'Teléfono') }}
                  {{ Form::text('telefono', null, ['class' => 'form-control input-sm'.($errors->has('telefono')?" is-invalid":""), "autofocus", 'id' => 'telefono', 'autocomplete' => 'off']) }}
                  <span id="error-telefono" class="invalid-feedback"></span>
                </div>
              </div>
            </div>

            <div class="form-group has-feedback {{ $errors->has('direccion')? 'has-error':'' }}">
              {{ Form::label('direccion', 'Dirección') }}
              {{ Form::text('direccion', null, ['class' => 'form-control input-sm'.($errors->has('direccion')?" is-invalid":""), "autofocus", 'id' => 'direccion', 'autocomplete' => 'off']) }}
              <span id="error-direccion" class="invalid-feedback"></span>
            </div>

            <div class="form-group">
              {{ Form::label('Departamento') }}
              {{ Form::select('tbldepartamento_id', $departamentos, null, array('class'=>'form-control input-sm'.($errors->has('tbldepartamento_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Departamento', 'id'=>'tbldepartamento_id')) }}
              <span id="error-tbldepartamento_id" class="invalid-feedback"></span>
            </div>

            <div class="form-group">
              {{ Form::label('Provincia') }}
              {{ Form::select('tblprovincia_id', [], null, array('class'=>'form-control input-sm'.($errors->has('tblprovincia_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Provincia', 'id'=>'tblprovincia_id')) }}
              <span id="error-tblprovincia_id" class="invalid-feedback"></span>
            </div>

            <div class="form-group">
              {{ Form::label('Distrito') }}
              {{ Form::select('tbldistrito_id', [], null, array('class'=>'form-control input-sm'.($errors->has('tbldistrito_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Distrito', 'id'=>'tbldistrito_id')) }}
              <span id="error-tbldistrito_id" class="invalid-feedback"></span>
            </div>

                        
                        <div class="form-group">
                            @if( !empty($victima['id']) ) 
                                {!! Form::button("Actualizar",["type" => "submit","id" => "btnSubmitVictima","class"=>"btn btn-warning"])!!}
                            @else
                                {!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
                            @endif
                            <a href="javascript:ajaxLoad('{{ url('/victima') }}')" class="btn btn-default pull-right">Cancelar</a>
                        </div>
                    
          {!! Form::close() !!}

                </div>
      </div>
    </div>
  </div>
</div>

@if(!isset($victima) && empty($victima['id']))
  <script type="text/javascript">
    $("#tblprovincia_id").attr('disabled', 'disabled');
    $("#tbldistrito_id").attr('disabled', 'disabled');
  </script>
@else
  <script type="text/javascript">
    debugger
    $("#edad").val('{{$victima->edad}}');
    $("#hijos").val('{{$victima->hijos}}');
    $("#btnSubmitVictima").attr('disabled','disabled');
    var tbldepartamento_id = "{{ $victima->tbldepartamento_id }}";
    var tblprovincia_id = "{{ $victima->tblprovincia_id }}";
    var tbldistrito_id = "{{ $victima->tbldistrito_id }}";
    myPlugin = new myqueue();
    myPlugin.add(function (dfd) {
      setTimeout(function () {

        $("#tbldepartamento_id").val(tbldepartamento_id).trigger('change');

        console.log("1");
        dfd.resolve();
      }, 1000);
    }, "first");

    myPlugin.add(function (dfd) {
      setTimeout(function () {

        $("#tblprovincia_id").val(tblprovincia_id).trigger('change');

        console.log("2");
        dfd.resolve();
      }, 1000);
    }, "second");

    myPlugin.add(function (dfd) {
      setTimeout(function () {

        $("#tbldistrito_id").val(tbldistrito_id).trigger('change');
        $("#btnSubmitVictima").removeAttr('disabled');

        console.log("3");
        dfd.resolve();
      }, 1000);
    }, "third");  

    myPlugin.start();
  </script>
@endif
