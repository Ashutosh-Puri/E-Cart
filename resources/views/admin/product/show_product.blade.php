@extends('admin.layout')

@section('admin_content')

    <div class="row w-100 m-0">
        <div class="col m-0 p-0">
            @if (session('s-status'))
                <div class="alert alert-success" role="alert">
                        {{ session('s-status') }}
                </div>
            @endif
            @if (session('d-status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('d-status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header bg-custom fw-bold text-white">
                    View Product
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('product.index') }}">Back</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered  text-center table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Small Description</th>
                                <th>Description</th>
                                <th>Selling Price</th>
                                <th>Orignal Price</th>
                                <th>Quantity</th>
                                <th>Meta Title</th>
                                <th>Meta Keyword</th>
                                <th>Meta Description</th>
                                <th>Trending</th>
                                <th>Status</th>                              
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td scope="row">{{ $product->id }}</td>
                                    <td>{{ $product->categories->name }}</td>
                                    <td>{{ $product->brands->name}}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->slug}}</td>
                                    <td>{{$product->small_description }}</td>
                                    <td>{{$product->description }}</td>
                                    <td>{{$product->selling_price }}</td>
                                    <td>{{$product->orignal_price }}</td>
                                    <td>{{$product->quantity }}</td>
                                    <td>{{ $product->meta_title }}</td>
                                    <td>{{ $product->meta_keyword }}</td>
                                    <td>{{ $product->meta_description }}</td>
                                    <td>{{ $product->trending==0?'Trending':' Not Trending'; }}</td>
                                    <td>{{ $product->status==0?'Active':'In Active'; }}</td>
                                </tr>
                        </tbody>
                    </table>
                    <div>
                        @foreach ($product->productImages as $pro)
                        <img  class="m-1" src="{{ url( $pro->image ) }}" alt="" style="height:100px;width:100px;">
                        
                       
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
