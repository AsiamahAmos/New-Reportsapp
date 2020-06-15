

<!--  Modal content for the above example add access -->
<div class="modal fade timeout" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Set Timeout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <!-- Begin page -->
       <div class="col-lg-12">
        <div class="card">
            <div style="background:#30419b;color:white" class="card-header">
                <strong>Timeout</strong> Settings
            </div>
            <div class="card-body card-block">
                <form action="<?php echo e(url('/session-time')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal"><?php echo e(csrf_field()); ?>

                <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="username" class=" form-control-label">Timeout (mins)</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                        <input value="<?php echo e($sessionTimeOut); ?>" type="text" id="timeout" name="timeout" placeholder="Enter timeout" class="form-control">
                
                            <small class="form-text text-muted">Please enter timeout in minutes</small>
                        </div>
                    </div>
                   
            
                    <button style="margin-left:35%" type="submit" class="btn btn-primary">Update Time</button>

                    </form><!--end of modal form -->
                    </div>
                      </div><!-- End of card-->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- end modal large session time creation -->





<!-- session automatic timeout libraries code-->

<link href="<?php echo e(asset('css/reports_css/jquery-ui.css')); ?>" rel="stylesheet" media="all">
<!-- <link type="text/css" rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css"  /> -->
<!--Load jquery core library 1.11.2-->
 

<script type="text/javascript" src="<?php echo e(asset('js/reports_js/jquery1.11.2.min.js')); ?>"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script> -->

<script type="text/javascript" src="<?php echo e(asset('js/reports_js/jquery-ui1.11.3.min.js')); ?>"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js" type="text/javascript"></script> -->

<script type="text/javascript" src="<?php echo e(asset('js/reports_js/assets/jquery-idleTimeout/store.legacy.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/reports_js/assets/jquery-idleTimeout/jquery-idleTimeout.min.js')); ?>"></script>

<script type="text/javascript" charset="utf-8">

   $.noConflict();//this done to prevent jquery core library conflict
   store.set('user', { name:'Marcus' });
   store.get('user').name == 'Marcus';
   //alert("hi"); 
   jQuery(document).ready(function ( $ ){
    jQuery(document).idleTimeout({
      redirectUrl: "<?php echo e(url('/logout')); ?>",      // redirect to this url on logout. Set to "redirectUrl: false" to disable redirect
 
      // idle settings...//times 60 means its in minutes
      idleTimeLimit: <?php echo (empty($sessionTimeOut)) ? 60 : $sessionTimeOut * 60 ?>,  // 'No activity' time limit in seconds. 1200 = 20 Minutes
      idleCheckHeartbeat: 2,       // Frequency to check for idle timeouts in seconds

      // optional custom callback to perform before logout
      customCallback: false,       // set to false for no customCallback
      // customCallback:    function () {    // define optional custom js function
          // perform custom action before logout
      // },

      // configure which activity events to detect
      // http://www.quirksmode.org/dom/events/
      // https://developer.mozilla.org/en-US/docs/Web/Reference/Events
      activityEvents: 'click keypress scroll wheel mousewheel mousemove', // separate each event with a space

      // warning dialog box configuration
      enableDialog: true,           // set to false for logout without warning dialog
      dialogDisplayLimit: 30,       // 20 seconds for testing. Time to display the warning dialog before logout (and optional callback) in seconds. 180 = 3 Minutes
      dialogTitle: 'Session Expiration!!', // also displays on browser title bar
      dialogText: 'Because you have been inactive, your session is about to expire.',
      dialogTimeRemaining: 'Time remaining',
      dialogStayLoggedInButton: 'Stay Logged In',
      dialogLogOutNowButton: 'Log Out Now',

      // error message if https://github.com/marcuswestin/store.js not enabled
      errorAlertMessage: 'Please disable "Private Mode", or upgrade to a modern browser. Or perhaps a dependent file missing. Please see: https://github.com/marcuswestin/store.js',

      // server-side session keep-alive timer
      sessionKeepAliveTimer: 600,   // ping the server at this interval in seconds. 600 = 10 Minutes. Set to false to disable pings
      sessionKeepAliveUrl: window.location.href // set URL to ping - does not apply if sessionKeepAliveTimer: false
      });
    });
  </script>
<!--end of the seesion time out code--><?php /**PATH C:\xampp\htdocs\new-rep\reportsapp\resources\views/report/session-timeout.blade.php ENDPATH**/ ?>