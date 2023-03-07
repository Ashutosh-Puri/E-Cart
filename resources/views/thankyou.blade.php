@extends('layouts.app')

@section('content')
    <div class="row m-5 ">
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
        <div class="card text-center bg-custom col-10 col-md-6 mx-auto">
            <div class="card-header ">
                <h3>Thank You For Shopping With E-Cart</h3>
            </div>
            <div class="card-body ">
                <h5> Get Best Deals & Offers </h5>
            </div>
            <div class="card-footer m-4">
                <a class="btn btn-custom" href="{{ url('productlist') }}"><i class="mx-2 fa fa-shopping-bag"> </i>Shop Now</a>
            </div>

        </div>
    </div>
@endsection
