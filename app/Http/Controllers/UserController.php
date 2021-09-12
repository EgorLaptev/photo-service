<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'login' => 'required',
            'password' => 'required',
        ]);

        if (!$validator->fails()) {

            if (Auth::attempt($request->only('login', 'password'))) {
                return redirect(route('home'));
            }

            $validator->errors()->add('auth', 'Incorrect login or password');

        }

        return redirect(route('login-form'))->withErrors($validator);

    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'login' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        if (!$validator->fails()) {

            $user = User::create([
                'login'     => $request->login,
                'email'     => $request->email,
                'password'  => Hash::make($request->password)
            ]);


            Auth::login($user);

            return redirect(route('home'));

        } else return redirect(route('register-form'))->withErrors($validator);

    }

}
