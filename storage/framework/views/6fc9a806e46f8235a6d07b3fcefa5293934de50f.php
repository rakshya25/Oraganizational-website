  

<?php $__env->startSection('content'); ?>


      
    <section id="content"> 

    <!-- Page Heading -->
      <section class="section page-heading">
        
        <h1><?php echo e($blog->title); ?></h1>
           <div class="post-meta animate-onscroll">
                <!-- <span>by <a href="#">admin</a></span> -->
                  <span><?php echo date("M d, Y", strtotime(substr($blog->created_at,0,10)))?>
                <?php 
                      $date_24= substr($blog->created_at,11,5);
                      $date_12=date("g:i A", strtotime($date_24));
                      echo $date_12;
                       //converting to 12 hour time format 
                     ?></span>

                <span><i class="icons icon-eye"></i>Views: <?php echo e($blog->views); ?></span>
                <!-- <span><a href="blog-single-sidebar.html#comments">13 Comments</a></span> -->
              </div>

      </section>
      <!-- Page Heading -->
       
     <!-- Section -->
      <section class="section full-width-bg gray-bg">
        
        <div class="row">
        
          <div class="col-lg-9 col-md-9 col-sm-8">

              <!-- Single Blog Post -->
            <div class="blog-post-single">
              <!-- Portfolio Slideshow -->
              <div class="portfolio-slideshow flexslider animate-onscroll">
                
                <ul class="slides">
                
                  <li><img src="<?php echo e(asset($blog->image)); ?>" alt=""></li>
                  <!-- <li><img src="<?php echo e(asset('assets/images/blog/2.jpg')); ?>" alt=""></li>
                  <li><img src="<?php echo e(asset('assets/images/blog/1.jpg')); ?>" alt=""></li> -->                  
                </ul>
                
              </div>
              <!-- /Portfolio Slideshow -->
              

              
              <div class="post-content">
                <br>
                <!-- <blockquote class="align-right animate-onscroll" style="width:45%">"<?php echo $blog->highlight; ?>"</blockquote> -->

                <p><?php echo $blog->description; ?></p>

              </div>
              
               <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581de65fcc6848b8"></script>
                


              
            </div>  
            <!-- /Single Blog Post -->  
              
              
  <?php echo $__env->make('front.partials.related-articles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>       
   </div>          
<!-- Sidebar -->

  <?php echo $__env->make('front.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <!-- /Sidebar -->
          
          
          
        
        </div>
       
      </section>
      <!-- /Section -->
    
    </section>



    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>