<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartCount extends Component
{
    public $cartCount;
    protected $listeners=['updatecartcount'=>'checkcartcount'];
    public function checkcartcount()
    {
        if(Auth::check())
        {
            return $this->cartCount =Cart::where('user_id',auth()->user()->id)->count();
        }else
        {
            return $this->cartCount=0;
        }
    }
    public function render()
    {       
        $this->cartCount = $this->checkcartcount();
        return view('livewire.cart-count',['cartCount'=>$this->cartCount]);
    }
}
