<?php $__env->startSection('content'); ?>
    <section id="content">
      
      <!-- Section -->
      <section class="section full-width-bg">
        
        <div class="row">
        
          <div class="col-lg-12 col-md-12 col-sm-12">
          		<center>
		             <h1 style="color: green; font-size: 55px"><i class="fa fa-map-signs text-gray-silver"></i>404!</h1>
		                <h2 class="mt-0">Oops! Page Not Found</h2>
		                <p>The page you are looking for could not be found.</p>
		                <a href="<?php echo e(url('/')); ?>">Return Home</a>
	            </center>
          </div>
          

        
        </div>
        
      </section>
      <!-- /Section -->
      
      
      
      
      <!-- Section -->
      
      <!-- /Section -->
    
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>