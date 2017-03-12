<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;

class LoginController extends Controller
{ 
    use AuthenticatesUsers;
    
    protected $redirectTo = '/';
    
    public function __construct() {
        $this->middleware('guest:web', ['except' => 'logout']);
    }
}
