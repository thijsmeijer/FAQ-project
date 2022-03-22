<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;

    public static function newLocation(Request $request)
    {
        $location = new Location();
        $location->name = $request->newLocation;
        $location->slug = str::slug($request->newLocation);
        $location->save();

        return $location;
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
