<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Documents' List</strong></h4>
      
    </div>
    <div class="col-md-4">
        <a href="<?php echo e(URL::to('admin/documents/create')); ?>" class="btn btn-success btn-sm pull-right">Add New Document</a>
        
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
                  <th>Title of document</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($documents as $document): ?>
                <tr>
                  <td><?php echo e($document->id); ?></td>
                  <td><?php echo e($document->title); ?></td>
                  <td><?php echo e($document->description); ?></td>
                  <td><?php echo e($document->category); ?></td>
                  <td>
                    <?php if($document->file_type=='jpg'||$document->file_type=='jpeg'||$document->file_type=='PNG'): ?>
                      <a href="<?php echo e(asset($document->image)); ?>" src="<?php echo e(asset($document->image)); ?>" target="_blank"><img title="<?php echo e(asset($document->image)); ?>" src="<?php echo e(asset($document->image)); ?>" width="60"></a>
                    <?php elseif($document->file_type=='pdf'): ?>
                       <a href="<?php echo e(asset($document->image)); ?>" target="_blank"><img title="<?php echo e(asset($document->image)); ?>" src="<?php echo e(asset('assets/images/icons/pdf.png')); ?>" height="60"></a>
                    <?php elseif($document->file_type=='doc'||$document->file_type=='docx'): ?>
                       <a href="<?php echo e(asset($document->image)); ?>" target="_blank"><img title="<?php echo e(asset($document->image)); ?>" src="<?php echo e(asset('assets/images/icons/word.png')); ?>" height="60"></a>
                    <?php else: ?>
                       <a href="<?php echo e(asset($document->image)); ?>" target="_blank"><img title="<?php echo e(asset($document->image)); ?>" src="<?php echo e(asset('assets/images/icons/file.png')); ?>" height="60"></a>
                    <?php endif; ?>
                  </td>

                  <td> 
                  <a href="<?php echo e(URL::to('admin/documents/edit',['id'=>$document->id])); ?>"><button type="button" class="btn btn-box-tool text-green" title="Edit" >
                  <i class="fa fa-edit"></i></button></a>

                   <form method="POST" onclick="return confirm('Are you sure to delete this item?')" action="">
                  <a href="<?php echo e(URL::to('admin/documents/delete',['id'=>$document->id])); ?>"><button type="button"  class="btn btn-box-tool text-red" title="Delete"><i class="fa fa-trash"></i></button></a>
                  </form>
                </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
               
              </table>
              <?php echo e($documents->links()); ?>

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