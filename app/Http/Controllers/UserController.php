<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
        return view("regis");
    }

    public function inserUse(Request $request){

        $data = $request;
        $newUser = User::create($data);
        return view('regis');
    }
    
    public function allSalles(){
        
    }
}
