<?php $__env->startSection('page-title'); ?>
  404
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="full-width"><br><br><br>
     <center>
        <h1 style="color: green; font-size: 55px"><i class="fa fa-map-signs text-gray-silver"></i>404!</h1>
        <h2 class="mt-0">Oops! Page Not Found</h2>
        <p>The page you are looking for could not be found.</p>
        <a href="<?php echo e(url('/')); ?>">Return Home</a>
      </center><br><br><br>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>