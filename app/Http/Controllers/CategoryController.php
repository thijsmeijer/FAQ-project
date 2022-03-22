<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;

class CategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->load('questions');

        return view('categories', [
            'questions' => $category->questions
        ]);
    }
}
