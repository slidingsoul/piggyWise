<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function showRegisterView() {
        return view('register.register');
    }

    public function register(Request $request) {
        $request->validate([
            'username' => ['required', Rule::unique('users', 'username')],
            'password' => ['required', 'min: 8', 'max: 50']
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->saldo = 0;
        $user->rank = User::max('rank') + 1;
        $user->save();

        return view('login.login');
    }

}
