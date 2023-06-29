<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'current_latitude',
        'current_longitude',
        'patientID'
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
