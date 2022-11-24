<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function login_action(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('username','=',$request->username)->first();
        if($user) {
            if ($request->password == $user->password) {
                $request->session()->put('loginId',$user->id);
                return redirect('home');
            } else {
                return back()->with('Lỗi');
            }
        } else {
            return back()->with('Lỗi');
        }
    }

    public function logout(){
        if(session()->has('loginId')){
            session()->pull('loginId');
            return redirect('login');
        }
    }

    public function home() {
        return view('home');
    }
}
