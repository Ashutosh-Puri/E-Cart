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
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active">Wishlist</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Wishlist Start -->
<div class="">
    <div class="container-fluid">
      
            <div class="row">
                <div class="col-md-12">
                
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
                                        <td colspan="5"> Items Not Added Yet.</td>
                                    </tr>
                                    
                                @endforelse
                                    
                                
                        </table>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<!-- Wishlist End -->
</div>
