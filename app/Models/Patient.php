<?php

namespace App\Models;

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
}
