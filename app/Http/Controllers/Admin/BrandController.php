<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\BrandFormRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $brands = Brand::paginate(10);
        return view('admin.brand.view_brand',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create_brand');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Brand $brand ,BrandFormRequest $request)
    {
        $brand->name = $request['name'];
        $brand->slug = $request['slug'];
        $brand->status = $request->status== true?'1':'0';
        $brand->save();
        return redirect()->route('brand.index')->with('s-status','Brand Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {       
        return view('admin.brand.show_brand',compact('brand')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit_brand',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Brand $brand ,BrandFormRequest $request)
    {
        $brand->name = $request['name'];
        $brand->slug = $request['slug'];
        $brand->status = $request->status== true?'1':'0';
        $brand->update();
        return redirect()->route('brand.index')->with('s-status','Brand Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brand.index')->with('s-status','Brand Deleted Successfully.');
    }
}
