@extends('layout.core')

@section('title')Register an Account
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('register') }}" method="POST" style="padding: 60px" autocomplete="off">
            <div class="text-center">
                <h1 class="reg_acc">Register New Account</h1>
            </div>
            
            <div class="form-group {{ $errors->has('username') ? 'has-danger' : '' }}">
                <label for="username">Username</label>
                
                <input type="text" class="form-control {{ $errors->has('username') ? 'form-control-danger' : '' }}" value="{{ old('username') }}" id="username" name="username">
                
                @if($errors->has('username'))
                    <div class="form-control-feedback">                    
                        {{ $errors->first('username') }}
                    </div>
                @endif
            </div>
            
            <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                <label for="email">Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'form-control-danger' : '' }}" value="{{ old('email') }}" id="email" name="email">
                
                @if($errors->has('email'))
                    <div class="form-control-feedback">
                        {{ $errors->first('email') }}    
                    </div>
                @endif
            </div>
            
            <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
                <label for="name">Name</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'form-control-danger' : '' }}" value="{{ old('name') }}" id="name" name="name">
                
                @if($errors->has('name'))
                    <div class="form-control-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            
            <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                <label for="password">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'form-control-danger' : '' }}" id="password" name="password">
                
                @if($errors->has('password'))
                    <div class="form-control-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
            
            <div class="form-group {{ $errors->first('password') == 'Password\'s do not match.' ? 'has-danger' : '' }}">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control {{ $errors->first('password') == 'Password\'s do not match.' ? 'form-control-danger' : '' }}" id="password_confirmation" name="password_confirmation">
            </div>
            
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn_small">Register</button>
            </div>
            
            {{ csrf_field() }}
        </form>
    </div>
@endsection