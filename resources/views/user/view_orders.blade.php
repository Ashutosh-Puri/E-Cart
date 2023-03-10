@extends('layouts.app')

@section('content')

<div class="table-responsive ">
    <table class="table bg-custom align-middle table-bordered text-center">
        <thead class="thead-dark">
            <tr>
                <th colspan="9"> <h3>My Orders</h3> </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Payment Mode</th>
                <th>Transaction ID</th>
                <th>Status</th>
                <th>Tracking ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $o)
                <tr>
                    <td>{{ $o->id }}</td>
                    <td>{{ $o->fullname }}</td>
                    <td>{{ $o->email }}</td>
                    <td>{{ $o->created_at }}</td>
                    <td>{{ $o->payment_mode}}</td>
                    <td>{{ $o->payment_id==''?'NULL':$o->payment_id;}}</td>
                    <td>{{ $o->status_message}}</td>
                    <td>{{ $o->tracking_no}}</td>
                    <td><a href="{{ route('orders.show',$o->id) }}" class="btn btn-warning">View</a></td>
                </tr>
            @empty
                
            @endforelse
            <tr>
                <td colspan="9">
                    {{ $orders->links('pagination::bootstrap-5')  }}
                </td>
            </tr>
           
            
            
        </tbody>
    </table>
</div>
          

@endsection
