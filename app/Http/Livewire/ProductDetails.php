<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductDetails extends Component
{   
    public $prod;
    public function mount($prod)
    {
       $this->prod=$prod;
    }

    public function render()
    { 
        return view('livewire.product-details',['product'=>$this->prod]);
    }
}
