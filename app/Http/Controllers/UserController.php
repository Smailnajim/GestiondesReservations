<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return view("register");
    }

    public function inserUser(Request $request){


        $data = $request->validet([
            'firstname'=>'required',
            'lastename'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'role_id'=>'1'

        ]);
        
        $newUser = User::create($data);
        return view('register');
    }
}
