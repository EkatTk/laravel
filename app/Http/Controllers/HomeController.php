<?php

namespace App\Http\Controllers;

use App\Post;

use \App\Season;
use \App\Episode;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->orderBy('created_at', 'desc')->paginate(2);
        $seasons = Season::with('category')->orderBy('created_at', 'asc')->paginate(3);
        return view('home.index', compact('posts', 'seasons'));
    }

    public function show()
    {
        $seasons = Season::with('category')->orderBy('created_at', 'asc')->paginate(9);
        return view('home.show', compact('seasons'));
    }

    public function episode($slug)
    {
        $episode = Episode::where('slug', $slug)->firstOrFail();
        return view('home.episode', compact('episode'));
    }

    public function read()
    {
        $posts = Post::with('category')->orderBy('created_at', 'desc')->paginate(10);
        return view( 'home.read', compact('posts'));
    }
    public function reading($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        
        return view('home.reading', compact('post'));
    }
}
