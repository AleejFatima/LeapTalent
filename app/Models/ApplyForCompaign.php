<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyForCompaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'trainee_id', 'trainer_id', 'status',
    ];

    public function getRegistrationImageAttribute()
    {
        if ($this->attributes['registration_image'] == null || !$this->attributes['registration_image']) {
            return asset('uploads/user/default.jpg');
        } else {
            return asset('uploads/user') . '/' . $this->attributes['registration_image'];
        }
    }

    public function trainees()
    {
        return $this->hasOne(Users::class, 'id', 'trainee_id');
    }
}
