<?php $__env->startSection('page-title'); ?>
  Contact Us
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-description'); ?>
  Gentle Heart Foundation,Kathmandu-5, Maligaun, Govt. Reg. No. 270/067, S.W.C. No. 30848, PAN No. 304485684
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Begin Blog -->
<div class="blog">
  
  <!-- Begin Posts -->
  <div class="content">
    <h2>Where we are</h2>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28250.795819709325!2d85.34623276562627!3d27.73736481799611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x660f45d397be8f25!2sGentle+Heart+Foundation+(Head+Office)!5e0!3m2!1sne!2snp!4v1493291043770" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28250.795819709325!2d85.34623276562627!3d27.73736481799611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x534f4f7472a54d3!2sGentle+Heart+Foundation!5e0!3m2!1sne!2snp!4v1493290960077" width="280" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

<br>
<br>
    <h2>Contact Us</h2>
    <p>Your comments and suggestions are highly appreciated.</p>
    <br />
    <br />
    <br />
    <div class="form-container">
      <!-- <form class="forms" action="<?php echo Helper::sendContactFormEmail(); ?>" method="post"> -->
       <?php echo e(Form::open(array('url'=>'contact','method'=>'post','class'=>'forms','enctype' => 'multipart/form-data'))); ?>

        <fieldset>
          <ol>
            <li class="form-row text-input-row">
              <label>Name*</label>
              <input type="text" name="name" value="" class="text-input required" title="" />
            </li>
            <li class="form-row text-input-row">
              <label>Email*</label>
              <input type="text" name="email" value="" class="text-input required email" title="" />
            </li>
            <li class="form-row text-area-row">
              <label>Message*</label>
              <textarea name="message" class="text-area required"></textarea>
            </li>
            <li class="form-row hidden-row">
              <input type="hidden" name="hidden" value="" />
            </li>
            <li class="button-row">
              <input type="submit" value="Submit" name="submit" class="btn-submit" />
            </li>
          </ol>
          <input type="hidden" name="v_error" id="v-error" value="Required" />
          <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
        </fieldset>
      </form>
      <div class="response">
        <?php if(Session::has('success_message')): ?>
            <div class='alert alert-info' role='alert'>
                  <span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>
                    <?php echo e(Session('success_message')); ?>

                  <span class='sr-only'>Error:</span>
              </div>
        <?php endif; ?>
      </div>
    </div>
    <br />
  </div>
  
  <!-- Begin Sidebar -->
    <?php echo $__env->make('front.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- End Sidebar -->
</div>
<!-- End Blog -->

<div class="clear"></div>
<div id="footer">
  <div class="footer-top"></div>
  <!-- Divider -->
  
  <!-- End Form -->
</div>
<div class="clear"></div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>