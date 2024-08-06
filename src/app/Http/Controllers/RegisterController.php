<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User2;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        $user2 = $request->only(['name','userid', 'password']);
           User2::create($user2);

           return redirect('/register')->with('message', '登録が完了しました');
    }
}
