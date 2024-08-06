<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

     public function login(LoginRequest $request)
     {
         $user = $request->only(['userid', 'password']);
           User::create($user);

           return view('admin');
     }
}
