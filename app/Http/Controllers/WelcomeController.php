<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use App\Models\Question;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $questions = Question::all()->sortByDesc('importance')->take(3);

        return view('welcome', [
            'locations' => Location::all(),
            'questions' => $questions,
            'categories' => Category::all()
        ]);
    }
}
