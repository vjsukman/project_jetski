<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function signup(){
        return view('register.signup');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);
        session()->flash('success', 'Register Success, Please Login!');
        return redirect('/');
    }
}
