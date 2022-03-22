<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Question;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __invoke(Location $location)
    {
        $location->load('questions');

        return view('locations', [
            'questions' => $location->questions,
        ]);
    }
}
