<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    protected $table='brands';
    protected $fillable =[
        'category_id',
        'name',
        'slug',
        'status'
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
