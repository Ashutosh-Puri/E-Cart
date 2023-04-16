@extends('layouts.app')

@section('content')
@if (session()->has('s-status'))
        <div class="alert my-2 mx-2 alert-success d-flex align-items-center">
            {{ session('s-status') }}
        </div>
    @endif
    @if (session()->has('d-status'))
        <div class="alert my-2 mx-2  alert-danger d-flex align-items-center">
            {{ session('d-status') }}
        </div>
    @endif
<div class="card bg-custom m-1">
    <div class="card-body">
        <div class="table-responsive ">
            
            <table class="table bg-custom align-middle table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="9" > <p class="float-start h3">My Orders</p> </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Date & Time</th>
                        <th>Order Status</th>
                        <th>Tracking ID</th>
                        <th>Payment Mode</th>
                        <th>Payment ID</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $o)
                        <tr>
                            <td>{{ $o->id }}</td>
                            <td>{{ $o->fullname }}</td>
                            <td>{{ $o->created_at->format('d / m / Y - h : m : s - A') }}</td>
                            <td>
                                @if ($o->status_message == 'Cancelled')
                                    <p class="text-danger fs-5  fw-bold">{{ $o->status_message }}</p>
                                @elseif ($o->status_message == 'In Progress')
                                    <p class="text-white fs-5  fw-bold">{{ $o->status_message }}</p>
                                @elseif ($o->status_message == 'Completed')
                                    <p class="text-success  fs-5 fw-bold">{{ $o->status_message }}</p>
                                @elseif ($o->status_message == 'Pending')
                                    <p class="text-info  fs-5 fw-bold">{{ $o->status_message }}</p>
                                @else
                                    <p class="text-primary  fs-5  fw-bold">{{ $o->status_message }}</p>
                                @endif
                            </td>
                            <td>{{ $o->tracking_no}}</td>
                            <td>{{ $o->payment_mode}}</td>
                            <td>{{ $o->payment_id==NULL?'-':$o->payment_id;}}</td>
                            <td>{{ $o->payment_status}}</td>
                            <td>
                                <a href="{{ route('orders.show',$o->id) }}" class="btn btn-warning">View</a>
                                @if ($o->status_message == 'Out For Delivery' || $o->status_message == 'Completed')
                                    <a href="{{ route('orders.edit',$o->id) }}" class=" @if ($o->status_message == 'Cancelled')  disabled     @endif btn btn-primary">Return</a>
                                @else
                                  <a href="{{ route('orders.edit',$o->id) }}" class=" @if ($o->status_message == 'Cancelled')  disabled  @elseif ($o->status_message == 'Out For Delivery')  disabled  @elseif ($o->status_message == 'Completed') disabled  @endif btn btn-danger">Cancel</a>
                                @endif
                               
                            </td>
                        </tr>
                    @empty
                    <td colspan="9">
                        No Order Available
                    </td>
                    @endforelse
                    <tr>
                        <td colspan="9">
                            {{ $orders->links('pagination::bootstrap-5')  }}
                        </td>
                    </tr>  
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
