<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class AOrderController extends Controller
{
    public function index(Request $request)
    {   $todaydate=Carbon::now()->format('d-m-Y');
        $orders= Order::when($request->date!=NULL,function($q) use ($request){

          return  $q->whereDate('created_at',$request->date);

        })->when($request->status!=NULL,function($q) use ($request){

            return  $q->where('status_message',$request->status);

        })->orderBy('updated_at','desc')->paginate(5);
        return view('admin.order.view_orders',compact('orders'));
    }

  
    public function show(Order $aorder)
    {
        return view('admin.order.show_orders',compact('aorder'));
    }

    public function update(Order $aorder ,Request $request)
    {
        $aorder->status_message=$request->status;
        $aorder->update();
        return redirect()->back()->with('s-status','Order Status Updated Successfully.');
    }

}
