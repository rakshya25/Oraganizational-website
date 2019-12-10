<!-- app/views/login.blade.php -->
 
<!doctype html>
<html>
<head>
<title>Login-Serve Now Nepal</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body style="margin-top: 20px; ">
<div class="row">

<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3"  style="background-color: #D2D1D1; border-radius:15px;">
    <br><br>

      <?php echo e(Form::open(array('url' => 'admin/login','method'=>'post'))); ?>


      
      <?php if(Session::has('flash_msg')): ?>
      <div class='alert alert-info' role='alert'>
          <span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>
            <?php echo e(session('flash_msg')); ?>

          <span class='sr-only'>Error:</span>
      </div>
      <?php endif; ?>

      <?php if(Session::has('invalid_login_msg')): ?>
              <div class='alert alert-danger' role='alert'>
              <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
              <span class='sr-only'>Error:</span><?php echo e(session('invalid_login_msg')); ?></div>
      <?php endif; ?>
      
      <div class="form-group">
          
              <?php echo e(Form::label('email', 'Email address:')); ?>

              <?php echo e(Form::text('email', Input::old('email'), array('placeholder' => 'Your email address goes here','class'=>'form-control'))); ?>

         
      </div>
    
        <!-- if there are login errors, show them here -->
       <?php if(""!=($errors->first('email'))): ?>

        <?php echo "<div class='alert alert-danger' role='alert'>
                  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                  <span class='sr-only'>Error:</span>".$errors->first('email')."</div>" ?>
         
          <!-- <?php echo e($errors->first('email')); ?> -->
          <!-- <?php echo e($errors->first('password')); ?> -->
        <?php endif; ?>
      <div class="form-group">
          <?php echo e(Form::label('password', 'Password:')); ?>

          <?php echo e(Form::password('password', array('class'=>'form-control'))); ?>

      </div>
    <?php if(""==($errors->first('email'))): ?>
          <?php if(""!=($errors->first('password'))): ?>
            <?php echo "<div class='alert alert-danger' role='alert'>
                      <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                      <span class='sr-only'>Error:</span>".$errors->first('password')."</div>" ?>
          <?php endif; ?>
    <?php endif; ?>  
      <div class="row">
           <div class="form-group" style="margin: 15px">
            <?php echo e(Form::submit('Login', array('class'=>'btn btn-primary pull-right btn-block'))); ?>

            </div>
      </div>
      <?php echo e(Form::close()); ?>

      <hr>
      <div class="row">
          <div class="col-md-6 col-sm-6" >
          <div class="form-group">
            <label>
               <a href="<?php echo e(url('admin/register')); ?>">Create new account</a>
            </label>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 " >
          <div class="form-group">
            <label class="pull-right">
               <a href="<?php echo e(url('forget-password')); ?>">I forgot my password</a>
            </label>
          </div>
            
          </div>
       </div>

      </div>

</div>
</body>
</html>