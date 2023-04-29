<div class="checkout">

    <div class="container-fluid">
        <div class="row">
            @if (session()->has('s-status'))
                <div class="alert my-2  alert-success align-items-center fw-bold">
                    {{ session('s-status') }}
                </div>
            @endif
            @if (session()->has('d-status'))
                <div class="alert my-2  alert-danger  align-items-center fw-bold">
                    {{ session('d-status') }}
                </div>
            @endif
            <div class="py-1">
                <div class="container-fluid fw-bold">
                    <a class="text-decoration-none text-success" href="{{ url('/') }}">Home</a> /
                    <a class="text-decoration-none text-success" href="{{ url('/productlist') }}">Products</a> /
                    Checkout
                </div>
            </div>
            @if ($totalproductamount != '0')
                <div class="col-lg-8">
                    <div class="bg-custom">
                        <div class=" p-4">
                            <h2>Billing Address</h2>
                            <div class="row">
                                <div class="col-md-6 my-1">
                                    <label>Full Name</label>
                                    <input class="form-control" wire:model="fullname" type="text"
                                        placeholder="First Name" autocomplete="fullname" value="{{ $fullname }}" >
                                    @error('fullname')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>E-mail</label>
                                    <input class="form-control" wire:model="email" type="text"
                                        placeholder="E-mail" autocomplete="email" value="{{ $email }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>Mobile No</label>
                                    <input class="form-control" wire:model="mobile" type="text"
                                        placeholder="Mobile No" autocomplete="mobile" value="{{ $mobile }}">
                                    @error('mobile')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>Address</label>
                                    <input class="form-control" wire:model="address" type="text"
                                        placeholder="Address" autocomplete="address" value="{{ $address }}">
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>Country</label>
                                    <input class="form-control" wire:model="country" 
                                        type="text" placeholder="Country" autocomplete="country" value="{{ $country }}">
                                    @error('country')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>City</label> 
                                    <input class="form-control" wire:model="city" type="text" value="{{ $city }}"
                                        placeholder="City" autocomplete="city">
                                    @error('city')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>State</label>
                                    <input class="form-control" wire:model="state" type="text"
                                        placeholder="State" autocomplete="state" value="{{ $state }}">
                                    @error('state')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>PIN Code</label>
                                    <input class="form-control" wire:model="pincode" type="text"
                                        placeholder="PIN Code" autocomplete="pincode" value="{{ $pincode }}">
                                    @error('pincode')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="bg-custom mb-4">
                        <div class="px-4 pb-0">
                            <div class=" pt-2 px-4">
                                <div class="row">
                                    <div class="col-12 ">
                                        <h1>Cart Total</h1>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <p>Cart Total</p>
                                    </div>
                                    <div class="col-4 float-end">
                                        <span class="float-end">&#8377; {{ $totalproductamount }}</span>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <p>Shipping Cost</p>
                                    </div>
                                    <div class="col-4 float-end">
                                        <span class="float-end">&#8377;
                                            @if ($this->totalproductamount > 10000)
                                                {{ 0 }}
                                            @elseif (10000 > $this->totalproductamount && $this->totalproductamount > 1000)
                                                {{ 20 }}
                                            @elseif (1000 >= $this->totalproductamount && $this->totalproductamount > 500)
                                                {{ 50 }}
                                            @else
                                                {{ 150 }}
                                            @endif
                                        </span>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <h2>Grand Total</h2>
                                    </div>
                                    <div class="col-4 float-end">
                                        <h2><span class="float-end">&#8377; {{ $grandtotal }}</span></h2>
                                    </div>
                                    <hr>
                                </div>

                            </div>

                        </div>

                        <div class="p-5" wire:ignore>
                            <div class="w-100 mx-2">
                                <div class="row">
                                    <div class="col-12 ">
                                        <h1>Payment Methods</h1>
                                    

                                    </div>
                                    <hr>
                                    <button  wire:loading.attr="disabled" wire:click="codOrder"
                                    class="btn btn-warning fw-bold w-100">
                                    <span wire:loading.remove wire:target="codOrder">Place Order ( COD )</span>
                                    <span wire:loading wire:target="codOrder">Placing Order</span>
                                </button>

                                <form class="d-inline" action="{{ route('payment') }}" method="POST" >
                                    @csrf
                                    <input type="hidden" name="fullname" value="{{ $fullname }}">
                                    <input type="hidden" name="email" value="{{ $email }}">
                                    <input type="hidden" name="mobile" value="{{ $mobile }}">
                                    <input type="hidden" name="address" value="{{ $address }}">
                                    <input type="hidden" name="country" value="{{ $country }}">
                                    <input type="hidden" name="pincode" value="{{ $pincode }}">
                                    <input type="hidden" name="state" value="{{ $state}}">
                                    <input type="hidden" name="city" value="{{ $city }}">
                                    
                                    <button data-payment_button_id="button_id" class=" btn fw-bold my-2 w-100 btn-success"> Pay  With Razorpay ( &#8377; {{ $grandtotal }} )</button>
                                     
                                    <script  src="https://checkout.razorpay.com/v1/checkout.js" 
                                        data-key="{{ env('RAZORPAY_KEY_ID') }}"
                                    
                                        data-amount="{{ $grandtotal*100 }}" 
                                        data-buttontext="" 
                                        data-name="{{ env('APP_NAME') }}" 
                                        data-description=" Test Payment" 
                                        data-prefill.name="{{ $fullname }}"
                                        data-prefill.email="{{ $email }}" 
                                        data-prefill.contact="{{ $mobile }}"
                                        data-notes.address="{{ $address . ',' . $city . ',' . $country . '.' }}" 
                                        >
                                    </script>
                                   
                                    
                                    
                                </form>
                                {{-- </div>
                            
                                                <div class="d-inline" >
                                                    <div class=" d-inline  mb-3" id="pills-tab" role="tablist">
                                                    
                                                        <div class="d-inline nav-item w-100" role="presentation">
                                                          <button wire:click="mod('Card')"  class="btn btn-warning fw-bold d-inline" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pay With Razorpay</button>
                                                        </div>
                                                      
                                                    </div>
                                                      <div class="tab-content" id="pills-tabContent">
                                                      
                                                        <div class="tab-pane fade @if ($visible=="0") hide  @endif  @if ($visible=="2") active show  @endif" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                          
                                                            
                                                            <form class="d-inline" action="{{ route('payment') }}" method="POST" >
                                                                @csrf
                                                                <input type="hidden" name="fullname" value="{{ $fullname }}">
                                                                <input type="hidden" name="email" value="{{ $email }}">
                                                                <input type="hidden" name="mobile" value="{{ $mobile }}">
                                                                <input type="hidden" name="address" value="{{ $address }}">
                                                                <input type="hidden" name="country" value="{{ $country }}">
                                                                <input type="hidden" name="pincode" value="{{ $pincode }}">
                                                                <input type="hidden" name="state" value="{{ $state}}">
                                                                <input type="hidden" name="city" value="{{ $city }}">
                                                                
                                                                <button data-payment_button_id="button_id" class=" d-inline btn btn-success"> Pay  With Razorpay ( &#8377; {{ $grandtotal }} )</button>
                                                                 
                                                                <script class="d-inline" src="https://checkout.razorpay.com/v1/checkout.js" 
                                                                    data-key="{{ env('RAZORPAY_KEY_ID') }}"
                                                                
                                                                    data-amount="{{ $grandtotal*100 }}" 
                                                                    data-buttontext="" 
                                                                    data-name="{{ env('APP_NAME') }}" 
                                                                    data-description=" Test Payment" 
                                                                    data-prefill.name="{{ $fullname }}"
                                                                    data-prefill.email="{{ $email }}" 
                                                                    data-prefill.contact="{{ $mobile }}"
                                                                    data-notes.address="{{ $address . ',' . $city . ',' . $country . '.' }}" 
                                                                    >
                                                                </script>
                                                               
                                                                
                                                                
                                                            </form>
                                                            
                                                        </div>
                              
                                                      </div>
                                                </div>
                                                --}}
                                                
                                                
                                                

                                                    


                                                
                                
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row m-4">
                    <div class="card text-center bg-custom col-6 mx-auto">
                        <div class="card-header ">
                            <h4>No Items In Cart To Checkout</h4>
                        </div>
                        <div class="card-body ">
                            <div class="card-body ">
                                <img  class="m-4"src="{{ url('favicon.ico') }}" alt="" style="height: 80px; width:100px;">
                                <h5> Get Best Deals & Offers </h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-custom" href="{{ url('productlist') }}"><i
                                    class="mx-2 fa fa-shopping-bag"> </i>Shop Now</a>
                        </div>

                    </div>
                </div>
            @endif

        </div>
    </div>


</div>
