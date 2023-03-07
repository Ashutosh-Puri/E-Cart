<div>
    <hr class="p-0 m-0">
    <!-- Product Detail Start -->
    <div class="">
        


        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @foreach ($product as $p)
                    
                    <div class="">
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
                        <div class="row align-items-center bg-custom p-2 text-white  ">
                            <div class="py-1">
                                <div class="container-fluid fw-bold">
                                    <a class="text-decoration-none text-success" href="{{ url('productlist') }}">Products</a> /
                                    <a class="text-decoration-none text-success" href="{{ url('productlist') }}">{{ $p->categories->name }}</a> /
                                    <a class="text-decoration-none " href="">{{ $p->name }}</a> 
                                </div>
                            </div>
                            <div class="col-md-5 text-center">
                                <div class=" p-auto">
                                    @if (isset($p->productImages[0]))
                                    <img src="{{ url($p->productImages[0]->image) }}" alt="{{ $p->productImages[0]->id  }}" style=" height: 327px; width:327px;">
                                    @else
                                    <img  alt="Product Image Not Added"style="height: 327px; width:327px;">
                                    @endif
                                </div>
                                {{-- <div class="product-slider-single-nav normal-slider">
                                    <div class="slider-nav-img"><img src="img/product-1.jpg" alt="Product Image"></div>
                                    <div class="slider-nav-img"><img src="img/product-3.jpg" alt="Product Image"></div>
                                    <div class="slider-nav-img"><img src="img/product-5.jpg" alt="Product Image"></div>
                                    <div class="slider-nav-img"><img src="img/product-7.jpg" alt="Product Image"></div>
                                    <div class="slider-nav-img"><img src="img/product-9.jpg" alt="Product Image"></div>
                                    <div class="slider-nav-img"><img src="img/product-10.jpg" alt="Product Image"></div>
                                </div> --}}
                            </div>
                            <div class="col-md-7 ">
                                <div class="table-responsive">
                                  
                                    <table class="table table-striped bordered table-inverse text-white  ">
                                        <tr>
                                            <td colspan=3><div class="fw-bold h2 text-white  ">{{ $p->name }}</div></td>  
                                        </tr>
                                        <tr>
                                            <td><span class="h4  ">Price:</span></td>
                                            <td colspan=2><span class="fw-bold text-success h2">&#8377; {{ $p->selling_price }}</span>&nbsp;&nbsp;&nbsp;<span class="text-danger text-decoration-line-through">&#8377; {{ $p->orignal_price }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="h4 text-white  ">Quantity:</span></td>
                                            <td colspan=2>
                                                <span class="input-group">
                                                    <button wire:click="decrementQuantity" class=" btn btn-sm btn-custom "><i class="fa fa-minus"></i></button>
                                                    <input readonly wire:model="quantityCount"class=" text-center form-control-sm fw-bold"type="text" value="{{ $quantityCount }}" style="width:100px;">
                                                    <button wire:click="incrementQuantity" class="btn-plus  btn btn-sm btn-custom"><i class="fa fa-plus"></i></button>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            @if ($p->productColors->count()>0)
                                               <td><span class="h4 text-white ">Color:</span></td>
                                                <td colspan=2 class="">
                                                    @foreach ($p->productColors as $col)
                                                        <label wire:click="colorselected({{ $col->id }})" class="btn btn-sm fw-bold  btn-outline-secondary" for="" style=" background-color: {{ $col->colors->name  }}">{{$col->colors->name  }} ({{$col->color_quantity  }})</label>
                                                    @endforeach
                                                        @if ($productColorQuantity =='Out Of Stock')
                                                            <label class="btn-danger btn-sm btn label-stock " for="">Out Of Stock</label>
                                                        @elseif ($productColorQuantity =='In Stock')
                                                            <label class="btn-success btn-sm btn " for="">In Stock</label>
                                                        @endif
                                                </td> 
                                            @else
                                                <td><span class="h4  ">Stock:</span></td> 
                                                <td colspan=2>
                                                    @if ($p->quantity >0 )
                                                        <label class="btn-success btn-sm btn " for=""> ( {{ $p->quantity }} ) In Stock</label>
                                                    @else 
                                                    <label class="btn-danger btn-sm btn label-stock " for="">Out Of Stock</label>
                                                    @endif
                                                </td>
                                               
                                            @endif  
                                        </tr>  
                                        <tr >
                                            <td><span class="h4 text-white ">Brand:</span></td>
                                            <td class="text-white">{{ $p->brands->name }}</td>
                                        </tr>
                                        <tr >
                                            <td><span class="h4 text-white ">Category:</span></td>
                                            <td class="text-white">{{ $p->categories->name }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan=3>
                                                <button type="button" wire:click="addToCart({{ $p->id }})" class="btn  btn-custom" ><i class="mx-2 fa fa-cart-plus"></i>Add to Cart</button>
                                                    <button type="button" wire:click="addToWishlist({{ $p->id }})" class="btn  btn-custom" ><i class="mx-2 fa fa fa-heart"></i>Add to Wishlist</button>
                                                <a class="btn  btn-custom" href="#"><i class="mx-2 fa fa-shopping-bag"></i>Buy Now</a>
                                            </td>   
                                        </tr>
                                    </table>
                                    @if ($p->small_description)
                                    <p class="h4 text-white ">Small Description:</p>
                                        <span >{{  $p->small_description }}</span>
                                
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <p class="h4 text-white ">Description:</p><br>
                                {!! $p->description !!}
                              
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Product Detail End -->
    
    <hr class="p-0 m-0">
</div>
