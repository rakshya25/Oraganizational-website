<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Edit Board Member</strong></h4>
      
    </div>
    <div class="col-md-4">
         <a href="<?php echo e(URL::to('admin/boards')); ?>" class="btn btn-success btn-sm pull-right">See All Board Members</a>
    </div>
  </div>

</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
           <?php echo e(Form::model($row,array('url'=>['admin/boards/edit',$row->id],'enctype' => 'multipart/form-data'))); ?> 
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
    <strong>Oops!</strong> There were some problems with your input.<br><br>
    <ul>
      <?php foreach($errors->all() as $error): ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
       
          <hr>
        
        
              <!-- /errors -->
               

                
                <div class="row">
                      <div class="col-md-4">
                         <div class="form-group">
                            <label for="title">Fullname of Person</label>                  
                            <?php echo e(Form::text('fullname', Input::old('fullname'), array('placeholder' => 'Mr.John Charles','class'=>'form-control'))); ?>

                          </div>
                      </div>
                          
                      <div class="col-md-4">
                          <div class="form-group">
                            <label for="title">Designation</label>                  
                            <?php echo e(Form::text('designation', Input::old('designation'), array('placeholder' => 'Chairman','class'=>'form-control'))); ?>

                          </div>
                      </div>

                       <div class="col-md-4">
                         <div class="form-group">
                            <label for="title">Phone (optional)</label>                  
                            <?php echo e(Form::text('phone', Input::old('phone'), array('placeholder' => '98XXXXXXXX / 014XXXXXX','class'=>'form-control'))); ?>

                          </div>
                      </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      
                          <div class="form-group">
                            <label for="title">Address</label>                  
                            <?php echo e(Form::text('address', Input::old('address'), array('placeholder' => 'Satdobato, Lalitpur','class'=>'form-control'))); ?>

                          </div>
                      <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                            <label for="title">Value</label>                  
                            <?php echo e(Form::text('value', Input::old('value'), array('placeholder' => 'Number between 1-100','class'=>'form-control'))); ?>

                            <p class="help-block">Record with highest value appears first</p>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                                <img src="<?php echo e(asset($row->image)); ?>" height="80" style="border: 2px solid; float: right;">
                              </div>
                          </div>

                        
                          <div class="col-md-5">
                            <div class="form-group">
                              <label for="exampleInputFile">Change Image</label>
                              <input type="file" name="image" id="exampleInputFile">
                              <p class="help-block">Image should be in square (160X160)</p>
                            </div>
                          </div>

                          
                      </div>
                          
                         
                   </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="text">Bio (optional)</label>
                          <textarea name="bio" class="form-control textarea" placeholder="Mr. John Holy has different versions of her bio all over the internet. As you can imagine, some are more formal than others. But when it comes to her Twitter bio, she has carefully phrased her bio information in a way that helps her connect with her audience -- specifically, through the use of humor. " style="width: 100%; height: 110px; line-height: 18px; border: 1px solid #dddddd; padding: 10px"><?php echo e(null !==(Input::old('bio'))?Input::old('bio'):$row->bio); ?></textarea>
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