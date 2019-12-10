<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Testimonials' List</strong></h4>
      
    </div>
    <div class="col-md-4">
         <a href="<?php echo e(URL::to('admin/testimonials/create')); ?>" class="btn btn-success btn-sm pull-right">Add New Testimonial</a>
    </div>
  </div>
</section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
        <?php if(Session::has('success_message')): ?>
            <div class='alert alert-info' role='alert'>
                  <span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>
                    <?php echo e(Session('success_message')); ?>

                  <span class='sr-only'>Error:</span>
              </div>
        <?php endif; ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Designation</th>
                  <th>Organization</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($testimonials as $testimonial): ?>
                <tr>
                  <td><?php echo e($testimonial->id); ?></td>
                  <td><?php echo e($testimonial->fullname); ?></td>
                  <td><?php echo e($testimonial->designation); ?></td>
                  <td><?php echo e($testimonial->organization); ?></td>
                  <td><?php echo e($testimonial->description); ?></td>
                  <td><img src="<?php echo e(asset($testimonial->image)); ?>" height="60"></td>
                  <td> 

                  <a href="<?php echo e(URL::to('admin/testimonials/edit',['id'=>$testimonial->id])); ?>"><button type="button" class="btn btn-box-tool text-green" title="Edit" >
                  <i class="fa fa-edit"></i></button></a>

                  <form method="POST" onclick="return confirm('Are you sure to delete this item?')" action="">
                  <a href="<?php echo e(URL::to('admin/testimonials/delete',['id'=>$testimonial->id])); ?>"><button type="button"  class="btn btn-box-tool text-red" title="Delete"><i class="fa fa-trash"></i></button></a>
                  </form>

                </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
               
              </table>
              <?php echo e($testimonials->links()); ?>

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