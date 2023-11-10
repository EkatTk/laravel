<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Season;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $seasons = Season::with('category', 'tags')->paginate(20);
        return view('admin.seasons.index', compact('seasons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.seasons.create', compact('categories', 'tags'));
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
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'required|image',
        ]);

        $data = $request->all();

        $data['thumbnail'] = Season::uploadImage($request);

        $season = Season::create($data);
        $season->tags()->sync($request->tags);

        return redirect()->route('seasons.index')->with('success', 'Статья добавлена');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $season = Season::find($id);
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.seasons.edit', compact('categories', 'tags', 'season'));
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
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'nullable|image',
        ]);

        $season = Season::find($id);
        $data = $request->all();

        if ($file = Season::uploadImage($request, $season->thumbnail)) {
            $data['thumbnail'] = $file;
        }

        $season->update($data);
        $season->tags()->sync($request->tags);

        return redirect()->route('seasons.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $season = Season::find($id);
        $season->tags()->sync([]);
        Storage::delete($season->thumbnail);
        $season->delete();
        return redirect()->route('seasons.index')->with('success', 'Статья удалена');
    }
}
