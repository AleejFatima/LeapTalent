<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','image'
    ];
    protected $table = 'categories';

    public function getImageAttribute(){
        if (isset($this->attributes['image']) && !empty($this->attributes['image'])) {
        return asset('uploads/categories').'/'. $this->attributes['image'];
        }
        else{
            return asset('uploads/categories/category.png');
        }
    }
    public function subcategory(){
        return $this->hasMany(Subcategory::class, 'category_id', 'id');
    }
    public function product(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
