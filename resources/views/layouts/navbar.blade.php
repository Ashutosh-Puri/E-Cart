
 <div>
    <!-- Nav Bar Start -->
    <nav class="navbar navbar-expand-md z-index-5 bg-custom   fw-bold  ">
        <div class="container-fluid ">
            <a class="navbar-brand fs-5 text-white fw-bold" href="{{ url('/') }}">
              <img  class="mx-2"src="{{ url('favicon.ico') }}" alt="" style="height: 20px; width:30px;">  {{ config('app.name', 'Laravel') }} 
            </a>
            
            
            <button class="navbar-toggler  btn btn-custom " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav   me-auto  ">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="  nav-link {{ (request()->is('/')) ? 'active' : '' }}"> <i class="mx-2 fa fa-home"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('productlist') }}" class="nav-link  {{ (request()->is('productlist')) ? 'active' : '' }}   "><i class="mx-2 	fas fa-sitemap"></i>Products</a>
                    </li>

                    @guest
                    
                        
                    @else
                        
                        <li class="nav-item">
                            <a href="{{ url('checkout') }}" class=" nav-link {{ (request()->is('checkout')) ? 'active' : '' }}"><i class="mx-2 fa fa-check"></i>Checkout</a>
                        </li>
                       
    
                    @endguest
                    <li class="nav-item">
                        <a href="{{ url('contactus') }}" class="nav-link  {{ (request()->is('contactus')) ? 'active' : '' }}"><i class="mx-2 fa fa-phone-alt"></i>Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('aboutus') }}" class="nav-link  {{ (request()->is('aboutus')) ? 'active' : '' }}"><i class="mx-2 fa fa-info-circle"></i> About Us</a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto ">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link  {{ (request()->is('login')) ? 'active' : '' }} " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <li class="nav-item">
                        <a href="{{ url('wishlist') }}" class="  nav-link  {{ (request()->is('wishlist')) ? 'active' : '' }} "><i class="mx-2 fa fa-heart"></i>Wishlist (@livewire('wishlist-count'))</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="{{ url('cart') }}" class=" nav-link {{ (request()->is('cart')) ? 'active' : '' }} "><i class="mx-2 fa fa-shopping-cart"></i>Cart (@livewire('cart-count'))</a>
                    </li>
                    
                        <li class="nav-item dropdown">
                           
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu bg-custom dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role=='1')                     
                                    <a class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}" href="{{ url('admin') }}"><i class="mx-2 fas fa-tachometer-alt"> </i> Dashboard</a>                
                                @endif
                                
                                <a class="nav-link {{ (request()->is('orders')) ? 'active' : '' }}" href="{{ url('orders') }}">  <i class="mx-2 fa fa-shopping-bag"> </i>My Orders</a>   
                                <a class="nav-link {{ (request()->is('account')) ? 'active' : '' }}" href="{{ url('account/'.auth()->user()->id) }}"> <i class="mx-2 fa  fa-user"> </i>My Account</a>                             
                                <a class="dropdown-item nav-link" href="{{ url('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                  <i class="mx-2 fa fa-power-off"></i>  Logout
                                </a>
                              
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                
                            </div>
                        </li>
                    @endguest
                  
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nav Bar End -->
    
</div>
