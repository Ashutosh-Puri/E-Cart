@extends('layouts.app')

@section('content')

<div class="card bg-custom m-1">
    <div class="card-body">
        <div class="table-responsive ">
            
            <table class="table bg-custom align-middle table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="7" > <p class="float-start h3">My Orders</p> </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Date</th>
                        <th>Payment Mode</th>
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
                            <td>{{ $o->created_at }}</td>
                            <td>{{ $o->payment_mode}}</td>
                            <td>{{ $o->status_message}}</td>
                            <td>{{ $o->tracking_no}}</td>
                            <td><a href="{{ route('orders.show',$o->id) }}" class="btn btn-warning">View</a></td>
                        </tr>
                    @empty
                    <td colspan="7">
                        No Order Found Plz Select Date
                    </td>
                    @endforelse
                    <tr>
                        <td colspan="7">
                            {{ $orders->links('pagination::bootstrap-5')  }}
                        </td>
                    </tr>  
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
