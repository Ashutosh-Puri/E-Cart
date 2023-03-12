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
<div class="card bg-custom m-1">
    <div class="card-header">
        <div class="py-1">
            <div class="container-fluid fw-bold">
                <a class="text-decoration-none text-success" href="{{ url('productlist') }}">Products</a> /
                <a class="text-decoration-none text-success"
                    href="{{ url('productlist') }}">{{ $product[0]->categories->name }}</a> /
                <a class="text-decoration-none " href="">{{ $product[0]->name }}</a>
                <a class="btn btn-success fw-bold float-end" href="{{ url('productlist') }}">Back</a>
            </div>
        </div>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-12">
                @foreach ($product as $p)
                    <div class="row align-items-center bg-custom p-2 text-white  ">

                        <div class="col-md-5 col-12 text-center" >
                            <div class="card bg-custom" >
                                <div class="card-body " >
                                    @if (isset($p->productImages[0]))
                                        <div id="img-holder" class="mx-auto " style=" width: 327px;height: 327px; background-image:url({{  url($p->productImages[0]->image) }})" ></div>
                                    @else
                                    <div id="img-holder" class="mx-auto " style=" border:2px solid yellow; width: 327px;height: 327px; background-color:rgba(0,0,0,0)" ></div>
                                    @endif       
                                </div>
                                <div class="card-footer">
                                    @php
                                        $i=1;
                                    @endphp
                                    
                                    @forelse ($p->productImages as $img)
                                        <img  style="width: 60px;height: 60px;" onclick="document.getElementById('img-holder').style.backgroundImage = 'url({{ url($img->image)}})'" src="{{ url($img->image)}}" >

                                        @if ($i++==5)
                                            @break  
                                        @endif
                                        
                                    @empty
                                    <img alt="No Image Added" style="width: 60px;height: 60px;"/>
                                        
                                    @endforelse
                                   
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-7 ">
                            <div class="table-responsive">

                                <table class="table table-striped bordered table-inverse text-white  ">
                                    <tr>
                                        <td colspan=3>
                                            <div class="fw-bold h2 text-white  ">{{ $p->name }}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="h4  ">Price:</span></td>
                                        <td colspan=2><span class="fw-bold text-success h2">&#8377;
                                                {{ $p->selling_price }}</span>&nbsp;&nbsp;&nbsp;<span
                                                class="text-danger text-decoration-line-through">&#8377;
                                                {{ $p->orignal_price }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="h4 text-white  ">Quantity:</span></td>
                                        <td colspan=2>
                                            <span class="input-group">
                                                <button wire:click="decrementQuantity"
                                                    class=" btn btn-sm btn-custom "><i class="fa fa-minus"></i></button>
                                                <input readonly
                                                    wire:model="quantityCount"class=" text-center form-control-sm fw-bold"type="text"
                                                    value="{{ $quantityCount }}" style="width:100px;">
                                                <button wire:click="incrementQuantity"
                                                    class="btn-plus  btn btn-sm btn-custom"><i
                                                        class="fa fa-plus"></i></button>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        @if ($p->productColors->count() > 0)
                                            <td><span class="h4 text-white ">Color:</span></td>
                                            <td colspan=2 class="">
                                                @foreach ($p->productColors as $col)
                                                    <label wire:click="colorselected({{ $col->id }})"
                                                        class="btn btn-sm fw-bold  btn-outline-secondary" for=""
                                                        style=" background-color: {{ $col->colors->name }}">{{ $col->colors->name }}
                                                        ({{ $col->color_quantity }})
                                                    </label>
                                                @endforeach
                                                @if ($productColorQuantity == 'Out Of Stock')
                                                    <label class="btn-danger btn-sm btn label-stock " for="">Out
                                                        Of Stock</label>
                                                @elseif ($productColorQuantity == 'In Stock')
                                                    <label class="btn-success btn-sm btn " for="">In
                                                        Stock</label>
                                                @endif
                                            </td>
                                        @else
                                            <td><span class="h4  ">Stock:</span></td>
                                            <td colspan=2>
                                                @if ($p->quantity > 0)
                                                    <label class="btn-success btn-sm btn " for=""> (
                                                        {{ $p->quantity }} ) In Stock</label>
                                                @else
                                                    <label class="btn-danger btn-sm btn label-stock " for="">Out
                                                        Of Stock</label>
                                                @endif
                                            </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><span class="h4 text-white ">Brand:</span></td>
                                        <td class="text-white">{{ $p->brands->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><span class="h4 text-white ">Category:</span></td>
                                        <td class="text-white">{{ $p->categories->name }}</td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <button type="button" wire:click="addToCart({{ $p->id }})"
                                                class="btn  btn-custom"><i class="mx-2 fa fa-cart-plus"></i>Add
                                                to Cart</button>
                                            
                                           
                                        </td>
                                        <td>
                                            <button type="button" wire:click="addToWishlist({{ $p->id }})"
                                                class="btn  btn-custom"><i class="mx-2 fa fa fa-heart"></i>Add
                                                to Wishlist</button>
                                        </td>
                                    </tr>
                                </table>
                                @if ($p->small_description)
                                    <p class="h4 text-white ">Small Description:</p>
                                    <span>{{ $p->small_description }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p class="h4 text-white ">Description:</p><br>
                            {!! $p->description !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

</div>

