<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user_id)
    {
        return view('user.myaccount',compact('user_id'));
    }
}
