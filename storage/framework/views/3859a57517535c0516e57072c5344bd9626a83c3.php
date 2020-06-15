


<!--  Modal content for the above example add access -->
<div class="modal fade email-setup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Setup Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <!-- Begin page -->
       <div class="col-lg-12">
        <div class="card">
            <div style="background:#30419b;color:white" class="card-header">
                <strong>Email</strong> Settings
            </div>
            <div class="card-body card-block">
          
                <form action="<?php echo e(url('/email-setup')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal"><?php echo e(csrf_field()); ?>

                <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="username" class=" form-control-label">Driver</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                        <input value="" type="text" id="driver" name="driver" placeholder="Enter driver" class="form-control">
                
                            <small class="form-text text-muted">Please enter email driver</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="username" class=" form-control-label">Email Host</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                        <input value="" type="text" id="host" name="host" placeholder="Enter host" class="form-control">
                        <input type="hidden" name="email-id" value=""/>
                            <small class="form-text text-muted">Please enter email host</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="username" class=" form-control-label">Username</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                        <input value="" type="text" id="username" name="username" placeholder="Enter email username" class="form-control">
                
                            <small class="form-text text-muted">Please enter email username</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="username" class=" form-control-label">Password</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                        <input value="" type="text" id="password" name="password" placeholder="Enter email password" class="form-control">
                
                            <small class="form-text text-muted">Please enter email password</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="username" class=" form-control-label">Port</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                        <input value="" type="text" id="port" name="port" placeholder="Enter email port" class="form-control">
                
                            <small class="form-text text-muted">Please enter port number</small>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="username" class=" form-control-label">Encryption</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                        <input value="" type="text" id="encryption" name="encryption" placeholder="Enter encryption method" class="form-control">
                
                            <small class="form-text text-muted">Please enter encryption method</small>
                        </div>
                    </div>

                    <button style="margin-left:35%" type="submit" class="btn btn-primary">Setup Email</button>

                    </form><!--end of modal form-->
                    
                    </div>
                      </div><!-- End of card-->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- end modal large email setup -->
</div>
</div>
<?php /**PATH C:\xampp\htdocs\new-rep\reportsapp\resources\views/report/email-setup-modal.blade.php ENDPATH**/ ?>