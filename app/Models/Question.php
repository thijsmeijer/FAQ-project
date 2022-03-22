<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    public function scopeFilter($query, $search)
    {
        $query->where('question', 'like', '%' . $search . '%')
            ->orWhere('answer', 'like', '%' . $search . '%');
    }

    public static function createFromRequest(Request $request)
    {
        $question = new Question();
        $question->question = $request->question;
        $question->title = $request->question;
        $question->excerpt = $request->excerpt;
        $question->slug = str::slug($request->question);
        $question->answer = $request->answer;
        $question->importance = 0;
        $question->save();

        return $question;
    }

    public function linkToCategory(Category $category)
    {
        $this->categories()->attach($category);
    }

    public function linkToCategories($categories)
    {
        $categories->each(function ($category) {
            $this->linkToCategory($category);
        });
    }

    public function linkToLocation(Location $location)
    {
        $this->locations()->attach($location);
    }

    public function linkToLocations($locations)
    {
        $locations->each(function ($location) {
            $this->linkToLocation($location);
        });
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
