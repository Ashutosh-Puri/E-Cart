<div class="p-3 bg-custom   mt-auto" >
    <a href="admin" class=" text-center   link-primary text-decoration-none">
      <span class="fs-2 fw-bold"># ADMIN</span>
    </a>
    <hr>
    <div class="  ">
        <a href="{{ url('admin') }}" class="text-start btn w-100 m-1  btn-custom {{ (request()->is('admin')) ? 'active' : '' }}  "><i class="fas fa-tachometer-alt mx-3"></i>Dashboard</a>
        <a href="{{ url('category') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('category')) ? 'active' : '' }} "><i class="fa fa-stream mx-3"></i>Categories</a>
        <a href="{{ url('brand') }}" class="text-start btn w-100 m-1 btn-custom  {{ (request()->is('brand')) ? 'active' : '' }}"><i class="fas fa-award mx-3"></i>Brands</a> 
        <a href="{{ url('product') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('product')) ? 'active' : '' }}"><i class="fa fa-sitemap mx-3"></i>Products</a>
         <a href="{{ url('color') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('color')) ? 'active' : '' }}"><i class="fas fa-palette mx-3"></i>Colors</a> 
         <a href="{{ url('aorder') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('aorder')) ? 'active' : '' }}"><i class="fas fa-list-ul mx-3"></i>Orders</a>
         <a href="{{ url('admin/1') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('admin/1')) ? 'active' : '' }}"><i class="fas fa-users mx-3"></i>Users</a>
         <a href="{{ url('contact') }}" class="text-start btn w-100 m-1 btn-custom {{ (request()->is('contact')) ? 'active' : '' }}"><i class="fas fa-phone-alt mx-3"></i>Contacts</a>  
        
    </div>
</div>

