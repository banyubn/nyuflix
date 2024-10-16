<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                    break;
                case 'user':
                    return redirect()->route('member.profile.index');
                    break;
            }
        } else {
            return view('auth.login');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard')->with([
                        'success' => 'Logged in successfully!'
                    ]);
                    break;
                case 'member':
                    return redirect()->route('member.profile.index')->with([
                        'success' => 'Logged in successfully!'
                    ]);
                    break;
            }
        } else {
            
            return redirect()->back()->with([
                'error' => 'Invalid email or password!'
            ]);
        }
    }

    public function logout() 
    {
        Auth::logout();

        return redirect()->route('login.index')->with([
            'success' => 'Logged out successfully!'
        ]);
    }
}
