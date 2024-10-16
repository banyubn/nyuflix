<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
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
            return view('auth.register');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($request->password !== $request->password_confirmation) {
            return redirect()->back()->with([
                'error' => 'Password Confirmation does not match!'
            ]);
        }

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login.index')->with([
            'success' => 'Account created successfully!'
        ]);
    }
}
