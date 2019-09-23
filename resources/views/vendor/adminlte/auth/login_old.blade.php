@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <!-- <a href="{{ url('/home') }}"><b>Admin</b>LTE</a> -->
                <a href="{{ url('/home') }}"><b>Poder</b> Judicial</a>
            </div><!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
        {{-- <p class="login-box-msg" style="font-weight: 500"> {{ trans('adminlte_lang::message.siginsession') }} </p> --}}
        <p class="login-box-msg" style="font-weight: 500"> Ingrese sus credenciales para iniciar sesión </p>

        <!-- <login-form name="{{ config('auth.providers.users.field','email') }}"
                    domain="{{ config('auth.defaults.domain','') }}"></login-form> -->

        <form method="post" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div id="result" class="alert alert-success text-center" style="display: none;"> 
                Logged in! <i class="fa fa-refresh fa-spin"></i> Entering...
            </div> 
            
            <div class="form-group has-feedback {{ $errors->has('email')? 'has-error':'' }}">
                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" autofocus="autofocus" class="form-control" required autofocus> <span class="glyphicon form-control-feedback glyphicon-envelope"></span> @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div> 
            <div class="form-group has-feedback">
                <input type="password" placeholder="Contraseña" name="password" class="form-control"> <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div> 
            <div class="row">
                <div class="col-xs-6">
                    <div class="checkbox icheck">
                        <label class="">
                            <div class="icheckbox_square-blue" style="position: relative;">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} style="display: block; position: absolute; top: -20%; left: -20%; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div> Recuérdame
                        </label>
                    </div>
                </div> 
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
                </div>
            </div>
        </form>

        {{-- @include('adminlte::auth.partials.social_login') --}}

        {{-- <a class="btn btn-link" href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br> --}}
        {{-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidé mi contraseña</a><br> --}}
        {{-- <a class="btn btn-link" href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a> --}}
        {{-- <a class="btn btn-link" href="{{ url('/register') }}" class="text-center">Registrarse</a> --}}

        </div>

        </div>
        
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
    {{-- @include('adminlte::layouts.partials.scripts') --}}

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

</body>

@endsection
