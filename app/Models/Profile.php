<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    protected $table="user_profile";
    protected $fillable=[
        'user_id',
        'mobile',
        'address',
        'country',
        'city',
        'state',
        'pincode'
    ];

    
    
}
