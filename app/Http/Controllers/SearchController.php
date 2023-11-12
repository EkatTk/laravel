<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            's'=> 'required',
        ]);
        $s = $request->s;
        $posts = Post::where('title','like',"%{$s}%")->with('category')->paginate(10);
        return view('home.search', compact('posts','s'));
    }
}
