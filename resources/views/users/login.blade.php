@extends('layout.core')

@section('title')Login to your account
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('login') }}" class="signin" method="POST" autocomplete="off">
            <div class="text-center">
                <h1 class="reg_acc">Login To Your Account</h1>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control {{ $errors->has('username') ? 'form-control-danger' : '' }}" value="{{ old('username') }}" id="username" name="username">
            </div> 
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'form-control-danger' : '' }}" value="{{ old('password') }}" id="password" name="password">
            </div>
            
            <div class="form-group">
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn_small">Login</button>
                </div>
            </div>
            
            @if(session()->has('logged_in'))
                <div class="clear"></div>
                <div class="alert alert-success">
                    <div class="text-center">
                        <strong>Successfully logged in!</strong>
                    </div>
                </div>
                {{ session()->flush() }}
            @endif
            
            {{ csrf_field() }}
        </form>
    </div>
@endsection