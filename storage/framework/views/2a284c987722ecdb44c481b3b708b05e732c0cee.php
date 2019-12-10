<?php $__env->startSection('page-title'); ?>
  <?php echo e($blog->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-description'); ?>
  <?php echo e($blog->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Begin Blog -->
<div class="blog">
        
      <!-- Begin Posts -->
      <div class="content"> 
        <!-- Begin Post -->
          <div class="post"> 
          <!-- Begin Post Info -->
          <div class="post-info"> 
            <!-- Begin Date -->
            <?php $monthName = date('M', mktime(0, 0, 0, substr($blog->created_at,5,2), 10)); // to get 3 letter month name?>
            <div class="post-date"> <span class="day"><?php echo e(substr($blog->created_at,5,2)); ?></span> <span class="month"><?= $monthName ?></span> <span class="year"><?php echo e(substr($blog->created_at,0,4)); ?></span> </div>
            <!-- End Date --> 
            <!-- Begin Title -->
            <div class="post-title">
              <h1><a href="#"><?php echo e($blog->title); ?></a></h1>
              <!-- <div class="post-meta"><span class="comments"><a href="#">13 Comments</a></span> <span class="categories"><a href="#">Web Design</a>, <a href="#">Photography</a></span> </div> -->
            </div>
            <!-- End Title --> 
          </div>
          <!-- End Post Info -->
          
          <div class="post-text"> 
              <a href="#"><img src="<?php echo e(asset($blog->image)); ?>" width="595" alt="<?php echo e($blog->id); ?>"/></a>
              <!-- image size 595*317 strickly recommended -->
              <p align="justify"><br><?php echo $blog->description; ?></p>
          </div>
          <!-- End Text --> 
          <!-- <span class="tags"><a href="#">Black & White</a>, <a href="#">Color</a>, <a href="#">Portfolio</a></span> -->
        </div>
       
        <!-- End Post -->
            
        
      </div>
      <!-- End Posts --> 

  
  <!-- Begin Sidebar -->
    <?php echo $__env->make('front.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- End Sidebar -->
</div>
<!-- End Blog -->

<div class="clear"></div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>