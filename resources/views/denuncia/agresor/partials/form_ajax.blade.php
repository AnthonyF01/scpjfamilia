<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
            @if(isset($agresor) && !empty($agresor['id']))
                Editar Agresor
            @else
                Crear Agresor
            @endif
        </div>
        <div class="box_plus-body">

            @if(isset($agresor) && !empty($agresor['id']))
            {!! Form::model($agresor, [ 'route' => ['agresor.update', $agresor->id], 'method' => 'PUT', 'id'=>'form_agresor' ]) !!}
            @else
              {!! Form::open([ 'route' => 'agresor.store', 'id'=>'form_agresor' ]) !!}
          @endif

            {{-- <div class="form-group has-feedback {{ $errors->has('nombre')? 'has-error':'' }}">
              {{ Form::label('nombre', 'Nombre') }}
              {{ Form::text('nombre', null, ['class' => 'form-control input-sm'.($errors->has('nombre')?" is-invalid":""), "autofocus", 'id' => 'nombre', 'autocomplete' => 'off']) }}
              <span id="error-nombre" class="invalid-feedback"></span>
            </div>

            <div class="form-group has-feedback {{ $errors->has('apellido')? 'has-error':'' }}">
              {{ Form::label('apellido', 'Apellido') }}
              {{ Form::text('apellido', null, ['class' => 'form-control input-sm'.($errors->has('apellido')?" is-invalid":""), "autofocus", 'id' => 'apellido', 'autocomplete' => 'off']) }}
              <span id="error-apellido" class="invalid-feedback"></span>
            </div> --}}

            <div class="row">
              <div class="col-md-4">
                <div class="form-group has-feedback {{ $errors->has('nombre1')? 'has-error':'' }}">
                  {{ Form::label('nombre1', 'Primer Nombre') }}
                  {{ Form::text('nombre1', null, ['class' => 'form-control input-sm'.($errors->has('nombre1')?" is-invalid":""), "autofocus", 'id' => 'nombre1', 'autocomplete' => 'off']) }}
                  <span id="error-nombre1" class="invalid-feedback"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group has-feedback {{ $errors->has('nombre2')? 'has-error':'' }}">
                  {{ Form::label('nombre2', 'Segundo Nombre') }}
                  {{ Form::text('nombre2', null, ['class' => 'form-control input-sm'.($errors->has('nombre2')?" is-invalid":""), "autofocus", 'id' => 'nombre2', 'autocomplete' => 'off']) }}
                  <span id="error-nombre2" class="invalid-feedback"></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group has-feedback {{ $errors->has('nombre3')? 'has-error':'' }}">
                  {{ Form::label('nombre3', 'Tercer Nombre') }}
                  {{ Form::text('nombre3', null, ['class' => 'form-control input-sm'.($errors->has('nombre3')?" is-invalid":""), "autofocus", 'id' => 'nombre3', 'autocomplete' => 'off']) }}
                  <span id="error-nombre3" class="invalid-feedback"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group has-feedback {{ $errors->has('apellido1')? 'has-error':'' }}">
                  {{ Form::label('apellido1', 'Apellido Paterno') }}
                  {{ Form::text('apellido1', null, ['class' => 'form-control input-sm'.($errors->has('apellido1')?" is-invalid":""), "autofocus", 'id' => 'apellido1', 'autocomplete' => 'off']) }}
                  <span id="error-apellido1" class="invalid-feedback"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group has-feedback {{ $errors->has('apellido2')? 'has-error':'' }}">
                  {{ Form::label('apellido2', 'Apellido Materno') }}
                  {{ Form::text('apellido2', null, ['class' => 'form-control input-sm'.($errors->has('apellido2')?" is-invalid":""), "autofocus", 'id' => 'apellido2', 'autocomplete' => 'off']) }}
                  <span id="error-apellido2" class="invalid-feedback"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  {{ Form::label('Tipo de Documento') }}
                  {{ Form::select('tbldocumento_id', $documentos, null, array('class'=>'form-control input-sm'.($errors->has('tbldocumento_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Tipo de Documento')) }}
                  <span id="error-tbldocumento_id" class="invalid-feedback"></span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group has-feedback {{ $errors->has('nro_doc')? 'has-error':'' }}">
                  {{ Form::label('nro_doc', 'Numero de Documento') }}
                  {{ Form::text('nro_doc', null, ['class' => 'form-control input-sm'.($errors->has('nro_doc')?" is-invalid":""), "autofocus", 'id' => 'nro_doc', 'autocomplete' => 'off']) }}
                  <span id="error-nro_doc" class="invalid-feedback"></span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group has-feedback {{ $errors->has('sexo')? 'has-error':'' }}">
                  {{ Form::label('sexo', 'Sexo') }}
                  {{ Form::select('sexo', ['Masculino'=>'Masculino','Femenino'=>'Femenino'], null, array('class'=>'form-control input-sm'.($errors->has('sexo')?" is-invalid":""), 'placeholder'=>'Seleccione un Sexo')) }}
                  <span id="error-sexo" class="invalid-feedback"></span>
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

            <div class="form-group has-feedback {{ $errors->has('email')? 'has-error':'' }}">
              {{ Form::label('email', 'Correo Electrónico') }}
              {{ Form::text('email', null, ['class' => 'form-control input-sm'.($errors->has('email')?" is-invalid":""), "autofocus", 'id' => 'email', 'autocomplete' => 'off']) }}
              <span id="error-email" class="invalid-feedback"></span>
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
                            @if( !empty($agresor['id']) ) 
                                {!! Form::button("Actualizar",["type" => "submit","id" => "btnSubmitAgresor","class"=>"btn btn-warning"])!!}
                            @else
                                {!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
                            @endif
                            <a href="javascript:ajaxLoad('{{ url('/agresor') }}')" class="btn btn-default pull-right">Cancelar</a>
                        </div>
                    
          {!! Form::close() !!}

                </div>
      </div>
    </div>
  </div>
</div>

@if(!isset($agresor) && empty($agresor['id']))
  <script type="text/javascript">
    $("#tblprovincia_id").attr('disabled', 'disabled');
    $("#tbldistrito_id").attr('disabled', 'disabled');
  </script>
@else
  <script type="text/javascript">
    debugger
    $("#btnSubmitAgresor").attr('disabled','disabled');
    var tbldepartamento_id = "{{ $agresor->tbldepartamento_id }}";
    var tblprovincia_id = "{{ $agresor->tblprovincia_id }}";
    var tbldistrito_id = "{{ $agresor->tbldistrito_id }}";
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
        $("#btnSubmitAgresor").removeAttr('disabled');

        console.log("3");
        dfd.resolve();
      }, 1000);
    }, "third");  

    myPlugin.start();
  </script>
@endif
