<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ServeNow-Admin Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $__env->make('admin.partials.top-include-resources', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(url('')); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SNN</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Serve Now</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- Notifications: style can be found in dropdown.less -->
         <!--  <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li> -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo e(asset(Auth::user()->image)); ?>" class="user-image" alt="User Image">
              
              <span class="hidden-xs"><?php if( Auth::check() ): ?>
                                          <?php echo e(Auth::user()->fullname); ?>

                                      <?php endif; ?>

              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo e(asset(Auth::user()->image)); ?>" class="img-circle" alt="User Image">

                <p><?php if( Auth::check() ): ?>
                        <?php echo e(Auth::user()->fullname." - ".Auth::user()->role); ?>

                   
                   <small>Member since <?php echo e(substr(Auth::user()->created_at,0,10)); ?></small>
                   <?php endif; ?>
                 
                  
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <a class="btn btn-default btn-flat" id="modal-27601" data-target="#modal-container-27601" data-toggle="modal" href="<?php echo e(url('admin/profile')); ?>">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo e(URL::to('admin/logout')); ?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(asset(Auth::user()->image)); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php if( Auth::check() ): ?>
                  <?php echo e(Auth::user()->fullname); ?>

            <?php endif; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <!--  <h3><a style="color: #fff;" href="<?php echo e(URL::to('admin/dashboard')); ?>" class="btn btn-primary btn-block btn-flat"><i class="fa fa-home fa"></i><span> Dashboard</span></a></h3> -->

        <li class="treeview <?php echo e((Request::is('admin/blogs','admin/blogs/create','admin/blogs/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/blogs')); ?>">
            <i class="fa fa-newspaper-o"></i><span>Blogs</span>
            <span class="pull-right-container"></span>
            <span class="label label-success pull-right"><?php echo e(\DB::table('blogs')->where('published','1')->count()); ?></span>
          </a>
        </li>
        <li class="treeview <?php echo e((Request::is('admin/boards','admin/boards/create','admin/boards/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/boards')); ?>">
            <i class="fa fa-users"></i><span>Boards</span>
            <span class="pull-right-container"></span>
            <span class="label label-primary pull-right"><?php echo e(\DB::table('boards')->count()); ?></span>

          </a>
        </li>
       <!--  <li class="treeview <?php echo e((Request::is('admin/churches','admin/churches/create','admin/churches/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/churches')); ?>">
            <i class="fa fa-institution"></i><span>Churches</span>
            <span class="pull-right-container"></span>
            <span class="label label-primary pull-right"><?php echo e(\DB::table('churches')->count()); ?></span>

          </a>
        </li> -->
       <!--  <li class="treeview <?php echo e((Request::is('admin/courses','admin/courses/create','admin/courses/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/courses')); ?>">
            <i class="fa fa-book"></i><span>Courses</span>
            <span class="pull-right-container"></span>
            <span class="label label-primary pull-right"><?php echo e(\DB::table('courses')->count()); ?></span>

          </a>
        </li> -->

        <li class="treeview <?php echo e((Request::is('admin/documents','admin/documents/create','admin/documents/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/documents')); ?>">
            <i class="fa fa-file-pdf-o"></i><span>Documents</span>
            <span class="pull-right-container"></span>
            <span class="label label-primary pull-right"><?php echo e(\DB::table('documents')->count()); ?></span>

          </a>
        </li>

        <li class="treeview <?php echo e((Request::is('admin/events','admin/events/create','admin/events/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/events')); ?>">
            <i class="fa fa-calendar"></i><span>Events</span>
            <span class="pull-right-container"></span>
            <span class="label label-success pull-right"><?php echo e(\DB::table('events')->count()); ?></span>
          </a>
        </li>

        <li class="treeview <?php echo e((Request::is('admin/gallery','admin/gallery/create','admin/gallery/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/gallery')); ?>">
            <i class="fa fa-camera-retro"></i><span>Gallery</span>
            <span class="pull-right-container"></span>
            <span class="label label-success pull-right"><?php echo e(\DB::table('galleries')->count()); ?></span>
          </a>
        </li>

         <li class="treeview <?php echo e((Request::is('admin/programs','admin/programs/create','admin/programs/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/programs')); ?>">
            <i class="fa fa-heartbeat"></i><span>Programs</span>
            <span class="pull-right-container"></span>
            <span class="label label-primary pull-right"><?php echo e(\DB::table('programs')->count()); ?></span>

          </a>
        </li>

        <li class="treeview <?php echo e((Request::is('admin/sliders','admin/sliders/create','admin/sliders/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/sliders')); ?>">
            <i class="fa fa-image"></i><span>Sliders</span>
            <span class="pull-right-container"></span>
            <span class="label label-success pull-right"><?php echo e(\DB::table('sliders')->count()); ?></span>

          </a>
        </li>
          <!-- <li class="treeview <?php echo e((Request::is('admin/scholars','admin/scholars/create','admin/scholars/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/scholars')); ?>">
            <i class="fa fa-smile-o"></i><span>Scholars</span>
            <span class="pull-right-container"></span>
            <span class="label label-primary pull-right"><?php echo e(\DB::table('scholars')->count()); ?></span>
            
          </a>
        </li> -->
        <li class="treeview <?php echo e((Request::is('admin/testimonials','admin/testimonials/create','admin/testimonials/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/testimonials')); ?>">
            <i class="fa fa-weixin"></i><span>Testimonials</span>
            <span class="pull-right-container"></span>
            <span class="label label-primary pull-right"><?php echo e(\DB::table('testimonials')->count()); ?></span>
          </a>
        </li>
        <!-- <li class="treeview <?php echo e((Request::is('admin/urgents','admin/urgents/create','admin/urgents/edit/*') ? 'active' : '')); ?>">
          <a href="<?php echo e(url('/admin/urgents')); ?>">
            <i class="fa fa-bell-o"></i><span>Urgent Notices</span>
            <span class="pull-right-container"></span>
            <span class="label label-success pull-right"><?php echo e(\DB::table('urgents')->count()); ?></span>
          </a>
        </li> -->

        <li class="header">Others</li>
          <li><a href="#"><i class="fa fa-gears text-red"></i> <span>Setting</span></a></li>
          <li class="treeview <?php echo e((Request::is('admin/miscs','admin/miscs/create','admin/miscs/edit/*') ? 'active' : '')); ?>">
            <a href="<?php echo e(url('/admin/miscs')); ?>">
              <i class="fa fa-files-o"></i><span>Miscellanous</span>
              <span class="pull-right-container"></span>
              <span class="label label-success pull-right"><?php echo e(\DB::table('miscs')->count()); ?></span>
            </a>
          </li>

          <li class="treeview <?php echo e((Request::is('admin/approve') ? 'active' : '')); ?>">
            <a href="<?php echo e(url('admin/approve')); ?>">
              <i class="fa fa-bell"></i><span>Admin Accounts</span>
              <span class="pull-right-container"></span>
              <span title="Under approval accounts" class="label label-info pull-right"><?php echo e(\DB::table('users')->where('verified','0')->count()); ?></span>
            </a>
          </li>

        <li><a href="#"><i class="fa fa-info-circle text-aqua"></i> <span>Information</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <?php echo $__env->yieldContent('content'); ?>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Powered By:</b> <a href="//psuresh.com.np?ref=servenow" target="_blank">psuresh.com.np</a>
    </div>
    <strong>Copyright &copy; <?php echo e(date('Y')); ?> <a href="<?php echo e(url('')); ?>">Serve Now Nepal</a>.</strong> All rights
    reserved.

<!-- 
  <a id="modal-27601" data-target="#modal-container-27601" role="button" class="btn btn-default btn-flat" data-toggle="modal" href="<?php echo e(url('/modal')); ?>">Profile</a> -->

</footer>

</div>
<!-- ./wrapper -->
<?php echo $__env->make('admin.partials.bottom-include-resources', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
