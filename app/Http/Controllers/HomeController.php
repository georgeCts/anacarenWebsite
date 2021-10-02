<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $lstPosts = Post::where('status', 'PUBLISHED')
                        ->where('highlight', false)
                        ->where('deleted', false)
                        ->limit(6)
                        ->orderBy('created_at', 'DESC')
                        ->get();
        return view('Index', ['lstPosts' => $lstPosts]);
    }
}
