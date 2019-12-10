<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Edit Document</strong></h4>
      
    </div>
    <div class="col-md-4">
         <a href="<?php echo e(URL::to('admin/documents')); ?>" class="btn btn-success btn-sm pull-right">See All Documents</a>
    </div>
  </div>

</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
             <?php echo e(Form::model($row,array('url'=>['admin/documents/edit',$row->id],'enctype' => 'multipart/form-data'))); ?> 
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
                      <div class="col-md-6">
                         <div class="form-group">
                            <label for="title">Title of Document</label>                  
                            <?php echo e(Form::text('title', Input::old('title'), array('placeholder' => 'Press Release about Christmas Celebration','class'=>'form-control'))); ?>

                          </div>

                        <div class="form-group">
                          <label for="text">Description</label>
                          <textarea name="description" class="form-control textarea" placeholder="Please download ‘Constitution of Nepal 2071′ unofficial English translation by constituent Assembly Secretariat." style="width: 100%; height: 110px; line-height: 18px; border: 1px solid #dddddd; padding: 10px"><?php echo e(null !==(Input::old('description'))?Input::old('description'):$row->description); ?></textarea>
                       </div>
                      </div>

                    <div class="col-md-6">

                      <div class="form-group">
                              <label for="text">Category (optional)</label>
                              <select name="category" class="form-control">
                                <option disabled>Select Category</option>
                                <option value="Press Release" <?php echo e((Input::old("category") == "Press Release" ? "selected":"")); ?>>Press Release</option>
                                <option value="Rules" <?php echo e((Input::old("category") == "Rules" ? "selected":"")); ?>>Rules</option>
                                <option value="Documents" <?php echo e((Input::old("category") == "Documents" ? "selected":"")); ?>>Documents</option>
                                <option value="Others" <?php echo e((Input::old("category") == "Others" ? "selected":"")); ?>>Others</option>
                              </select>
                      </div>
                        
                        <div class="col-md-4">
                          <div class="form-group">
                  
                              <?php if($row->file_type=='jpg'||$row->file_type=='jpeg'||$row->file_type=='PNG'): ?>
                                <a href="<?php echo e(asset($row->image)); ?>" src="<?php echo e(asset($row->image)); ?>" target="_blank"><img title="<?php echo e(asset($row->image)); ?>" src="<?php echo e(asset($row->image)); ?>" width="100"></a>
                              <?php elseif($row->file_type=='pdf'): ?>
                                 <a href="<?php echo e(asset($row->image)); ?>" target="_blank"><img title="<?php echo e(asset($row->image)); ?>" src="<?php echo e(asset('assets/images/icons/pdf.png')); ?>" height="100"></a>
                              <?php elseif($row->file_type=='doc'||$row->file_type=='docx'): ?>
                                 <a href="<?php echo e(asset($row->image)); ?>" target="_blank"><img title="<?php echo e(asset($row->image)); ?>" src="<?php echo e(asset('assets/images/icons/word.png')); ?>" height="100"></a>
                              <?php else: ?>
                                 <a href="<?php echo e(asset($row->image)); ?>" target="_blank"><img title="<?php echo e(asset($row->image)); ?>" src="<?php echo e(asset('assets/images/icons/file.png')); ?>" height="100"></a>
                              <?php endif; ?>
        
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="form-group">
                              <label for="exampleInputFile">Change File</label>
                              <input type="file" name="image" id="exampleInputFile">
                              <p class="help-block">Upload PDF or DOCX or any type of image</p>
                          </div>                       
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