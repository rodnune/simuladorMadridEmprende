@extends('auth.authTemplate')

@section('content')





    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" style="display: block" action="{{ route('password.email') }}" method="post">
        {{ csrf_field() }}
        @if (session('status'))
            <div class="alert alert-success">
               {{ session('status') }}
            </div>
        @endif

        <h3 class="font-green">¿Olvidó su contraseña?</h3>
        <p> Introduzca su e-mail y restaure su contraseña. </p>
        <div class="form-group">
            <input class="form-control placeholder-no-fix"  id="email" type="email"value="{{ old('email') }}" required autocomplete="off" placeholder="Email" name="email" /> </div>
        <div class="form-actions">
            <a href="{{ route('login') }}" class="btn green btn-outline">Volver</a>
            {{--<button type="button" id="back-btn" class="btn green btn-outline">Back</button>--}}
            <button type="submit" class="btn btn-success uppercase pull-right">Restaurar contraseña</button>
        </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    </form>
    <!-- END FORGOT PASSWORD FORM -->





    {{--<div class="row">--}}


        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Reset Password</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">--}}
                        {{--{{ csrf_field() }}--}}

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

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Send Password Reset Link--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
