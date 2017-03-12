@extends('layout.core')

@section('title')Login to your account
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('login') }}" class="signin" method="POST" autocomplete="off">
            <div class="text-center">
                <h1 class="reg_acc">Login To Your Account</h1>
            </div>
            <div class="form-group {{ $errors->has('username') ? 'has-danger' : '' }}">
                <label for="username">Username</label>
                <input type="text" class="form-control {{ $errors->has('username') ? 'form-control-danger' : '' }}" value="{{ old('username') }}" id="username" name="username">
                @if($errors->has('auth.failed'))
                    <strong>HELLO</strong>
                @endif
                @if($errors->has('username'))
                    <div class="form-control-feedback">                    
                        {{ $errors->first('username') }}
                    </div>
                @endif
            </div> 
            <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                <label for="password">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'form-control-danger' : '' }}" value="{{ old('password') }}" id="password" name="password">
                @if($errors->has('password'))
                    <div class="form-control-feedback">                    
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
            
            <div class="form-group">
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn_small">Login</button>
                </div>
            </div>
            
        {{ csrf_field() }}
        </form>
    </div>
@endsection