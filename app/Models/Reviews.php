<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'trainee_id',
        'trainer_id',
        'review',

    ];

    public function trainers()
    {
        return $this->hasOne(Users::class, 'id', 'trainer_id');
    }
}
