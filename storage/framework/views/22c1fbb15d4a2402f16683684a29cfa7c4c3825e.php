<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Add New Gallery Item</strong></h4>
      
    </div>
    <div class="col-md-4">
         <a href="<?php echo e(URL::to('admin/gallery')); ?>" class="btn btn-success btn-sm pull-right">See All Gallery List</a>
    </div>
  </div>

</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
            
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
               



          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">New Image</a></li>
              <li><a href="#tab_2" data-toggle="tab">New Video</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               <?php echo e(Form::open(array('url'=>'admin/gallery/create-image','method'=>'post','enctype' => 'multipart/form-data'))); ?>

                        <div class="form-group">
                                  <label for="title">Caption of Image</label>                  
                                  <?php echo e(Form::text('title', Input::old('title'), array('placeholder' => 'Title of Image','class'=>'form-control'))); ?>

                        </div> 
                        <div class="row">
                          <div class="col-md-6">
                                  <div class="form-group">
                                                <label for="text">Category</label>
                                                <select name="category" class="form-control">
                                                  <option disabled>Select Category</option>
                                                  <option value="Mission" <?php echo e((Input::old("level") == "Mission" ? "selected":"")); ?>>Mission</option>
                                                  <option value="Celebration" <?php echo e((Input::old("Celebration") == "Celebration" ? "selected":"")); ?>>Celebration</option>
                                                  <option value="Poltical" <?php echo e((Input::old("Poltical") == "Poltical" ? "selected":"")); ?>>Poltical</option>
                                                   <option value="Featured" <?php echo e((Input::old("Featured") == "Featured" ? "selected":"")); ?>>Featured Video</option>
                                                  <option value="Others" <?php echo e((Input::old("Others") == "Others" ? "selected":"")); ?>>Others</option>
                                                  
                                                </select>
                                  </div>
                          </div>
                          <div class="col-md-6">
                                  <div class="form-group">
                                            <label for="exampleInputFile">Upload Image</label>
                                            <input type="file" name="image" id="exampleInputFile">
                                            <p class="help-block">Less than 2 MB</p>
                                  </div>
                          </div>
                        </div>
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
              <?php echo e(Form::open(array('url'=>'admin/gallery/create-video','method'=>'post','enctype' => 'multipart/form-data'))); ?>

                       <div class="form-group">
                                  <label for="title">Title of Video</label>                  
                                  <?php echo e(Form::text('title', Input::old('title'), array('placeholder' => 'Title of video','class'=>'form-control'))); ?>

                        </div> 
                        <div class="row">
                          <div class="col-md-6">
                                   <div class="form-group">
                                                <label for="text">Category</label>
                                                <select name="category" class="form-control">
                                                  <option disabled>Select Category</option>
                                                  <option value="Mission" <?php echo e((Input::old("level") == "Mission" ? "selected":"")); ?>>Mission</option>
                                                  <option value="Celebration" <?php echo e((Input::old("Celebration") == "Celebration" ? "selected":"")); ?>>Celebration</option>
                                                  <option value="Poltical" <?php echo e((Input::old("Poltical") == "Poltical" ? "selected":"")); ?>>Poltical</option>
                                                   <option value="Featured" <?php echo e((Input::old("Featured") == "Featured" ? "selected":"")); ?>>Featured Video</option>
                                                  <option value="Others" <?php echo e((Input::old("Others") == "Others" ? "selected":"")); ?>>Others</option>
                                                  
                                                </select>
                                  </div>
                          </div>
                          <div class="col-md-6">
                                    <div class="form-group">
                                  <label for="title">Youtube Video Id</label>                  
                                  <?php echo e(Form::text('url', Input::old('url'), array('placeholder' => '8FMz_KT1mC4','class'=>'form-control'))); ?>

                        </div> 
                          </div>
                        </div>

                   

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
              </div>

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->              

            
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