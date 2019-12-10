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
       <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7064.265940320871!2d85.33846155388989!3d27.71318046989478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72a591f5f27acf9!2sXavier+International+College!5e0!3m2!1sen!2snp!4v1497598868697" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
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