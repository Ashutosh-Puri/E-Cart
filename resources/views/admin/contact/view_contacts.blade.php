@extends('admin.layout')

@section('admin_content')
<div class="card bg-custom">
    <div class="card-body">
        <div class="table-responsive ">
            
            <table class="table bg-custom align-middle table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="7" > <p class="float-start h3">Contacts </p> </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $o)
                        <tr>
                            <td>{{ $o->id }}</td>
                            <td>{{ $o->name }}</td>
                            <td>{{ $o->subject}}</td>
                            <td>{{ $o->phone}}</td>
                            <td>{{ $o->email}}</td>
                            <td>{{ $o->message}}</td>
                            <td>
                                <a class="btn btn-danger btn-sm fw-bold" onclick="$(this).parent().find('form').submit()">Delete</a>
                                <form action="{{ route('contact.destroy',$o->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                            
                        </tr>
                    @empty
                    <td colspan="7">
                        No Contacts Found
                    </td>
                    @endforelse
                    <tr>
                        <td colspan="7">
                            {{ $contacts->links('pagination::bootstrap-5')  }}
                        </td>
                    </tr>  
                </tbody>
            </table>
        </div>
    </div>
</div>

          

@endsection
