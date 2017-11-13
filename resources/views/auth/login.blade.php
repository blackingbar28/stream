@extends('backend.layouts.login')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Login</b></a>
        </div>

        <div class="login-box-body">
            {!! Form::open(['route' => 'login', 'method' => 'post']) !!}
            <div class="form-group has-feedback {!! $errors->has('email') ? 'has-error' : '' !!}">
                {!! Form::text('email', old('email'), array('class' => 'form-control', 'placeholder' => 'Email')) !!}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback {!! $errors->has('password') ? 'has-error' : '' !!}">
                {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-8"></div>
                <div class="col-xs-4">
                    {!! Form::submit('Login', array('class' => 'btn btn-primary btn-block btn-flat')) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection