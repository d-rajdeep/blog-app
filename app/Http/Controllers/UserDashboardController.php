<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Hash;

class UserDashboardController extends Controller
{
    public function index()
    {
        $posts = BlogPost::where('user_id', Auth::id())->get();
        return view('user.dashboard', compact('posts'));
    }

    public function editProfile()
{
    $user = auth()->user();
    return view('user.edit_profile', compact('user'));
}

public function updateProfile(Request $request)
{
    $user = auth()->user();

    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20|unique:users,phone,' . $user->id,
        'email' => 'nullable|email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:6|confirmed',
    ]);

    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->email = $request->email;

    if ($request->password) {
        $user->password = Hash::make($request->password);
    }

    $user->save();

    return redirect()->route('dashboard')->with('success', 'Profile updated successfully.');
}
}
