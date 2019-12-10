<!-- jQuery 2.2.3 -->
<script src="<?php echo e(asset('assets/js/admin/jquery-2.2.0.min.js')); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo e(asset('assets/js/admin/bootstrap-admin.min.js')); ?>"></script>

<!-- SlimScroll -->
<script src="<?php echo e(asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('assets/plugins/fastclick/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('assets/js/admin/app.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('assets/js/admin/demo.js')); ?>"></script>

<script src="<?php echo e(asset('assets/plugins/iCheck/icheck.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/admin/bootstrap-datetimepicker.fr.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/admin/bootstrap-datetimepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/admin/alertify.js')); ?>"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>


<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>

  <?php echo $__env->make('admin.partials.modal-frame', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
