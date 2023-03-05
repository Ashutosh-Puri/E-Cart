<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Products extends Component
{  
    public $category ;
    public $brandInputs=[];
    public $categoryInputs=[];
    public $priceInputs=[];
    

    protected $queryString =['brandInputs','categoryInputs','priceInputs'];

    public function render()
    {   
        $categories =Category::where('status','0')->get();
        $brands = Brand::where('status','0')
         ->when($this->categoryInputs ,function($c){

            $c->whereIn('category_id',$this->categoryInputs);
        })->get();

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
