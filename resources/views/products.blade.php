@extends('layouts.app')

@section('content')
    <div class="">
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
        <!-- Breadcrumb Start -->
        <div class="py-1">
            <div class="container-fluid fw-bold">
                <a class="text-decoration-none text-success" href="{{ url('/') }}">Home</a> /
                Products
            </div>
        </div>
        <!-- Breadcrumb End -->
        <!-- Product List Start -->
        <div class="product-view py-1">
            <div class="container-fluid">
                @livewire('products')
            </div>
        </div>
        <!-- Product List End -->
    </div>
@endsection
