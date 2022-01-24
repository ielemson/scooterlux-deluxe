<!DOCTYPE html>
<html lang="en-us" class="no-js">

	<head>
		<meta charset="utf-8">
        <title>ScooterLux</title>
        <meta name="description" content="The description should optimally be between 150-160 characters.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Madeon08">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="img/favicon.png">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('landing/img/favicon-retina-ipad.png')}}">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('landing/img/favicon-retina-iphone.png')}}">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('landing/img/favicon-standard-ipad.png')}}">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('landing/img/favicon-standard-iphone.png')}}">

        <!-- ============== Resources style ============== -->
        <link rel="stylesheet" href="{{asset('landing/css/style.css')}}" />
        {{-- <link rel="stylesheet" href="{{asset('landing/css/product.css')}}" /> --}}

		<!-- Modernizr runs quickly on page load to detect features -->
		<script src="{{asset('landing/js/modernizr.custom.js')}}"></script>
	</head>
	
	<body>

		<!-- Page preloader -->
		
        <div id="loading">
			<div id="preloader">
				<span></span>
				<span></span>
			</div>
		</div>

		<!-- Overlay and Star effect -->
		<div class="global-overlay">
			<div class="overlay skew-part">

				<div id='stars'></div>
				<div id='stars2'></div>
				<div id='stars3'></div>

			</div>
		</div>

		<!-- START - Home/Left Part -->
		<section id="left-side">

			<!-- Your logo -->
			<img src="{{asset('landing/img/logo.png')}}" alt="" class="brand-logo" />

			<div class="content">

				<h1 class="text-intro opacity-0">Launching in :
					<div id="getting-started"></div>
				</h1>

				<h2 class="text-intro opacity-0">Hello World,.<br> Our vision is about to live</h2>

				<nav>
					<ul>
						<li>
							<a href="{{route('homeLanding')}}" data-target="right-side" class="light-btn text-intro opacity-0">More Informations</a>
						</li>
						<li>
							<a data-dialog="somedialog" class="action-btn trigger text-intro opacity-0">Notify Me!</a>
						</li>
					</ul>
				</nav>

			</div>

			<!-- Social icons -->
			<div class="social-icons">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>

			</div>

		</section>
		<!-- END - Home/Left Part -->



		<!-- START - Newsletter Popup -->
		<div id="somedialog" class="dialog">

			<div class="dialog__overlay"></div>
					
			<div class="dialog__content">
						
				<div class="dialog-inner">
							
					<h4>You like taking the lead of line?</h4>
							
					<p>Being the first to know always feels great... Signing up to our newsletter gives you <strong>exclusive access to our Grand Opening!</strong></p>

					<!-- Newsletter Form -->
					<div id="subscribe">

		                <form action="php/notify-me.php" id="notifyMe" method="POST">

		                    <div class="form-group">

		                        <div class="controls">
		                            
		                        	<!-- Field  -->
		                        	<input type="text" id="mail-sub" name="email" placeholder="Click here to write your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Click here to write your email'" class="form-control email srequiredField" />

		                        	<!-- Spinner top left during the submission -->
		                        	<i class="fa fa-spinner opacity-0"></i>

		                            <!-- Button -->
		                            <button class="btn btn-lg submit">Get notified</button>

		                            <div class="clear"></div>

		                        </div>

		                    </div>

		                </form>

						<!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
						<div class="block-message">

							<div class="message">

								<p class="notify-valid"></p>

							</div>

						</div>

        			</div>
        			<!-- /. Newsletter Form -->

				</div>
				<!-- /. dialog-inner -->

				<!-- Button Cross to close the Newsletter Popup -->
				<button class="close-newsletter" data-dialog-close><i class="icon ion-close-round"></i></button>

			</div>
			<!-- /. dialog__content -->
						
		</div>
		<!-- END - Newsletter Popup -->

		<!-- Root element of PhotoSwipe, the gallery. Must have class pswp. -->
		<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		    <!-- Background of PhotoSwipe. 
	        	It's a separate element as animating opacity is faster than rgba(). -->
		    <div class="pswp__bg"></div>

		    <!-- Slides wrapper with overflow:hidden. -->
		    <div class="pswp__scroll-wrap">

		        <!-- Container that holds slides. 
		            PhotoSwipe keeps only 3 of them in the DOM to save memory.
		            Don't modify these 3 pswp__item elements, data is added later on. -->
		        <div class="pswp__container">
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		        </div>

		        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		        <div class="pswp__ui pswp__ui--hidden">

		            <div class="pswp__top-bar">

		                <!--  Controls are self-explanatory. Order can be changed. -->

		                <div class="pswp__counter"></div>

		                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

		                <button class="pswp__button pswp__button--share" title="Share"></button>

		                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

		                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

		                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
		                <!-- element will get class pswp__preloader--active when preloader is running -->
		                <div class="pswp__preloader">
		                    <div class="pswp__preloader__icn">
		                      <div class="pswp__preloader__cut">
		                        <div class="pswp__preloader__donut"></div>
		                      </div>
		                    </div>
		                </div>

		            </div>

		            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
		                <div class="pswp__share-tooltip"></div> 
		            </div>

		            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
		            </button>

		            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
		            </button>

		            <div class="pswp__caption">
		                <div class="pswp__caption__center"></div>
		            </div>

		        </div>

		    </div>

		</div>
		<!-- /. Root element of PhotoSwipe. Must have class pswp. -->

	<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
    <!-- ********** Resources jQuery ********** -->
    <!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->
	
	<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
	<script src="{{asset('landing/js/jquery.min.js')}}"></script>
	<script src="{{asset('landing/js/jquery.easings.min.js')}}"></script>
	<script src="{{asset('landing/js/bootstrap.min.js')}}"></script>

	<!-- PhotoSwipe Core JS file -->
	<script src="{{asset('landing/js/velocity.min.js')}}"></script> 

	<!-- PhotoSwipe UI JS file -->
	<script src="{{asset('landing/js/velocity.ui.min.js')}}"></script> 

	<!-- Newsletter plugin -->
	<script src="{{asset('landing/js/notifyMe.js')}}"></script>

	<!-- Contact form plugin -->
	<script src="{{asset('landing/js/contact-me.js')}}"></script>

	<!-- Slideshow/Image plugin -->
	<script src="{{asset('landing/js/vegas.js')}}"></script>

	<!-- Scroll plugin -->
	<script src="{{asset('landing/js/jquery.mousewheel.js')}}"></script>

	<!-- Custom Scrollbar plugin -->
	<script src="{{asset('landing/js/jquery.mCustomScrollbar.js')}}"></script>

	<!-- Popup Newsletter Form -->
	<script src="{{asset('landing/js/classie.js')}}"></script>
	<script src="{{asset('landing/js/dialogFx.js')}}"></script>

	<!-- PhotoSwipe Core JS file -->
	<script src="{{asset('landing/js/photoswipe.js')}}"></script> 

	<!-- PhotoSwipe UI JS file -->
	<script src="{{asset('landing/js/photoswipe-ui-default.js')}}"></script>

	<!-- Countdown plugin -->
	<script src="{{asset('landing/js/jquery.countdown.js')}}"></script>

	<script>
	$("#getting-started")
		// Year/Month/Day Hour:Minute:Second
		.countdown("2022/10/24 15:30:30", function(event) {
			$(this).text(
				event.strftime('%D Days %Hh %Mm %Ss')
			);
	});
	</script>

	<!-- Main JS File -->
	<script src="{{asset('landing/js/main.js')}}"></script>
	
	<!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

	</body>

</html>