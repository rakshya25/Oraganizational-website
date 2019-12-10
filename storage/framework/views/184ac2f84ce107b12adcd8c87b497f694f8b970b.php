<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Add New Course</strong></h4>
      
    </div>
    <div class="col-md-4">
         <a href="<?php echo e(URL::to('admin/courses')); ?>" class="btn btn-success btn-sm pull-right">See All Courses</a>
    </div>
  </div>

</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
            <?php echo e(Form::open(array('url'=>'admin/courses/create','method'=>'post'))); ?>

              <div class="box-body">
              <!-- show errors/messages here  -->
        <?php if(Session::has('success_message')): ?>
            <div class='alert alert-info' role='alert'>
                  <span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>
                    <?php echo e(Session('success_message')); ?>

                  <span class='sr-only'>Error:</span>
            </div>
        <?php endif; ?>
        <?php if(""!=($errors->first('title'))): ?>
          <span class="help-block" style="background-color: red; color:white" ><?php echo e($errors->first('title')); ?></span>
        <?php endif; ?>
        <?php if(""!=($errors->first('level'))): ?>
          <span class="help-block" style="background-color: red; color:white" ><?php echo e($errors->first('level')); ?></span>
        <?php endif; ?>
         <?php if(""!=($errors->first('college'))): ?>
          <span class="help-block" style="background-color: red; color:white" ><?php echo e($errors->first('college')); ?></span>
        <?php endif; ?>
        <?php if(""!=($errors->first('seats'))): ?>
          <span class="help-block" style="background-color: red; color:white" ><?php echo e($errors->first('seats')); ?></span>
        <?php endif; ?>
         <?php if(""!=($errors->first('description'))): ?>
          <span class="help-block" style="background-color: red; color:white" ><?php echo e($errors->first('description')); ?></span>
        <?php endif; ?>
          <hr>
        
              <!-- /errors -->
               

                
                <div class="row">
                      <div class="col-md-4">
                         <div class="form-group">
                            <label for="title">Title of the Course</label>                  
                            <?php echo e(Form::text('title', Input::old('title'), array('placeholder' => 'Bachelor in Business Administration','class'=>'form-control'))); ?>

                          </div>
                      </div>

                <div class="col-md-4" >
                  <div class="form-group">
                      <label for="text">Level</label>
                      <select name="level" class="form-control">
                        <option disabled>Select Level</option>
                        <option value="Intermediate" <?php echo e((Input::old("level") == "Intermediate" ? "selected":"")); ?>>Intermediate</option>
                        <option value="Bachelor" <?php echo e((Input::old("level") == "Bachelor" ? "selected":"")); ?>>Bachelor</option>
                        <option value="Masters" <?php echo e((Input::old("level") == "Masters" ? "selected":"")); ?>>Masters</option>
                        <option value="Others" <?php echo e((Input::old("level") == "Others" ? "selected":"")); ?>>Others</option>
                      </select>
                  </div>
                </div>

                      <div class="col-md-4">
                           <div class="form-group">
                              <label for="text">Seats Available (optional)</label>
                              <?php echo e(Form::text('seats', Input::old('seats'), array('placeholder' => 'Number of seats available like: 5','class'=>'form-control'))); ?>

                        </div>
                      </div>
                </div>

                <div class="row">
                   <div class="col-md-6" >
                        <div class="form-group">
                          <label for="text">College</label>
                              <?php echo e(Form::text('college', Input::old('college'), array('placeholder' => 'Caspian College','class'=>'form-control'))); ?>

                        </div>

                        <div class="form-group">
                          <label for="text">Address of College (optional)</label>
                              <?php echo e(Form::text('college_address', Input::old('college_address'), array('placeholder' => 'Lagankhel, Lalitpur','class'=>'form-control'))); ?>

                        </div>
                  </div>
                  <div class="col-md-6">
                        <div class="form-group">
                          <label for="text">Description (optional)</label>
                          <textarea name="description" class="form-control textarea" placeholder="BBA is a bachelor's degree in commerce and business administration.Students who have successfully completed higher secondary or equivalent are English to apply." style="width: 100%; height: 110px; line-height: 18px; border: 1px solid #dddddd; padding: 10px"><?php echo e(null !==(Input::old('description'))?Input::old('description'):''); ?></textarea>
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