<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Checkout extends Component
{   public $carts;
    public $totalproductamount;
    public function totalproductamount()
    {
        $this->carts =Cart::where('user_id',auth()->user()->id)->get();
        foreach($this->carts as $cartitem)
        {
             $this->totalproductamount += ($cartitem->product->selling_price * $cartitem->quantity);
        }
        return $this->totalproductamount;
    }
    public function render()
    {   
        $this->totalproductamount =$this->totalproductamount();
        return view('livewire.checkout',['totalproductamount'=>$this->totalproductamount]);
    }
}
