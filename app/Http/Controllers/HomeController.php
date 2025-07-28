<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class HomeController extends Controller
{
     public function index()
{
    $posts = BlogPost::where('is_approved', true)->latest()->get();


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
    $post = \App\Models\BlogPost::findOrFail($id); // remove is_published check
    return view('readmore', compact('post'));
}

public function allblogs()
{
    $posts = BlogPost::where('is_approved', true)->latest()->get();


    return view('blog.blogs', compact('posts'));
}

}
