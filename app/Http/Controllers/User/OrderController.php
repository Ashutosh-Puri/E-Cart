<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    public function index()
    {   
        $orders=Order::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->paginate(8);
        return view('user.view_orders',compact('orders'));
    }
 
    public function show(Order $order)
    {   
        return view('user.show_orders',compact('order'));
    }

    public function edit(Order $order)
    {   
        $order->status_message = "Cancelled";
        $order->update();
        return redirect()->back()->with('s-status','Order Cancelled Successfully');
    }
}
 
