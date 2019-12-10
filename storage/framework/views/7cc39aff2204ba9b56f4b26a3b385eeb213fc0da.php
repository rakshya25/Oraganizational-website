  

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
            <?php $events=\DB::table('events')->orderBy('id', 'desc')->take(10)->get();?>
             <h3>Latest Events</h3>
              <ul class="upcoming-events">
                <!-- Event -->
               <?php foreach($events as $event): ?>
                        <!-- Event -->

                        <li>
                          <div class="date">
                            <span>
                              <span class="day"><?php echo e(substr($event->date_event,8,2)); ?></span>
                              <span class="month"><?php echo e(date('M', mktime(0, 0, 0,substr($event->date_event,8,2),10))); ?></span>
                            </span>
                          </div>
                          
                          <div class="event-content">
                            <h6><a href="#"><?php echo e($event->title); ?></a></h6>
                            <ul class="event-meta">
                              <li><i class="icons icon-clock"></i><?php 
                      $date_24= substr($event->date_event,11,5);
                      $date_12=date("g:i A", strtotime($date_24));
                      echo $date_12;
                       //converting to 12 hour time format 
                     ?></li>
                              <li><i class="icons icon-location"></i> <?php echo e($event->address); ?></li>
                            </ul>
                          </div>
                        </li>
                        <!-- /Event -->
              <?php endforeach; ?>
            </ul>
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