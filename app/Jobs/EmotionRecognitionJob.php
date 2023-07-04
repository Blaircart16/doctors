<?php

namespace App\Jobs;

use App\Models\EmotionRecognitionResult;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class EmotionRecognitionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $audioFilePath;

    /**
     * Create a new job instance.
     */
    public function __construct(string $audioFilePath)
    {
        $this->audioFilePath = $audioFilePath;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
         // Call the Python script for inference
         $result = shell_exec("python " . base_path('app/PythonScripts/inference_code.py') . " $this->audioFilePath");
         
         // Create a new instance of the EmotionRecognitionResult model
        $emotionRecognitionResult = new EmotionRecognitionResult();
        $emotionRecognitionResult->audio_file_path = $this->audioFilePath;
        $emotionRecognitionResult->predicted_emotion = $result;
        $emotionRecognitionResult->save();
    }
    
}
