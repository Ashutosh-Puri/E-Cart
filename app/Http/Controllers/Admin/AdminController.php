<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{   
    public function index()
    {   
        $productcount=Product::count();
        $categorycount=Category::count();
        $brandcount=Brand::count();
        $colorcount=Color::count();
        $ordercount=Order::count();
        $ordertoday=Order::whereDate('created_at',date('Y-m-d'))->count();
        $ordermonth=Order::whereMonth('created_at',date('m'))->count();
        $orderyear=Order::whereYear('created_at',date('Y'))->count();
        $totalusercount=User::count();
        $usercount=User::where('role','0')->count();
        $admincount=User::where('role','1')->count();
        $contactcount=Contact::count();

        return view('admin.dashboard',compact('productcount','categorycount','brandcount','colorcount'
        ,'ordercount','ordertoday','ordermonth','orderyear','usercount','admincount','totalusercount','contactcount'));
    }

    public function create()
    {
        return view('admin.create_admin');
    }

    public function store(Request $request ,User $admin)
    {
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $admin->name=$data['name'];
        $admin->email=$data['email'];
        $admin->password =Hash::make($data['password']);
        $admin->role=$request->role==true?'1':'0';
        $admin->save();

        return redirect()->route('admin.show',1)->with('s-status','Record Creared Successfully.');
    }

    public function show(string $id)
    {   
        $admins=User::orderBy('updated_at','desc')->where('role','1')->paginate(5);
        $users=User::orderBy('updated_at','desc')->where('role','0')->paginate(5);
        return view('admin.view_admin',compact('admins','users'));
    }

    public function edit(User $admin)
    {
        return view('admin.edit_admin',compact('admin'));
    }

    public function update(Request $request ,User $admin)
    {
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', ],
        ]);

        $admin->name=$data['name'];
        $admin->email=$data['email'];
        $admin->role=$request->role==true?'1':'0';
        $admin->update();

        return redirect()->route('admin.show',1)->with('s-status','Record Updated Successfully.');
    }

    public function destroy(User $admin)
    {
        $admin->delete();

        return redirect()->route('admin.show',1)->with('s-status','Record deleted Successfully.');
    }
}
