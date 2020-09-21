<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControllers extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('users.index',[
            'users'=> $users
        ]);
    }

    public function store(Request $request)
    {
        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password
        ]);

        return back(); //Retornamos a la vista anterior
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }
}
