<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AccountController extends Controller
{
    public function registerAccount(Request $request){
        //Validate the request
        $validator = Validator::make($request->all(), [
            'first_name'=> 'required|max:100',
            'last_name'=> 'required|max:100',
            'email'=> 'required|email|max:255',
            'password'=> ['required', 'min:8', 'max:32', 'confirmed', 'regex:/^(?=\S*[0-9])(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[*.!@$%^&])\S{8,32}$/'],
        ]);
        if ($validator->fails()) {
            return redirect('account/register')->withErrors($validator)->withInput();
        }else{
            //if passed, create and store the user
            User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->first_name),
            ]);

            //log the user in session
            auth()->attempt($request->only('email','password'));

            //redirect to app home page
            return redirect()->route('app_home');
        }
    }

    public function loginAccount(Request $request){
        //Validate the request
        $validator = Validator::make($request->all(), [
            'email'=> 'required|email',
            'password'=> 'required',
        ]);
        if ($validator->fails()) {
            return redirect('account/login')->withErrors($validator)->withInput();
        }else{

            //try to log the user in session
            if (!auth()->attempt($request->only('email','password'))){
                return redirect('account/login')->with('status', 'Incorrect Email or Password!');
            }

            //redirect to app home page
            return redirect()->route('app_home');
        }
    }

    public function logoutAccount(){
        auth()->logout();
        return redirect('/')->with('logout', 'You have sucessfully logged out!');
    }
}
