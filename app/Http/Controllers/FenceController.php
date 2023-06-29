<?php

namespace App\Http\Controllers;

use App\Models\Fence;
use Illuminate\Http\Request;

class FenceController extends Controller
{
    public function api(){
        $fence = Fence::all();
        return response()->json($fence);
        }
}
