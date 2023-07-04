<?php

namespace App\Http\Controllers;

use App\Jobs\EmotionRecognitionJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class EmotionRecController extends Controller
{
    public function recognizeEmotion(Request $request)
    {
        if (!$request->hasFile('audio')) {
            return response()->json(['error' => 'No audio file uploaded'], Response::HTTP_BAD_REQUEST);
        }

        // Save the uploaded audio file to a temporary location
        $audioFile = $request->file('audio');
        $tempAudioPath = $audioFile->store('temp', 'local');

        // Call the Python script for inference
        $result = shell_exec("python  app\Pythonscripts/test2.py $tempAudioPath");

        // Remove the temporary audio file
        Storage::delete($tempAudioPath);

        return response()->json(['emotion' => $result], Response::HTTP_OK);
    }

    public function uploadAudio(Request $request)
{
    // ... Handle file upload and save it to a temporary location
    $audioFile = $request->file('audio');
        $tempAudioPath = $audioFile->store('temp', 'local');

    // Dispatch the background job for emotion recognition
    EmotionRecognitionJob::dispatch($tempAudioPath);
}
}
