<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $req)
    {
        $userInput = $req->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create($userInput);
        return 'User Registration!';
    }
}
