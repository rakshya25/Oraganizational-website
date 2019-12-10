<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Add New Event</strong></h4>
      
    </div>
    <div class="col-md-4">
         <a href="<?php echo e(URL::to('admin/events')); ?>" class="btn btn-success btn-sm pull-right">See All Events</a>
    </div>
  </div>

</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
            <?php echo e(Form::open(array('url'=>'admin/events/create','method'=>'post'))); ?>

              <div class="box-body">
              <!-- show errors/messages here  -->
        <?php if(Session::has('success_message')): ?>
            <div class='alert alert-info' role='alert'>
                  <span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>
                    <?php echo e(Session('success_message')); ?>

                  <span class='sr-only'>Error:</span>
              </div>
        <?php endif; ?>

<?php if(count($errors) > 0): ?>
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
      <?php foreach($errors->all() as $error): ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
        
        
          <hr>
        
        
              <!-- /errors -->
                <div class="form-group">
                  <label for="title">Title of the Event</label>                  
                  <?php echo e(Form::text('title', Input::old('title'), array('placeholder' => 'Student Gathering / Usual Meeting','class'=>'form-control'))); ?>

                </div>
            

                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">  
                         <label for="text">Event Date and Time</label>
                          <div class="input-group date form_datetime" data-date="" data-date-format="yyyy-mm-dd HH:ii:ss" data-link-field="dtp_input1">
                          <!-- dd MM yyyy - HH:ii p -->
                              <!-- <input class="form-control" size="16" type="text" value="" readonly> -->
                              <?php echo e(Form::text('date_event', Input::old('date_event'), array('placeholder' => 'YYYY-MM-DD HH:ii:ss','class'=>'form-control','size'=>'16'))); ?>

                              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                          </div>
                          <input type="hidden" id="dtp_input1" value="" />
                      </div>
                      <div class="form-group">
                        <label for="text">Location of the Event</label>
                        <?php echo e(Form::text('address', Input::old('address'), array('placeholder' => 'Jawalakhel','class'=>'form-control'))); ?>

                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="text">Short Description</label>
                          <textarea name="description" class="form-control textarea" placeholder="We are meeting with scholars in Kathmandu at INF office, Jawalakhel." style="width: 100%; height: 110px; line-height: 18px; border: 1px solid #dddddd; padding: 10px"><?php echo e(null !==(Input::old('description'))?Input::old('description'):''); ?></textarea>
                       </div>
                  </div>
                </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>