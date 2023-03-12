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
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   $todaydate=Carbon::now()->format('d-m-Y');
        $orders= Order::when($request->date!=NULL,function($q) use ($request){

          return  $q->whereDate('created_at',$request->date);

        })->when($request->status!=NULL,function($q) use ($request){

            return  $q->where('status_message',$request->status);

        })->paginate(5);
        return view('admin.order.view_orders',compact('orders'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $aorder)
    {
        return view('admin.order.show_orders',compact('aorder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Order $aorder ,Request $request)
    {
        $aorder->status_message=$request->status;
        $aorder->update();
        return redirect()->back()->with('s-status','Order Status Updated Successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
