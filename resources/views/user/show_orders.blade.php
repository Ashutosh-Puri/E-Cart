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
        <div class="table-responsive card-body">
            <table class="table bg-custom align-middle table-bordered ">
                <thead class="bg-custom ">

                    <tr>
                        <th colspan="8">
                            <span class="h2 float-start">Order</span>
                            <a class="float-end btn mx-1 btn-success fw-bold" href="{{ route('orders.index') }}">Back</a>
                            <a class="float-end btn mx-1 btn-warning fw-bold" href="{{ route('uinvoice.edit',$order->id) }}" target="_blank">Download Invoice</a>
                            <a class="float-end btn mx-1 btn-info fw-bold" href="{{ route('uinvoice.show',$order->id) }}" target="_blank">View Invoice</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th colspan="4">User Details</th>
                        <th colspan="4">Order Details</th>
                    </tr>
                    <tr>
                        <th class="text-info fw-bold">User Name</th>
                        <td colspan="3">{{ $order->fullname }}</td>
                        <th class="text-info fw-bold">ID</th>
                        <td colspan="3">{{ $order->id }}</td>    
                    </tr>
                    <tr>
                        <th class="text-info fw-bold">Email</th>
                        <td colspan="3">{{ $order->email }}</td>
                        <th class="text-info fw-bold">Tracking Number</th>
                        <td colspan="3">{{ $order->tracking_no }}</td>
                    </tr>
                    <tr>
                        <th class="text-info fw-bold">Phone</th>
                        <td colspan="3">{{ $order->phone }}</td>
                        <th class="text-info fw-bold">Date & Time</th>
                        <td colspan="3">{{ $order->created_at->format('d-m-y  h:m:s A') }}</td>
                    </tr>
                    <tr>
                        <th class="text-info fw-bold">Address</th>
                        <td colspan="3">{{ $order->address }}</td>
                        <th class="text-info fw-bold">Payment ID</th>
                        <td colspan="3">{{ $order->payment_id == '' ? 'NULL' : $order->payment_id }}</td> 
                    </tr>
                    <tr>
                        <th class="text-info fw-bold">Pincode</th>
                        <td colspan="3">{{ $order->pincode }}</td>
                        <th class="text-info fw-bold">Payment Mode</th>
                        <td colspan="3">{{ $order->payment_mode }}</td>
                        
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <th class="text-info fw-bold"> Order Status</th>
                        <td colspan="3">
                            @if ($order->status_message == 'Cancelled')
                                <p class="text-danger fs-5  fw-bold">{{ $order->status_message }}</p>
                            @elseif ($order->status_message == 'In Progress')
                                <p class="text-white fs-5  fw-bold">{{ $order->status_message }}</p>
                            @elseif ($order->status_message == 'Completed')
                                <p class="text-success  fs-5 fw-bold">{{ $order->status_message }}</p>
                            @elseif ($order->status_message == 'Pending')
                                <p class="text-info  fs-5 fw-bold">{{ $order->status_message }}</p>
                            @else
                                <p class="text-primary  fs-5  fw-bold">{{ $order->status_message }}</p>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card  bg-custom m-1 ">
        <div class="table-responsive card-body">
            <table class="table align-middle table-bordered text-center  bg-custom  ">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="6">
                            <span class="h2 float-start">Order Items</span>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-info fw-bold">ID</th>
                        <th class="text-info fw-bold">Product Image</th>
                        <th class="text-info fw-bold">Product Name</th>
                        <th class="text-info fw-bold">Product Color</th>
                        <th class="text-info fw-bold">Quantity</th>
                        <th class="text-info fw-bold">Price</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    @forelse ($order->orderItems as $o)
                        <tr>

                            <td>{{ $o->id }}</td>
                            <td>
                                @if (isset($o->product->productImages[0]))
                                    <img src="{{ url($o->product->productImages[0]->image) }}" alt="Image"
                                        style="height: 50px; width:50px;" />
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                <p class="float-start">{{ $o->product->name }}</p>
                            </td>
                            <td>
                                @if (isset($o->productColor->colors))
                                    {{ $o->productColor->colors->name }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $o->quantity }}</td>
                            <td>&#8377; {{ $o->price }}</td>


                        </tr>
                        <?php $total += $o->quantity * $o->price; ?>
                    @empty
                        <tr>
                            <th colspan="6"> Order Items Not Found</th>
                        </tr>
                    @endforelse
                    <tr>
                        <td colspan="4">
                        <td class="fw-bold fs-4 text-success">Total Amount</td>
                        <td class="fw-bold fs-4 text-success">&#8377; {{ $total }}</td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> 

@endsection
