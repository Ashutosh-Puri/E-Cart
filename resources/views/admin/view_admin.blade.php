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
            <div class="card my-2 bg-custom  ">
                <div class="card-header fw-bold text-white">
                    View Admins
                    <a class="btn btn-custom fw-bold float-end" href="{{ route('admin.create') }}">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered bg-custom text-center table-inverse table-responsive-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($admins as $admin)
                                <tr class="text-white">
                                    <td  class="text-white"scope="row">{{ $admin->id }}</td>
                                    <td class="text-white">{{ $admin->name }}</td>
                                    <td class="text-white">{{ $admin->email }}</td>
                                    <td class="text-white">{{ $admin->role == '1'?'Admin':'User'; }}</td>
                                    <td class="text-white">
                                        <a class="btn btn-primary btn-sm fw-bold" href="{{ route('admin.edit',$admin->id) }}">Edit</a>

                                        <a class="btn btn-danger btn-sm fw-bold" onclick="$(this).parent().find('form').submit()">Delete</a>
                                        <form action="{{ route('admin.destroy',$admin->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                             <td class="text-white" colspan="5">No Record Found..!</td>
                            @endforelse
                            {{ $admins->links('pagination::bootstrap-5'); }}

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card my-2  bg-custom">
                <div class="card-header fw-bold text-white">
                    View Users
                   
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered text-center text-white table-inverse table-responsive-sm">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $admin)
                                <tr>
                                    <td class="text-white" scope="row">{{ $admin->id }}</td>
                                    <td class="text-white">{{ $admin->name }}</td>
                                    <td class="text-white">{{ $admin->email }}</td>
                                    <td class="text-white">{{ $admin->role == '1'?'Admin':'User'; }}</td>
                                    <td class="text-white">
                                        <a class="btn btn-primary btn-sm fw-bold" href="{{ route('admin.edit',$admin->id) }}">Edit</a>

                                        <a class="btn btn-danger btn-sm fw-bold" onclick="$(this).parent().find('form').submit()">Delete</a>
                                        <form action="{{ route('admin.destroy',$admin->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                             <td class="text-white" colspan="5">No Record Found..!</td>
                            @endforelse
                            {{ $users->links('pagination::bootstrap-5'); }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
