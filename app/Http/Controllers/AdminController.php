<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::withCount('posts')->get();
        return view('admin.users', compact('users'));
    }

    public function userPosts($id)
    {
        $user = User::with('posts')->findOrFail($id);
        return view('admin.user_posts', compact('user'));
    }

    public function verifyPost($id)
    {
        $post = BlogPost::findOrFail($id);
        $post->is_approved = true;
        $post->save();

        return back()->with('success', 'Post has been approved.');
    }

    public function userDelete(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:users,id',
        ]);

        $user = User::findOrFail($request->id);

        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function postDelete(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:blog_posts,id',
        ]);

        $post = BlogPost::findOrFail($request->id);
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
}
