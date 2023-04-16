@extends('admin.layout')

@section('admin_content')
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
    <div class="card bg-custom my-1">
        <div class="table-responsive card-body">
            <table class="table bg-custom align-middle table-bordered ">
                <thead class="bg-custom ">

                    <tr>
                        <th colspan="8">
                            <span class="h2 float-start">Order</span>
                            <a class="float-end btn btn-success fw-bold" href="{{ route('aorder.index') }}">Back</a>
                            <a class="float-end btn mx-1 btn-warning fw-bold" href="{{ route('uinvoice.edit',$aorder->id) }}" target="_blank">Download Invoice</a>
                            <a class="float-end btn mx-1 btn-info fw-bold" href="{{ route('uinvoice.show',$aorder->id) }}" target="_blank">View Invoice</a>
                            <a class="float-end btn mx-1 btn-custom fw-bold" href="{{ url('uinvoice/'.$aorder->id.'/mail') }}" >Mail Invoice</a>
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
                        <td colspan="3">{{ $aorder->fullname }}</td>
                        <th class="text-info fw-bold">ID</th>
                        <td colspan="3">{{ $aorder->id }}</td>    
                    </tr>
                    <tr>
                        <th class="text-info fw-bold">Email</th>
                        <td colspan="3">{{ $aorder->email }}</td>
                        <th class="text-info fw-bold">Tracking Number</th>
                        <td colspan="3">{{ $aorder->tracking_no }}</td>
                    </tr>
                    <tr>
                        <th class="text-info fw-bold">Phone</th>
                        <td colspan="3">{{ $aorder->phone }}</td>
                        <th class="text-info fw-bold">Date & Time</th>
                        <td colspan="3">{{ $aorder->created_at->format('d-m-y  h:m:s A') }}</td>
                    </tr>
                    <tr>
                        <th class="text-info fw-bold">Address</th>
                        <td colspan="3">{{ $aorder->address }}</td>
                        <th class="text-info fw-bold"> Order Status</th>
                        <td colspan="3">
                            @if ($aorder->status_message == 'Cancelled')
                                <span class="text-danger fs-5  fw-bold">{{ $aorder->status_message }}</span>
                            @elseif ($aorder->status_message == 'In Progress')
                                <span class="text-white fs-5  fw-bold">{{ $aorder->status_message }}</span>
                            @elseif ($aorder->status_message == 'Completed')
                                <span class="text-success  fs-5 fw-bold">{{ $aorder->status_message }}</span>
                            @elseif ($aorder->status_message == 'Pending')
                                <span class="text-info  fs-5 fw-bold">{{ $aorder->status_message }}</span>
                            @else
                                <span class="text-primary  fs-5  fw-bold">{{ $aorder->status_message }}</span>
                            @endif
                        </td>
                        
                         
                    </tr>
                    <tr>
                        <th class="text-info fw-bold">Pincode</th>
                        <td colspan="3">{{ $aorder->pincode }}</td>
                        <th class="text-info fw-bold">Payment Mode</th>
                        <td colspan="3">{{ $aorder->payment_mode }}</td>
                   
                        
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <th class="text-info fw-bold">Payment Status</th>
                        <td colspan="3">{{ $aorder->payment_status }}</td>
                    </tr>
                    <tr>

                        <td colspan="4"></td>
                        <th class="text-info fw-bold">Payment ID</th>
                        <td colspan="3">{{ $aorder->payment_id == '' ? 'NULL' : $aorder->payment_id }}</td>
                     
                    </tr>
                    <tr>
                        <th colspan="8" class="h2 text-start ">Update Order Status</th>
                    </tr>
                    <tr>
                        <td colspan="8">
                            <form action="{{ route('aorder.update', $aorder->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-8">
                                        <div class="input-group">
                                            <label class="input-group-text form-label my-1 fw-bold " for="">Select
                                                Status</label>
                                            <select name="status" id=""
                                                class="form-select my-1 text-center fw-bold">
                                                <option
                                                    value="In Progress"{{ $aorder->status_message == 'In Progress' ? 'selected' : '' }}>
                                                    In Progress</option>
                                                <option
                                                    value="Completed"{{ $aorder->status_message == 'Completed' ? 'selected' : '' }}>
                                                    Completed</option>
                                                <option
                                                    value="Pending"{{ $aorder->status_message == 'Pending' ? 'selected' : '' }}>
                                                    Pending</option>
                                                <option
                                                    value="Cancelled"{{ $aorder->status_message == 'Cancelled' ? 'selected' : '' }}>
                                                    Cancelled</option>
                                                <option
                                                    value="Out For Delivery"{{ $aorder->status_message == 'Out For Delivery' ? 'selected' : '' }}>
                                                    Out For Delivery</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-success fw-bold form-control my-1"
                                            type="submit">Update</button>
                                    </div>
                                </div>


                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="card  bg-custom my-1 ">
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
                    @forelse ($aorder->orderItems as $o)
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
