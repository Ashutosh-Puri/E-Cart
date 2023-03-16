<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {   
        $categories = Category::orderBy('updated_at','desc')->paginate(10);
        return view('admin.category.view_category',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create_category');
    }

    public function store(Category $category ,CategoryFormRequest $request)
    {  
        
        $category->name = $request['name'];
        $category->slug = Str::slug($request['slug']) ;
        $category->description = $request['description']; 
        $category->meta_description = $request['meta_description'];
        $category->meta_title = $request['meta_title'];
        $category->meta_keyword = $request['meta_keyword'];
        $category->icon = $request['icon'];
        $category->status = $request->status==true?'1':'0';
        $category->save();
        $categories = Category::paginate(10);
        return redirect()->route('category.index')->with('s-status','Category Created Successfully.');
    }

    public function show(Category $category)
    {
        return view('admin.category.show_category',compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit_category',compact('category'));
    }

    public function update(CategoryFormRequest $request, Category $category)
    {   

            $category->name = $request['name'];
            $category->slug = Str::slug($request['slug']) ;
            $category->description = $request['description']; 
            $category->meta_description = $request['meta_description'];
            $category->meta_title = $request['meta_title'];
            $category->meta_keyword = $request['meta_keyword'];
            $category->icon = $request['icon'];
            $category->status = $request->status==true?'1':'0';
            $category->update();
            
            return redirect()->route('category.index')->with('s-status','Category Updated Successfully.');
         
    }

    public function destroy(Category $category)
    {
        $category->delete();
       
        return redirect()->route('category.index')->with('s-status','Category Deleted Successfully.');
    }
}
