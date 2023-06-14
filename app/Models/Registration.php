<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'trainee_id', 'trainer_id', 'registration_image', 'status', 'start_date', 'end_date'
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
