<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

   
    
}
