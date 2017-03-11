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
            'email' => 'required|email|max:255',
            'name' => 'required|max:255',
            'password' => 'required|min:8|confirmed'
        ],  $this->messages());
        
        // Add the user to DB
        
        
        return view('register');
    }
    
    /**
     * Returns custom error messages
     *
     * @return array   
    */
    protected function messages() {
        return [
            'username.required' => 'Please enter your username.',
            'email.required' => 'Please enter your email.',
            'name.required' => 'Please enter your name.',
            'password.required' => 'Please enter your password.',
            'password.confirmed' => 'Password\'s do not match.'
        ];
    }
}
