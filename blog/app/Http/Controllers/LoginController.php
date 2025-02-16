<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login',[
            'title' => 'login'
        ]);
    }
    public function masuk(){
        return redirect('/home');
    }

    public function login(Request $request){
        $credantials = $request->validate([
            'nim' => 'required|max:15',
            'password' => 'required'
        ]);

        if (Auth::attempt($credantials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('loginError', 'login failed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }
}
