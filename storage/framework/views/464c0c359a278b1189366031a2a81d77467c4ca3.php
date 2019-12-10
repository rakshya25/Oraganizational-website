<?php $__env->startSection('page-title'); ?>
  <?php echo e($program->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-description'); ?>
  <?php echo e($program->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Begin program -->
<div class="blog">

      <!-- Begin Posts -->
      <div class="content">
        <!-- Begin Post -->
          <div class="post">
          <!-- Begin Post Info -->
          <div class="post-info">
            <!-- Begin Title -->
            <div class="post-title" style="float: left">
              <h1><a href="#"><?php echo e($program->title); ?></a></h1>
              <!-- <div class="post-meta"><span class="comments"><a href="#">13 Comments</a></span> <span class="categories"><a href="#">Web Design</a>, <a href="#">Photography</a></span> </div> -->
            </div>
            <!-- End Title -->
          </div>
          <!-- End Post Info -->

          <div class="post-text">
              <?php if($program->image!="assets/images/program/empty"): ?>
              <a href="#"><img src="<?php echo e(asset($program->image)); ?>" width="595" alt="<?php echo e($program->id); ?>"/></a>
              <!-- image size 595*317 strickly recommended -->
              <?php endif; ?>
              <p align="justify"><br><?php echo $program->description; ?></p>
              <!-- include children list here -->
              <?php if($program->title=="Home Based Worker Concern Society Nepal"): ?>
                <?php echo $__env->make('front.pages.Home Based', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              <?php endif; ?>
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
<!-- End program -->

<div class="clear"></div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>