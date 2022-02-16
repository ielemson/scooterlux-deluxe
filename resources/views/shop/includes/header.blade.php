<header class="header_area">
 
    <!-- Main Menu -->
    <div class="bigshop-main-menu">
        <div class="container">
            <div class="classy-nav-container breakpoint-off">
                <nav class="classy-navbar" id="bigshopNav">

                    <!-- Nav Brand -->
                    <a href="{{url('/')}}" class="nav-brand"><img class="logo" src="{{ asset('shop') }}/img/logo/logo-dark.png"></a>

                    <!-- Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Close -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{url('/welcome')}}">Home</a>
                                  
                                <li class="{{ request()->is('products') ? 'active' : '' }}"><a href="{{route('home')}}">Shop</a></li>
                                @auth()
                                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    @else
                                    <li><a href="#">Account</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('login')}}">Login</a></li>
                                            <li><a href="{{route('register')}}">Register</a></li>
                                            {{-- <li><a href="index-3.html">Home - 3</a></li> --}}
                                        </ul>
                                    </li>
                                @endauth
                        </div>
                    </div>

                    <!-- Hero Meta -->
                    <div class="hero_meta_area ml-auto d-flex align-items-center justify-content-end">
                      

                        <!-- Wishlist -->
                        <div class="wishlist-area">
                            <a href="wishlist.html" class="wishlist-btn"><i class="icofont-heart"></i></a>
                        </div>

                        <!-- Cart -->
                        <div class="cart-area">
                            <div class="cart--btn"><i class="icofont-cart"></i> <span class="cart_quantity count" id="cartQty"></span></div>

                            <!-- Cart Dropdown Content -->
                            <div class="cart-dropdown-content">
                                <ul class="cart-list">
                                   
                                    <div id="miniCart">

                                    </div>
                                   
                                </ul>
                                <div class="cart-pricing my-4">
                                    <ul>
                                        <li>
                                            <span>Sub Total:</span>
                                            <span>&#8358;<b id="cartSubTotal"></b></span>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="cart-box">
                                    <a href="{{ route('checkout-page') }}" class="btn btn-primary d-block">Checkout</a>
                                </div>
                            </div>
                        </div>
                        @auth
                             <!-- Account -->
                        <div class="account-area">
                            <div class="user-thumbnail">
                                <img src="{{ !empty(Auth::user()->profile_photo_path) ? '/storage/profile-photos/'.Auth::user()->profile_photo_path : '/storage/profile-photos/avatar.jpg' }}">
                            </div>
                            <ul class="user-meta-dropdown">
                                <li class="user-title"><span>Hello,</span>{{ Auth::user()->name }}</li>
                                <li><a href="{{route('dashboard')}}">My Account</a></li>
                                <li><a href="{{route('user.orders')}}">Orders List</a></li>
                                {{-- <li><a href="wishlist.html">Wishlist</a></li> --}}
                                <li><a href="{{route('user.logout')}}"><i class="icofont-logout"></i> Logout</a></li>
                            </ul>
                        </div>
                        @endauth
                       
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>