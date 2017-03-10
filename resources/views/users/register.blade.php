@extends('layout.core')

@section('title')Register an Account
@endsection

<style>
    .top {
        margin-top: 40px;
    }
</style>

@section('content')
    <div class="container">
        
        <form action="{{ route('register') }}" method="POST" style="padding: 30px;" class="top" autocomplete="off">
            <div class="text-center">
                <h1>Register New Account</h1>
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
            
            <div class="form-group {{ $errors->has('confirm_password') ? 'has-danger' : '' }}">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control {{ $errors->has('confirm_password') ? 'form-control-danger' : '' }}" id="confirm_password" name="confirm_password">
                
                @if($errors->has('confirm_password'))
                    <div class="form-control-feedback">
                        {{ $errors->first('confirm_password') }}
                    </div>
                @endif
            </div>
            
            <button type="submit" class="btn btn-primary">Register Account</button>
            
            {{ csrf_field() }}
        </form>
    </div>
@endsection