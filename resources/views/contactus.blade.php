@extends('layouts.app')

@section('content')
    <div class="card bg-custom m-1 ">
        <div class="card-header">
            <div class="py-1">
                <div class="container-fluid fw-bold">
                    <a class="text-decoration-none text-success" href="{{ url('/') }}">Home</a> / Contact Us
                </div>
            </div>
        </div>
        <div class="card-body ">
            <!-- Contact Start -->
            <div class="row ">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="h3 text-center mb-4">If You Have Any Query, Please Contact Us</h1>
                    <p class="mb-4">
                        @if (session('s-status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('s-status') }}
                            </div>
                        @endif
                        @if (session('d-status'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('d-status') }}
                            </div>temp
                        @endif
                    <form class="text-black" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text"value="{{ old('name') }}"
                                        class="form-control @error('name') is-invalid @enderror" id="name" 
                                        placeholder="Your Name" name="name">
                                    <label for="name">Your Name</label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" value="{{ old('phone') }}"
                                        class="form-control @error('phone') is-invalid @enderror" id="phone"
                                        placeholder="Your Phone" name="phone">
                                    <label for="phone">Your Phone</label>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror " id="email"
                                        placeholder="Your Email" name="email">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" value="{{ old('subject') }}"
                                        class="form-control @error('subject') is-invalid @enderror" id="subject"
                                        placeholder="Subject" name="subject">
                                    <label for="subject">Subject</label>
                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control @error('message') is-invalid @enderror"
                                        placeholder="Leave a message here" id="message" style="height: 100px" name="message">{{ old('message') }}</textarea>
                                    <label for="message">Message</label>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-custom py-3 px-5" type="submit"> <i class=" mx-2 far fa-paper-plane"></i> Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed/v1/place?q=sangamner+khurd&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>

            <!-- Contact End -->
        </div>
    </div>
@endsection
