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
            'phone' => ['required', 'string', 'regex:/^[0-9]{10}$/', 'unique:users,phone'],
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
        // Step 1: Validate input
        $credentials = $request->validate([
            'phone' => 'required|string|digits:10',
            'password' => 'required|string|min:6',
        ]);

        // Step 2: Attempt login using Auth
        if (Auth::guard('web')->attempt([
            'phone' => $credentials['phone'],
            'password' => $credentials['password'],
        ])) {
            // Step 3: Regenerate session & redirect
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        // Step 4: On failure, return with error
        return back()->withErrors([
            'phone' => 'The provided credentials do not match our records.',
        ])->onlyInput('phone');
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
