<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginView() {
        return view('login.login');
    }

    public function login(Request $request) {
        $comingFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt(['username' => $comingFields['username'], 'password' => $comingFields['password']])) {
            $request->session()->regenerate();
            $user = auth()->user();
            return redirect()->route('saving');
        } else {
            return redirect('log');
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
