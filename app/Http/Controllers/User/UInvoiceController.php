<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\InvoiceOrderMailable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class UInvoiceController extends Controller
{
    
    public function show(Order $uinvoice)
    {
        return view('user.invoice',compact('uinvoice'));
    }

    function edit(Order $uinvoice)
    {   
        $data=['uinvoice'=>$uinvoice];
        $date=Carbon::now()->format('d-m-Y-h:m:s-A');
        $pdf = Pdf::loadView('user.invoice',$data );
        return $pdf->download('invoice-'.$uinvoice->id.'-'.$date.'.pdf');
    }

    function mail(Order $uinvoice)
    {   
        try
        {
            Mail::to("$uinvoice->email")->send( new InvoiceOrderMailable($uinvoice));
            return redirect()->back()->with('s-status','Invoice Send On '.$uinvoice->email.' Successfully.');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('d-status','Error : Failed To Send Mail ,Please Check Internet Connection.');
        }
        
    }

}
