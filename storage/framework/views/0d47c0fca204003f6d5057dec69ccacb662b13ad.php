<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
  <div class="row">
     <div class="col-md-8">
        <h4><strong>Admin Accounts</strong></h4>
      
    </div>
    <div class="col-md-4">
        
        <!--  <a href="<?php echo e(URL::to('admin/unapproved_accounts/create')); ?>" class="btn btn-success btn-sm pull-right">Add New unapproved_account</a> -->
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
                  <th>User's Fullname</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($unapproved_accounts as $unapproved_account): ?>
                <tr>
                  <td><?php echo e($unapproved_account->fullname); ?></td>
                  <td><?php echo e($unapproved_account->email); ?></td>
                  <td><?php echo e($unapproved_account->phone); ?></td>
                  <td><?php echo e($unapproved_account->role); ?></td>
                  <td> 
                  


                   <a href="<?php echo e(URL::to('admin/approve',['id'=>$unapproved_account->id])); ?>">
                   <?php if($unapproved_account->verified=='1'): ?>
                   <button type="button" class="btn btn-box-tool text-blue" title="Click to unapprove"><i class="fa fa-check"></i></button>
                   <?php else: ?>
                   <button type="button" class="btn btn-box-tool text-black" title="Click to Approve"><i class="fa fa-times"></i></button>
                   <?php endif; ?>
                   </a>

                </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
               
              </table>
              <?php echo e($unapproved_accounts->links()); ?>

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