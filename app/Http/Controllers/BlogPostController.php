<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        BlogPost::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
            'is_published' => false,
        ]);

        return redirect()->route('dashboard')->with('success', 'Post submitted for review.');
    }

    public function edit($id)
    {
        $post = BlogPost::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('user.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $post = BlogPost::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard')->with('success', 'Post updated successfully.');
    }

    public function show($id)
    {
    $post = BlogPost::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
    return view('user.view_post', compact('post'));
    }

    public function destroy($id)
    {
        $post = BlogPost::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Post deleted.');
    }
}
