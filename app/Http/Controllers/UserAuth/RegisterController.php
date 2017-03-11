<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm() {
        return view('users.register');
    }
    
    public function register(Request $request) {
        // Validate form
        $this->validate($request, [
            'username' => 'required|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'name' => 'required|max:255',
            'password' => 'required|min:8|confirmed'
        ],  $this->messages());        
        
        // Add the user to DB
        $user = \App\User::create([
            'username' => $request->username,
            'email' => $request->email,
            'name' => $request->name,
            // hash the password
            'password' => Hash::make($request->password)
        ]);
        
        // pass the session to the view so that it is displayed
        session()->flash('registered', '');
        
        // redirect user to the home page. In the future it may also redirect to either login page for login or
        // It may automatically login and redirect to dashboard
        return redirect()->route('home');
    }
    
    /**
     * Returns custom error messages
     *
     * @return array   
    */
    protected function messages() {
        return [
            'username.required' => 'Please enter your username.',
            'username.unique' => 'We already have that username in our database. Please try another one.',
            'email.required' => 'Please enter your email.',
            'email.unique' => 'We already have that email in our database. Please try another one.',
            'name.required' => 'Please enter your name.',
            'password.required' => 'Please enter your password.',
            'password.confirmed' => 'Password\'s do not match.'
        ];
    }
}
