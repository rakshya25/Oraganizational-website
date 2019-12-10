<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Add New Miscellaneous</strong></h4>
      
    </div>
    <div class="col-md-4">
         <a href="<?php echo e(URL::to('admin/miscs')); ?>" class="btn btn-success btn-sm pull-right">See All Miscellaneous</a>
    </div>
  </div>

</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
        <?php echo e(Form::open(array('url'=>'admin/miscs/create','method'=>'post','enctype' => 'multipart/form-data'))); ?>

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
                    <div class="col-md-12">
                    <div class="form-group">
                      <label>Title</label>
                        <select name='title' id='select1' class="form-control";>
                          <option value='our_mission' <?php echo e((Input::old("title") == "our_mission" ? "selected":"")); ?>>Our Mission</option> 
                          <option value='our_vision' <?php echo e((Input::old("title") == "our_vision" ? "selected":"")); ?>>Our Vision</option>
                          <option value='our_history' <?php echo e((Input::old("title") == "our_history" ? "selected":"")); ?>>Our History</option> 
                           <option value='christian_history' <?php echo e((Input::old("title") == "our_history" ? "selected":"")); ?>>Christian History in Nepal</option> 
                          <option value='our_objectives' <?php echo e((Input::old("title") == "our_objectives" ? "selected":"")); ?>>Our Objectives</option> 
                          <option value='message-from-chairman' <?php echo e((Input::old("title") == "message-from-chairman" ? "selected":"")); ?>>Message From Chairman</option> 
                          <option value='message-from-president' <?php echo e((Input::old("title") == "message-from-president" ? "selected":"")); ?>>Message From President</option> 
                          <option value='message-from-secretary' <?php echo e((Input::old("title") == "message-from-secretary" ? "selected":"")); ?>>Message From secretary</option> 
                           <option value='message-from-director' <?php echo e((Input::old("title") == "message-from-director" ? "selected":"")); ?>>Message From Director</option> 
                        </select>
                        </div>

                          <div class="form-group">
                            <label for="text">Description</label>
                            <textarea name="description" id="compose-textarea" class="form-control textarea" placeholder="Description" style="width: 100%; height: 300px; line-height: 18px; border: 1px solid #dddddd; padding: 10px"><?php echo e(null !==(Input::old('description'))?Input::old('description'):''); ?></textarea>
                         </div>
                   </div>
                </div>

                      <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputFile">Upload Image (optional)</label>
                              <input type="file" name="image" id="exampleInputFile">
                              <p class="help-block">Less than 2 MB</p>
                            </div>
                          </div>

                         <!--  <div class="col-md-6">
                            <div class="form-group">
                            <label for="title"></label>                  
                            <?php echo e(Form::text('tags', Input::old('tags'), array('placeholder' => 'christianity, secularism, freedom','class'=>'form-control'))); ?>

                            </div>
                            </div> -->
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