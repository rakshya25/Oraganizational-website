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