<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','image','category_id'
    ];
    protected $table = 'subcategories';

    public function getImageAttribute(){
        if (isset($this->attributes['image']) && !empty($this->attributes['image'])) {
        return asset('uploads/categories').'/'. $this->attributes['image'];
        }
        else{
            return asset('uploads/categories/category.png');
        }
    }

    public function category(){
        return $this->belongsTo(category::class);
    }
    public function product(){
        return $this->hasMany(Subcategory::class, 'subcategory_id', 'id');
    }
}
