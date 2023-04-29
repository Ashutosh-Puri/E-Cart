<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;


class ProfileController extends Controller
{
    public function index($user_id)
    {
        return view('user.myaccount',compact('user_id'));
    }
}
