@extends('admin.layout')
@section('admin_content')
    <div class="row my-2">
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">Total Orders</label>
                </div>
                <h2 class=" fw-bold text-info">{{ $ordercount }}</h4>
                    <a href="{{ url('aorder') }}" class="nav-link"> View</a>
            </div>
        </div>
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">Todays Orders</label>
                </div>
                <h2 class=" fw-bold text-success">{{ $ordertoday }}</h4>
                    <a href="{{ url('aorder') }}" class="nav-link"> View</a>
            </div>
        </div>
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">This Month Orders</label>
                </div>
                <h2 class=" fw-bold text-warning">{{ $ordermonth }}</h4>
                    <a href="{{ url('aorder') }}" class="nav-link"> View</a>
            </div>
        </div>
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">This Year Orders</label>
                </div>
                <h2 class=" fw-bold text-danger">{{ $orderyear }}</h4>
                    <a href="{{ url('aorder') }}" class="nav-link"> View</a>
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">Total Categories</label>
                </div>
                <h2 class=" fw-bold text-info">{{ $categorycount }}</h4>
                <a href="{{ url('category') }}" class="nav-link"> View</a>
            </div>
        </div>
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">Total Brands</label>
                </div>
                <h2 class=" fw-bold text-success">{{ $brandcount }}</h4>
                <a href="{{ url('brand') }}" class="nav-link"> View</a>
            </div>
        </div>
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">Total Colors</label>
                </div>
                <h2 class=" fw-bold text-warning">{{ $colorcount }}</h4>
                <a href="{{ url('color') }}" class="nav-link"> View</a>
            </div>
        </div>
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">Total Products</label>
                </div>
                <h2 class=" fw-bold text-info">{{ $productcount }}</h4>
                <a href="{{ url('product') }}" class="nav-link"> View</a>
            </div>
        </div>
    </div>
    <div class="row my-1">
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">Total Users</label>
                </div>
                <h2 class=" fw-bold text-info">{{ $totalusercount }}</h4>
                <a href="{{ route('admin.show',1) }}" class="nav-link"> View</a>
            </div>
        </div>
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">Users</label>
                </div>
                <h2 class=" fw-bold text-success">{{ $usercount }}</h4>
                <a href="{{ route('admin.show',1) }}" class="nav-link"> View</a>
            </div>
        </div>
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">Admins</label>
                </div>
                <h2 class=" fw-bold text-warning">{{ $admincount }}</h4>
                <a href="{{ route('admin.show',1) }}" class="nav-link"> View</a>
            </div>
        </div>
        <div class="col-md-3 my-1">
            <div class="card bg-custom text-center">
                <div class="card-header">
                    <label for="">Contacts</label>
                </div>
                <h2 class=" fw-bold text-warning">{{ $contactcount }}</h4>
                <a href="{{ route('contact.index') }}" class="nav-link"> View</a>
            </div>
        </div>
    </div>
@endsection
