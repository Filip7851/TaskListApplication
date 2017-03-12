<?php 

namespace App\Http\Controllers\UserAuth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait AuthenticatesUsers {
    public function __construct() {
        $this->middleware('guest:web', ['except' => 'logout']);
    }
    
    public function showLoginPage() {
        return view('users.login');
    }
    
    public function login(Request $request) {
        $this->validateLogin($request);
        
        if($this->attemptLogin($request)) {
            session()->flash('logged_in', 'Successfully logged in.');
            session()->save();
            
            return redirect()->intended(route('home'));
        }
        
        return $this->sendFailedLoginResponse($request);      
    }
    
    public function logout(Request $request) {
        $this->guard()->logout();
        
        $request->session()->flush();
        
        $request->session()->regenerate();
        
        session()->flash('logged_out', 'Successfully logged out. Thank you.');
        
        return redirect()->route('home');
    }
    
    protected function sendFailedLoginResponse(Request $request) {
        $errors = ['username' => trans('auth.failed')];

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        
        return redirect()->route('login.show')
            ->withInput($request->only('username'))
            ->withErrors($errors);
    }
    
    protected function validateLogin(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ], $this->messages());
    }
    
    protected function messages() {
        return [
            'username.required' => 'Please enter your username to proceed.',
            'password.required' => 'Please enter your password to proceed.'
        ];
    }
    
    protected function attemptLogin(Request $request) {
        return $this->guard()->attempt($this->credentials($request), $request->has('remember'));
    }
    
    protected function authenticated(Request $request, $user) {
        
    }
    
    protected function credentials(Request $request) {
        return $request->only('username', 'password');
    }
    
    protected function sendLoginResponse(Request $request) {
        $request->session()->regenerate();
    }
    
    protected function guard() {
        return Auth::guard('web');
    }
}