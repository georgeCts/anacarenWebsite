<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $lstPosts = Post::where('status', 'PUBLISHED')
                        ->where('deleted', false)
                        ->orderBy('created_at', 'DESC')
                        ->get();

        return view('Blog', ['lstPosts' => $lstPosts]);
    }

    public function viewPost($slug) {
        $post = Post::where(['slug' => $slug, 'status' => 'PUBLISHED', 'deleted' => false])->first();
        return view('Post', ['post' => $post]);
    }
}
