<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class HomeController extends Controller
{
     public function index()
{
    $posts = BlogPost::where('is_approved', true)
                     ->where('is_published', true)
                     ->latest()
                     ->get();

    return view('blog.home', compact('posts'));
}

public function verifyPost($id)
{
    $post = BlogPost::findOrFail($id);
    $post->update([
        'is_approved' => true,
        'is_published' => true,
    ]);

    return redirect()->back()->with('success', 'Post approved and published.');
}

    public function readMore($id)
    {
    $post = \App\Models\BlogPost::where('id', $id)->where('is_published', true)->firstOrFail();
    return view('readmore', compact('post'));
    }
}
