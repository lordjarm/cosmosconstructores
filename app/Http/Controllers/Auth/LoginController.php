<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    public function __construct() {

        $this->middleware('guest',['only' => 'showLoginForm']);
        
    }
    public function showLoginForm() {

        return view('auth.login');
        
    }    

    public function login() {
        $credenciales=$this->validate(request(),[
            'email'=>'required|string',
            'password'=>'required|string'

        ]);
        if(Auth::attempt($credenciales)){
            return redirect()->route('dashboard');
        }
        return back()
            ->withErrors(['email'=>trans('auth.failed')])
            ->withInput(request(['email']));
    } 
    public function logout(){
        Auth::logout();
        return redirect('/');
    } 
}
