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
                    View Color
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('color.index') }}">Back</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered  text-center table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Status</th>                              
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td scope="row">{{ $color->id }}</td>
                                    <td> {{ $color->name }}</td>
                                    <td>{{ $color->code}}</td>
                                    <td>{{ $color->status==0?'Active':'In Active'; }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
