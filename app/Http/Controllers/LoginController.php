<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use View;
use Redirect;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function ShowLogin(){
        if(Auth::check()){
            return redirect('/dashboard');
        }else{
            return View::make('content.login');
        }
    }

    public function DoLogin(Request $request){
        $rules = array(
            'username' => 'required|alphaNum|min:3',
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return Redirect::back()->withInput($request->input())->with([
                'msg' => 'Username or Password is incorrect.',
                'status' => 'danger'
            ]);
        }else{
            $credentials = $request->only('username', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            }else{
                return Redirect::back()->withInput($request->input())->with([
                    'msg' => 'Username or Password is incorrect.',
                    'status' => 'danger'
                ]);
            }
        }
    }
}