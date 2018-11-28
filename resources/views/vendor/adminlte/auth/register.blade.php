@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

<body class="hold-transition register-page">
    <div id="app" v-cloak>
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/home') }}"><b>Shop</b> Admin App</a>
            </div>

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

            <div class="register-box-body">
                <p class="login-box-msg">{{ trans('adminlte_lang::message.registermember') }}</p>

                <!-- <register-form></register-form> -->

                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div id="result" class="alert alert-success text-center" style="display: none;"> 
                        User Registered! <i class="fa fa-refresh fa-spin"></i> Entering...
                    </div> 
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} has-feedback ">
                        <input type="text" placeholder="Full Name" id="name" name="name" value="" autofocus="autofocus" class="form-control"> <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div> 
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                        <input type="email" placeholder="Email" id="email" name="email" value="" class="form-control"> <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div> 
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                        <input type="password" placeholder="Password" id="password" name="password" class="form-control"> <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div> 
                    <div class="form-group has-feedback">
                        <input type="password" placeholder="Retype password" id="password-confirm" name="password_confirmation" class="form-control" required>
                    </div> 
                    <div class="row">
                        <!--<div class="col-xs-6">
                             <label>
                                <div class="checkbox_register icheck">
                                    <label data-toggle="modal" data-target="#termsModal" class="">
                                        <div class="icheckbox_square-blue" style="position: relative;">
                                            <input type="checkbox" name="terms" class="has-error" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div> 
                                        <a href="#" class="">Terms and conditions</a>
                                    </label>
                                </div>
                            </label> 
                        </div> -->
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
                        </div>
                    </div>
                </form>

                {{-- @include('adminlte::auth.partials.social_login') --}}

                <a class="btn btn-link" href="{{ url('/login') }}" class="text-center">{{ trans('adminlte_lang::message.membership') }}</a>

            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    @include('adminlte::auth.terms')

</body>

@endsection
