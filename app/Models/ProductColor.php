<?php

namespace App\Models;

use App\Models\Color;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductColor extends Model
{
    use HasFactory;
    protected $table='product_colors';
    protected $fillable=[
        'product_id',
        'color_id',
        'color_quantity',
    ];


    public function colors()
    {
        return $this->belongsTo(Color::class,'color_id','id');
    }
}
