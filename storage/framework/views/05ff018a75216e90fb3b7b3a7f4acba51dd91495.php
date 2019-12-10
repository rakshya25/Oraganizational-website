      
      <!-- Header -->
      <header id="header">
        
        <!-- Main Header -->
        <div id="main-header">
          
          <div class="container">
          
          <div class="row">
            <!-- Logo -->
            <div id="logo" class="col-lg-2 col-md-2 col-sm-2">
              
              <a href="<?php echo e(url('')); ?>"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="Logo"></a>
              
            </div>
            <!-- /Logo -->
            
            
            
            <!-- Main Quote -->
            <div class="col-lg-6 col-md-5 col-sm-5" style="margin-top: 20px">
              
              <!-- <blockquote>Slogan of Federation of National Christian Nepal or some bible verse can be kept kere.</blockquote> -->
              <h1>FEDERATION OF NATIONAL CHRISTIAN NEPAL</h1>
              <blockquote>working together for a change in nation</blockquote>
              
            </div>
            <!-- /Main Quote -->
           
            <!-- Newsletter -->
            <div class="col-lg-4 col-md-5 col-sm-5" style="margin-top: 40px">
              <?php echo e(Form::open(array('url'=>'subscribe','method'=>'post'))); ?>

              
                <!-- http://velikorodnov.com/html/candidate/php/newsletter-form.php -->
                <h5><strong>Subscribe Us</strong> for regular updates</h5>
                <div class="newsletter-form">
                
                  <div class="newsletter-email" style="width: 100%">
                    <?php echo e(Form::text('email', Input::old('email'), array('placeholder' => 'Email Address','class'=>'form-control'))); ?>

                  </div>
                  
               <!--    <div class="newsletter-zip">
                    <input type="text" name="newsletter-zip" placeholder="Zip code">
                  </div> -->
                  
                  <div class="newsletter-submit">
                    <input type="submit" value="">
                    <i class="icons icon-right-thin"></i>
                  </div>
                  
                </div>
                
              </form>
              <?php if(Session::has('success_message')): ?>
                  <ul type="none" style="background-color:green">
                            <small><li><?php echo e(Session('success_message')); ?></li></small>
                  </ul>
              <?php endif; ?>

              <?php if(count($errors) > 0): ?>
                
                  <ul type="none" style="background-color:red">
                    <?php foreach($errors->all() as $error): ?>
                      <small><li><?php echo e($error); ?></li></small>
                    <?php endforeach; ?>
                  </ul>

              <?php endif; ?>
      
            </div>
            <!-- /Newsletter -->
            
            
            
          </div>
          
          </div>
          
        </div>
        <!-- /Main Header -->
        
        
        
        
        
        <!-- Lower Header -->
        <div id="lower-header">
          
          <div class="container">
          
          <div id="menu-button">
            <div>
            <span></span>
            <span></span>
            <span></span>
            </div>
            <span>Menu</span>
          </div>
          
          <ul id="navigation">
            
            <!-- Home -->
            <li class="home-button <?php echo e((Request::is('/') ? 'current-menu-item' : '')); ?>">
              <a href="<?php echo e(url('')); ?>"><i class="icons icon-home"></i></a>
            </li>
            <!-- /Home -->
            
            <!-- Pages -->
            <li <?php echo e((Request::is('boards','misc/our_vision','misc/our_objectives','misc/our_mission') ? 'class=current-menu-item' : '')); ?>>
            
              <span>About Us</span>
              
              <ul>

                <li><a href="<?php echo e(URL::to('misc',['title'=>'our_mission'])); ?>">Our Mission</a></li>
                <li><a href="<?php echo e(URL::to('misc',['title'=>'our_vision'])); ?>">Our Vision</a></li>
                <li><a href="<?php echo e(URL::to('misc',['title'=>'our_objectives'])); ?>">Objectives</a></li>
                <li><a href="<?php echo e(URL::to('boards')); ?>">Board Members</a></li>
            
              </ul>
              
            </li>
            <!-- /Pages -->
            
            <!-- Events -->
            <li <?php echo e((Request::is('misc/message-from-chairman','misc/message-from-president','misc/message-from-secretary') ? 'class=current-menu-item' : '')); ?>>
            
              <span>Messages</span>
              
              <ul>
              
                <li><a href="<?php echo e(URL::to('misc',['title'=>'message-from-chairman'])); ?>">Message from Chairman</a></li>
                <li><a href="<?php echo e(URL::to('misc',['title'=>'message-from-president'])); ?>">Message from President</a></li>
                <li><a href="<?php echo e(URL::to('misc',['title'=>'message-from-secretary'])); ?>">Message from General Secretary</a></li>
                
              </ul>
              
            </li>
            <!-- /Events -->
            

             
                <li <?php echo e((Request::is('misc/our_history','misc/christian_history') ? 'class=current-menu-item' : '')); ?>><span>History</span>
                    <ul>
                      <li><a href="<?php echo e(URL::to('misc',['title'=>'our_history'])); ?>">History of FNCN</a></li>
                      <li><a href="<?php echo e(URL::to('misc',['title'=>'christian_history'])); ?>">Christian Histroy in Nepal</a></li>
                    </ul>
                </li>


            <li <?php echo e((Request::is('blogs') ? 'class=current-menu-item' : '')); ?>>
              <a href="<?php echo e(url('blogs')); ?>">News & Events</a>
            </li>

            <li <?php echo e((Request::is('documents') ? 'class=current-menu-item' : '')); ?>>
              <a href="<?php echo e(url('documents')); ?>">Documents</a>
            </li>
           
            
            
            <!-- Blog -->
            <li <?php echo e((Request::is('gallery') ? 'class=current-menu-item' : '')); ?>>
            
              <a href="<?php echo e(url('gallery')); ?>">Gallery</a>
              <!-- 
              <ul>
              
                <li><a href="#">Photo Gallery</a></li>
                <li><a href="#">Video Gallery</a></li>

                
              </ul> -->
              
            </li>
            <!-- /Blog -->

            <li <?php echo e((Request::is('contact') ? 'class=current-menu-item' : '')); ?>>
              <a href="<?php echo e(url('contact')); ?>">Contact Us</a>
            </li>
            <!-- /Features -->
            
            <!-- Donate -->

            <!-- <li class="donate-button ">
              <a href="#">Donate Today</a>
            </li> -->

            <!-- /Donate -->
            
          </ul>
          
          </div>
          
        </div>
        <!-- /Lower Header -->
        
        
      </header>
      <!-- /Header -->