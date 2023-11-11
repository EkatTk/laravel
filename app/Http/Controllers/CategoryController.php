<?php

namespace App\Http\Controllers;

use App\Category;
use App\Season;
use App\Episode;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $season = Season::where('slug', $slug)->firstOrFail();
        $category = Category::where('slug', $slug)->firstOrFail();
        $episodes = $category->episodes()->orderBy('created_at', 'asc')->paginate(24);
        return view('home.showing', compact('season','category','episodes'));
    }
    public function read($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->orderBy('created_at', 'desc')->paginate(10);
        return view('home.category', compact('category', 'posts'));
    }
}
