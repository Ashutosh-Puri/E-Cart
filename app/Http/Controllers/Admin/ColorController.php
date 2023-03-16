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

    public function index()
    {
        $colors = Color::orderBy('updated_at','desc')->paginate(10);
        return view('admin.color.view_color',compact('colors'));
    }

    public function create()
    {
        return view('admin.color.create_color');
    }

    public function store(Color $color ,ColorFormRequest $request)
    {
        $color->name = $request['name'];
        $color->code = $request['code'];
        $color->status = $request->status==true?'1':'0';
        $color->save();
        return redirect()->route('color.index')->with('s-status','Color Created Successfully.');
    }

    public function show(Color $color)
    {
        return view('admin.color.show_color',compact('color'));
    }

    public function edit(Color $color)
    {
        return view('admin.color.edit_color',compact('color'));
    }

    public function update(Color $color ,ColorFormRequest $request)
    {
        $color->name = $request['name'];
        $color->code = $request['code'];
        $color->status = $request->status==true?'1':'0';
        $color->update();
        return redirect()->route('color.index')->with('s-status','Color Updated Successfully.');
    }

    public function destroy(Color $color)
    {
        $color->delete();
        
        return redirect()->route('color.index')->with('s-status','Color Deleted Successfully.');
    }
}
