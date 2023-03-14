<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {   
        $recentpoducts=Product::where('status','0')->orderBy('updated_at','DESC')->limit(4)->get();
        $trendingpoducts=Product::where('trending','0')->orderBy('updated_at','DESC')->limit(4)->get();
       
        return view('home',compact('recentpoducts','trendingpoducts'));
    }

    public function products()
    {   
        return view('products');

    }

    public function view_products($product_id)
    {   
        $product =Product::where('id',$product_id)->get();
        return view('productdetails',compact('product'));

    }
    public function thankyou()
    {   
        return view('thankyou');

    }  
    public function contact()
    {   
        return view('contactus');

    }  

    public function subscribe(Subscriber $subscriber ,Request $request)
    {    $data=$request->validate(['email'=>['required','email','unique:subscribers,email']]);
        $subscriber->email=$data['email'];
        $subscriber->save();
        return  redirect()->back()->with('s-status','Welcome To Our Newsletter.');
    }  
    public function unsub()
    {
        return view('unsubscribe');
    }

    public function unsubscribe(Request $request)
    {   
        $email= Subscriber::where('email',$request->email)->first();
        if($email)
        {   
            $email->delete();
            return  redirect()->back()->with('s-status','Unsubscribe Newsletter Successfully.');
        }
        else
        {
            return  redirect()->back()->with('d-status',"You Don't Have Subscribe Yet.");
        }
       

    }  

    public function aboutus()
    {
        return view('aboutus');
    }
}
