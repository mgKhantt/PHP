<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect('/admin')
                ->withErrors($validator)
                ->withInput();
        }

        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            return redirect('/admin/users');
        } else {
            $validator->errors()->add('password', 'Your password is incorrect');
            return redirect('/admin')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/admin');
    }
}
