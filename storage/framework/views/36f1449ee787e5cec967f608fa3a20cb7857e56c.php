<?php echo $__env->make('admin.partials.delete-confirmation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Urgent Notices List</strong></h4>
      
    </div>
    <div class="col-md-4">
        <a href="<?php echo e(URL::to('admin/urgents/create')); ?>" class="btn btn-success btn-sm pull-right">Add New Notice</a>
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
                  <th>Title</th>
                  <th>Referral_link</th>
                  <th>Active</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($urgents as $urgent): ?>
                <tr>
                  <td><?php echo e($urgent->id); ?></td>
                  <td><?php echo e($urgent->title); ?></td>
                  <td><?php echo e($urgent->referral_link); ?></td>
                  <td><a href="#"><button type="button" class="btn btn-box-tool" title="active"><i class="fa fa-check"></i></button></a></td>
                  

                  <td> 

<a href="<?php echo e(URL::to('admin/urgents/edit',['id'=>$urgent->id])); ?>"><button type="button" class="btn btn-box-tool text-green" title="Edit" >
<i class="fa fa-edit"></i></button></a>

<!-- <a href="<?php echo e(URL::to('admin/urgents/delete',['id'=>$urgent->id])); ?>"><button type="button" class="btn btn-box-tool text-red" title="Delete"><i class="fa fa-trash"></i></button></a> -->


<form method="POST" onclick="return confirm('Are you sure to delete this item?')" action="<?php echo e(URL::to('admin/urgents/delete',['id'=>$urgent->id])); ?>" accept-charset="UTF-8" style="display:inline">
<a href="<?php echo e(URL::to('admin/urgents/delete',[$urgent->id])); ?>"><button type="button"  class="btn btn-box-tool text-red" title="Delete"><i class="fa fa-trash"></i></button></a>
</form>

<!-- <form method="POST" onclick="return confirm('Are you sure?')" action="<?php echo e(URL::to('admin/urgents/delete',['id'=>$urgent->id])); ?>" accept-charset="UTF-8" style="display:inline">
<a href="<?php echo e(URL::to('admin/urgents/delete',['id'=>$urgent->id])); ?>"><button type="button" data-toggle="modal" data-target="#confirmDelete" class="btn btn-box-tool text-red" title="Delete"><i class="fa fa-trash"></i></button></a>
</form> -->


<!-- <form method="POST" action="<?php echo e(URL::to('admin/urgents/delete',['id'=>$urgent->id])); ?>" accept-charset="UTF-8" style="display:inline">
    <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete User" data-message="Are you sure you want to delete this user ?">
        <i class="glyphicon glyphicon-trash"></i> Delete
    </button>
</form> -->

</td>
</tr>
                <?php endforeach; ?>


<!--  -->
                </tbody>
               
              </table>
              <?php echo e($urgents->links()); ?>

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