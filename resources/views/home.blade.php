@extends('layouts.app')

@section('content')
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
            <div class="row">
                <div class="col-md-3">
                    <nav class="navbar bg-custom">
                        <ul class="navbar-nav px-3">
                            <li class="nav-item ">
                               <p class="text-center fw-bold">Categories</p> 
                            </li>
                            @forelse ($categories as $c)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('productlist?categoryInputs[0]='.$c->id) }}">
                                        <table>
                                            <tr >
                                                <td ><i class="px-3 {{ $c->icon  }} " style="width: 50px;"></i></td>
                                                <td>{{ $c->name }}</td>
                                            </tr>
                                        </table>   
                                    </a>
                                </li>
                            @empty
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class=" px-2 fa fa-home "></i> No categories Found</a>
                                </li>
                            @endforelse
                            {{ $categories->links('pagination::bootstrap-5') }}
                            
                            
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item h-50 active">
                                <img src="img/slider-1.jpg" class="d-block  slider-img " alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Some text goes here that describes the image</h4>
                                    <a class="btn btn-custom" href=""><i class="fa fa-shopping-cart"></i> &nbsp;Shop
                                        Now</a>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <img src="img/slider-2.jpg" class="d-block slider-img " alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Some text goes here that describes the image</h4>
                                    <a class="btn btn-custom" href=""><i class="fa fa-shopping-cart"></i> &nbsp;Shop
                                        Now</a>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <img src="img/slider-3.jpg" class="d-block slider-img " alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>Some text goes here that describes the image</h4>
                                    <a class="btn btn-custom" href=""><i class="fa fa-shopping-cart"></i> &nbsp;Shop
                                        Now</a>
                                </div>
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header-img ">
                        <div class="img-item text-center">
                            <img src="img/category-1.jpg" class="category-img" />
                            <a class="img-text" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                        <div class="img-item text-center">
                            <img src="img/category-2.jpg" class="category-img" />
                            <a class="img-text" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!-- Feature Start-->
    <div class="feature">
        <div class="container-fluid ">
            <div class="row align-items-center bg-custom">
                <div class="col-lg-3 col-md-6 feature-col text-center  py-5">
                    <div class="feature-content">
                        <i class="big-icon fab fa-cc-mastercard"></i>
                        <h2>Secure Payment</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col text-center  py-5">
                    <div class="feature-content ">
                        <i class=" big-icon fa fa-truck"></i>
                        <h2>Worldwide Delivery</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col text-center  py-5 ">
                    <div class="feature-content  ">
                        <i class="big-icon fa fa-sync-alt"></i>
                        <h2>90 Days Return</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col text-center  py-5 ">
                    <div class="feature-content ">
                        <i class="big-icon fa fa-comments"></i>
                        <h2>24/7 Support</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur elit
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->


    <!-- Recent Product Start -->
    <div class="">
        <div class="container-fluid m-0 p-0">
            <div class=" bg-info text-danger px-5 py-3">
                <h1>Recent Product</h1>
            </div>
            <div class="row align-items-center  m-0 p-0 ">
                <div class="col-lg-3 ">
                    <div class="product-item bg-custom text-center">
                        <div class="product-title py-2">
                            <a href="#" class="fs-4 text-decoration-none ">Product Name</a>
                            <div class="ratting py-2 text-danger">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="img/product-1.jpg" alt="Product Image">
                            </a>
                            <div class="product-action py-1">
                                <a href="#"><i class="mx-2 fa fa-cart-plus"></i></a>
                                <a href="#"><i class="mx-2 fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>&#8377 &nbsp; </span>99</h3>
                            <a class="btn btn-custom my-2" href=""><i class="mx-2 fa fa-shopping-cart"></i>Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="product-item bg-custom text-center">
                        <div class="product-title py-2">
                            <a href="#" class="fs-4 text-decoration-none ">Product Name</a>
                            <div class="ratting py-2 text-danger">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="img/product-2.jpg" alt="Product Image">
                            </a>
                            <div class="product-action py-1">
                                <a href="#"><i class="mx-2 fa fa-cart-plus"></i></a>
                                <a href="#"><i class="mx-2 fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>&#8377 &nbsp; </span>99</h3>
                            <a class="btn btn-custom my-2" href=""><i class="mx-2 fa fa-shopping-cart"></i>Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-2">
                    <div class="product-item bg-custom text-center">
                        <div class="product-title py-2">
                            <a href="#" class="fs-4 text-decoration-none ">Product Name</a>
                            <div class="ratting py-2 text-danger">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="img/product-3.jpg" alt="Product Image">
                            </a>
                            <div class="product-action py-1">
                                <a href="#"><i class="mx-2 fa fa-cart-plus"></i></a>
                                <a href="#"><i class="mx-2 fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>&#8377 &nbsp; </span>99</h3>
                            <a class="btn btn-custom my-2" href=""><i class="mx-2 fa fa-shopping-cart"></i>Buy
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-2">
                    <div class="product-item bg-custom text-center">
                        <div class="product-title py-2">
                            <a href="#" class="fs-4 text-decoration-none ">Product Name</a>
                            <div class="ratting py-2 text-danger">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="img/product-4.jpg" alt="Product Image">
                            </a>
                            <div class="product-action py-1">
                                <a href="#"><i class="mx-2 fa fa-cart-plus"></i></a>
                                <a href="#"><i class="mx-2 fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>&#8377 &nbsp; </span>99</h3>
                            <a class="btn btn-custom my-2" href=""><i class="mx-2 fa fa-shopping-cart"></i>Buy
                                Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Recent Product End -->



    <!-- Review Start -->
    <div class="review">
        <div class="container-fluid">
            <div class="section-header bg-info text-danger px-5 py-3">
                <h1> Coustomer Review</h1>
            </div>
            <div class="row align-items-center p-0 m-0">
                <div class="col-md-3 text-center bg-custom py-4 ">
                    <div class="review-slider-item">
                        <div class="review-img">
                            <img src="img/review-1.jpg" alt="Image">
                        </div>
                        <div class="review-text">
                            <h2>Customer Name</h2>
                            <h3>Profession</h3>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo
                                finibus luctus et vitae lorem
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center bg-custom py-4 ">
                    <div class="review-slider-item">
                        <div class="review-img">
                            <img src="img/review-2.jpg" alt="Image">
                        </div>
                        <div class="review-text">
                            <h2>Customer Name</h2>
                            <h3>Profession</h3>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo
                                finibus luctus et vitae lorem
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center bg-custom py-4 ">
                    <div class="review-slider-item">
                        <div class="review-img">
                            <img src="img/review-3.jpg" alt="Image">
                        </div>
                        <div class="review-text">
                            <h2>Customer Name</h2>
                            <h3>Profession</h3>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo
                                finibus luctus et vitae lorem
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center bg-custom py-4 m-0">
                    <div class="review-slider-item">
                        <div class="review-img">
                            <img src="img/review-1.jpg" alt="Image">
                        </div>
                        <div class="review-text">
                            <h2>Customer Name</h2>
                            <h3>Profession</h3>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo
                                finibus luctus et vitae lorem
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Review End -->
</div>

@endsection
