<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #{{ $uinvoice->id }}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">{{ env('APP_NAME') }}</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: # {{ $uinvoice->id }}</span> <br>
                    <span>Date: {{ date('d / m / Y') }} </span> <br>
                    <span>Pin code : 422605</span> <br>
                    <span>Address: Near Sai Amrut Petrolium, </span> <br>
                    <span>Sangamner Khurd, Sangamner, MH, IN</span> <br>
                    <span>Contact : 9373545745</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td>{{ $uinvoice->id }}</td>

                <td>Full Name:</td>
                <td>{{ $uinvoice->fullname }}</td>
            </tr>
            <tr>
                <td>Tracking Id/No.:</td>
                <td>{{ $uinvoice->tracking_no }}</td>

                <td>Email Id:</td>
                <td>{{ $uinvoice->email }}</td>
            </tr>
            <tr>
                <td>Ordered Date:</td>
                <td>{{ $uinvoice->created_at->format('d / m / Y - h : m : s A')}}</td>

                <td>Phone:</td>
                <td>{{ $uinvoice->phone }}</td>
            </tr>
            <tr>
                <td>Payment Mode:</td>
                <td>{{ $uinvoice->payment_mode }}</td>

                <td>Address:</td>
                <td>{{ $uinvoice->address  }}</td>
            </tr>
            <tr>
                <td>Order Status:</td>
                <td>{{ $uinvoice->status_message }}</td>

                <td>Pin code:</td>
                <td>{{ $uinvoice->pincode  }}</td>
            </tr>
            <tr>
                <td>Payment ID:</td>
                <td>{{ $uinvoice->payment_id==""?'Cash':$uinvoice->payment_id ; }}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Items
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Product</th>
                <th>Price (Rs.)</th>
                <th>Quantity</th>
                <th>Total (Rs.)</th>
            </tr>
        </thead>
        <tbody> 
            @php
                $i=1; $total=0;
            @endphp
            @forelse ($uinvoice->orderItems as $o)
                <tr>
                    <td width="10%">{{ $i++ }}</td>
                    <td>
                       {{ $o->product->name  }} 
                        @if (isset($o->productColor->colors))
                             ( {{ $o->productColor->colors->name }} ) 
                        @endif
                    </td>
                    <td width="10%">{{ $o->price }} </td>
                    <td width="10%">{{ $o->quantity }}</td>
                    <td width="15%" class="fw-bold">{{ ($o->price*$o->quantity) }}</td>
                    @php  $total+=($o->price*$o->quantity)@endphp
                </tr>
            @empty
               No Product Found 
            @endforelse
            <tr>
                <td colspan="4" >Shipping Cost</td>
                <td colspan="1">
                    @if ($total  >10000)
                         {{ 0 }}
                    @elseif (10000 > $total  &&  $total >1000)
                        {{ 20 }}
                    @elseif (1000 >= $total  &&  $total  >500)
                        {{ 50 }}
                    @else
                        {{ 150 }}
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="4" class="total-heading">Grand Total:</td>
                <td colspan="1" class="total-heading">Rs.
                    @if ($total  >10000)
                         {{ $total }}
                    @elseif (10000 > $total  &&  $total >1000)
                        {{ $total+20 }}
                    @elseif (1000 >= $total  &&  $total  >500)
                        {{  $total+50 }}
                    @else
                        {{  $total+150 }}
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <p class="text-center">
        Thank Your For Shopping With {{ env('APP_NAME') }}
    </p>
</body>
</html>