<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Order;
use Razorpay\Api\Api;
use App\Models\Profile;
use Livewire\Component;
use App\Models\Orderitem;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\PlaceOrderMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class Checkout extends Component
{   public $carts;
    public $totalproductamount=0;
    public $grandtotal=0,$mode,$active=0;
    public $fullname,$mobile,$email,$address,$city,$country,$pincode,$state;
    public $visible=0;
    protected $rules = [
        'fullname'=>['required','string','max:150'],
        'mobile'=>['required','integer','digits:10'],
        'email'=>['required','email'],
        'address'=>['required','string','max:500'],
        'city'=>['required','string','max:150'],
        'country'=>['required','string','max:150'],
        'state'=>['required','string','max:150'],
        'pincode'=>['required','integer','digits:6'],
    ];
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mod($mode)
    {
      $this->mode=$mode;
      if($mode=="Card")
      {
        $this->visible=0;
        $this->validate();       
        $this->visible=2; 
      }
     
    }

    public function val()
    {
        $this->validate();
    }
    public function payment(Request $request)
    {    
        // $this->validate();
        $input = $request->all();
        $api=new Api(env('API_KEY'),env('API_SECRET'));
        $payment=$api->payment->fetch($input['razorpay_payment_id']);
        if(count($input) && !empty($input['razorpay_payment_id']))
        {
            try
            {
                $response =$api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));
            }
            catch(\Exception $e)
            {
                return $e->getMessage();
                session()->flash('d-status',$e->getMessage());
                return redirect()->back();
            }
        }

        $pro= Profile::where('user_id',Auth::user()->id)->first();
        if(!$pro)
        {    $prof = new Profile;
             $prof->user_id= Auth::user()->id;
             $prof->mobile=$this->mobile;
             $prof->pincode=$this->pincode;
             $prof->address=$this->address;
             $prof->country=$this->country;
             $prof->state=$this->state;
             $prof->city=$this->city;
             $prof->save();
        }

        $address =$request->address.', '.$request->city.', '.$request->state.', '.$request->country;
        $data=[
            'user_id'=>auth()->user()->id,
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phone'=>$request->mobile,
            'tracking_no'=> 'track-'.Str::random(10),
            'pincode'=>$request->pincode,
            'address'=>$address,
            'status_message'=>"In Progress",
            'payment_id'=>$response->id,
            'payment_status'=>"Paid",
            'payment_mode'=>"Online",
        ];

        $order=Order::create($data);

        $this->carts =Cart::where('user_id',auth()->user()->id)->get();
        foreach($this->carts as $cartitem)
        {
            $orderitems= Orderitem::create([
                'order_id'=>$order->id,
                'product_id'=>$cartitem->product_id,
                'product_color_id'=>$cartitem->product_color_id,
                'quantity'=>$cartitem->quantity,
                'price'=>$cartitem->product->selling_price,
            ]);

            if($cartitem->product_color_id != NULL)
            {
                $cartitem->productColor()->where('id',$cartitem->product_color_id)->decrement('color_quantity',$cartitem->quantity);
            }
            else
            {
                $cartitem->product()->where('id',$cartitem->product_id)->decrement('quantity',$cartitem->quantity);
            }   
        }
        
        if($order)
        {   
            Cart::where('user_id',auth()->user()->id)->delete();
            $this->emit('updatecartcount');
            session()->flash('s-status','Order Placed Successfully.');
            
            try
            {  
                Mail::to(["$order->email",env('MAIL_USERNAME')])->send( new PlaceOrderMailable($order));
               
            }
            catch(\Exception $e)
            {
               // Failed To Send Mail ,Please Check Internet Connection.
            }
         
            // return redirect()->to('thankyou');
        }
        else
        {
            session()->flash('d-status','Failed To Place Order.');
            return redirect()->back();
        }
        
        // session()->flash('s-status','Payment Successfully Done');
        return redirect()->back();
    }

    public function codOrder()
    {       
        $this->validate();
        $pro= Profile::where('user_id',Auth::user()->id)->first();
        if(!$pro)
        {    $prof = new Profile;
             $prof->user_id= Auth::user()->id;
             $prof->mobile=$this->mobile;
             $prof->pincode=$this->pincode;
             $prof->address=$this->address;
             $prof->country=$this->country;
             $prof->state=$this->state;
             $prof->city=$this->city;
             $prof->save();    
        }

        $address =$this->address.', '.$this->city.', '.$this->state.', '.$this->country;
        $datacod=[
            'user_id'=>auth()->user()->id,
            'fullname'=>$this->fullname,
            'email'=>$this->email,
            'phone'=>$this->mobile,
            'tracking_no'=> 'track-'.Str::random(10),
            'pincode'=>$this->pincode,
            'address'=>$address,
            'status_message'=>"In Progress",
            'payment_id'=>NULL,
            'payment_status'=>"Cash",
            'payment_mode'=>"Cash On Delivery",
        ];

        $order=Order::create($datacod);

        $this->carts =Cart::where('user_id',auth()->user()->id)->get();
        foreach($this->carts as $cartitem)
        {
            $orderitems= Orderitem::create([
                'order_id'=>$order->id,
                'product_id'=>$cartitem->product_id,
                'product_color_id'=>$cartitem->product_color_id,
                'quantity'=>$cartitem->quantity,
                'price'=>$cartitem->product->selling_price,
            ]);

            if($cartitem->product_color_id != NULL)
            {
                $cartitem->productColor()->where('id',$cartitem->product_color_id)->decrement('color_quantity',$cartitem->quantity);
            }
            else
            {
                $cartitem->product()->where('id',$cartitem->product_id)->decrement('quantity',$cartitem->quantity);
            } 
        }
        if($order)
        {   
            session()->flash('s-status','Order Placed Successfully.');
            Cart::where('user_id',auth()->user()->id)->delete();
            $this->emit('updatecartcount');
            
            try
            {  
                Mail::to(["$order->email",env('MAIL_USERNAME')])->send( new PlaceOrderMailable($order));
               
            }
            catch(\Exception $e)
            {
               // Failed To Send Mail ,Please Check Internet Connection.
            }
            
            return redirect()->to('thankyou');
        }
        else
        {
            session()->flash('d-status','Failed To Place Order.');
        }
       
    }

    public function totalproductamount()
    {   
        $this->totalproductamount=0;
        $this->grandtotal=0;
        $this->carts =Cart::where('user_id',auth()->user()->id)->get();
        foreach($this->carts as $cartitem)
        {
             $this->totalproductamount += ($cartitem->product->selling_price * $cartitem->quantity);
        }

        if(  $this->totalproductamount >10000)
        {
           
             $this->grandtotal += $this->totalproductamount;;
        }
        elseif(10000 > $this->totalproductamount &&  $this->totalproductamount >1000)
        {
           
             $this->grandtotal +=20 + $this->totalproductamount;;
        }
        elseif(1000 >= $this->totalproductamount &&  $this->totalproductamount >500)
        {
           
             $this->grandtotal +=50 + $this->totalproductamount;;
        }
        else
        { 
            $this->grandtotal+=150 + $this->totalproductamount;
        }
        return $this->totalproductamount;
    }
  

    public function mount()
    {  
        $this->fullname=Auth::user()->name ??'';
        $this->email=Auth::user()->email ??'';
        $this->mobile=Auth::user()->user_profile->mobile ??'';
        $this->address=Auth::user()->user_profile->address ??'';
        $this->country=Auth::user()->user_profile->country ??'';
        $this->city=Auth::user()->user_profile->city ??'';
        $this->state=Auth::user()->user_profile->state ??'';
        $this->pincode=Auth::user()->user_profile->pincode ??'';
    }

    public function render()
    {   

        $this->totalproductamount =$this->totalproductamount();

        return view('livewire.checkout',['totalproductamount'=>$this->totalproductamount ]);
    }
}
