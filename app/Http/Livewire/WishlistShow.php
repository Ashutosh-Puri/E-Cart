<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wishlist;

class WishlistShow extends Component
{   
    public function removewishlistitem($wishlistId)
    {
        Wishlist::where('id',$wishlistId)->where('user_id',auth()->user()->id)  ->delete();
        $this->emit('updatewishlistcount');
        session()->flash('s-status','Wishlist Item Removed Successfully.');
    }
    public function render()
    { 
        $wishlist =Wishlist::where('user_id',auth()->user()->id)->get();
        return view('livewire.wishlist-show',['wishlist'=>$wishlist]);
    }
}
