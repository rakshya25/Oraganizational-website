<?php 
      $sliders= \DB::table('sliders')->where('isActive', 1)->get();

 ?>


<?php $__env->startSection('page-title'); ?>
Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-description'); ?>
To help the Orphaned, underprivileged and destitute children of Nepal as well as high risk girls & sexually exploited women in their need and help them to feel the fullness of life.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Showcase -->
  <div id="showcase" class="showcase">

    <?php foreach($sliders as $slider): ?>
    <!-- Each child div in #showcase represents a slide -->
    <div class="showcase-slide">
      <!-- Put the slide content in a div with the class .showcase-content. -->
      <div class="showcase-content"> <img src=" <?php echo e(asset($slider->image)); ?>" alt="2" /> </div>
      <div class="showcase-caption">
        <?php echo e($slider->desc_1); ?>

      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <!-- End Showcase -->
  <div class="intro">"To identify potential problems that impede in the recognition and promotion of home based workers in the country."
We aim to give special attention for the protection of the rights of women home based workers and develop their skills to encourage activities like raising public awareness , income generation and employement training.e</div>
  <div class="hr2"></div>
  <!-- Divider -->
  <h2 class="center">The Overview Of HBWCSN</h2>
    <div class="full-width">
      <p>Home Based Worker's Concern Society Nepal is a non profit, non govermental organization in Nepal to work for the rights, recognition, promotion, protection and socioeconomic upliftments of home based workers in Nepal. It was established to formalized and given legal status after legal status after many years of informal work for the visibility and recognition of Home Based Workers in Sunsari and Kathmand. It has been actively involved in bringing together, organizing and strengthening home based workers and lobbying to have them recognized by government of Nepal for their rights as workers. </p>
    </div>
    <div class="hr1"></div>
  
  <!-- Begin Top Columns -->
  <h2 class="center">What We Do</h2>
  <div class="full-width">
      <p style="text-align: justify;">Currently as our main project, this NGO was set up in 2058 and is presently located in Kathmandu, Nepal.We also have who have moved on to independence and are now in further education or employment.<br /><br></p>
  </div>
  <div class="clear"></div>
  
  <!-- Begin 4 Columns -->

    <div class="two-third">
      <img style="width:580px" src="<?php echo e(asset('assets/images/front.jpg')); ?>">
    </div>


    <div class="one-third last">
      <ul>
        <li>Awareness Raising,Visibility,Recognition</li>        
        <li>Women Empowerment</li>
        <li>Income Generation Program</li>
        <li>Organanize woman upliftment Program</li>
      </ul>
    </div>
    <div class="clear"></div>
  <div class="hr1"></div>
  <!-- Divider -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>