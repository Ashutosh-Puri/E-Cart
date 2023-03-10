@extends('layouts.app')

@section('content')

<div class="table-responsive ">
    <table class="table bg-custom align-middle table-bordered text-center">
        <thead class="thead-dark">
            <tr>
                <th colspan="7"> 
                    <span class="h2 float-start">Order Items</span> 
                    <a class="float-end btn btn-success fw-bold" href="{{ route('orders.index') }}">Back</a>
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Order ID</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Product Color</th>
                <th>Quantity</th>
                <th>Price</th>
                
            </tr>
        </thead>
        <tbody>
      
            @forelse ($order->orderItems as $o)
                <tr>
                  
                    <td>{{ $o->id }}</td>
                   <td>{{ $o->order_id }}</td> 
                    <td>
                    @if (isset($o->product->productImages[0]))
                        <img src="{{ url($o->product->productImages[0]->image ) }}" alt="Image" style="height: 50px; width:50px;"/>
                    @endif
                    </td> 
                    <td > <p class="float-start">{{ $o->product->name }}</p></td>
                    <td>
                        @if (isset($o->productColor->colors))
                            {{ $o->productColor->colors->name}}
                         @endif
                    </td>
                    <td>{{ $o->quantity}}</td>
                    <td>&#8377; {{ $o->price }}</td> 
                  
                </tr>
            @empty
                <tr>
                    <th colspan="7"> Order Items Not Found</th>
                </tr>
            @endforelse
            <tr>
                <td colspan="7">
                    {{-- {{ $order->links('pagination::bootstrap-5')  }} --}}
                </td>
            </tr>
           
            
            
        </tbody>
    </table>
</div>
          

@endsection
