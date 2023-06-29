<?php

namespace App\Models;

use App\Models\Patientaudio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'emotion_type',
        'patientID',
        'emotionID'

    ];

    public function Audio(){
        return $this->belongsTo(Patientaudio::class);
    }
}
