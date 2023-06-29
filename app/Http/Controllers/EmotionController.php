<?php

namespace App\Http\Controllers;

use App\Models\Emotion;
use Illuminate\Http\Request;

class EmotionController extends Controller
{
    public function api(){
        $emotion = Emotion::all();
        return response()->json($emotion);
    }
}
