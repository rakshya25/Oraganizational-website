<?php $__env->startSection('page-title'); ?>
  Board
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-description'); ?>
  Board Members of Gentle Heart Foundation 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Begin boards -->
<div class="blog">
        
      <!-- Begin Posts -->
      <div class="content"> 
        <!-- Begin Post -->
          <div class="post"> 
          <!-- Begin Post Info -->
          <div class="post-info"> 
            <!-- Begin Title -->
            <div class="post-title" style="float:left">
              <h1><a href="#">Board Members</a></h1>
            </div>
            <!-- End Title --> 
          </div>
          <!-- End Post Info -->
           <div class="post-text"> 
           <?php foreach($boards as $index=>$board): ?>
              <div class="one-third<?php echo e(($index+1)%3==0?'-last':''); ?>">
                  <p align="center"><a href="#" title="<?php echo e($board->fullname); ?>"><img src="<?php echo e(asset($board->image)); ?>" width="125" height="155" alt="" /></a><p align="center"><?php echo e($board->fullname); ?></p><h4 align="center"><?php echo e($board->designation); ?></h4></p>
              </div>
            <?php endforeach; ?>
            <div class="clear"></div>
          </div>
        </div>     
        <!-- End Post -->
      </div>
  <!-- Begin Sidebar -->
    <?php echo $__env->make('front.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- End Sidebar -->
</div>
<!-- End boards -->

<div class="clear"></div>
<div id="footer">
  <div class="footer-top"></div>
  <!-- Divider -->
  
  <!-- End Form -->
</div>
<div class="clear"></div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>