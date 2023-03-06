<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use App\Models\ProductColor;
use Illuminate\Support\Facades\Auth;

class ProductDetails extends Component
{   
    public $prod; 
    public $productColorQuantity;
    public $quantityCount=0;
    public $prodcolorid;

    public function incrementQuantity()
    {
        $this->quantityCount++;
    }
    public function decrementQuantity()
    {  
        if($this->quantityCount >=1)
        {
            $this->quantityCount--;
        }
       
    }
   
    public function  addToCart($prodId)
    {   
        $product = Product::where('id',$prodId)->first();
       
        if(Auth::check())
        {   
            if( $product->where('id',$prodId)->where('status','0')->exists())
            {   
                if($product->productColors()->count()>1)
                {
                    if($this->productColorQuantity !=null)
                    {
                        $PC =$product->productColors()->where('id',$this->prodcolorid)->first();
                        if($PC->color_quantity>0)
                        {
                            if($PC->color_quantity > $this->quantityCount )
                            {
                                Cart::create([
                                    'user_id'=>auth()->user()->id,
                                    'product_id'=>$prodId,
                                    'product_color_id'=>$this->prodcolorid,
                                    'quantity'=>$this->quantityCount
                                ]);
                                session()->flash('s-status','product Added To Cart.');
                            }
                            else
                            {
                                session()->flash('d-status','Only '.$PC->color_quantity.' Quantity available.');
                            }
                        }
                        else
                        {
                            session()->flash('d-status','Product Out Of Stock.');
                        }
                    }
                    else
                    {
                        session()->flash('d-status','Select Your Product Color.');
                    }
                }
                else
                {
                    if($product->quantity>0)
                    {
                        if($product->quantity > $this->quantityCount)
                        {
                            Cart::create([
                                'user_id'=>auth()->user()->id,
                                'product_id'=>$prodId,
                                'quantity'=>$this->quantityCount
                            ]);
                            session()->flash('s-status','product Added To Cart.');
                        }
                        else
                        {
                            session()->flash('d-status','Only '.$product->quantity .' Quantity available.');
                        }
                    }
                    else
                    {
                        session()->flash('d-status','Product Out Of Stock.');
                    } 
                }
            }
            else
            {
                session()->flash('d-status','Product Does Not Exists.');
            }  
        }
        else
        {   
            session()->flash('d-status','Plase Login To Continue.');
            return false;
        }
    }

    public function addToWishlist($prodId)
    {
        if(Auth::check())
        {   
            if(Wishlist::where('user_id',Auth::user()->id)->where('product_id',$prodId)->exists())
            {
                session()->flash('d-status','Already Added To Wishlist.');
            }
            else
            {
                $this->emit('updatewishlistcount');
                Wishlist::create([
                    'user_id'=>Auth::user()->id,
                    'product_id'=>$prodId,
    
                ]);   
                session()->flash('s-status','Wishlist Added Successfully.');
            }  
        }
        else
        {   
            session()->flash('d-status','Plase Login To Continue.');
            return false;
        }
    }
    public function colorselected($productColorId )
    {   $this->prodcolorid=$productColorId ;
       $prodcolor =  ProductColor::where('id',$productColorId)->first();
       $Quantity=$prodcolor->color_quantity;
        if($Quantity== 0)
        {
            $this->productColorQuantity="Out Of Stock";
        }
        else
        {
            $this->productColorQuantity="In Stock";
        }
        
    }
    public function mount($prod)
    {
       $this->prod=$prod;
    }

    public function render()
    { 
        return view('livewire.product-details',['product'=>$this->prod]);
    }
}
