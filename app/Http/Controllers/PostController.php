<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->paginate(3);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function post(Request $request) {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create([
            'body' => $request->body
        ]);
        return back();
    }
}


