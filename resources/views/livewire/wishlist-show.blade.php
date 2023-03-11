<div>
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
        <div class="card-header">
            <div class="py-1">
                <div class="container-fluid fw-bold">
                    <a class="text-decoration-none text-success" href="{{ url('/') }}">Home</a> /
                    <a class="text-decoration-none text-success" href="{{ url('/productlist') }}">Products</a> /
                    Wishlist
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle bg-custom  text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle ">
                        @forelse ($wishlist as $w)
                            <tr>
                                <td>
                                    @if (isset( $w->product->productImages[0]))
                                      <a href="{{ url('viewproduct/'. $w->product->id) }}">  
                                            <img src="{{ $w->product->productImages[0]->image  }}" alt="Image" style="height: 50px; width:50px;">  
                                      </a>
                                    @endif
                                </td>
                                <td> <a href="{{ url('viewproduct/'. $w->product->id) }}">  <span class="mx-2 float-start text-white h5">{{ $w->product->name }}</span> </a></td>
                                <td><span class="text-white h5">&#8377; {{ $w->product->selling_price }}</span></td>
                                <td><button type="button" wire:click="removewishlistitem({{ $w->id }})" class="btn  btn-danger" ><i class="mx-2 fa fa-trash"></i>Remove</button></td>
                
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-white"> Items Not Added Yet.</td>
                            </tr>
                            
                        @endforelse
                            
                        
                </table>
            </div>
        </div>
    </div>




</div>
