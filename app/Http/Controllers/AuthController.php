<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function create()
    {
       
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'bail|required|string|email|max:80|unique:users',
            'name' => 'required|string|max:30',
            'address' => 'required|string|min:8',
            'phone' => 'required|string|min:8',
            'password' => 'required|string|min:4',
        ]);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->route('users.index');
    }
}
