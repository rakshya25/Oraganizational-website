  

<?php $__env->startSection('content'); ?>


      
    <section id="content">  
     <!-- Section -->
      <section class="section full-width-bg gray-bg">
        
        <div class="row">
        
          <div class="col-lg-9 col-md-9 col-sm-8">
            
            <div class="row">
              
              <div class="col-lg-12 col-md-12 col-sm-12">
                
                
<?php foreach($blogs as $blog): ?>                
<!-- Blog Post -->
<div class="blog-post style2 animate-onscroll">
  
  <div class="post-image">
    <img src="<?php echo e(asset($blog->image)); ?>" alt="">             
  </div>
  
  <div class="post-content">
    
    <div class="post-header">
      <h2><a href="<?php echo e(URL::to('blog',['id'=>$blog->id])); ?>"><?php echo e(substr($blog->title,0,60)); ?></a></h2>
      <div class="post-meta">
        <span>by <a href="#">admin</a></span>
        <!-- <span>October 01, 2013 11:28AM</span> -->
        <span><?php echo e($blog->created_at); ?></span>
        <!-- <span><a href="blog-single-sidebar.html#comments">25 Comments</a></span> -->
      </div>
    </div>
    
    <div class="post-exceprt">
      <p><?php echo e(substr($blog->description,0,150)); ?> </p>
  <a href="<?php echo e(URL::to('blog',['id'=>$blog->id])); ?>" class="button read-more-button big button-arrow">Read More</a>

    </div>    
  </div>                                      
</div>
<!-- /Blog Post -->   
<?php endforeach; ?>  
             
                
                
              </div>
              
              
            </div>
            
            <div class="animate-onscroll">
            
              <div class="divider"></div>
               <?php echo e($blogs->links()); ?>

              
             <!--  <div class="numeric-pagination">
                <a href="#" class="button"><i class="icons icon-left-dir"></i></a>
                <a href="#" class="button">1</a>
                <a href="#" class="button active-button">2</a>
                <a href="#" class="button">3</a>
                <a href="#" class="button"><i class="icons icon-right-dir"></i></a>
              </div> -->
            
            </div>
            
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