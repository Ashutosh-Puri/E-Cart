<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Order;
use Livewire\Component;
use App\Models\Orderitem;
use Illuminate\Support\Str;

class Checkout extends Component
{   public $carts,$payment_mode,$payment_id=NULL;
    public $totalproductamount=0;
    public $grandtotal=0;
    public $fullname,$mobile,$email,$address,$city,$country,$pincode,$state;

    public function rules()
    {
        return [

            'fullname'=>['required','string','max:150'],
            'mobile'=>['required','integer','digits:10'],
            'email'=>['required','email'],
            'address'=>['required','string','max:500'],
            'city'=>['required','string','max:150'],
            'country'=>['required','string','max:150'],
            'state'=>['required','string','max:150'],
            'pincode'=>['required','integer','digits:6'],
        ];
    }
    public function placeOrder()
    {  
        $this->validate();
        $address =$this->address.', '.$this->city.', '.$this->state.', '.$this->country;
        $order=Order::create([

            'user_id'=>auth()->user()->id,
            'fullname'=>$this->fullname,
            'email'=>$this->email,
            'phone'=>$this->mobile,
            'tracking_no'=> 'track-'.Str::random(10),
            'pincode'=>$this->pincode,
            'address'=>$address,
            'status_message'=>"In Progress",
            'payment_id'=>$this->payment_id,
            'payment_mode'=>$this->payment_mode,
        ]);
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
        return $order;
    }
    public function opayOrder()
    {   
        $this->payment_mode="Paid Online";
        $opayorder= $this->placeOrder();
        if($opayorder)
        {   
            session()->flash('d-status','Failed To Place Order, Payment Getway Under Construction...! ,Please Try Chash On Delivery Option');
            // Cart::where('user_id',auth()->user()->id)->delete();
            // $this->emit('updatecartcount');
            // session()->flash('s-status','Order Placed Successfully.');
            // return redirect()->to('thankyou');
        }
        else
        {
            session()->flash('d-status','Failed To Place Order.');
        }
       
    }

    public function codOrder()
    {   
        $this->payment_mode="Cash On Delivery";
        $codorder= $this->placeOrder();
        if($codorder)
        {   
            Cart::where('user_id',auth()->user()->id)->delete();
            $this->emit('updatecartcount');
            session()->flash('s-status','Order Placed Successfully.');
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
    public function render()
    {   
        $this->fullname= auth()->user()->name;
        $this->email= auth()->user()->email;
        $this->totalproductamount =$this->totalproductamount();
        return view('livewire.checkout',['totalproductamount'=>$this->totalproductamount]);
    }
}
