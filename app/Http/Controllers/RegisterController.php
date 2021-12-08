<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'cell_number' => 'required|string',
            'position' => 'required|string',
            'password' => 'required|string',
            'status' => 'required|nullable'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/navigation')->with('success', 'Your account has been created!');
    }
}
