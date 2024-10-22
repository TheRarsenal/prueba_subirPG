<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function register(Request $request){
        $user = new User();
        $user->name = $request->userInput;
        $user->email = $request->emailInput;
        $user->password = Hash::make($request->passwordInput);
        $user->save();

        Auth::login($user);

        return redirect(route('secret.index'));
    }

    public function login(Request $request){
        $credentials=[
            "email" => $request->emailInput,
            "password"=> $request->passwordInput,
        ];

        $remember = ($request->has('rememberInput') ? true: false); 

        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect()->intended(route('secret.index'));
        }else{
            return view('login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
