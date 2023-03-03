<div class="p-3 bg-custom min-h-fit   mt-auto" >
    <a href="admin" class=" text-center   link-primary text-decoration-none">
      <span class="fs-2 fw-bold"># ADMIN</span>
    </a>
    <hr>
    <div class="  ">
        <a href="{{ url('admin') }}" class="text-start btn w-100 m-1  btn-custom {{ (request()->is('admin')) ? 'active' : '' }}  "><i class="fas fa-tachometer-alt mx-3"></i>Dashboard</a>
        <a href="{{ url('category') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('category')) ? 'active' : '' }} "><i class="fa fa-stream mx-3"></i>Categories</a>
        <a href="{{ url('brand') }}" class="text-start btn w-100 m-1 btn-custom  {{ (request()->is('brand')) ? 'active' : '' }}"><i class="fa fa-store mx-3"></i>Brands</a> 
        <a href="{{ url('product') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('product')) ? 'active' : '' }}"><i class="fa fa-flag mx-3"></i>Products</a>
         <a href="{{ url('color') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('color')) ? 'active' : '' }}"><i class="fa fa-circle mx-3"></i>Colors</a> 
        {{-- {{-- <a href="" class="text-start btn w-100 m-1  btn-custom"><i class="fa fa-circle mx-3"></i>States</a>
        <a href="" class="text-start btn w-100 m-1 btn-custom "><i class="fas fa-square mx-3"></i>Cities</a>
        <a href="" class="text-start btn w-100 m-1  btn-custom"><i class="fas fa-play mx-3"></i>Villages</a>
        <a href="" class="text-start btn w-100 m-1  btn-custom"><i class="far fa-credit-card mx-3"></i>Footer</a> --}}
    </div>
</div>

