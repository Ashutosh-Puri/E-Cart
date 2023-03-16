@extends('admin.layout')

@section('admin_content')
<div class="card bg-custom">
    <div class="card-header">
        <p class="float-start h3">Contacts </p>
    </div>
    <div class="card-body">
        <div class="table-responsive ">
            
            <table class="table bg-custom align-middle table-bordered text-center">
                <thead class="thead-dark">
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
                    @php
                        $m=1;
                    @endphp
                    @forelse ($contacts as $o)
                        <tr>
                            <td>{{ $m++ }}</td>
                            <td>{{ $o->name }}</td>
                            <td>{{ $o->subject}}</td>
                            <td>{{ $o->phone}}</td>
                            <td>{{ $o->email}}</td>
                            <td>{{ $o->message}}</td>
                            <td>
                                <form class="d-inline" action="{{ route('contact.destroy',$o->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm fw-bold" onclick="return confirm('Are You Sure. You Want To Delete This Record')"  type="submit"> Delete</button>
                                </form>
                            </td>
                            
                        </tr>
                    @empty
                    <td colspan="7">
                        No Contacts Found
                    </td>
                    @endforelse
                    {{ $contacts->links('pagination::bootstrap-5')  }}
                 
                </tbody>
            </table>
        </div>
    </div>
</div>

          

@endsection
