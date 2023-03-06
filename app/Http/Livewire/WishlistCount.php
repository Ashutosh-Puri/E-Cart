<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistCount extends Component
{   
    public $wishlistCount;
    // updatewishlistcount

    protected $listeners=['updatewishlistcount'=>'checkwishlistcount'];
    public function checkwishlistcount()
    {
        if(Auth::check())
        {
            return $this->wishlistCount =Wishlist::where('user_id',auth()->user()->id)->count();
        }else
        {
            return $this->wishlistCount=0;
        }
    }
    public function render()
    {       
        $this->wishlistCount = $this->checkwishlistcount();
        return view('livewire.wishlist-count',['wishlistCount'=>$this->wishlistCount]);
    }
}
