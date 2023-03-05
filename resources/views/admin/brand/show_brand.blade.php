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
                    View Brand
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('brand.index') }}">Back</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered  text-center table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>                              
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td> {{ $brand->category->name }}</td>
                                    <td scope="row">{{ $brand->id }}</td>
                                    <td> {{ $brand->name }}</td>
                                    <td>{{ $brand->slug}}</td>
                                    <td>{{ $brand->status==0?'Active':'In Active'; }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
