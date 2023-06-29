<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function api(){
        $location = Location::all();
        return response()->json($location);
        }
}
