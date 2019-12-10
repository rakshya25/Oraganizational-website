<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Shop List</strong></h4>
    </div>
    <div class="col-md-4">
        
         <a href="<?php echo e(URL::to('admin/shops/create')); ?>" class="btn btn-success btn-sm pull-right">Add New Shop</a>
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
                  <th>Shop ID</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($shops as $shop): ?>
                <tr>
                  <td><?php echo e($shop->id); ?></td>
                  <td><?php echo e($shop->title); ?></td>
                  <td>Image here</td>
                  <td><?php echo e($shop->price); ?></td>
                  <td><?php echo e($shop->created_at); ?></td>
                  <td> 
                    <a href="<?php echo e(URL::to('admin/shops/edit',['id'=>$shop->id])); ?>"><button type="button" class="btn btn-box-tool text-green" title="Edit" >
                    <i class="fa fa-edit"></i></button></a>

                  <form method="POST" onclick="return confirm('Are you sure to delete this item?')" action="">
                    <a href="<?php echo e(URL::to('admin/shops/delete',['id'=>$shop->id])); ?>"><button type="button"  class="btn btn-box-tool text-red" title="Delete"><i class="fa fa-trash"></i></button></a>
                  </form>

                   <a href="<?php echo e(URL::to('admin/shops/status',['id'=>$shop->id])); ?>">
                   <?php if($shop->published=='1'): ?>
                   <button type="button" class="btn btn-box-tool text-blue" title="Click to Unpublish"><i class="fa fa-check"></i></button>
                   <?php else: ?>
                   <button type="button" class="btn btn-box-tool text-black" title="Click to Publish"><i class="fa fa-times"></i></button>
                   <?php endif; ?>
                   </a>

                </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
               
              </table>
              <?php echo e($shops->links()); ?>

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