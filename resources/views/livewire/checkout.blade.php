<div class="checkout">
    <div class="container-fluid">
        <div class="row">
            @if (session()->has('s-status'))
                <div class="alert my-2 mx-2 alert-success d-flex align-items-center">
                    {{ session('s-status') }}
                </div>
            @endif
            @if (session()->has('d-status'))
                <div class="alert my-2 mx-2  alert-danger d-flex align-items-center">
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
            @if ($totalproductamount !='0')
                <div class="col-lg-8">
                    <div class="bg-custom">
                        <div class=" p-4">
                            <h2>Billing Address</h2>
                            <div class="row">
                                <div class="col-md-6 my-1">
                                    <label>Full Name</label>
                                    <input class="form-control" wire:model.defer="fullname" type="text"
                                        placeholder="First Name">
                                    @error('fullname')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>E-mail</label>
                                    <input class="form-control" wire:model.defer="email" type="text" placeholder="E-mail">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>Mobile No</label>
                                    <input class="form-control" wire:model.defer="mobile" type="text" placeholder="Mobile No">
                                    @error('mobile')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>Address</label>
                                    <input class="form-control" wire:model.defer="address" type="text" placeholder="Address">
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>Country</label>
                                    <input class="form-control" wire:model.defer="country" type="text" placeholder="Country">
                                    @error('country')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>City</label>
                                    <input class="form-control" wire:model.defer="city" type="text" placeholder="City">
                                    @error('city')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>State</label>
                                    <input class="form-control" wire:model.defer="state" type="text" placeholder="State">
                                    @error('state')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>PIN Code</label>
                                    <input class="form-control" wire:model.defer="pincode" type="text" placeholder="PIN Code">
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
                        <div class="p-4 pb-0">
                            <div class=" p-4">
                                <div class="row">
                                    <div class="col-12 ">
                                        <h1>Cart Total</h1>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <p>Product Name</p>
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
                                        <span class="float-end">&#8377; 1</span>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <h2>Grand Total</h2>
                                    </div>
                                    <div class="col-4 float-end">
                                        <h2><span class="float-end">&#8377; 100</span></h2>
                                    </div>
                                    <hr>
                                </div>

                            </div>

                        </div>

                        <div class="p-4">
                            <div class="">
                                <div class="row">
                                    <div class="col-12 ">
                                        <h1>Payment Methods</h1>
                                    </div>
                                    <hr>
                                </div>
                                <div wire:ignore class="container">
                                    <div class="nav text-center">
                                        <a wire:loading.attr="disabled" class="btn  fw-bold  active mx-1 btn-primary" data-bs-toggle="tab"
                                            href="#cod">Cash On Delivery</a>
                                        <a wire:loading.attr="disabled" class="btn btn-success fw-bold mx-1" data-bs-toggle="tab" href="#opay">Online
                                            Payment</a>
                                    </div>
                                    <div class="tab-content">
                                        <div id="cod" class="tab-pane fade active show in p-2">
                                            <h3>Cash On Delivery</h3>
                                            <p></p>
                                            <div class="text-center">
                                                <button  wire:loading.attr="disabled"  wire:click="codOrder" class="btn btn-warning fw-bold">
                                                    <span wire:loading.remove wire:target="codOrder">Place Order ( Cash On Delivery )</span>
                                                    <span wire:loading wire:target="codOrder">Placing Order</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="opay" class="tab-pane fade">
                                            <h3>Online Payment</h3>
                                            <p></p>
                                            <div class="text-center">
                                                <button  wire:loading.attr="disabled" wire:click="opayOrder" class="btn btn-warning fw-bold">
                                                    <span wire:loading.remove wire:target="opayOrder">Pay Now ( Online Payment )</span>
                                                    <span wire:loading wire:target="opayOrder">Loading..</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            @else
                <div class="row">
                  <div class="card text-center bg-custom col-6 mx-auto">
                    <div class="card-body ">
                      <h4>No Items In Cart To Checkout</h4>   
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-custom" href="{{ url('productlist') }}"><i class="mx-2 fa fa-shopping-bag"> </i>Shop Now</a>
                    </div>

                  </div>
                </div> 
            @endif

        </div>
    </div>
</div>
