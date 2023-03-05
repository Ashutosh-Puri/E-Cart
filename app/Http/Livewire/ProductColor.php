<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductColor extends Component
{   public $prod;
    public $color_quantity ;
    protected $listeners = ['some-event' => '$refresh'];
   
   
    public function mount($pro)
    {
        $this->prod =$pro;
    }

    public function update($cid ,$pid)
    {
       
        $productcolor = Product::findOrFail($pid)->productColors()->where('id',$cid)->first();
        $productcolor->color_quantity=$this->color_quantity[$cid];
        $productcolor->update();
        session()->flash('s-status','Product Color Quantity Updated Successfully.');
        $this->emit('some-event');
    }
    public function delete($cid ,$pid)
    {
       
        $productcolor = Product::findOrFail($pid)->productColors()->where('id',$cid)->first();
        $productcolor->delete();
        session()->flash('s-status','Product Color Deleted Successfully.');
        $this->emit('some-event');
    }
    public function render()
    {
        return view('livewire.product-color',['product'=>$this->prod]);
    }
}
