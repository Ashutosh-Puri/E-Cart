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
                    View Category
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('category.index') }}">Back</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered  text-center table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Meta Title</th>
                                <th>Meta Keyword</th>
                                <th>Meta Description</th>
                                <th>Icon</th>
                                <th>Status</th>                              
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td scope="row">{{ $category->id }}</td>
                                    <td> {{ $category->name }}</td>
                                    <td>{{ $category->slug}}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>{{ $category->meta_title }}</td>
                                    <td>{{ $category->meta_keyword }}</td>
                                    <td>{{ $category->meta_description }}</td>
                                    <td>{{ $category->icon }}</td>
                                    <td>{{ $category->status==0?'Active':'In Active'; }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
