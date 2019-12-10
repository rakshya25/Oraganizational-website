<?php
//$blog_last_one=\DB::table('blogs')->orderBy('id', 'desc')->where('published','1')->first();
	$blogs=\DB::table('blogs')->orderBy('id', 'desc')->where('published','1')->limit(2)->get();
	$galleries=\DB::table('galleries')->orderBy('id', 'desc')->limit(20)->get();
	$featured=\DB::table('galleries')->orderBy('id', 'desc')->where('category','Featured')->limit(1)->get();

?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta charset="UTF-8">
		<meta name="description" content="<?php echo $__env->yieldContent('page-description'); ?>">
		<meta name="keywords" content="hbwcsnepal, HBWCSN, HBWCSnepal, Prabha Pokharel, Nepali women, Home Based Nepal, Rakshya Bista">
		<meta name="author" content="Rakshya">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
		<?php echo $__env->yieldContent('page-title'); ?>| HBWCSN
		</title>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/zenecees/favicon.png')); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/zenecees/front-style.css')); ?>" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/zenecees/blue.css')); ?>" media="all" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('assets/css/zenecees/prettyPhoto.css')); ?>"  />
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/zenecees/museo.css')); ?>" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/zenecees/ptsans.css')); ?>" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/zenecees/charis.css')); ?>" media="all" />
		<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="ll" />
		<![endif]-->
		<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
		<![endif]-->
		<!--[if IE 9]>
		<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
		<![endif]-->
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/jquery-1.6.2.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/ddsmoothmenu.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/transify.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/jquery.aw-showcase.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/jquery.jcarousel.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/carousel.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/jquery.prettyPhoto.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/jquery.superbgimage.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/jquery.slickforms.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/jquery.masonry.min.js')); ?>"></script>

		<script type="text/javascript">
		jQuery(document).ready(function($){
			$('.forms').dcSlickForms();
		});
		</script>
		<script type="text/javascript">
		$(document).ready(function()
		{
			$("#showcase").awShowcase({
				content_width:			900,
				content_height:			400,
				auto:					true,
				interval:				3000,
				continuous:				true,
				arrows:					true,
				buttons:				true,
				btn_numbers:			true,
				keybord_keys:			true,
				mousetrace:				false, /* Trace x and y coordinates for the mouse */
				pauseonover:			true,
				stoponclick:			false,
				transition:				'hslide', /* hslide/vslide/fade */
				transition_delay:		0,
				transition_speed:		1000,
				show_caption:			'onload' /* onload/onhover/show */
			});
		});
		</script>
	</head>
	<body>
		<!-- Fullscreen backgrounds -->
		<div id="thumbs">
			<a href="<?php echo e(asset('assets/images/zenecees/art/Background-BluetoWhite.jpg')); ?>">1</a>
		</div>
		<div id="superbgimage">
			<div class="scanlines"></div>
		</div>
		<!-- End Fullscreen backgrounds -->
		<!-- Begin Wrapper -->
		<div id="wrapper">
			<div id="header" style="padding-bottom: 0px">
				<div class="logo opacity"><a href="<?php echo e(url('')); ?>"><img src="<?php echo e(asset('assets/images/logo.jpg')); ?>" width="990px" height="138px" alt="" /></a></div>
				<div class="social">
					<ul>
						<li><a target="_blank" href="https://www.facebook.com/Home-Based-Worker-Concerned-Society-Nepal-697592663775436"><img src="<?php echo e(asset('assets/images/zenecees/icon-facebook.png')); ?>" title="facebook" alt="facebook" /></a></li>
						<li><a target="_blank" title="Sorry, We do not use twitter at this moment." href="#"><img src="<?php echo e(asset('assets/images/zenecees/icon-twitter.png')); ?>" alt="twitter" /></a></li>
						<li><a target="_blank" href="https://plus.google.com/#"><img src="<?php echo e(asset('assets/images/zenecees/icon-googleplus.png')); ?>" title="google+" alt="google+" /></a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
			<!-- Begin Menu -->
			<?php echo $__env->make('front.partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<!-- End Menu -->
			<!-- Begin Container -->
			<div id="container" class="opacity" style="margin-top: 3px">
				
				<!-- contents start -->
				<?php echo $__env->yieldContent('content'); ?>
				<!-- contents end -->
				<!-- Begin Latest Works -->
				<?php if(\Request::is('gallery')): ?>
					
				<?php else: ?>
				<h2>Gallery</h2>
					<div class="carousel">
						<div id="carousel-scroll"><a href="#" id="prev">Prev</a><a href="#" id="next">Next</a></div>
						<ul>
							<?php foreach($galleries as $gallery): ?>
							<?php
								$url='#';
								if ($gallery->iv=='Video') {
									$url="https://www.youtube.com/watch?v=".$gallery->url;
								}elseif($gallery->url!=''){
									$url=$gallery->url;
								}
							?>
							<li><a href="<?php echo e(asset($url)); ?>"><!-- <span class="overlay play"></span> --><img height="130px" width="164px" title="<?php echo e($gallery->title); ?>" src="<?php echo e(asset($gallery->image)); ?>" alt="" /></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<!-- End Latest Works -->

  				<?php endif; ?>
				
				
				<div id="footer">
					<div class="footer-top"></div>
					<!-- Divider -->
					<div class="one-fourth">
						<h3>Latest Posts</h3>
						<ul class="latest-posts">
							<?php foreach($blogs as $blog): ?>
							<?php $monthName = date('M', mktime(0, 0, 0, substr($blog->created_at,5,2), 10)); // to get 3 letter month name?>
							<li><span class="date"><em class="day"><?php echo e(substr($blog->created_at,5,2)); ?></em><em class="month"><?php echo e($monthName); ?></em></span> <a href="<?php echo e(URL::to('blog',['id'=>$blog->id])); ?>"><?php echo e($blog->title); ?></a> </li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="one-fourth">
						<h3>Join to empower!</h3>
						<p align="justify">There are many women out there who desperately need someone's hand to catch, help to stand and uplift their confidence !</p>
						<p align="justify">Are you ready to join with us to empower women?</p>
					</div>
					<div class="one-fourth">
						<?php 
							$url_featured='https://www.youtube.com/watch?v='.$featured[0]->url;
						?>
						<h3>About</h3>
						<p><b>Home Based Worker Concerned Society Nepal</b></p>
						<p>Kathmandu,Ratopul</p>
						<p>Govt. Reg. No. 420/058/059</p>
						<p>S.W.C. No. 30848</p>
						<p>PAN No. 304485684</p>
					</div>
					<div class="one-fourth last">
						<h3>Contact Us</h3>
						<p>Email: hbwcsnepal@mail.com</p>
						<p>Phone: 9841312757(Prabha Pokharel), 9741160068(Kamala Panta)</p>
						<p>Post Box No: 6413</p>
					</div>
				<div class="clear"></div>
			</div>
		</div>
			<!-- End Container -->
			<div id="copyright" class="opacity">
				<p>© <?=date('Y')?> Home Based Worker Cooncern Society Nepal. All Right Reserved.</p><p>Powered by: <a target="_blank" href="http://rakshyabista.com.np?ref=HBWCSN">rakshyabista.com.np</a></p>
			</div>
		</div>
	<!-- End Wrapper -->
	<script type="text/javascript" src="<?php echo e(asset('assets/js/zenecees/scripts.js')); ?>"></script>
	</body>
</html>