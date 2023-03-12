<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Brand;
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


    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $productcount=Product::count();
        $categorycount=Category::count();
        $brandcount=Brand::count();
        $colorcount=Category::count();
        $ordercount=Order::count();
        $ordertoday=Order::whereDate('created_at',date('d-m-Y'))->count();
        $ordermonth=Order::whereMonth('created_at',date('m'))->count();
        $orderyear=Order::whereYear('created_at',date('Y'))->count();
        $totalusercount=User::count();
        $usercount=User::where('role','0')->count();
        $admincount=User::where('role','1')->count();
        $contactcount=Contact::count();

        return view('admin.dashboard',compact('productcount','categorycount','brandcount','colorcount'
        ,'ordercount','ordertoday','ordermonth','orderyear','usercount','admincount','totalusercount','contactcount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $admins=User::where('role','1')->paginate(5);
        $users=User::where('role','0')->paginate(5);
        return view('admin.view_admin',compact('admins','users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $admin)
    {
        return view('admin.edit_admin',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $admin)
    {
        $admin->delete();

        return redirect()->route('admin.show',1)->with('s-status','Record deleted Successfully.');
    }
}
