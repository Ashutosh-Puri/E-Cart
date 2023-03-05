<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= Product::paginate(10);
        return view('admin.product.view_product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $brands= Brand::where('status','0')->get();
        $categories= Category::where('status','0')->get();
        $colors= Color::where('status','0')->get();
        return view('admin.product.create_product',compact('brands','categories','colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Product $product ,ProductFormRequest $request)
    {   
        
        $product->category_id = $request['category_id'];
        $product->brand_id = $request['brand_id'];
        $product->name = $request['name'];
        $product->slug = Str::slug($request['slug']) ;
        $product->small_description = $request['small_description'];
        $product->description = $request['description'];
        $product->meta_title = $request['meta_title'];
        $product->meta_keyword = $request['meta_keyword'];
        $product->meta_description = $request['meta_description'];
        $product->orignal_price = $request['orignal_price'];
        $product->selling_price = $request['selling_price'];
        $product->quantity = $request['quantity'];
        $product->trending = $request->trending==true?'1':'0';
        $product->status = $request->status==true?'1':'0';
        $product->save();
        if($request->hasFile('cover'))
        {   $file = $request->file('cover');
            $path="uploads/products/cover/";
            $i=1;
            $filename= time().$i++.'.'.$file->getClientOriginalExtension();
            $file->move($path,$filename);
            $filepath= $path.$filename;
            ProductImage::create([
                'product_id'=>$product->id,
                'image'=>$filepath
            ]);   
        }
        if($request->hasFile('image'))
        {
            $path="uploads/products/";
            $file = $request->file('image');
            $i=1;
            foreach($file as $file)
            { 
                $filename= time().$i++.'.'.$file->getClientOriginalExtension();
                $file->move($path,$filename);
                $filepath= $path.$filename;

                ProductImage::insert([
                    'product_id'=>$product->id,
                    'image'=>$filepath
                ]);
               
            }
        }
        if($request->colors)
        {
            foreach($request->colors as $key=> $color)
            {
                $product->productColors()->create([
                    'product_id'=> $product->id,
                    'color_id'=> $color,
                    'color_quantity'=> $request->color_quantity[$key]?? 0,
                ]);
            }
        }
       
        return redirect()->route('product.index')->with('s-status','Product Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show_product',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {   
        $brands= Brand::where('status','0')->get();
        $categories= Category::where('status','0')->get();
        $product_color =$product->productColors->pluck('color_id')->toArray();
        $colors= Color::where('status','0')->whereNotIn('id', $product_color)->get();
        return view('admin.product.edit_product',compact('product','brands','categories','colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product ,ProductFormRequest $request)
    {   
        $product->category_id = $request['category_id'];
        $product->brand_id = $request['brand_id'];
        $product->name = $request['name'];
        $product->slug = Str::slug($request['slug']) ;
        $product->small_description = $request['small_description'];
        $product->description = $request['description'];
        $product->meta_title = $request['meta_title'];
        $product->meta_keyword = $request['meta_keyword'];
        $product->meta_description = $request['meta_description'];
        $product->orignal_price = $request['orignal_price'];
        $product->selling_price = $request['selling_price'];
        $product->quantity = $request['quantity'];
        $product->trending = $request->trending==true?'1':'0';
        $product->status = $request->status==true?'1':'0';
        $product->update();
        if($request->hasFile('cover'))
        {   $file = $request->file('cover');
            $path="uploads/products/cover/";
            $i=1;
            $filename= time().$i++.'.'.$file->getClientOriginalExtension();
            $file->move($path,$filename);
            $filepath= $path.$filename;
            ProductImage::create([
                'product_id'=>$product->id,
                'image'=>$filepath
            ]);   
        }
        if($request->hasFile('image'))
        {
            $path="uploads/products/";
            $file = $request->file('image');
            $i=1;
            foreach($file as $file)
            { 
                $filename= time().$i++.'.'.$file->getClientOriginalExtension();
                $file->move($path,$filename);
                $filepath= $path.$filename;

                ProductImage::insert([
                    'product_id'=>$product->id,
                    'image'=>$filepath
                ]);
               
            }
        }
        if($request->colors)
        {
            foreach($request->colors as $key=> $color)
            {
                $product->productColors()->create([
                    'product_id'=> $product->id,
                    'color_id'=> $color,
                    'color_quantity'=> $request->color_quantity[$key]?? 0,
                ]);
            }
        }
       
        return redirect()->route('product.index')->with('s-status','Product Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {   
       foreach($product->productImages as $temp)
       {
            if(File::exists($temp->image))
            {
                File::delete($temp->image);
            }
       }
        
        $product->delete();

        return redirect()->route('product.index')->with('s-status','Product Deleted Successfully.');
    }
    public function delete($id)
    {   
        
        $productimage = ProductImage::findOrFail($id);
        if(File::exists($productimage->image))
        {
            File::delete($productimage->image);
        }

        $productimage->delete();

        return redirect()->back()->with('s-status','Product Image Deleted Successfully.');
    }

    
}
