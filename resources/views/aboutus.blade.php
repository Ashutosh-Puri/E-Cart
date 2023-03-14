@extends('layouts.app')
@section('content')
    <div class="card bg-custom m-1">
        <div class="card-header">
            <div class="card-header">
                <div class="py-1">
                    <div class="container-fluid fw-bold">
                        <a class="text-decoration-none text-success" href="{{ url('/') }}">Home</a> / About Us
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body ">

            <!-- About Start -->
            <div class="container py-5">
                <div class="container">
                    <div class="row  my-4">
                    
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                            <h1 class="display-5 mb-4">We Help Our Clients To Grow Their Business</h1>
                            <p class="mb-4">Sustained growth is the natural result of combining an award-winning web
                                platform, a multi-talented professional team, and an intelligently crafted marketing
                                strategy. It’s our privilege to help you grow and achieve your business objectives.</p>
                            <div class="border rounded p-4">
                                <nav>
                                    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                        <button class="nav-link text-danger fw-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-story" type="button" role="tab"
                                            aria-controls="nav-story" aria-selected="true">Story</button>
                                        <button class="nav-link text-danger fw-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-mission" type="button" role="tab"
                                            aria-controls="nav-mission" aria-selected="false">Mission</button>
                                        <button class="nav-link text-danger fw-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-vision" type="button" role="tab"
                                            aria-controls="nav-vision" aria-selected="false">Vision</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                        aria-labelledby="nav-story-tab">
                                        <p>“As a customer looking at a product, I need to be informed if a product is on sale, so that I am encouraged to purchase it.”</p>
                                        
                                    </div>
                                    <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                        aria-labelledby="nav-mission-tab">
                                        <p>We help people achieve independence by making it easier to start, run, and grow a business. We believe the future of commerce has more voices, not fewer, so we’re reducing the barriers to business ownership to make commerce better for everyone.</p>
                                        
                                    </div>
                                    <div class="tab-pane fade" id="nav-vision" role="tabpanel"
                                        aria-labelledby="nav-vision-tab">
                                        <p>Our vision is to be earth's most customer centric company; to build a place where people can come to find and discover anything they might want to buy online.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded my-4  p-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h4> <i class="fa mx-2 fa-times text-white"></i> No Hidden Cost</h4>
                        <span>We Don't Apply Any Kind of Hidden Charges</span>
                    </div>
                    <div class="border rounded my-4  p-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h4>   <i class="fa mx-2 fa-users text-white"></i> Dedicated Team</h4>
                        <span>A dedicated team structure is a structure in which the project is outsourced to remote developers</span>
                    </div>
                    <div class="border rounded my-4 p-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h4>  <i class="fa mx-2 fa-phone text-white"></i> 24/7 Available</h4>
                        <span>By being available 24/7 for your customers</span>
                    </div>

                </div>
            </div>
            <!-- About End -->
            
        </div>
    </div>
@endsection
