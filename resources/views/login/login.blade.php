@extends('layouts.login')
@section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
            <a href="" class="h1"><b>{{ __('Login') }}</a>
            </div>
            <div class="card-body">
            <p class="login-box-msg">{{ __('Sign in to start your session') }}</p>
            {{ Form::open(['id' => 'formlogin', 'class' => 'form' , 'autocomplete' => 'Off', 'route' => 'login.in']) }}
                <div class="input-group mb-3">
                    {{ Form::text('username', null, ['class' => 'form-control','placeholder' => 'Username', 'id'=> 'username'])}}
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                    {{ Form::password('password', ['class' => 'form-control eye min','placeholder' => 'Password', 'id'=> 'password'])}}
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-8">
                   
                </div>
                <!-- /.col -->
                <div class="col-4">
                    {{ Form::submit(__('Sign In'), ['class' => 'btn btn-primary btn-block', 'id' => 'submit']) }}
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Sign In') }}</button>
                </div>
                <!-- /.col -->
                </div>
            {{ Form::close() }}
            <p class="mb-1">
                <a href="forgot-password.html">{{ __('I forgot my password') }}</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">{{ __('Register a new membership') }}</a>
            </p>
            </div>
            <!-- /.card-body -->
        </div>
    <!-- /.card -->
    </div>
@endsection