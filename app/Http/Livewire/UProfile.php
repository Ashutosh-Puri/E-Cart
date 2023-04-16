<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Profile;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UProfile extends Component
{
    protected $listeners = ['refresh' => '$refresh'];
    public $name,$email,$mobile,$address,$country,$city,$state,$pincode;
    public $currentpassword,$password,$password_confirmation ,$u_id;
    
    public function mount($user_id)
    {
        $this->u_id=$user_id; 
    }
    public function accountdetails()
    {
       $data= $this->validate([
            'name'=>['required','string'],
            'email'=>['required','email'],
            'mobile'=>['required','integer','digits:10'],
            'pincode'=>['required','integer','digits:6'],
            'address'=>['required','string'],
            'country'=>['required','string'],
            'city'=>['required','string'],
            'state'=>['required','string'],
       ]);

       $user= User::where('id',$this->u_id)->first();
       $user->name=$data['name'];
       $user->email=$data['email'];
       $user->update();
       
       $pro= Profile::where('user_id',$this->u_id)->first();
       if($pro)
       {
            $pro->mobile=$data['mobile'];
            $pro->pincode=$data['pincode'];
            $pro->address=$data['address'];
            $pro->country=$data['country'];
            $pro->state=$data['state'];
            $pro->city=$data['city'];
            $pro->update();
            $this->emit('refresh');    
       }
       else
       {    $prof = new Profile;
            $prof->user_id= $this->u_id;
            $prof->mobile=$data['mobile'];
            $prof->pincode=$data['pincode'];
            $prof->address=$data['address'];
            $prof->country=$data['country'];
            $prof->state=$data['state'];
            $prof->city=$data['city'];
            $prof->save();
            $this->emit('refresh'); 
       }

       session()->flash('s-status','Profile Updated Successfully.');
    }

    public function password()
    {
       $data= $this->validate([
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'currentpassword' => ['required', 'string', 'min:8'],    
       ]);

       $user= User::where('id',$this->u_id)->first();
       if(Hash::check($data['currentpassword'],$user->password))
       {
         $user->password = Hash::make($data['password']);
         $user->update();
         $this->currentpassword= "";
         $this->password="";
         $this->password_confirmation="";
         session()->flash('s-status','Password Changed Successfully.');
       }
        else
        {
            session()->flash('d-status','Invalid Current Password.');
        }
       
    }
  

    public function render()
    {   
        $this->name=Auth::user()->name ??'';
        $this->email=Auth::user()->email ??'';
        $this->mobile=Auth::user()->user_profile->mobile ??'';
        $this->address=Auth::user()->user_profile->address ??'';
        $this->country=Auth::user()->user_profile->country ??'';
        $this->city=Auth::user()->user_profile->city ??'';
        $this->state=Auth::user()->user_profile->state ??'';
        $this->pincode=Auth::user()->user_profile->pincode ??'';

        return view('livewire.u-profile');
    }
}
