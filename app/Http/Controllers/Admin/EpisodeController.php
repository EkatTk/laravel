<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $episodes = Episode::with('category')->paginate(16);
        return view('admin.episodes.index', compact('episodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        return view('admin.episodes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'season' => 'required',
            'episode' => 'required',
            'title' => 'required',
            'title_eng' => 'required',
            'director' => 'required',
            'screenwriter' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'required|image',
            'url_video' => 'required',
        ]);

        $data = $request->all();

        $data['thumbnail'] = Episode::uploadImage($request);
        Episode::create($data);

        return redirect()->route('episodes.index')->with('success', 'Эпизод добавлен');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $episode = Episode::find($id);
        $categories = Category::pluck('title', 'id')->all();
        return view('admin.episodes.edit', compact('categories', 'episode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'season' => 'required',
            'episode' => 'required',
            'title' => 'required',
            'title_eng' => 'required',
            'director' => 'required',
            'screenwriter' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'nullable|image',
            'url_video' => 'required',
        ]);

        $episode = Episode::find($id);
        $data = $request->all();

        if ($file = Episode::uploadImage($request, $episode->thumbnail)) {
            $data['thumbnail'] = $file;
        }
        $episode->update($data);

        return redirect()->route('episodes.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $episode = Episode::find($id);
        Storage::delete($episode->thumbnail);
        $episode->delete();
        return redirect()->route('episodes.index')->with('success', 'Эпизод удален');
    }
}
