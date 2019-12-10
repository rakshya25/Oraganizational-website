  

<?php $__env->startSection('content'); ?>


      
    <section id="content"> 

       
     <!-- Section -->
      <section class="section full-width-bg gray-bg">
        
        <div class="row">
        
          <div class="col-lg-9 col-md-9 col-sm-8"> 
          <?php foreach($documents as $document): ?>      
            <div class="alert-box alert-box-button info animate-onscroll">
              <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-4">
                    <?php if($document->file_type=='jpg'||$document->file_type=='jpeg'||$document->file_type=='PNG'): ?>
                        <a href="<?php echo e(asset($document->image)); ?>" src="<?php echo e(asset($document->image)); ?>" target="_blank"><img title="<?php echo e(asset($document->image)); ?>" src="<?php echo e(asset($document->image)); ?>" width="60"></a>
                      <?php elseif($document->file_type=='pdf'): ?>
                         <a href="<?php echo e(asset($document->image)); ?>" target="_blank"><img title="<?php echo e(asset($document->image)); ?>" src="<?php echo e(asset('assets/images/icons/pdf.png')); ?>" height="60"></a>
                      <?php elseif($document->file_type=='doc'||$document->file_type=='docx'): ?>
                         <a href="<?php echo e(asset($document->image)); ?>" target="_blank"><img title="<?php echo e(asset($document->image)); ?>" src="<?php echo e(asset('assets/images/icons/word.png')); ?>" height="60"></a>
                      <?php else: ?>
                         <a href="<?php echo e(asset($document->image)); ?>" target="_blank"><img title="<?php echo e(asset($document->image)); ?>" src="<?php echo e(asset('assets/images/icons/file.png')); ?>" height="60"></a>
                      <?php endif; ?>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4">
                  <p><strong><?php echo e($document->title); ?></strong></p>

                  <p><?php echo substr($document->description,0,100+strpos(substr($document->description,100,20), " ")).".."; ?></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 align-right">
                  <a href="<?php echo e(asset($document->image)); ?>" class="button button-arrow">Open File</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?> 

            
          <div class="animate-onscroll">
              <div class="divider"></div>
               <?php echo e($documents->links()); ?>

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