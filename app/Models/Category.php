<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public static function newCategory(Request $request)
    {
        $category = new Category();
        $category->name = $request->newCategory;
        $category->slug = str::slug($request->newCategory);
        $category->save();

        return $category;
    }
    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
