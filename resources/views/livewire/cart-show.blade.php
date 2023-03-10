<div>
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
    <!-- Breadcrumb Start -->
    <div class="py-1">
        <div class="container-fluid fw-bold">
            <a class="text-decoration-none text-success" href="{{ url('/') }}">Home</a> /
            <a class="text-decoration-none text-success" href="{{ url('/productlist') }}">Products</a> /
            Cart
        </div>
    </div>
    <!-- Breadcrumb End -->


    <div class=" card table-responsive p-4 bg-custom">
        <table class="table table-sm table-striped table-bordered  nowrap  text-center">
            <thead class="thead-dark text-white">
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Qantity</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody class="align-middle ">
                @forelse ($cart as $w)
                    <tr>
                        <td>
                            @if (isset($w->product->productImages[0]))
                                <a href="{{ url('viewproduct/' . $w->product->id) }}">
                                    <img src="{{ $w->product->productImages[0]->image }}" alt="Image" style="height: 50px; width:50px;">
                                </a>
                            @endif
                        </td>
                        <td> <a href="{{ url('viewproduct/' . $w->product->id) }}"> 
                                <span class="mx-2 float-start text-white h5">{{ $w->product->name }}</span> 
                                @if ($w->productColor)
                                    <span class="mx-2 float-start text-white h5">( {{ $w->productColor->colors->name}} )</span> 
                                @endif
                            </a>
                        </td>
                        <td><span class="text-white h5">&#8377; {{ $w->product->selling_price }}</span></td>
                        <td>
                            <span class="input-group d-flex justify-content-center">
                                <?php $i=0; ?>
                                <button id="{{ $i++ }}" wire:loading.attr="disabled" wire:click="decrementQuantity({{ $w->id }})" class=" btn btn-sm btn-custom "><i class="fa fa-minus"></i></button>
                                <input  id="{{ $i++ }}"readonly class=" text-center form-control-sm fw-bold"type="text" value="{{ $w->quantity  }}" style="width:50px;">
                                <button id="{{ $i++ }}" wire:loading.attr="disabled" wire:click="incrementQuantity({{ $w->id }})" class="btn-plus  btn btn-sm btn-custom"><i class="fa fa-plus"></i></button>
                            </span>
                        </td>
                        <td>
                            <span class="mx-2 float-start text-white h5">&#8377; {{ ($w->product->selling_price*$w->quantity) }}</span>
                            @php
                                $grandtotal+=($w->product->selling_price*$w->quantity);
                            @endphp 
                        </td>
                        <td><button type="button" wire:click="removecartitem({{ $w->id }})" class="btn  btn-danger"><i class="mx-2 fa fa-trash"></i></button></td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-white"> Items Not Added Yet.</td>
                    </tr>
                @endforelse
                <tr >
                    <td colspan="3" rowspan="2">
                        <marquee behavior="" direction="">
                            <span class="text-white fs-3">
                                Get Best Deals & Offers <a class="btn btn-link fs-3 fw-bold text-danger text-decoration-none " href="{{ url('productlist') }}"><i class="mx-2 fa fa-shopping-bag"> </i> Shop Now</a>
                            </span>
                        </marquee>
                    </td>
                    <td colspan="3" class="p-3">
                       
                        <span class="text-white fw-bold  ">Grand Total : </span>
                        <span class="text-warning  fw-bold  ">&#8377; {{ $grandtotal }}</span>
                     
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="p-3">
                       
                        <a class="btn btn-warning fw-bold  "href="{{ url('checkout') }}">Checkout</a>
                       
                    </td>
                </tr>
        </table>  
    </div>
</div>
