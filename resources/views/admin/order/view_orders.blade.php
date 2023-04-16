@extends('admin.layout')

@section('admin_content')
<div class="card bg-custom">
    <div class="card-header">
        <form action="" method="get">
            @csrf
            <div class="row">
                <div class="col-5 ">
                    <label class=" m-2" for="">Filter By Date</label>
                    <input type="date" name="date" value="{{ Request::get('date') ?? date('d-m-Y') }}" class=" m-2 form-control my-1">    
                </div>
                <div class="col-5 ">
                    <label class=" m-2" for="">Filter By Status</label> 
                    <select name="status" id="" class=" m-2 form-select my-1">
                        <option value="">Select All Status</option>
                        <option value="In Progress"{{ Request::get('status')=='In Progress'?'selected':''; }}>In Progress</option>
                        <option value="Completed"{{ Request::get('status')=='Completed'?'selected':''; }}>Completed</option>
                        <option value="Pending"{{ Request::get('status')=='Pending'?'selected':''; }}>Pending</option>
                        <option value="Cancelled"{{ Request::get('status')=='Cancelled'?'selected':''; }}>Cancelled</option>
                        <option value="Out For Delivery"{{ Request::get('status')=='Out For Delivery'?'selected':''; }}>Out For Delivery</option>
                    </select>
                </div>
                <div class="col-2 ">
                    <p class=" m-2">&nbsp;</p>
                    <button  type="submit" class="m-2 btn btn-primary float-end">Filter</button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-header">
        <p class="float-start h3">My Orders</p>
    </div>
    <div class="card-body">
        <div class="table-responsive ">
            
            <table class="table bg-custom align-middle table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Date & Time</th>
                        <th>Order Status</th>
                        <th>Tracking ID</th>
                        <th>Payment Mode</th>
                        <th>Payment Status</th>
                        <th>Payment ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $m=1;
                    @endphp
                    @forelse ($orders as $o)
                        <tr>
                            <td>{{ $m++}}</td>
                            <td>{{ $o->fullname }}</td>
                            <td>{{ $o->created_at->format('d / m / Y - h : m : s A') }}</td>
                           
                            <td>@if ($o->status_message == 'Cancelled')
                                <p class="text-danger fs-5  fw-bold">{{ $o->status_message }}</p>
                            @elseif ($o->status_message == 'In Progress')
                                <p class="text-white fs-5  fw-bold">{{ $o->status_message }}</p>
                            @elseif ($o->status_message == 'Completed')
                                <p class="text-success  fs-5 fw-bold">{{ $o->status_message }}</p>
                            @elseif ($o->status_message == 'Pending')
                                <p class="text-info  fs-5 fw-bold">{{ $o->status_message }}</p>
                            @else
                                <p class="text-primary  fs-5  fw-bold">{{ $o->status_message }}</p>
                            @endif</td>
                            <td>{{ $o->tracking_no}}</td>
                            <td>{{ $o->payment_mode}}</td>
                            <td>{{ $o->payment_status}}</td>
                            <td>{{ $o->payment_id==NULL?'-':$o->payment_id;}}</td>
                            <td><a href="{{ route('aorder.show',$o->id) }}" class="btn btn-warning">View</a></td>
                        </tr>
                    @empty
                    <td colspan="7">
                        No Order Found Plz Select Date
                    </td>
                    @endforelse
                     {{ $orders->links('pagination::bootstrap-5')  }}
                      
                </tbody>
            </table>
        </div>
    </div>
</div>

          

@endsection
