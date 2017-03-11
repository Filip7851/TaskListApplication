<?php

namespace App\Http\Controllers\UserAuth;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{   
    public function index() {
        return view('users.login');
    }
    
    public function login() {
        session()->flash('logged_in', 'Successfully logged in.');
        return redirect()->back();
    }
}
