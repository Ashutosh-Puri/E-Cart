<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;


class CartShow extends Component
{   
    public $grandtotal=0;
    public function incrementQuantity($cartId)
    {
        $cartdata= Cart::where('id',$cartId)->where('user_id',auth()->user()->id)->first();
        if($cartdata)
        {   if($cartdata->productColor()->where('id',$cartdata->product_color_id)->exists())
            {
                $productColor= $cartdata->productColor()->where('id',$cartdata->product_color_id)->first();
                
                if($productColor->color_quantity >$cartdata->quantity)
                {
                    $cartdata->increment('quantity');
                    session()->flash('s-status','Quantity Updated.');
                }
                else
                {
                    session()->flash('d-status','Only '.$productColor->color_quantity.' Quantity Available.');
                }
            }
            else
            {
                if($cartdata->product->quantity >$cartdata->quantity)
                {
                    $cartdata->increment('quantity');
                    session()->flash('s-status','Quantity Updated.');
                }
                else
                {
                    session()->flash('d-status','Only '.$cartdata->product->quantity.' Quantity Available.');
                }
            }
        }
        else
        {
            session()->flash('d-status','Something Went Wrong.');
        }
    }
    public function decrementQuantity($cartId)
    {
        $cartdata= Cart::where('id',$cartId)->where('user_id',auth()->user()->id)->first();
        if($cartdata)
        {   if($cartdata->productColor()->where('id',$cartdata->product_color_id)->exists())
            {
                $productColor= $cartdata->productColor()->where('id',$cartdata->product_color_id)->first();
                
                if($cartdata->quantity >0)
                {
                    $cartdata->decrement('quantity');
                    session()->flash('s-status','Quantity Updated.');
                }
            }
            else
            {
                if($cartdata->quantity>0)
                {
                    $cartdata->decrement('quantity');
                    session()->flash('s-status','Quantity Updated.');
                }
            }
        }
        else
        {
            session()->flash('d-status','Something Went Wrong.');
        }
    }
    public function removecartitem($cartId)
    {
        Cart::where('id',$cartId)->where('user_id',auth()->user()->id)->delete();
        $this->emit('updatecartcount');
        session()->flash('s-status','Cart Item Removed Successfully.');
    }
    public function render()
    { 
        $cart =Cart::where('user_id',auth()->user()->id)->get();
        return view('livewire.cart-show',['cart'=>$cart]);
    }
}
