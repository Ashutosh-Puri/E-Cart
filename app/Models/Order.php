<?php

namespace App\Models;

use App\Models\Orderitem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable =[
        'user_id',
        'fullname',
        'email',
        'phone',
        'tracking_no',
        'pincode',
        'address',
        'status_message',
        'payment_id',
        'payment_mode',
    ];
  
    public function orderItems()
    {
        return $this->hasMany(Orderitem::class, 'order_id', 'id');
    }
   
    
}
