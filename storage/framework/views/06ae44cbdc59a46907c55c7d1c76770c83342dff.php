<?php $__env->startSection('page-title'); ?>
  Blogs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-description'); ?>
  
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Begin Blog -->
<div class="blog">
        
      <!-- Begin Posts -->
      <div class="content"> 
          <div class="post"> 
          <div class="clear"></div>
           <div class="post-text"> 
              <div class="one-third  center">
                  <img class="center" src="<?php echo e(asset('assets/images/partners/1.png')); ?>" height="60" width="60"/>
                  <p>Home Workers Worldwide, UK</p>
              </div>
              <div class="one-third center">
                 <img class="center" src="<?php echo e(asset('assets/images/partners/2.png')); ?>" height="60" width="60"/>
                  <p>Embassy of Federal Republic of Germany</p>
              </div>
              <div class="one-third last center">
                  <img class="center" src="<?php echo e(asset('assets/images/partners/3.png')); ?>" height="60" width="60"/>
                  <p>Ministry of labor, Vocational training and Skill development Directorate</p>
              </div>
             
          </div>
          <div class="clear"></div><br><hr>
          <div class="post-text"> 
              <div class="one-third  center">
                  <img class="center" src="<?php echo e(asset('assets/images/partners/3.png')); ?>" height="60" width="60"/>
                  <p>Cottage and Small Entrepreneurship Department </p>
              </div>
              <div class="one-third center">
                 <img class="center" src="<?php echo e(asset('assets/images/partners/4.png')); ?>" height="60" width="60"/>
                  <p>TEWA</p>
              </div>
              <div class="one-third last center">
                  <img class="center" src="<?php echo e(asset('assets/images/partners/ids.png')); ?>" height="60" width="60"/>
                  <p>IDS Nepal</p>
              </div>
          </div>
          <div class="clear"></div><br><hr>
           <div class="post-text"> 
              
              <div class="one-third center">
                 <img class="center" src="<?php echo e(asset('assets/images/partners/shubha.png')); ?>" height="60" width="60"/>
                  <p>Bio-Briquette Company, Nepal</p>
              </div>
              <div class="one-third last center">
                  <img class="center" src="<?php echo e(asset('assets/images/partners/5.png')); ?>" height="60" width="60"/>
                  <p>Solidaridad (South and South East Asia)</p>
              </div>
          </div>
          <div class="clear"></div>

         
          <!-- End Text --> 
          <!-- <span class="tags"><a href="#">Black & White</a>, <a href="#">Color</a>, <a href="#">Portfolio</a></span> -->
        </div>
    <!-- for pagination -->
      </div>
      <!-- End Posts --> 
  <!-- Begin Sidebar -->
    <?php echo $__env->make('front.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- End Sidebar -->
</div>
<!-- End Blog -->

<div class="clear"></div>
<div id="footer">
  <div class="footer-top"></div>
  <!-- Divider -->
  
  <!-- End Form -->
</div>
<div class="clear"></div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>