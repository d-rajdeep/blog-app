<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show register form
    public function showRegister()
    {
        return view('auth.register');
    }

    // Handle register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|unique:users,phone',
            'email' => 'nullable|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email ?? null,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login.page')->with('success', 'Registration successful. Please login.');
    }

    // Show login form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('web')->attempt([
            'phone' => $credentials['phone'],
            'password' => $credentials['password'],
        ]))
            {
             $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
    }

    // Handle logout
    public function logout(Request $request)
    {
    Auth::guard('web')->logout(); // ✅ explicitly use the web guard

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
    }
}
