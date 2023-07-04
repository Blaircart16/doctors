<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caretaker extends Model
{
    use HasFactory;
    protected $table = 'caretakers';

    protected $fillable = [
        'name',
        'relationship',
        'contact',
        'email',
        'patientID',
    ];
    
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patientID');
    }
    
}


