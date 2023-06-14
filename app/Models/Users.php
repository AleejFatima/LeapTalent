<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',  'user_name', 'phone_number', 'image', 'id_card', 'location', 'city', 'role', 'trainer_role', 'category', 'shop_number', 'address', 'status', 'availability', 'compaign', 'online_course'
    ];
    protected $table = 'users';
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function getImageAttribute()
    // {
    //     return asset('uploads/user') . '/' . $this->attributes['image'];
    // }

    public function getImageAttribute()
    {
        if ($this->attributes['image'] == null || !$this->attributes['image']) {
            return asset('user/userFrontend/images/profileIcon.webp');
        } else {
            return asset('uploads/user') . '/' . $this->attributes['image'];
        }
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class, 'trainer_id', 'id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'trainer_id', 'id');
    }

    public function reviews()
    {
        return $this->hasMany(TrainerReview::class, 'trainer_id', 'id');
    }

    public function traineeReviews()
    {
        return $this->hasMany(Reviews::class, 'trainee_id', 'id');
    }
}
