<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'trainee_id',
        'trainer_id',
        'review',

    ];

    public function trainees()
    {
        return $this->hasOne(Users::class, 'id', 'trainee_id');
    }
}
