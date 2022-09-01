<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function loginPost(Request $request)
    {
        $attributes = request()->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect(session('referer') ? session('referer') : '/')->with('success', 'You are now signed in!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your cedentilas could not be verified.'
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function signup()
    {
        return view('user.signup');
    }

    public function register()
    {
        $attributes = request()->validate([
            'name'     => 'required|max:255',
            'email'    => 'required|unique:users,email',
            'password' => 'required|max:32|min:7|confirmed',
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect(session('referer') ? session('referer') : '/')->with('success', 'You are now signed in!');
    }
}
