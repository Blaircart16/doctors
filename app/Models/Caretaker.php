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
        'password',
        'patientID',
        'user_id'
    ];
    
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patientID');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


