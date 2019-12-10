Hello <?php echo e($user->fullname); ?>,

<p>This is your password reset link as you requested. Click the link below to change your password. If request is not from you, simply ignore this message</p><br>

<a href="<?php echo e($link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset())); ?>"> <?php echo e($link); ?> </a>
