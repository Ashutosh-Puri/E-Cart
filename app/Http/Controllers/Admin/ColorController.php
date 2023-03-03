<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ColorFormRequest;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::paginate(10);
        return view('admin.color.view_color',compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.color.create_color');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Color $color ,ColorFormRequest $request)
    {
        $color->name = $request['name'];
        $color->code = $request['code'];
        $color->status = $request->status==true?'1':'0';
        $color->save();
        return redirect()->route('color.index')->with('s-status','Color Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        return view('admin.color.show_color',compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        return view('admin.color.edit_color',compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Color $color ,ColorFormRequest $request)
    {
        $color->name = $request['name'];
        $color->code = $request['code'];
        $color->status = $request->status==true?'1':'0';
        $color->update();
        return redirect()->route('color.index')->with('s-status','Color Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        $color->delete();
        
        return redirect()->route('color.index')->with('s-status','Color Deleted Successfully.');
    }
}
