<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalPosts = Post::count();
        $pendingPosts = Post::where('is_approved', false)->count();

        return view('admin.dashboard', compact('totalUsers', 'totalPosts', 'pendingPosts'));
    }

    public function users()
    {
        $users = User::withCount('posts')->get();
        return view('admin.users', compact('users'));
    }

    public function posts()
    {
        $posts = Post::with('user')->latest()->get();
        return view('admin.posts', compact('posts'));
    }

    public function verifyPost($id)
    {
        $post = Post::findOrFail($id);
        $post->is_approved = true;
        $post->save();

        return redirect()->back()->with('success', 'Post approved successfully.');
    }
}
