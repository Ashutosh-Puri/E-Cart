<div>
    @if (session()->has('s-status'))
        <div class="alert my-2 mx-2 alert-success  align-items-center">
            {{ session('s-status') }}
        </div>
    @endif
    @if (session()->has('d-status'))
        <div class="alert my-2 mx-2  alert-danger  align-items-center">
            {{ session('d-status') }}
        </div>
    @endif


    <div class="card bg-custom m-1">
        <div class="card-header">
            <div class="py-1">
                <div class="container-fluid fw-bold">
                    <a class="text-decoration-none text-success" href="{{ url('/') }}">Home</a> /
                    Products

                    <input type="text" wire:model="search" class=" w-75 float-end form-control" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="card-body bg-white ">
            <div class="row">
                <!-- Side Bar Start -->

                <div class="col-md-2 ">
                    <div class="card bg-custom min-vh-100 ">
                        <div class="card-header">
                            <h3>Filters</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="bg-custom ">
                                <nav class=" bg-custom">
                                    <p class="text-center fw-bold w-100 py-2 btn-custom">Price</p>
                                    <ul class="navbar-nav px-4">
                                        <li class="nav-item">
                                            <input id="hl" type="radio" name="pricesort"
                                                wire:model="priceInputs" value="h-to-l" id=""> &nbsp; <label
                                                for="hl">High To
                                                Low</label>
                                            <br> <input id="lh" type="radio" name="pricesort"
                                                wire:model="priceInputs" value="l-to-h" id=""> &nbsp; <label
                                                for="lh">Low To High </label>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class=" bg-custom">
                                <nav class="bg-custom">
                                    <p class="text-center fw-bold w-100 py-2 btn-custom">Categories</p>
                                    <ul class="navbar-nav px-4">
                                        @forelse ($categories as $c)
                                            <li class="nav-item">
                                                <input id="{{ $c->slug }}" type="checkbox"
                                                    wire:model="categoryInputs"value="{{ $c->id }}"
                                                    id=""><label for="{{ $c->slug }}"> <span
                                                        class="mx-2">{{ $c->name }}</span></label>
                                            </li>
                                        @empty
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class=" px-2 fa fa-circle"></i> No
                                                    categories Found</a>
                                            </li>
                                        @endforelse
                                    </ul>
                                </nav>
                            </div>
                            <div class="bg-custom">
                                <nav class=" bg-custom">
                                    <p class="text-center fw-bold w-100 py-2 btn-custom">Brands</p>
                                    <ul class="navbar-nav px-4">
                                        @forelse ($brands as $b)
                                            <li class="nav-item">
                                                <input id="{{ $b->id }}" type="checkbox"
                                                    wire:model="brandInputs"value="{{ $b->id }}" id="">
                                                &nbsp; <label for="{{ $b->id }}">{{ $b->name }}</label>
                                            </li>
                                        @empty
                                            <li class="nav-item">
                                                <a> No Brnads Found</a>
                                            </li>
                                        @endforelse
                                    </ul>
                                </nav>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- Side Bar End -->
                <div class="col-md-10 ">
                    <div class="row">
                        @forelse ($products as $p)
                            <div class="col-md-3">
                                <div class="bg-custom card my-1 product-card ">
                                    <div class=" card-header text-center fw-bold fs-5 p-0">
                                        <span class=' mx-4 fs-5 text-warning float-start'>{{ $p->brands->name }}</span>

                                        @if ($p->quantity > 0)
                                            <span class=" btn btn-success btn-sm float-end">In Stock</span>
                                        @else
                                            <span class="btn btn-danger btn-sm float-end">Out Of Stock</span>
                                        @endif
                                        <br>
                                        <a
                                            href="{{ url('viewproduct/' . $p->id) }}"class="text-decoration-none   text-white">{{ $p->name }}</a>
                                    </div>
                                    <div class="card-body"style="height: 300px;  width:100%;">
                                        @if (isset($p->productImages[0]))
                                            <a href="{{ url('viewproduct/' . $p->id) }}">
                                                <img src="{{ url($p->productImages[0]->image) }}"
                                                    alt="{{ $p->name }}" style="height: 300px;  width:100%;">
                                            </a>
                                        @else
                                            <a href="{{ url('viewproduct/' . $p->id) }}">
                                                <img src="" alt="Image Not" style="height: 300px;  width:100%;">
                                            </a>
                                        @endif
                                    </div>
                                    <div class="p-4">
                                        <div class=" text-center my-2 ">
                                            <span class="h3">
                                                <span class="">&#8377;</span>{{ $p->selling_price }}
                                            </span>&nbsp;
                                            <span class="text-danger text-decoration-line-through">&#8377;
                                                {{ $p->orignal_price }}</span>

                                        </div>
                                        {{-- <button type="button" wire:click="addToCart({{ $p->id }})" class="btn btn-custom mx-1" ><i class="fa fa-cart-plus"></i></button> --}}
                                        <button type="button" wire:click="addToWishlist({{ $p->id }})"
                                            class="btn btn-custom mx-1"><i class="fa fa fa-heart"></i></button>

                                        {{-- <a href="#" class="btn btn-custom mx-1"><i class="fa fa-search"></i></a> --}}
                                        <a href="{{ url('viewproduct/' . $p->id) }}"
                                            class="btn btn-custom float-end card-link">
                                            <i class="fa fa-shopping-cart"></i> &nbsp; Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-danger h3">
                                No Products Available
                            </div>
                        @endforelse
                        <div class=" card pt-3 bg-custom my-2">{{ $products->links('pagination::bootstrap-5') }} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
