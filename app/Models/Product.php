<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Category;
use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable =[

        'category_id',
        'brand_id',
        'name',
        'slug',
        'small_description',
        'description',
        'orignal_price',
        'selling_price',
        'quantity',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'trending',
        'status',
       
    ];


    public function productImages()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

    public function productColors()
    {
        return $this->hasMany(ProductColor::class,'product_id','id');
    }
    

    public function brands()
    {
        
        return $this->belongsTo(Brand::class,'brand_id','id');
       
    }
    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
