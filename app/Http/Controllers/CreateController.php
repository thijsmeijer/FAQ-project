<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use App\Models\Question;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    public function __invoke()
    {
        return view('create', [
            'locations' => Location::all(),
            'categories' => Category::all()
        ]);
    }

    public function create(Request $request)
    {


        $question = Question::createFromRequest($request);

        if ($request->categories) {
            $categories = Category::whereIn('id', $request->categories)->get();
            $question->linkToCategories($categories);
        }

        if ($request->locations) {
            $locations = Location::whereIn('id', $request->locations)->get();
            $question->linkToLocations($locations);
        }

        if ($request->newLocation) {
            $location = Location::newLocation($request);
            $question->linkToLocation($location);
        }

        if ($request->newCategory) {
            $category = Category::newCategory($request);
            $question->linkToCategory($category);
        }
        return redirect('/faqs');
    }

    public function update()
    {
        return view('create', [
            'locations' => Location::all(),
            'categories' => Category::all()
        ]);
    }
}
