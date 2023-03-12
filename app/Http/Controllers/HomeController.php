<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
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

   
}
