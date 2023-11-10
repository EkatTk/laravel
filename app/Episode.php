<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Episode extends Model
{
    use Sluggable;

    protected $fillable = ['season', 'episode', 'title', 'title_eng', 'director', 'screenwriter', 'content', 'category_id', 'thumbnail', 'url_video'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function uploadImage(Request $request, $image = null)
    {
        if ($request->hasFile('thumbnail')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('thumbnail')->store("images/{$folder}");
        }
        return null;
    }

    public function getImage()
    {
        if (!$this->thumbnail) {
            return asset("no-image.png");
        }
        return asset("uploads/{$this->thumbnail}");
    }

    public function getEpisodeDate()
    {
        return Carbon::createFromFormat("Y-m-d H:i:s", $this->created_at)->format('d F, Y');
    }
}
