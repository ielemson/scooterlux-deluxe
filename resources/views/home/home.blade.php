<!doctype html>
<html lang="en">

<head>
    <title>scooterlux</title>
    <meta charset="utf-8" />
    <meta name="author" content="ThemeSurf">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{asset('home/assets/css/vendor.bundle.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">
    <link id="layoutstyle" rel="stylesheet" href="{{asset('home/assets/css/theme.css')}}">

</head>
<body data-spy="scroll" class="style-s2" data-target="#navbar" data-offset="105">

    <!-- header section -->
    <header class="section header-sec header-s2-image is-sticky has-bg-image">
        <div class="imagebg bg-image-loaded" style="background-image: url({{asset('home/images/product/Header_Pro1Evo.jpg')}});">
            {{-- <img src="images/bg-g.jpg" alt=""> --}}
        </div>
        <!-- Navbar -->
        <div id="navbar" class="main-navbar navbar navbar-expand-lg">
            <div class="container">
                <!-- logo -->
                <a class="navbar-brand" href="./">
                    <img class="logo logo-light" alt="logo" src="images/logo-dark.png" srcset="images/logo-white.png">
                    <img class="logo logo-dark" alt="logo" src="images/logo.png" srcset="images/logo-dark.png">
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
    <!-- End header section -->

    <!-- about section -->
    <div id="about" class="section section-pad">
        <div class="container">
            <div class="row row-vm">
                <div class="col-lg-5 res-m-bttm res-center">
                    <div class="sec-product">
                        <img src="{{asset('home/images/product/0.png')}}" alt="">
                    </div>
                </div><!-- /.col -->
                <div class="col-lg-7 justify-content-start">
                    <h2 class="heading-section">A wonderful homepod <br> all around  </h2>
                    <p>HomePod is a powerful speaker that sounds amazing and adapts to wherever it’s playing. Lorem Ipsum is simply dummy text of the printing simply dummy text of the printing and typesetting industry ipsum is simply dummy iorem Ipsum has been.</p>
                    <p>Printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie.</p>
                    <div class="gaps size-md"></div>
                    <div class="list">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="d-flex list-item justify-content-start">
                                    <img src="images/icon-k.png" alt="">
                                    <div class="list-con">
                                        <h5>Eary Operate System</h5>
                                        <p>You can operate it esily what you want </p>
                                    </div>
                                </div>
                                <div class="d-flex list-item justify-content-start">
                                    <img src="images/icon-k.png" alt="">
                                    <div class="list-con">
                                        <h5>Eary Operate System</h5>
                                        <p>You can operate it esily what you want </p>
                                    </div>
                                </div>
                            </div><!-- /.col -->
                            <div class="col-lg-6 col-sm-6">
                                <div class="d-flex list-item justify-content-start">
                                    <img src="images/icon-k.png" alt="">
                                    <div class="list-con">
                                        <h5>Eary Operate System</h5>
                                        <p>You can operate it esily what you want </p>
                                    </div>
                                </div>
                                <div class="d-flex list-item justify-content-start">
                                    <img src="images/icon-k.png" alt="">
                                    <div class="list-con">
                                        <h5>Eary Operate System</h5>
                                        <p>You can operate it esily what you want </p>
                                    </div>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div>
                    <div class="gaps size-md"></div>
                    {{-- <div class="price-area">
                        <h5>Starting Form <span> $320</span></h5>
                        <a href="#" class="btn btn-gradient">Buy Now</a>
                    </div> --}}
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- End section -->

    <!-- Video section -->
    <div class="section section-pad has-bg-image video-sec-s2">
        <div class="container">
            <div class="row row-vm">
                <div class="col-lg-6 res-m-bttm justify-content-end">
                    <h2 class="heading-section text-white">Watch the video <br> for all features details</h2>
                    {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look </p> --}}
                    <div class="gaps size-md"></div>
                    {{-- <a href="#" class="btn btn-gradient">MORE VIDEO</a>
                    <a href="#" class="icon-box size-md circle share"><i class="fa fa-share-alt"></i></a> --}}
                </div>
                <div class="col-lg-6">
                   <div class="video-img">
                       <img src="{{asset('home/images/product/section1.png')}}" alt="">
                       <a class="btn round video-pop" href="/home/product/images/video.mp4"><i class="fa fa-play" aria-hidden="true"></i></a>
                   </div>
                </div>

            </div>
        </div>
        <div class="imagebg">
            <img src="images/bg-b.png" alt="">
        </div>
    </div>
    <!-- End video -->

    <!-- Feature section -->
    <div id="feature" class="section section-pad feature feature-s2">
        <div class="container">

            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <div class="comm-head">
                        <h6 class="sub-title">PRODUCT FEATURES</h6>
                        <h1 class="heading-section">Mordern  Smart Watch all <br> Around the World</h1>
                    </div>
                </div>
            </div>
            <div class="gaps size-lg"></div>
            <div class="gaps"></div>
            <div class="row">
                <div class="col-md-3 text-right pr-0">
                    <div class="feature-item feature-item-a">
                        <h2>Soft Leather Belt</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                    <div class="feature-item feature-item-b">
                        <h2>Full Metal Locker</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                    <div class="feature-item feature-item-c">
                        <h2>Metal Body</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1 p-0">
                    <div class="feature-img res-m text-center">
                        <img src="{{asset('home/images/product/product_deatils.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3 offset-md-1 pl-0">
                    <div class="feature-item feature-item-e">
                        <h2>Long Lasting Battery</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                    <div class="feature-item feature-item-f">
                        <h2>High Quality Display</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                    <div class="feature-item feature-item-g">
                        <h2>Best Finishing</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="feature-item text-center feature-item-d">
                        <h2>Extrea Rift For Fitting</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- End Feature -->

  

    <!-- Product Section -->
    <div id="products" class="section section-pad product-sec client-logo">
      <div class="product-row pb-2 pt-2">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="comm-head">
                        <h1 class="heading-section">Awesome Product That<br>You Never Seen</h1>
                        <p>Convallis elit senectus justo dolor lorem, metus ex amet ac. Litora mattis in diam risus turpis vivamus, diam nisl lorem ligula vestibulum,</p>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-6">
                    <div class="single-product res-m-bttm text-center round ">
                        <div class="product-img">
                            <img src="{{asset('home/images/product/product-1.webp')}}" alt="">
                        </div>
                        <h4>Mi Pro 2 Electric Scooter - Black</h4>
                        <h3>$364</h3>
                        <a href="#" class="btn btn-outline">shop now </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-6">
                    <div class="single-product res-m-bttm text-center round">
                        <div class="product-img">
                            <img src="{{asset('home/images/product/Segway-Ninebot-F30E-Electric-Scooter.webp')}}" alt="">
                        </div>
                        <h4>F30E Electric Scooter</h4>
                        <h3>$475</h3>
                        <a href="#" class="btn btn-outline">shop now </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- End Product -->

    <!-- Subscribe -->
    <div class="section section-pad-md section-subscribe section-subscribe-s2 color-default has-bg has-parallax" style="background-image: url({{asset('home/images/product/Header_Pro1Evo.jpg')}})">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="comm-head">
                        <h1 class="heading-section">Subscribe to Our <br> Newsletter</h1>
                        <p>Submit your all infomation for get latest update libero lobortis, eu per faucibus in vehicula nunc luctusEgeetiam lorem lectus, sodales vestibulum, vestibulum.</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <!-- subscribe form -->
                    <div class="sub-group">
                        <form id="subscribe-form" method="post" action="http://demo.themesurf.com/portum/form/subscribe.php">
                            <input type="email" name="youremail" class="sub-input required email" placeholder="Enter Your Email">
                            <input type="text" class="d-none" name="form-anti-honeypot" value="">
                            <button type="submit" class="btn btn-subscribe">Submit Now</button>
                            <div class="subscribe-results"></div>
                        </form>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->

   

    <!-- Contact -->
    <div id="contact" class="section section-pad contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="comm-head">
                        <h1 class="heading-section">We are allways ready to <br> hear you</h1>
                        <p>Convallis elit senectus justo dolor lorem, metus ex amet ac. Litora mattis in diam risus turpis vivamus, diam nisl lorem ligula vestibulum.</p>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.col -->
            <div class="row">
                <div class="col-lg-3 col-sm-4 res-m-bttm">
                    <h3>Get In Touch</h3>
                    <p><strong>Office Location</strong>
                        803 Raccoon Run - Seattle,<br>
                        WA 98109 </p>
                    <p><strong>Phone Number</strong>
                        +880 176 5545 646<br>
                        +880132 21549 745</p>
                    <p><strong>Email Address</strong>
                        info@themesurf.com<br>
                        contact@portum.com</p>
                </div><!-- /.col -->
                <div class="col-lg-7 col-sm-7 offset-sm-1 offset-lg-2">
                    <div class="drop-message">
                        <h3>Get a Call Back</h3>
                        <form id="contact-request" class="form-message" action="http://demo.themesurf.com/portum/form/contact.php" method="post">
                            <div class="form-results"></div>
                            <div class="form-group row">
                                <div class="form-field col-sm-6 res-mb">
                                    <input name="contact-name" type="text" placeholder="Full Name" class="form-control required">
                                </div>
                                <div class="form-field col-sm-6">
                                    <input name="contact-email" type="email" placeholder="Email Address" class="form-control required email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-field col-sm-12">
                                    <input name="contact-phone" type="text" placeholder="Subject" class="form-control required">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="form-field col-sm-12">
                                    <textarea name="contact-message" placeholder="Messages" class="txtarea form-control required"></textarea>
                                </div>
                            </div>
                            <input type="text" class="d-none" name="form-anti-honeypot" value="">
                            <button type="submit" class="btn btn-gradient">SUMIT MESSAGE</button>
                        </form>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact -->

  

    <!-- Footer -->
    <div class="section footer-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="footer-logo">
                        <a href="index-2.html">
                            <img src="{{asset('home/images/logo-white.png')}}" alt="">
                        </a>
                    </div>
                    <ul class="footer-social">
                        <li><a href="#" class="icon-box circle"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                        <li><a href="#" class="icon-box circle"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
                        <li><a href="#" class="icon-box circle"><em class="fa fa-google-plus" aria-hidden="true"></em></a></li>
                        <li><a href="#" class="icon-box circle"><em class="fa fa-pinterest-p" aria-hidden="true"></em></a></li>
                        <li><a href="#" class="icon-box circle"><em class="fa fa-youtube" aria-hidden="true"></em></a></li>
                    </ul>
                    <p>Copyright &copy; {{Date('Y')}} <a href="#" class="c-p">ScooterLux </a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Preloader !remove please if you do not want -->
    <div id="preloader"><div id="loader"></div></div>
    <!-- Preloader End -->

    <!-- JavaScript Bundle -->
    <script src="{{asset('home/assets/js/jquery.bundle.js')}}"></script>
    <!-- Theme Script init() -->
    <script src="{{asset('home/assets/js/script.js')}}"></script>
    <!-- End script -->

</body>

</html>