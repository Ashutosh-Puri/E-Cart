@extends('layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0  wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption mb-5">
                        <div class="row justify-content-end ">
                            <div class="col-md-6">
                                <h1 class=" mb-4 animated slideInDown">Best Ecommerce Solutions 1</h1>
                                <p>We offer an industry-driven and successful digital marketing strategy that helps our
                                    clinets in archiving a strong online presence and maximum company profit.</p>
                                <a class="btn btn-custom" href="{{ url('productlist') }}"><i
                                        class="fa fa-shopping-cart"></i> &nbsp;Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <img class="w-100 slider-img " src="img/slider-1.jpg" alt="Image">
                </div>
                <div class="carousel-item active">
                    <div class="carousel-caption mb-5">
                        <div class="row justify-content-end ">
                            <div class="col-md-6">
                                <h1 class=" mb-4 animated slideInDown">Best Trending Offers</h1>
                                <p></p>
                                <a class="btn btn-custom" href="{{ url('productlist') }}"><i
                                        class="fa fa-shopping-cart"></i> &nbsp;Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <img class="w-100 slider-img " src="img/slider-2.jpg" alt="Image">
                </div>
                <div class="carousel-item active">
                    <div class="carousel-caption mb-5">
                        <div class="row justify-content-start ">
                            <div class="col-md-6">
                                <h1 class=" mb-4 animated slideInDown">Best Featured Products</h1>
                                <a class="btn btn-custom" href="{{ url('productlist') }}"><i
                                        class="fa fa-shopping-cart"></i> &nbsp;Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <img class="w-100 slider-img " src="img/slider-3.jpg" alt="Image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End-->
    <div class="py-4">
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                @if (session('s-status'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <div>
                            {{ session('s-status') }}
                        </div>
                    </div>
                @endif
                @if (session('d-status'))
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <div>
                            {{ session('d-status') }}
                        </div>
                    </div>
                @endif

                <div class="card  bg-custom m-1">
                    <div class="card-header  px-5 py-3">
                        <h1>Features</h1>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-6 feature-col text-center  py-5">
                                <div class="feature-content">
                                    <i class="big-icon fab fa-cc-mastercard"></i>
                                    <h2>Secure Payment</h2>
                                    <p>
                                     
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 feature-col text-center  py-5">
                                <div class="feature-content ">
                                    <i class=" big-icon fa fa-truck"></i>
                                    <h2>Worldwide Delivery</h2>
                                    <p>
                                       
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 feature-col text-center  py-5 ">
                                <div class="feature-content  ">
                                    <i class="big-icon fa fa-sync-alt"></i>
                                    <h2>3 Days Return</h2>
                                    <p>
                                       
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 feature-col text-center  py-5 ">
                                <div class="feature-content ">
                                    <i class="big-icon fa fa-comments"></i>
                                    <h2>24/7 Support</h2>
                                    <p>
                                      
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feature End-->


                <!-- Recent Product Start -->
                <div class="card m-1">
                    <div class="card-header bg-custom  px-5 py-3">
                        <h1>Recent Products</h1>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 ">
                            <div class="row">
                                @forelse ($recentpoducts as $p)
                                    <div class="col-md-3">
                                        <div class="bg-custom card my-1 product-card ">
                                            <div class=" card-header text-center fw-bold fs-5 p-0">
                                                <span
                                                    class=' mx-4 fs-5 text-warning float-start'>{{ $p->brands->name }}</span>
                                                    <span class="btn btn-danger btn-sm float-end">New</span>
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
                                                        <img src="" alt="Image Not"
                                                            style="height: 300px;  width:100%;">
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
                                    <div class="text-center h3">
                                        No Products Available
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent Product End -->
                <!-- Trending Product Start -->
                <div class="card m-1">
                    <div class="card-header bg-custom  px-5 py-3">
                        <h1>Trending Products</h1>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 ">
                            <div class="row">
                                @forelse ($trendingpoducts as $p)
                                    <div class="col-md-3">
                                        <div class="bg-custom card my-1 product-card ">
                                            <div class=" card-header text-center fw-bold fs-5 p-0">
                                                <span
                                                    class=' mx-4 fs-5 text-warning float-start'>{{ $p->brands->name }}</span>

                                                    <span class="btn btn-danger btn-sm float-end">New</span>
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
                                                        <img src="" alt="Image Not"
                                                            style="height: 300px;  width:100%;">
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
                                    <div class="text-center h3">
                                        No Products Available
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Trending Product End -->




            </div>
        @endsection
