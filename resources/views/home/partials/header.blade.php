<header class="section header-sec header-s2-image is-sticky has-bg-image">
    <div class="imagebg bg-image-loaded" style="background-image: url({{asset('home/images/product/Header_Pro1Evo.jpg')}});">
        {{-- <img src="images/bg-g.jpg" alt=""> --}}
    </div>
    <!-- Navbar -->
    <div id="navbar" class="main-navbar navbar navbar-expand-lg">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand" href="/">
                <img class="logo logo-light" alt="logo" src="images/logo-dark.png" srcset="{{asset('home/images/logo-white.png')}}">
                <img class="logo logo-dark" alt="logo" src="images/logo.png" srcset="{{asset('home/images/logo-dark.png')}}">
            </a>
            <!-- end logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Mainnav -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav justify-content-end">
                    <li><a class="nav-link scroller active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        
                    </li>
                    <li><a class="nav-link scroller" href="#about">About</a></li>
                    <li><a class="nav-link scroller" href="#feature">Feature</a></li>
                    <li><a class="nav-link scroller" href="#products">Products</a></li>
                    <li><a class="nav-link scroller" href="#testimonial">Review</a></li>
                    <li><a class="nav-link scroller" href="#contact">Contact</a></li>
                </ul>
            </div>
            <!-- End Mainnav -->
        </div>
    </div>
    <!-- End Navbar -->

    <div class="container">
        <!-- Banner -->
        <div id="home" class="banner">
            <div class="row align-items-center">
                <div class="col-sm-7 col-9">
                    <div class="banner-text">
                        <h1>Now get your<br> awesome product here</h1>
                        <p class="leading">Vitae leo, sit ultrices quis, dictummolliscondimentum urna debitis, venenatis wisi donec .</p>
                        {{-- <a href="#" class="btn btn-gradient">SEE OUR PRODUCT</a> --}}
                    </div>
                </div>
                {{-- <div class="col-sm-4 offset-sm-1 col-3">
                    <div class="banner-img">
                        <img src="images/product-d.png" alt="">
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- End Banner -->
    </div>
    <!-- container -->
    <div id="particles-js"></div>
</header>