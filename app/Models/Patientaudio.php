<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patientaudio extends Model
{
    use HasFactory;

    protected $fillable = [
        'audiofile',
        'patientID',
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
