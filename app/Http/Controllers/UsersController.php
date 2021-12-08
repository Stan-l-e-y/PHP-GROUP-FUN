<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function show()
    {
        $users = User::all();


        return view('users-show', ['users' => $users]);
    }

    public function create()
    {
        return view('user-create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => ['required', Rule::unique('users', 'username')],
            'email' => ['required', Rule::unique('users', 'email')],
            'cell_number' => 'required|string',
            'position' => 'required|string',
            'password' => 'required|string',
            'status' => 'nullable'
        ]);

        User::create($attributes);

        return redirect('/users')->with('success', 'Employee Created!');
    }

    public function update(User $user)
    {

        $attributes = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => ['required', Rule::unique('users', 'username')->ignore($user->id)],
            'email' => ['required', Rule::unique('users', 'email')->ignore($user->id)],
            'cell_number' => 'required|string',
            'position' => 'required|string',
            'picture' => 'nullable',
            'status' => 'nullable'

        ]);

        $user->update($attributes);
        //return response()->json(['status' => 'Client Updated!']);
        return redirect('/users')->with('success', 'Employee Updated!');
    }

    public function destroy(User $user)
    {

        $user->delete();

        return response()->json(['status' => 'Employee Deleted!']);
        //return redirect('/clients')
    }
}
