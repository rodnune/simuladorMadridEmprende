@extends('auth.authTemplate')

@section('content')

    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{ route('login') }}" method="post">
    {{ csrf_field() }}
    <h3 class="form-title font-green">Iniciar sesión</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> Introduzca su usuario y contraseña. </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Usuario</label>
        <input class="form-control form-control-solid placeholder-no-fix" id="email" type="email"  name="email" autocomplete="off" placeholder="Usuario"  value="{{ old('email') }}" required autofocus/>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
        <input class="form-control form-control-solid placeholder-no-fix"  id="password" type="password" autocomplete="off" placeholder="Contraseña" name="password" />
        @if ($errors->has('password'))
            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </div>
    <div class="form-actions">
        <button type="submit" class="btn green uppercase">Login</button>
        <!--<label class="rememberme check mt-checkbox mt-checkbox-outline">
            <input type="checkbox" name="remember" value="1" />Recordar
            <span></span>
        </label>
        -->
        <a href="{{ route('password.request') }}" class="forget-password">¿Olvidó su contraseña?</a>
    </div>

    <div class="create-account">
        <p>
            <a href="{{ route('register') }}" class="uppercase">Crear una nueva cuenta</a>
        </p>
    </div>
    </form>
    <!-- END LOGIN FORM -->
@endsection



