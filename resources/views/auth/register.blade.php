@extends('auth.authTemplate')

@section('content')

    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" style="display: block;" action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
        <h3 class="font-green">Registro</h3>
        <p class="hint">Introduzca sus datos personales a continuación: </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Nombre</label>
            <input class="form-control placeholder-no-fix"  id="name" type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus/>
            @if ($errors->has('name'))
                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
<div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Apellidos</label>
            <input class="form-control placeholder-no-fix"  id="last_name" type="text" placeholder="Apellidos" name="last_name" value="{{ old('last_name') }}" required autofocus/>
            @if ($errors->has('last_name'))
                <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control placeholder-no-fix"  id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required/>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        {{--<div class="form-group">--}}
            {{--<label class="control-label visible-ie8 visible-ie9">Address</label>--}}
            {{--<input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address" /> </div>--}}
        {{--<div class="form-group">--}}
            {{--<label class="control-label visible-ie8 visible-ie9">City/Town</label>--}}
            {{--<input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city" /> </div>--}}
        {{--<p class="hint"> Introduzca los detalles de su cuenta a continuación:</p>--}}
        {{--<div class="form-group">--}}
            {{--<label class="control-label visible-ie8 visible-ie9">Username</label>--}}
            {{--<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>--}}
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
            <input id="password"  type="password" class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" required/>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Confirmar Contraseña</label>
            <input  id="password-confirm" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirma tu contraseña" name="password_confirmation"  required/>
        </div>
        <div class="form-group margin-top-20 margin-bottom-20">
            <label class="mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="tnc" /> Estoy de acuerdo con la
                <a href="javascript:;">Política de privacidad </a>
                <span></span>
            </label>
            <div id="register_tnc_error"> </div>
        </div>
        <div class="form-actions">
            <a href="{{ route('login') }}" class="btn green btn-outline">Volver</a>
            <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Entrar</button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->


    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection
