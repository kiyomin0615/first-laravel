<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $req)
    {
        // Validate user input data
        $userInput = $req->validate([
            'username' => ['required', 'min:5', 'max:15', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:20', 'confirmed'], // 'password_confimation' field is required on form data
        ]);

        // Hash password
        $userInput['password'] = bcrypt($userInput['password']);

        User::create($userInput);

        return 'User Registration!';
    }
}
