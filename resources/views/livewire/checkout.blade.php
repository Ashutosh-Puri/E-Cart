<div class="checkout">
        <div class="container-fluid"> 
            <div class="row">
                <div class="py-1">
                    <div class="container-fluid fw-bold">
                        <a class="text-decoration-none text-success" href="{{ url('/') }}">Home</a> /
                        <a class="text-decoration-none text-success" href="{{ url('/productlist') }}">Products</a> /
                        Checkout
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bg-custom">
                        <div class=" p-4">
                            <h2>Billing Address</h2>
                            <div class="row">
                                <div class="col-md-6 my-1">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" placeholder="First Name">
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" placeholder="Last Name">
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" placeholder="E-mail">
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text" placeholder="Mobile No">
                                </div>
                                <div class="col-md-12 my-1">
                                    <label>Address</label>
                                    <input class="form-control" type="text" placeholder="Address">
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>Country</label>
                                    <input class="form-control" type="text" placeholder="Country">
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>City</label>
                                    <input class="form-control" type="text" placeholder="City">
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>State</label>
                                    <input class="form-control" type="text" placeholder="State">
                                </div>
                                <div class="col-md-6 my-1">
                                    <label>PIN Code</label>
                                    <input class="form-control" type="text" placeholder="PIN Code">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="bg-custom">
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
                                <h1></h1>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                        <label class="custom-control-label" for="payment-1">Paypal</label>
                                    </div>
                                    <div class="payment-content" id="payment-1-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                        <label class="custom-control-label" for="payment-2">Payoneer</label>
                                    </div>
                                    <div class="payment-content" id="payment-2-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                        <label class="custom-control-label" for="payment-3">Check Payment</label>
                                    </div>
                                    <div class="payment-content" id="payment-3-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                        <label class="custom-control-label" for="payment-4">Direct Bank Transfer</label>
                                    </div>
                                    <div class="payment-content" id="payment-4-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                        <label class="custom-control-label" for="payment-5">Cash on Delivery</label>
                                    </div>
                                    <div class="payment-content" id="payment-5-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-btn">
                                <button>Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
