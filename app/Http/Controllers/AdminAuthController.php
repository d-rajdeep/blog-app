<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'id' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::find($credentials['id']);

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            session(['admin_id' => $admin->id]);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors(['Invalid credentials']);
    }

    public function logout()
    {
        session()->forget('admin_id');
        return redirect()->route('login.page');
    }
}
