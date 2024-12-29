<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        //validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //attempt to authenticatea and login the user
        if (!Auth::attempt($attributes)){
            throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified.'
            //auth failed
            ]);

            session()->regeneration();
            
            // redirect with a success flash message
            return redirect('/')->with('success', 'Welcome Back!');
        }

    }

    public function destroy()
    {

        Auth::logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
