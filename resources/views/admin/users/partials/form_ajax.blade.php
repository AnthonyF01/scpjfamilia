<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">
          @if(isset($user) && !empty($user['id']))
            Editar Usuario
          @else
            Crear Usuario
          @endif
        </div>
        <div class="box_plus-body">

          @if(isset($user) && !empty($user['id']))
            {!! Form::model($user, [ 'route' => ['users.update', $user->id], 'method' => 'PUT', 'id'=>'form_user' ]) !!}
          @else
            {!! Form::open([ 'route' => 'users.store', 'id'=>'form_user' ]) !!}
          @endif

            <div class="form-group">
              {{ Form::label('imagen', 'Imagen') }}
              <div class="file-loading">
                <input id="imagen" name="imagen" type="file">
              </div>
              @if (isset($user->imagen) && !empty($user->imagen))
                <span style="font-size: 11px; font-style: italic;"><b>Archivo: </b> {{ explode("users/",$user->imagen)[1] }}</span>
              @endif
              <span id="error-imagen" class="invalid-feedback"></span>
            </div>

            <div class="form-group has-feedback {{ $errors->has('nombre')? 'has-error':'' }}">
              {{ Form::label('nombre', 'Nombre') }}
              {{ Form::text('nombre', null, ['class' => 'form-control input-sm'.($errors->has('nombre')?" is-invalid":""), "autofocus", 'id' => 'nombre', 'autocomplete' => 'off']) }}
              <span id="error-nombre" class="invalid-feedback"></span>
            </div>

            <div class="form-group">
              {{ Form::label('direccion', 'Dirección') }}
              {{ Form::text('direccion', null, ['class' => 'form-control input-sm'.($errors->has('direccion')?" is-invalid":""), "autofocus", 'id' => 'direccion', 'autocomplete' => 'off']) }}
              <span id="error-direccion" class="invalid-feedback"></span>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  {{ Form::label('fono', 'Teléfono') }}
                  {{ Form::text('fono', null, ['class' => 'form-control input-sm'.($errors->has('fono')?" is-invalid":""), "autofocus", 'id' => 'fono', 'autocomplete' => 'off']) }}
                  <span id="error-fono" class="invalid-feedback"></span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  {{ Form::label('dni', 'DNI') }}
                  {{ Form::text('dni', null, ['class' => 'form-control input-sm'.($errors->has('dni')?" is-invalid":""), "autofocus", 'id' => 'dni', 'maxlength' => '8', 'autocomplete' => 'off' ]) }}
                  <span id="error-dni" class="invalid-feedback"></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              {{ Form::label('fchnac', 'Fecha de Nacimiento') }}
              <div class="input-group date">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                {{ Form::text('fchnac', null, ['class' => 'form-control input-sm datepicker'.($errors->has('fchnac')?" is-invalid":""), "autofocus", 'id' => 'fchnac', 'autocomplete' => 'off']) }}
              </div>
              <span id="error-fchnac" class="invalid-feedback"></span>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  {{ Form::label('Departamento') }}
                  {{ Form::select('tbldepartamento_id', $departamentos, null, array('class'=>'form-control input-sm'.($errors->has('tbldepartamento_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Departamento')) }}
                  <span id="error-tbldepartamento_id" class="invalid-feedback"></span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  {{ Form::label('Modulo') }}
                  {{ Form::select('tblmodulo_id', $modulos, null, array('class'=>'form-control input-sm'.($errors->has('tblmodulo_id')?" is-invalid":""), 'placeholder'=>'Seleccione un Modulo')) }}
                  <span id="error-tblmodulo_id" class="invalid-feedback"></span>
                </div>
              </div>
            </div>

            <div class="form-group">
              {{ Form::label('name', 'Usuario') }}
              {{ Form::text('name', null, ['class' => 'form-control input-sm'.($errors->has('name')?" is-invalid":""),  "autofocus", 'id' => 'name', (isset($user) && !empty($user['id'])) ? 'disabled' : '']) }}
              <span id="error-name" class="invalid-feedback"></span>
            </div>

            <div class="form-group">
              {{ Form::label('email', 'Email') }}
              {{ Form::text('email', null, ['class' => 'form-control input-sm'.($errors->has('email')?" is-invalid":""),   "autofocus", 'id' => 'email', (isset($user) && !empty($user['id'])) ? 'disabled' : '']) }}
              <span id="error-email" class="invalid-feedback"></span>
            </div>

            @if( empty($user['id']) )
              <div class="form-group">
                {{ Form::label('password', 'Contraseña') }}
                <div class="input-group date">
                  {{ Form::password('password', array('id' => 'password', "class" => "form-control input-sm".($errors->has('password')?" is-invalid":""), "autocomplete" => "off")) }}
                  <span class="input-group-btn">
                    <button id= "show_password" class="btn btn-sm" type="button">
                      <span id="pwdButton" class="glyphicon glyphicon-eye-open"></span>
                    </button>
                  </span>
                </div>
                <span id="error-password" class="invalid-feedback"></span>
              </div>
            @endif

            <hr>
            <h3>Lista de roles</h3>
            <div class="form-group">
              <ul class="list-unstyled">
                @foreach($roles as $role)
                  <li>
                      <label>
                      <!-- 'roles[]' => es un array que guardara multiples valores del checkbox -->
                      <!-- 'null' => no tendra ningun rol marcado por defecto -->
                      {{ Form::checkbox('roles[]', $role->id, null) }}
                      {{ $role->name }}
                      <em>({{ $role->description ?: 'N/A' }})</em>
                      </label>
                  </li>
                  @endforeach
                </ul>
            </div>

            <div class="form-group">
              @if( !empty($user['id']) )
                {!! Form::button("Actualizar",["type" => "submit","class"=>"btn btn-warning"])!!}
              @else
                {!! Form::button("Guardar",["type" => "submit","class"=>"btn btn-primary"])!!}
              @endif
              <a href="javascript:ajaxLoad('{{ url('/users') }}')" class="btn btn-default pull-right">Cancelar</a>
            </div>

          {!! Form::close() !!}

        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('.datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy'
  }).addClass('hasDatepicker');

  $('#imagen').fileinput({
    theme: 'fa',
    language: 'es',
    showUpload: false,
    showCaption: true,
    showClose: true,
    showBrowse: true,
    showUploadedThumbs: false,
    showPreview: false,
    // uploadUrl: '#',
    allowedFileExtensions: ['jpg', 'png', 'gif']
  });

  $("#show_password").hover(
    function functionName() {
      //Change the attribute to text
      $("#password").attr("type", "text");
      $("#pwdButton")
        .removeClass("glyphicon-eye-open")
        .addClass("glyphicon-eye-close");
    },
    function() {
      //Change the attribute back to password
      $("#password").attr("type", "password");
      $("#pwdButton")
        .removeClass("glyphicon-eye-close")
        .addClass("glyphicon-eye-open");
    }
  );
</script>
