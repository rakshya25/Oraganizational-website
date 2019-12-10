
<!DOCTYPE html>

<html>

	
<!-- Mirrored from velikorodnov.com/html/candidate/main-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2016 12:20:38 GMT -->
<head>
		
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Title -->
		<title>Federation of National Christian Nepal</title>
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">
		
		<!-- Stylesheets -->
		
		<link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo e(asset('assets/css/fontello.css')); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo e(asset('assets/css/flexslider.css')); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo e(asset('assets/js/revolution-slider/css/settings.css')); ?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo e(asset('assets/css/owl.carousel.css')); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo e(asset('assets/css/responsive-calendar.css')); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo e(asset('assets/css/chosen.css')); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo e(asset('assets/jackbox/css/jackbox.min.css')); ?>" rel="stylesheet" type="text/css" />
		<!-- <link href="<?php echo e(asset('assets/jackbox/css/cloud-zoom.css')); ?>" rel="stylesheet" type="text/css" /> -->
		<link href="<?php echo e(asset('assets/css/colorpicker.css')); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" type="text/css">

		
		<style type="text/css">
			.no-fouc {display:none;}
	  	</style>
		
		<!-- jQuery -->

		<script src="<?php echo e(asset('assets/js/jquery-1.11.0.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/js/jquery-ui-1.10.4.min.js')); ?>"></script>
		
		<!-- Preloader -->

		<script src="<?php echo e(asset('assets/js/jquery.queryloader2.min.js')); ?>"></script>
		
		<script type="text/javascript">
		$('html').addClass('no-fouc');
		
		$(document).ready(function(){
			
			$('html').show();
			
			var window_w = $(window).width();
			var window_h = $(window).height();
			var window_s = $(window).scrollTop();
			
			$("body").queryLoader2({
				backgroundColor: '#f2f4f9',
				barColor: '#63b2f5',
				barHeight: 4,
				percentage:false,
				deepSearch:true,
				minimumTime:1000,
				onComplete: function(){
					
					$('.animate-onscroll').filter(function(index){
					
						return this.offsetTop < (window_s + window_h);
						
					}).each(function(index, value){
						
						var el = $(this);
						var el_y = $(this).offset().top;
						
						if((window_s) > el_y){
							$(el).addClass('animated fadeInDown').removeClass('animate-onscroll');
							setTimeout(function(){
								$(el).css('opacity','1').removeClass('animated fadeInDown');
							},2000);
						}
						
					});
					
				}
			});
			
		});
		</script>
		
	</head>
	
	<body class="sticky-header-on tablet-sticky-header boxed-layout">
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "../../../connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>		
		<!-- Container -->
		<div class="container">
			
			
			<!-- Header -->
			<header id="header" class="animate-onscroll">
				
				<!-- Main Header -->
				<div id="main-header">
					
					<div class="container">
					
					<div class="row">
						<!-- Logo -->
						<div id="logo" class="col-lg-2 col-md-2 col-sm-2">
							
							<a href="<?php echo e(url('')); ?>"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="Logo"></a>
							
						</div>
						<!-- /Logo -->
						
						
						
						<!-- Main Quote -->
						<div class="col-lg-6 col-md-5 col-sm-5" style="margin-top: 20px">
							
							<!-- <blockquote>Slogan of Federation of National Christian Nepal or some bible verse can be kept kere.</blockquote> -->
							<h1>FEDERATION OF NATIONAL CHRISTIAN NEPAL</h1>
							<blockquote>Slogan or some bible verse can be kept kere.</blockquote>
							
						</div>
						<!-- /Main Quote -->
						
						
						
						<!-- Newsletter -->
						<div class="col-lg-4 col-md-5 col-sm-5" style="margin-top: 40px">
							
							<form id="newsletter" action="<?php echo e(url('')); ?>" method="POST">
								<!-- http://velikorodnov.com/html/candidate/php/newsletter-form.php -->
								<h5><strong>Sign up</strong> for email updates</h5>
								<div class="newsletter-form">
								
									<div class="newsletter-email">
										<input type="text" name="newsletter-email" placeholder="Email address">
									</div>
									
									<div class="newsletter-zip">
										<input type="text" name="newsletter-zip" placeholder="Zip code">
									</div>
									
									<div class="newsletter-submit">
										<input type="submit" value="">
										<i class="icons icon-right-thin"></i>
									</div>
									
								</div>
								
							</form>
							
						</div>
						<!-- /Newsletter -->
						
						
						
					</div>
					
					</div>
					
				</div>
				<!-- /Main Header -->
				
				
				
				
				
				<!-- Lower Header -->
				<div id="lower-header">
					
					<div class="container">
					
					<div id="menu-button">
						<div>
						<span></span>
						<span></span>
						<span></span>
						</div>
						<span>Menu</span>
					</div>
					
					<ul id="navigation">
						
						<!-- Home -->
						<li class="home-button current-menu-item">
							<a href="index.html"><i class="icons icon-home"></i></a>
						</li>
						<!-- /Home -->
						
						<!-- Pages -->
						<li >
						
							<span>Pages</span>
							
							<ul>
								<li><a href="about.html">About</a></li>
								<li><a href="team.html">Team</a></li>
								<li><a href="issues.html">Issues</a></li>
								<li><a href="testimonials.html">Testimonials</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="page-right-sidebar.html">Page with right sidebar</a></li>
								<li><a href="page-left-sidebar.html">Page with left sidebar</a></li>
								<li><a href="page-fullwidth.html">Full width page</a></li>
							</ul>
							
						</li>
						<!-- /Pages -->
						
						<!-- Events -->
						<li >
						
							<span>Events</span>
							
							<ul>
							
								<li><a href="event-calendar.html">Calendar</a></li>
								<li><a href="event-post-v1.html">Event post style 1</a></li>
								<li><a href="event-post-v2.html">Event post style 2</a></li>
								
							</ul>
							
						</li>
						<!-- /Events -->
						
						<!-- Media -->
						<li >
						
							<span>Media</span>
							
							<ul>
							
								<li>
									<span>Sortable Grid</span>
									<ul>
										<li><a href="media-sortable-1column-sidebar.html">1 Column with right sidebar</a></li>
										<li><a href="media-sortable-2columns.html">2 Columns</a></li>
										<li><a href="media-sortable-3columns.html">3 Columns</a></li>
										<li><a href="media-sortable-3columns-sidebar.html">3 Columns with left sidebar</a></li>
										<li><a href="media-sortable-4columns.html">4 Columns</a></li>
									</ul>
								</li>
								
								<li>
									<span>Grid with pagination</span>
									<ul>
										<li><a href="media-grid-1column-sidebar.html">1 Column with right sidebar</a></li>
										<li><a href="media-grid-2columns.html">2 Columns</a></li>
										<li><a href="media-grid-3columns.html">3 Columns</a></li>
										<li><a href="media-grid-3columns-sidebar.html">3 Columns with left sidebar</a></li>
										<li><a href="media-grid-4columns.html">4 Columns</a></li>
									</ul>
								</li>
								
								<li>
									<span>Classic gallery</span>
									<ul>
										<li><a href="media-classic-sortable-3columns.html">Sortable 3 Columns</a></li>
										<li><a href="media-classic-sortable-3columns-sidebar.html">Sortable 3 Columns with right sidebar</a></li>
										<li><a href="media-classic-sortable-4columns.html">Sortable 4 Columns</a></li>
										<li><a href="media-classic-3columns.html">3 Columns</a></li>
										<li><a href="media-classic-3columns-sidebar.html">3 Columns with left sidebar</a></li>
										<li><a href="media-classic-4columns.html">4 Columns</a></li>
									</ul>
								</li>
								
								<li>
									<span>Single portfolio post</span>
									<ul>
										<li><a href="portfolio-single-fullwidth.html">Fullwidth</a></li>
										<li><a href="portfolio-single-sidebar.html">With Sidebar</a></li>
										<li><a href="portfolio-single-extended.html">Extended Image Slideshow</a></li>
									</ul>
								</li>
								
							</ul>
							
						</li>
						<!-- /Media -->
						
						
						
						<!-- Get Involved -->
						<li >
							<a href="get-involved.html">Get Involved</a>
						</li>
						<!-- /Get Involved -->
						
						
						
						<!-- Features -->
						<li >
						
							<span>Features</span>
							
							<ul>
							
								<li><a href="features-typography.html">Typography</a></li>
								<li><a href="features-shortcodes.html">Shortcodes</a></li>
								
							</ul>
							
						</li>
						<!-- /Features -->
						
						
						<!-- Blog -->
						<li >
						
							<span>Blog</span>
							
							<ul>
							
								<li><a href="blog-v1.html">Blog style 1 with right sidebar</a></li>
								<li><a href="blog-v2.html">Blog style 2 with left sidebar</a></li>
								<li><a href="blog-fullwidth.html">Full width blog</a></li>
								<li><span>Single blog post</span>
									<ul>
										<li><a href="blog-single-sidebar.html">With sidebar</a></li>
										<li><a href="blog-single-fullwidth.html">Full width</a></li>
									</ul>
								</li>
								
							</ul>
							
						</li>
						<!-- /Blog -->
						
						
						<!-- Shop -->
						<li >
						
							<span>Shop</span>
							
							<ul>
							
								<li><a href="shop-frontpage.html">Front page</a></li>
								<li><a href="shop-productpage.html">Product page</a></li>
								<li><a href="shop-cart.html">Shopping cart</a></li>
								<li><a href="shop-checkout.html">Checkout</a></li>
								
							</ul>
							
						</li>
						<!-- /Shop -->
						
						<!-- Donate -->
						<li class="donate-button ">
							<a href="#">Donate Today</a>
						</li>
						<!-- /Donate -->
						
					</ul>
					
					</div>
					
				</div>
				<!-- /Lower Header -->
				
				
			</header>
			<!-- /Header -->




		<section id="content">
			
			<!-- Section -->
			<section class="section full-width-bg">
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						
						<!-- Revolution Slider -->
						<div class="tp-banner-container main-revolution">
						
							<span class="Apple-tab-span"></span>
 
							<div class="tp-banner">
								
								<ul>
								
									<!-- 
									<li data-transition="papercut" data-slotamount="7">
										<img src="images/slide2.jpg" alt="">
										<div class="tp-caption align-center" data-x="center" data-y="135" data-speed="700" data-start="1000" data-easing="easeOutBack"><h4 class="great-vibes">it’s time for changes</h4></div>
										<div class="tp-caption align-center" data-x="center" data-y="220" data-speed="500" data-start="1200" data-easing="easeOutBack"><h2>Building Our Future Together!</h2></div>
										<div class="tp-caption align-center" data-x="center" data-y="300" data-speed="300" data-start="1400"><a href="#" class="button big button-arrow">Get Involved</a></div>
									</li> -->
									
									<li data-transition="papercut" data-slotamount="7">
									
										<img src="<?php echo e(asset('assets/images/slide10.jpg')); ?>" alt="sasa">
										<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="150" data-speed="700" data-start="1000" data-easing="easeOutBack"><h2 style="background-color: rgba(51, 204, 255, 0.6);">WORKING FOR CHANGE</h2></div>
										<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="225" data-speed="500" data-start="1200" data-easing="easeOutBack"><p style="background-color: rgba(255, 255, 255, 0.6); color: black;">We belive, we can change the nation<br> Some good points here </p></div>
										<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="305" data-speed="300" data-start="1400"><a href="#" class="button big button-arrow">More Info</a></div>
									</li>
									<li data-transition="papercut" data-slotamount="7">
										<img src="<?php echo e(asset('assets/images/slide11.jpg')); ?>" alt="">
										<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="150" data-speed="700" data-start="1000" data-easing="easeOutBack"><h2 style="background-color: rgba(51, 204, 255, 0.6);">WORKING FOR CHANGE</h2></div>
										<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="225" data-speed="500" data-start="1200" data-easing="easeOutBack"><p style="background-color: rgba(255, 255, 255, 0.6);">We belive, we can change the nation<br> Some good points here </p></div>
										<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="305" data-speed="300" data-start="1400"><a href="#" class="button big button-arrow">More Info</a></div>
									</li>
								</ul>
								
							</div>
						 
						</div>
						<!-- /Revolution Slider -->
						
					</div>
					
					
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						<div class="banners-inline">
						
													<div class="banner-wrapper">
							<a class="banner animate-onscroll" href="#">
								<i class="icons icon-calendar"></i>
								<h4>Event and Meetings</h4>
								<p>See about our latest events</p>
							</a>
						</div>
						
						<div class="banner-wrapper">
							<a class="banner animate-onscroll" href="#">
								<i class="icons icon-check"></i>
								<h4>Register church</h4>
								<p>Come with our association</p>
							</a>
						</div>
						
						<div class="banner-wrapper">
							<a class="banner animate-onscroll" href="#">
								<i class="icons icon-user"></i>
								<h4>Volunteer</h4>
								<p>Become an volunteer</p>
							</a>
						</div>
						
						<div class="banner-wrapper">
							<div class="banner donate-banner animate-onscroll">
							
								<h5>Make a <strong>quick donation</strong> here</h5>
								<form>
								
									<input id="donate-amount-1" type="radio" name="donate-amount">
									<label for="donate-amount-1">$5</label>
									
									<input id="donate-amount-2" type="radio" name="donate-amount">
									<label for="donate-amount-2">$25</label>
									
									<input id="donate-amount-3" type="radio" name="donate-amount">
									<label for="donate-amount-3">$100</label>
									
									<input type="submit" value="Donate">
									
								</form>
							</div>
						</div>							
						</div>
						
					</div>
				
				</div>
				
			</section>
			<!-- /Section -->
			
			
			
			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-9 col-md-9 col-sm-8">
						
						<h3 class="animate-onscroll no-margin-top">Latest news</h3>
						
												<!-- Blog Post -->
						<div class="blog-post big animate-onscroll">
							
							<div class="post-image">

								<img src="<?php echo e(asset('assets/images/blog/post1.jpg')); ?>" alt="">
							</div>
							
							<h4 class="post-title"><a href="blog-single-sidebar.html">Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed</a></h4>
							
							<div class="post-meta">
								<span>by <a href="#">admin</a></span>
								<span>October 01, 2013 11:28AM</span>
							</div>
							
							<p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
							
							<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
							
						</div>
						<!-- /Blog Post -->						
					</div>
					
					
					
					<!-- Sidebar -->
					<div class="col-lg-3 col-md-3 col-sm-4 sidebar">
						
												<!-- Upcoming Events -->
						<div class="sidebar-box white animate-onscroll">
							<h3>Upcoming Events</h3>
							<ul class="upcoming-events">
							
								<!-- Event -->
								<li>
									<div class="date">
										<span>
											<span class="day">25</span>
											<span class="month">DEC</span>
										</span>
									</div>
									
									<div class="event-content">
										<h6><a href="event-post-v2.html">Christmas Celebration</a></h6>
										<ul class="event-meta">
											<li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
											<li><i class="icons icon-location"></i> 340 W 50th Babarmahal</li>
										</ul>
									</div>
								</li>
								<!-- /Event -->
								
								<!-- Event -->
								<li>
									<div class="date">
										<span>
											<span class="day">5</span>
											<span class="month">JAN</span>
										</span>
									</div>
									
									<div class="event-content">
										<h6><a href="event-post-v2.html">Pray for Nation</a></h6>
										<ul class="event-meta">
											<li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
											<li><i class="icons icon-location"></i> 340 W 50th St.Xaviers College</li>
										</ul>
									</div>
								</li>
								<!-- /Event -->
								
								<!-- Event -->
								<li>
									<div class="date">
										<span>
											<span class="day">8</span>
											<span class="month">JAN</span>
										</span>
									</div>
									
									<div class="event-content">
										<h6><a href="event-post-v2.html">Usual Meeting</a></h6>
										<ul class="event-meta">
											<li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
											<li><i class="icons icon-location"></i> 340 W 50th Manbhavan</li>
										</ul>
									</div>
								</li>
								<!-- /Event -->
								
							</ul>
							<a href="#" class="button transparent button-arrow">More events</a>
						</div>
						<!-- /Upcoming Events -->						
					</div>
					<!-- /Sidebar -->
					
				</div>
				
				
				
				<div class="row no-margin-bottom">
				
					
					<div class="col-lg-12 col-md-12 col-sm-12">
						
												
						<!-- Owl Carousel -->
						<div class="owl-carousel-container">
							
							<div class="owl-header">
								
								<h3 class="animate-onscroll">Other Stories</h3>
								
								<div class="carousel-arrows animate-onscroll">
									<span class="left-arrow"><i class="icons icon-left-dir"></i></span>
									<span class="right-arrow"><i class="icons icon-right-dir"></i></span>
								</div>
								
							</div>
							
							<div class="owl-carousel" data-max-items="4">
										
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="<?php echo e(asset('assets/images/blog/post2.jpg')); ?>" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Meantime some children continued to sob</a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Soon a teacher came and led us to some classrooms. There we were put into four separate classes. This was when some children began to cry as the parents were not allowed into the classrooms.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
								
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">

											<img src="<?php echo e(asset('assets/images/blog/post3.jpg')); ?>" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Meantime some children continued to sob</a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Soon a teacher came and led us to some classrooms. There we were put into four separate classes. This was when some children began to cry as the parents were not allowed into the classrooms.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
								
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="<?php echo e(asset('assets/images/blog/post4.jpg')); ?>" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Meantime some children continued to sob</a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Soon a teacher came and led us to some classrooms. There we were put into four separate classes. This was when some children began to cry as the parents were not allowed into the classrooms.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
								
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="<?php echo e(asset('assets/images/blog/post2.jpg')); ?>" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Meantime some children continued to sob</a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Soon a teacher came and led us to some classrooms. There we were put into four separate classes. This was when some children began to cry as the parents were not allowed into the classrooms.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
								
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="<?php echo e(asset('assets/images/blog/post3.jpg')); ?>" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Meantime some children continued to sob </a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Soon a teacher came and led us to some classrooms. There we were put into four separate classes. This was when some children began to cry as the parents were not allowed into the classrooms.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
								
								<!-- Owl Item -->
								<div>
									
									<!-- Blog Post -->
									<div class="blog-post animate-onscroll">
										
										<div class="post-image">
											<img src="<?php echo e(asset('assets/images/blog/post4.jpg')); ?>" alt="">
										</div>
										
										<h4 class="post-title"><a href="blog-single-sidebar.html">Meantime some children continued to sob</a></h4>
										
										<div class="post-meta">
											<span>by <a href="#">admin</a></span>
											<span>October 01, 2013 11:28AM</span>
										</div>
										
										<p>Soon a teacher came and led us to some classrooms. There we were put into four separate classes. This was when some children began to cry as the parents were not allowed into the classrooms.</p>
										
										<a href="blog-single-sidebar.html" class="button read-more-button big button-arrow">Read More</a>
										
									</div>
									<!-- /Blog Post -->
									
								</div>
								<!-- /Owl Item -->
							
							</div>
						
						</div>
						<!-- /Owl Carousel -->						
					</div>
					
					
				
				</div>
				
				
				
			
				
				
				
			</section>
			<!-- /Section -->
		
		</section>



			
			<!-- Footer -->
			<footer id="footer">
				
				<!-- Main Footer -->
				<div id="main-footer">
					
					<div class="row">
						
						<div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">
							
							<h4>Text Widget</h4>
							
							<p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel.<br><br>
Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum.</p>
							
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">
							
							<h4>Campaign</h4>
								
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 menu-container">
								
								<ul class="menu">
									<li><a href="#">About</a></li>
									<li><a href="#">Issues</a></li>
									<li><a href="#">Media</a></li>
									<li><a href="#">Blog</a></li> 
									<li><a href="#">Shop</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
								
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 menu-container">
								
								<ul class="menu">
									<li><a href="#">Email updates</a></li>
									<li><a href="#">Find events</a></li>
									<li><a href="#">Make calls</a></li>
									<li><a href="#">Register to vote</a></li> 
									<li><a href="#">Donate</a></li>
									<li><a href="#">Volunteer</a></li>
								</ul>
								
							</div>
							
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 twitter-widget-area animate-onscroll">
							
							<h4>Latest Tweets</h4>
							
							<div class="twitter-widget">
                                
							</div>
							
							<a href="#" class="button twitter-button">Follow us on twitter</a>
							
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 animate-onscroll">
							
							<h4>Like us on facebook</h4>
							
							<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=270&amp;height=240&amp;colorscheme=dark&amp;header=false&amp;show_faces=true&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:100%; height:240px;"></iframe>
							
						</div>
						
					</div>
					
				</div>
				<!-- /Main Footer -->
				
				
				
				
				<!-- Lower Footer -->
				<div id="lower-footer">
					
					<div class="row">
						
						<div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll">
						
							<p class="copyright">© 2016 Candidate. All Rights Reserved.</p>
							
						</div>
						
						<div class="col-lg-8 col-md-8 col-sm-8 animate-onscroll">
							
							<div class="social-media">
								<ul class="social-icons">
									<li class="facebook"><a href="#" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
									<li class="twitter"><a href="#" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
									<li class="google"><a href="#" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>
									<li class="youtube"><a href="#" class="tooltip-ontop" title="Youtube"><i class="icons icon-youtube-1"></i></a></li>
									<li class="flickr"><a href="#" class="tooltip-ontop" title="Flickr"><i class="icons icon-flickr-4"></i></a></li>
									<li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
									<li class="instagram"><a href="#" class="tooltip-ontop" title="" data-original-title="Instagram"><i class="icons icon-instagram"></i></a></li>
								</ul>
							</div>
							
						</div>
						
					</div>
					
				</div>
				<!-- /Lower Footer -->
				
			
			</footer>
			<!-- /Footer -->
			
			
			
			<!-- Back To Top -->
			<a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>
			
			
			
			<!-- Customize Box -->
		<!-- 	<div class="customize-box">
				
				<h5>Layout Settings</h5>
				
				<form id="customize-box">
					
					<label>Layout type:</label><br>
					<input type="radio" value="boxed" name="layout-type" id="boxed-layout-radio"><label for="boxed-layout-radio">Boxed</label>
					<input type="radio" value="wide" name="layout-type" checked="checked" id="wide-layout-radio"><label for="wide-layout-radio">Wide</label>
					
					<br>
					
					<label>Background:</label>
					<select id="background-option" class="chosen-select">
						<option value=".background-color">Color</option>
						<option selected value=".background-image">Background</option>
					</select>
					
					<div class="background-color">
						<div id="colorpicker"></div>
						<input type="hidden" id="colorpicker-value" value="#000">
					</div>
					
					<div class="background-image">
						<input type="radio" value="image/background/1.jpg" name="background-image-radio" id="background-img-radio-1" checked>
						<label for="background-img-radio-1"><img src="images/background/1-thumb.jpg" alt=""></label>
						
						<input type="radio" value="img/background/2.jpg" name="background-image-radio" id="background-img-radio-2">
						<label for="background-img-radio-2"><img src="images/background/2-thumb.jpg" alt=""></label>
						
						<input type="radio" value="img/background/3.jpg" name="background-image-radio" id="background-img-radio-3">
						<label for="background-img-radio-3"><img src="images/background/3-thumb.jpg" alt=""></label>
					</div>
					
					<input type="submit" value="Submit">
					<input type="reset" value="Reset">
					
				</form>
				
				<div class="customize-box-button">
					<i class="icons icon-cog-3"></i>
				</div>
				
			</div> -->
			<!-- /Customize Box -->
		
		</div>
		<!-- /Container -->	
	
		<!-- JavaScript -->
		
		<!-- Bootstrap -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
		
		<!-- Modernizr -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/modernizr.js')); ?>"></script>
		
		<!-- Sliders/Carousels -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.flexslider-min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
		
		<!-- Revolution Slider  -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/revolution-slider/js/jquery.themepunch.plugins.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js')); ?>"></script>
		
		<!-- Calendar -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/responsive-calendar.min.js')); ?>"></script>
		
		<!-- Raty -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.raty.min.js')); ?>"></script>
		
		<!-- Chosen -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/chosen.jquery.min.js')); ?>"></script>
		<!-- jFlickrFeed -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/jflickrfeed.min.js')); ?>"></script>
		
		<!-- InstaFeed -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/instafeed.min.js')); ?>"></script>
		
		<!-- Twitter -->
		<script type="text/javascript" src="php/twitter/jquery.tweet.js"></script>
		
		<!-- MixItUp -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.mixitup.js')); ?>"></script>
		
		<!-- JackBox -->
		<script type="text/javascript" src="<?php echo e(asset('assets/jackbox/js/jackbox-packed.min.js')); ?>"></script>
		
		<!-- CloudZoom -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zoomsl-3.0.min.js')); ?>"></script>
		
		<!-- ColorPicker -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/colorpicker.js')); ?>"></script>
		
		<!-- Main Script -->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
		
		
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/jquery.placeholder.js"></script>
			<script type="text/javascript" src="js/script_ie.js"></script>
		<![endif]-->
		
		
	</body>


<!-- Mirrored from velikorodnov.com/html/candidate/main-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2016 12:22:21 GMT -->
</html>