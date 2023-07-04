<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmotionRecognitionResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'audio_file_path',
        'predicted_emotion' 
    ];
}
