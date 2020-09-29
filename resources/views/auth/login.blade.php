@extends('layouts.site')

@section('login-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Авторизация</div>
                @if (session('message'))
                    <div class="alert alert-info">{{ session('message') }}</div>
                @endif
                @if (session('error_contact_form'))
                    <div class="alert alert-danger">{{ session('error_contact_form') }}</div>
                @endif
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Введите e-mail" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Введите пароль" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="loginboxbtn_login">
                                    <button type="submit" class="btn btn-primary loginboxbtn_submit">
                                    Войти
                                </button>
                                <a class="btn btn-primary loginboxbtn_reset" href="{{ route('password.request') }}">
                                    Восстановить пароль?
                                </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-xs-12">
                        <div class="loginboxbtn">
                           <a href="{{ route('register') }}" class="btn btn-primary loginboxbtn_register">Зарегестрироваться</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
