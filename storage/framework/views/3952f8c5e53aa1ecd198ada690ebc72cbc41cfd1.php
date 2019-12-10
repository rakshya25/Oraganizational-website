  

<?php $__env->startSection('content'); ?>


      
    <section id="content"> 

    <!-- Page Heading -->
      <section class="section page-heading">
        
        <h1>Board Members</h1>

      </section>
      <!-- Page Heading -->
       
     <!-- Section -->
      <section class="section full-width-bg gray-bg">
        
        <div class="row">
        
          <div class="col-lg-9 col-md-9 col-sm-8">
            
             <ul class="list-inline" style="font-size: 12px;">
                      <!-- <li><a href="<?php echo e(url('/churches/m')); ?>">A</a> |</li> -->
                    <li><b><a href="<?php echo e(url('/boards')); ?>">All</a></b></li>
                    <?php
                      //generate A to Z 
                        for($i=65;$i<91;$i++){
                          $link=url('boards')."/".chr($i);
                         //echo "<li><a href=">.chr($i)."</a>|</li>";
                         echo "<li><a href=".$link.">".chr($i)."</a> |</li>";
                    }
                    ?>
              </ul>

              <?php foreach($boards as $board): ?>
                      <div class="col-lg-3 col-md-3 col-sm-6">
                
                                <!-- Team Member -->
                <div class="team-member animate-onscroll ">
                  
                  <img class="team-member-image" src="<?php echo e(asset($board->image)); ?>" alt="">
                  
                  <div class="team-member-info" style="padding: 10px;">
                    
                    <center><strong><?php echo e($board->fullname); ?></strong></center>
                    <center><span class="job"><?php echo e($board->designation); ?></span></center>

                    <div class="team-member-more">
                        <small>Address: <span class="small-caption"><?php echo e($board->address); ?></span></small><br>
                        <small>Phone: <span class="small-caption"><?php echo e($board->phone); ?></span></small><br>
                        <small>Bio: <span class="small-caption"><?php echo e($board->bio); ?></span></small><br>
                        
                    </div>
                    
                  </div>
                  
                </div>
                <!-- /Team Member -->             
              </div>
              <?php endforeach; ?>
            
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