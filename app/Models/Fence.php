<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fence extends Model
{
    use HasFactory;
    protected $fillable = [
        'home_latitude',
        'home_longitude',
        'green_zone',
        'orange_zone',
        'red_zone',
        'patientID'
    ];
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
