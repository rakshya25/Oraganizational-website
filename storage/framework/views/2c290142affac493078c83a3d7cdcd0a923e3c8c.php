<?php 
  use Carbon\Carbon;
  $last_backup_date= \DB::table('preferences')->where('id', 1)->get();
  $last_backup_date= Carbon::parse($last_backup_date[0]->data1);
 ?>



<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
     <!-- Small boxes (Stat box) -->

      <div class="row">        
        <div class="col-md-6">
           <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-database" aria-hidden="true"></i>

              <h3 class="box-title">Backup Database and Files...</h3>

             <!--  <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div> -->
   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div id="dateTime">
                <small><label>Latest Backup :<b> <i class="fa fa-calendar-check-o" aria-hidden="true"></i><?php echo e(substr($last_backup_date,0,10)); ?></b></label>
                 <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo e(\Carbon\Carbon::createFromTimeStamp(strtotime($last_backup_date))->diffForHumans()); ?></small> 
            </div>
                <a class="btn btn-hidden" onclick="refreshLastUpdatedDate()" title="Reload">
                <span class='glyphicon glyphicon-refresh' id='spinner'></span></a>
                <br>
                <button id="btnDownload" class="btn btn-primary btn-flat" onclick="keepBackup()">Keep backup now</button>
                
            </div>
            <!-- /.box-body -->
 
          </div>
          <!-- /.box -->
        </div>



         <div class="col-md-6">
          
          <!-- DIRECT CHAT PRIMARY -->
          <div class="box box-primary direct-chat direct-chat-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Admins' Conversation</h3>

              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="3 Messages today" class="badge bg-light-blue">23</span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                  <i class="fa fa-comments"></i></button>
                <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="<?php echo e(asset('assets/images/admin/users/female2.png')); ?>" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit?
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="<?php echo e(asset('assets/images/admin/users/male2.png')); ?>" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="<?php echo e(asset('assets/images/admin/users/male1.png')); ?>" alt="User Image">

                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contatcts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-flat">Send</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <!--/.direct-chat -->
       </div>
        <!-- /.col -->

      </div>
</section>


    <script>
      function keepBackup(){
        var buttonString= "<span class='glyphicon glyphicon-refresh glyphicon-refresh-animate' id='spinner'></span> "+$('#btnDownload').html();
          alertify
          .delay(20000)
          .closeLogOnClick(false)
          .success("Downloading files and databases.. Do not close till you get completion message.");
          $('#btnDownload').attr("disabled", true);
        $('#btnDownload').html(buttonString);
            $.ajax({
              url: 'backup-full-files-and-database'
        }).done(function( msg ) {
          updateLatestBackupTakenDate(); //call to update latest backup date
          //$(".spinner").remove();//remove spinner as task is completed
          $("[id='spinner']").remove();
          alertify.success("Backup success");
          $('#btnDownload').attr("disabled", false);        
        });
      }

      /*js function to update latest backup date through AJAX call*/
      function updateLatestBackupTakenDate(){
           $.ajax({
              url: 'change-backup-date'
        }).done(function( msg ) {
          alertify.success("Latest backup date updated.");      
        });
      }

      /*to refresh last updated date*/
      function refreshLastUpdatedDate(){
        alert('djada');
      }

      function getSummary(id){
       $.ajax({
         type: "GET",
         url: 'Your URL',
         data: "id=" + id, // appears as $_GET['id'] @ your backend side
         success: function(data) {
               // data is ur summary
              $('#dateTime').html(data);
         }
       });
      }
    </script>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- for spinner -->
  <style type="text/css">

</style>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>