<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterCourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'trainee_id',
        'trainer_id',
        'receipt_image',
        'status'
    ];
}
