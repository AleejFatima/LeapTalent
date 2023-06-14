<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaignRegistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'trainer_id', 'receipt_image'
    ];
}
