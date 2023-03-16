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
                    View Products
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('product.create') }}">Create</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered text-center table-inverse ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $m=1;
                            @endphp
                            @forelse ($products as $i)
                                <tr>  
                                    <td scope="row">{{ $m++}}</td>
                                    <td> {{ $i->categories->name}}</td>
                                    <td> {{ $i->brands->name}}</td>
                                    <td> {{ $i->name }}</td>
                                    <td> {{ $i->slug}}</td>
                                    <td>{{ $i->status==0?'Active':'In Active'; }}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm fw-bold" href="{{ route('product.show',$i->id) }}">View</a>
                                        <a class="btn btn-primary btn-sm fw-bold" href="{{ route('product.edit',$i->id) }}">Edit</a>

                                      
                                        <form class="d-inline" id="delete-product" action="{{ route('product.destroy',$i->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm fw-bold" onclick="return confirm('Are You Sure. You Want To Delete This Record')"  type="submit"> Delete</button>
                                        </form>  
                                    </td>
                                </tr>
                            @empty
                             <td colspan="7">No Record Found..!</td>
                            @endforelse
                            {{ $products->links('pagination::bootstrap-5'); }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
