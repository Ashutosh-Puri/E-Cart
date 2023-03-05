
 <div>
    <!-- Nav Bar Start -->
    <nav class="navbar navbar-expand-md z-index-5 bg-custom  pb-0 fw-bold  ">
        <div class="container-fluid ">
            <a class="navbar-brand fs-5 text-white fw-bold" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler bg-white " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav   me-auto  ">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="  nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="productlist" class="nav-link  {{ (request()->is('productlist')) ? 'active' : '' }}   ">Products</a>
                    </li>
                    @guest
                        
                    @else
                        <li class="nav-item">
                            <a href="" class=" nav-link {{ (request()->is('cart')) ? 'active' : '' }} ">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class=" nav-link {{ (request()->is('checkout')) ? 'active' : '' }}">Checkout</a>
                        </li>
                        <li>
                            <a href="" class="nav-link {{ (request()->is('wishlist')) ? 'active' : '' }}">Wishlist</a>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle " type="button" data-bs-toggle="dropdown"
                                aria-expanded="true">More</a>
                            <div class="dropdown-menu bg-custom">
                                
                                <a href="" class="dropdown-item ">Contact Us</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
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
                       
                        <li class="nav-item dropdown">
                           
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu bg-custom dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role=='1')                     
                                    <a class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}" href="{{ url('admin') }}">{{ __('A Dashboard') }}</a>
                                    <a class="nav-link {{ (request()->is('user')) ? 'active' : '' }}" href="{{ url('user') }}">{{ __('U Dashboard') }}</a>                         
                                @endif
                                @if (Auth::user()->role=='0')                     
                                    <a class="nav-link {{ (request()->is('user')) ? 'active' : '' }}" href="{{ url('user') }}">{{ __('U Dashboard') }}</a>                     
                                @endif
                                <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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
    <!-- Bottom Bar Start -->
    <div class="container-fluid m-0 p-0 bg-custom  ">
        <div class="row m-0 py-2">
            <div class=" col-8 col-md-8    m-0 ">
                <div class="input-group  ">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <span class="btn btn-custom input-group-text" id="basic-addon2"><i
                            class="p-1 fa fa-search"></i></span>
                </div>
            </div>
            <div class=" col-4 col-md-4   p-0 m-0">
                <div class=" float-end ">
                    <a href="wishlist.html" class="btn btn-custom   mx-2">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="cart.html" class="btn btn-custom mx-2">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->
</div>
