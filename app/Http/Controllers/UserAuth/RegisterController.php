<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm() {
        return view('users.register');
    }
    
    public function register(Request $request) {
        // Validate form
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
            'confirm_password' => 'required'
        ], [
            'username.required' => 'Please enter your username.',
            'email.required' => 'Please enter your email.',
            'name.required' => 'Please enter your name.',
            'password.required' => 'Please enter your password.',
            'confirm_password.required' => 'Please confirm your password.'
        ]);
        
        return view('register');
    }
}
