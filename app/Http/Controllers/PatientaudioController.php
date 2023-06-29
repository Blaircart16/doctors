<?php

namespace App\Http\Controllers;

use App\Models\Patientaudio;
use Illuminate\Http\Request;

class PatientaudioController extends Controller
{
    public function api(){
        $audio = Patientaudio::all();
        return response()->json($audio);
    }
}
