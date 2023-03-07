<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $categories = Category::where('status','0')->paginate(10);
        return view('home',compact('categories'));
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
}
