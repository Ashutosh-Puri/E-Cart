<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class Products extends Component
{  
    public $category ;
    public $brandInputs=[];
    public $categoryInputs=[];
    public $priceInputs=[];
    

    protected $queryString =['brandInputs','categoryInputs','priceInputs'];
   
   
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

    public function render()
    {   
        $categories =Category::where('status','0')->get();

        $brands = Brand::
         when($this->categoryInputs ,function($c){

            $c->whereIn('category_id',$this->categoryInputs);
        })->where('status','0')->get();

        $products =Product::when($this->categoryInputs ,function($c){
            $c->whereIn('category_id',$this->categoryInputs);
        })->when($this->brandInputs ,function($b){
            $b->whereIn('brand_id',$this->brandInputs);
        })->when($this->priceInputs ,function($p){
            $p->when($this->priceInputs=='h-to-l',function($p2){
                $p2->orderBy('selling_price','DESC');
            })->when($this->priceInputs=='l-to-h',function($p3){
                $p3->orderBy('selling_price','ASC');
            });
        })
        ->where('status','0')->paginate(8);
        return view('livewire.products',['categories'=>$categories,'brands'=>$brands ,'products'=>$products]);
    }
}
