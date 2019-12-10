<?php 
      $blog_last_one=\DB::table('blogs')->orderBy('id', 'desc')->first();
      $blogs=\DB::table('blogs')->orderBy('id', 'desc')->limit(12)->get();
      $events=\DB::table('events')->orderBy('id', 'desc')->limit(3)->get();
      $sliders= \DB::table('sliders')->where('isActive', 1)->get();

 ?>


<?php $__env->startSection('content'); ?>
    <section id="content">
      
      <!-- Section -->
      <section class="section full-width-bg">
        
        <div class="row">
        
          <div class="col-lg-12 col-md-12 col-sm-12">
            
            
            <!-- Revolution Slider -->
            <div class="tp-banner-container main-revolution">
            
              <span class="Apple-tab-span"></span>
 
              <div class="tp-banner">
                
                <ul>

                  <?php foreach($sliders as $slider): ?>
                      <li data-transition="fade" data-slotamount="7">
                        <img src="<?php echo e(asset($slider->image)); ?>" alt="sasa">
                        <div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="150" data-speed="700" data-start="1000" data-easing="easeOutBack"><h2 style="background-color: rgba(51, 204, 255, 0.6);"><?php echo e($slider->desc_1); ?></h2></div>
                        <div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="225" data-speed="100" data-start="1200" data-easing="easeOutBack"><p style="background-color: rgba(51, 204, 255, 0.6);"><?php echo $slider->desc_2; ?></p></div>
                        <?php if($slider->refferal_link!=''): ?>
                          <div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="305" data-speed="100" data-start="1400"><a href="<?php echo e($slider->refferal_link); ?>" class="button big button-arrow">More Info</a></div>
                        <?php endif; ?>
                      </li>
                  <?php endforeach; ?>
                <!--   <li data-transition="fade" data-slotamount="7">
                    <img src="<?php echo e(asset('assets/images/slide11.jpg')); ?>" alt="">
                    <div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="150" data-speed="700" data-start="1000" data-easing="easeOutBack"><h2 style="background-color: rgba(51, 204, 255, 0.6);">WORKING FOR CHANGE</h2></div>
                    <div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="225" data-speed="100" data-start="1200" data-easing="easeOutBack"><p style="background-color: rgba(51, 204, 255, 0.6);">We belive, we can change the nation<br> Some good points here </p></div>
                    <div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="305" data-speed="100" data-start="1400"><a href="#" class="button big button-arrow">More Info</a></div>
                  </li> -->
                </ul>
                
              </div>
             
            </div>
            <!-- /Revolution Slider -->
            
          </div>
          
          
          <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 20px">
            
          		<blockquote class="iconic-quote">"FNCN is a first formal national wide nonprofit making umbrella organization committed and accountable for the promotion and protection of Church and other organizations."</blockquote>
            
          </div>
        
        </div>
        
      </section>
      <!-- /Section -->
      
      
      
      
      <!-- Section -->
      <section class="section full-width-bg gray-bg" >
        
        <div class="row">
        
          <div class="col-lg-9 col-md-9 col-sm-8">
            
            <h3 class="animate-onscroll no-margin-top">Latest news</h3>
            
                        <!-- Blog Post -->
            <div class="blog-post big animate-onscroll">
              
              <div class="post-image">

                <img src="<?php echo e(asset($blog_last_one->thumb)); ?>" alt="">
              </div>
              
              <h4 class="post-title"><a href="<?php echo e(URL::to('blog',['id'=>$blog_last_one->id])); ?>"><?php echo e($blog_last_one->title); ?></a></h4>
              
              <div class="post-meta">
                <span><?php echo date("M d, Y", strtotime(substr($blog_last_one->created_at,0,10)))?>
                <?php 
                      $date_24= substr($blog_last_one->created_at,11,5);
                      $date_12=date("g:i A", strtotime($date_24));
                      echo $date_12;
                       //converting to 12 hour time format 
                     ?></span>
              </div>
              <?php 
                $pos=strpos($blog_last_one->description,'</p>');
                if ($pos<400) {
                  $pos=400+strpos(substr($blog_last_one->description,400,1000),'</p>');
                }
               ?>
              <p><?php echo substr($blog_last_one->description,0,$pos); ?></p>
              
              <a href="<?php echo e(URL::to('blog',['id'=>$blog_last_one->id])); ?>" class="button read-more-button big button-arrow">Read More</a>
              
            </div>
            <!-- /Blog Post -->           
          </div>
          
          
          <!-- Sidebar -->
          <div class="col-lg-3 col-md-3 col-sm-4 sidebar">
            
                        <!-- Upcoming Events -->
            <div class="sidebar-box white animate-onscroll">
              <h3>Upcoming Events</h3>
              <ul class="upcoming-events">
              
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
                <!-- Event -->
                <!-- <li>
                  <div class="date">
                    <span>
                      <span class="day">5</span>
                      <span class="month">JAN</span>
                    </span>
                  </div>
                  
                  <div class="event-content">
                    <h6><a href="event-post-v2.html">Pray for Nation</a></h6>
                    <ul class="event-meta">
                      <li><i class="icons icon-clock"></i> 4:00 pm - 6:00 pm</li>
                      <li><i class="icons icon-location"></i> 340 W 50th St.Xaviers College</li>
                    </ul>
                  </div>
                </li> -->
                <!-- /Event -->

              </ul>
              <a href="<?php echo e(url('events')); ?>" class="button transparent button-arrow">More events</a>
            </div>
            <!-- /Upcoming Events -->           
          </div>
          <!-- /Sidebar -->
          
        </div>
        
        
        
        <div class="row no-margin-bottom">
        
          
          <div class="col-lg-12 col-md-12 col-sm-12">
            
                        
            <!-- Owl Carousel -->
            <div class="owl-carousel-container">
              
              <div class="owl-header">
                
                <h3 class="animate-onscroll">Other Stories</h3>
                
                <div class="carousel-arrows animate-onscroll">
                  <span class="left-arrow"><i class="icons icon-left-dir"></i></span>
                  <span class="right-arrow"><i class="icons icon-right-dir"></i></span>
                </div>
                
              </div>
              
              <div class="owl-carousel" data-max-items="4">
              <?php $key=0; ?>
          
            <?php foreach($blogs as $blog): ?>  
                <?php if($key>0): ?>  <!-- to skip first row -->
                <!-- Owl Item -->
                <div>
                  
                  <!-- Blog Post -->
                  <div class="blog-post animate-onscroll">
                    
                    <div class="post-image">
                      <img src="<?php echo e(asset($blog->thumb)); ?>" alt="">
                    </div>
                    
                    <h4 class="post-title"><a href="<?php echo e(URL::to('blog',['id'=>$blog->id])); ?>"><?php echo e($blog->title); ?></a></h4>
                    
                    <div class="post-meta">
                      <!-- <span>by <a href="#">admin</a></span> -->
                      <span><?php echo date("M d, Y", strtotime(substr($blog->created_at,0,10)))?>
                <?php 
                      $date_24= substr($blog->created_at,11,5);
                      $date_12=date("g:i A", strtotime($date_24));
                      echo $date_12;
                       //converting to 12 hour time format 
                     ?></span>
                    </div>

                    <p><?php echo substr($blog->description,0,220+strpos(substr($blog->description,220,20), " ")).".."; ?></p>
                    
                    <a href="<?php echo e(URL::to('blog',['id'=>$blog->id])); ?>" class="button read-more-button big button-arrow">Read More</a>
                    
                  </div>
                  <!-- /Blog Post -->
                  
                </div>
                <!-- /Owl Item -->
                <?php endif; ?>
                <?php $key++ ?>
              <?php endforeach; ?>
           
              </div>
            
            </div>
            <!-- /Owl Carousel -->            
          </div>
      
        </div>
  
      </section>
      <!-- /Section -->
    
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>