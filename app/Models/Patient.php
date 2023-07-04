<?php

namespace App\Models;

use App\Models\Patientaudio;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'DOB',
        'gender',
        'medicalCondition',
        'caretakerName',
        'user_id',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}
    public function audio()
    {
        return $this->hasMany(Patientaudio::class);
    }

    public function fence(){
        return $this->hasOne(Fence::class);
    }

    public function location(){
        return $this->hasMany(Fence::class);
    }
   
    public function caretaker()
{
    return $this->hasOne(Caretaker::class, 'patientID');
}

}
