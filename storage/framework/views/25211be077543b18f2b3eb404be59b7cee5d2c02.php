<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Reports Viewer</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="<?php echo e(asset('images/reports_image/book.png')); ?>">

        <!-- DataTables -->
        <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
       

       <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css" />

       <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->

        <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />



        <link href="<?php echo e(asset('css/reports_css/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('css/reports_css/assets/css/metismenu.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('css/reports_css/assets/css/icons.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('css/reports_css/assets/css/style.css')); ?>" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.1.45/css/materialdesignicons.min.css" rel="stylesheet" media="all">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"><!-- for zmdi-->


        <!---Links for select button--->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.css" rel="stylesheet"></link>
        <!---End of select button link--> 

        <style>
        ol.breadcrum {
        padding: 10px 16px;
        list-style: none;
        background-color: #f9f9f9;
        }
        ol.breadcrum li {
        display: inline;
        font-size: 13px;
        }
        ol.breadcrum li+li:before {
        padding: 8px;
        color: black;
        content: "/\00a0";
        }
        ol.breadcrum li a {
        color: #01447e;
        text-decoration: none;
        }
        ol.breadcrum li a:hover {
        color: #01447e;
        text-decoration: none;
        }
        </style>

        
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div style="background-image:url(<?php echo e(asset('images/reports_image/icon/super-blue-image.png')); ?>); background-size:cover" class="topbar-left">
                    <a href="#" class="logo">
                        <span class="logo-light">
                            <i class="mdi mdi-camera-contro"></i>Report Viewer
                        </span>
                        <span class="logo-sm">
                            <i class="mdi mdi-camera-contro"></i>
                        </span>
                    </a>
                </div>

                <nav class="navbar-custom">
                    <ul class="navbar-right list-inline float-right mb-0">
                        
                        <li class="dropdown notification-list list-inline-item">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <?php $__currentLoopData = $currentUserDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(asset('images/reports_image/users/'.$userImage->image)); ?>" alt="user" class="rounded-circle">
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a class="dropdown-item" href="<?php echo e(url('/edit-profile')); ?>"><i class="mdi mdi-account-circle"></i> Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="<?php echo e(url('/logout')); ?>"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="d-none d-md-inline-block">
                            <form role="search" class="app-search">
                                <!-- <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div> -->
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div style="background-image:url(<?php echo e(asset('images/reports_image/icon/super-blue-image.png')); ?>); background-size:cover" class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div style="background:#17a2b" id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">View</li>
                            <li>
                                <a href="<?php echo e(url('/reports')); ?>" class="waves-effect">
                                    <i class="mdi mdi-book-multiple"></i><span class="badge badge-success badge-pill float-right"></span> <span> Reports </span>
                                </a>
                            </li>
                            
                            <!-- <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="icon-mail-open"></i><span> Users <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="email-inbox.html">View Users</a></li>
                                    <li><a href="email-read.html">Email Read</a></li>
                                    <li><a href="email-compose.html">Email Compose</a></li>
                                </ul>
                            </li> -->
                            <li>
                                <a href="<?php echo e(url('/view-users')); ?>" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Users </span></a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/view-branches')); ?>" class="waves-effect"><i class="mdi mdi-folder-open"></i><span> Branches </span></a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/view-access')); ?>" class="waves-effect"><i class="mdi mdi-account-key"></i><span> Access </span></a>
                            </li>

                            <!-- <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="icon-paper-sheet"></i><span> Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-faqs.html">FAQs</a></li>
                                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li> -->
                            <li class="menu-title">Creation</li>
                            <li>
                                <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" class="waves-effect"><i class="mdi mdi-account-plus"></i><span>
                            Create User</span></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target=".branchModal" class="waves-effect"><i class="mdi mdi-folder-plus"></i>
                            <span>Create Branch</span></a>
                            </li>
                            <li>
                               <a href="#" data-toggle="modal" data-target=".accessListModal" class="waves-effect"><i class="mdi mdi-account-key"></i><span>Create Access</span></a>
                            </li>


                            <li class="menu-title">Settings</li>
                            <li>
                                <a href="<?php echo e(url('/edit-profile')); ?>" class="waves-effect"><i class="mdi mdi-account-settings"></i><span> Edit profile </span></a>
                            </li>
                            <li>
                            <a href="#" data-toggle="modal" data-target=".timeout" class="waves-effect"><i class="mdi mdi-alarm"></i><span>Set timeout</span></a>
                            </li>
                            <?php $__currentLoopData = $currentUserDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userDetails): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <?php if($userDetails->is_admin == 1): ?>
                            <li>
                               <a href="<?php echo e(url('/email-setup')); ?>" class="waves-effect"><i class="mdi mdi-email"></i><span>Email setup</span></a>
                            </li>
                              <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="icon-pencil-ruler"></i> <span> UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-spinner.html">Spinner</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                </ul>
                            </li> -->

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-bo">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h5 class="page-title">User Access</h5>
                                </div>
                                <div style="margin-top:8px;opacity:0" class="col-sm-6">
                                    <ol class="breadcrum float-right">
                                        <li class="breadcrumb-item">View</li>
                                        <li class="breadcrumb-item active">Access</li>
                                    </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                    <?php if(Session::has('flash_message_error')): ?>        
                                    <div class="alert alert-error alert-block" style="background-color:#f2dfd0">
                                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong><?php echo session('flash_message_error'); ?></strong>
                                    </div>
                                    <?php endif; ?>     
                                    <?php if(Session::has('flash_message_success')): ?>         
                                    <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                    <strong><?php echo session('flash_message_success'); ?></strong>
                                    </div>
                                    <?php endif; ?> 
                                        <h4 class="mt-0 header-title"></h4>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead style="color:#30419b">
                                            <tr>
                                            <th width="">Username&nbsp;</th>
                                            <th>Access List&nbsp;</th>
                                            <th>Actions</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $__currentLoopData = $accessList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $access): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <!-- <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td> -->
                                            <td width="20%"><?php echo e($access->username); ?>

                                            </td>
                                            <td>
                                                <?php
                                                ///this nicely separates the user branches in the view access table
                                                $currentAccess = explode('""',$access->branch_code);
                                                $currOptionMandatory = ""; 
                                                $currOptionOptional = "";

                                                $UserNoAccess = DB::table('branches')->whereNotIn('branch_code',$currentAccess)->get();

                                                $UserAccess = DB::table('branches')->whereIn('branch_code',$currentAccess)->get();
 
                                                foreach($UserAccess as $currAccess){
                                                    if(!empty($currAccess)){
                                                ///cannot be removed, see data-mandatory='true'
                                                $currOptionMandatory .="<option data-mandatory='true' selected='selected' value='".$currAccess->branch_code."'>".$currAccess->description."</option>"; 

                                                ///can be removed see data-mandatory='false'
                                                ///it was used in the edit access modal, take note
                                                $currOptionOptional .="<option data-mandatory='false' selected='selected' value='".$currAccess->branch_code."'>".$currAccess->description."</option>";
                                                    } 
                                                }
                                                //print_r($currOption);die;
                                                ?>
                                                <select disabled class="currAccess-<?php echo e($access->id); ?>" multiple>
                                                <?php echo $currOptionMandatory ?>
                                                </select>
                                            <!--this is the end of it-->
                                            </td>
                                            <td width="10%">
                                                <div class="table-data-feature">
                                                    
                                                    <button class="btn btn-primary" data-placement="top" title="Edit" data-toggle="modal" data-target=".editAccessModal-<?php echo e($access->id); ?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button id="deleteAccess" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <input type="hidden" id="access_id" value="<?php echo e($access->id); ?>"/>
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>

                                                </div>
                                            </td>
                                        </tr>
<!--  Modal content for the above example edit access -->
<div class="modal fade editAccessModal-<?php echo e($access->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Access</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <!-- Begin page -->
                    <div class="col-lg-12">
        <div class="card">
            <div style="background:#30419b;color:white" class="card-header">
                <strong>Edit Access</strong> Right
            </div>
            <div class="card-body card-block">
                <form action="<?php echo e(url('/edit-access/'.$access->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal"><?php echo e(csrf_field()); ?>

                <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Username</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                            <input disabled type="text" id="username" name="username" placeholder="Enter Branch Code" class="form-control" value="<?php echo e($access->username); ?>">
                            <small class="form-text text-muted">Please enter username</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="description" class=" form-control-label">Access List</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                            <?php 
                              $i=$access->id;
                            echo '<select required="required" id="access" name="access[]" class="editaccess-select-'.$i.'" multiple>';
                               /////Make the user access already selected /////
                            //    $optionsDetails = explode('""',$access->branch_code);
                            //    $branchDetails = json_decode(json_encode($branchDetails,true),true);
                            //    //print_r($optionsDetails);die;
                           // print_r($UserNoAccess);die;
                               echo $currOptionOptional;/////user current access (branches)

                               foreach($UserNoAccess as $noAccessoptions)
                               {
                                
                            //    // foreach($branchDetails as $br){
                                    
                                    

                                echo "<option value='".$noAccessoptions->branch_code."'>".$noAccessoptions->description."</option>";//user has no access to these branches

                                              

                            //  // echo "<option value='".$options."'>".$options."</option>";  
                              
                                         
                            //       //          }
                                            
                                  }
                           // echo $optionBranches;
                                 
                                      
                            ?>
                           </select>
                            <small class="form-text text-muted">Please enter access list</small>
                        </div>
                    </div>
            
                    <button style="margin-left:40%" type="submit" class="btn btn-primary">Update Access</button>

                    </form><!--end of modal form -->

					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
            <!-- end modal large user edit creation -->
            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->    


 <!--  Modal content for the craete user example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Create User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <!-- Begin page -->
                    <div class="col-lg-12">
        <div class="card">
            <div style="background:#30419b;color:white" class="card-header">
                <strong>Create New</strong> User
            </div>
            <div class="card-body card-block">
                <form action="<?php echo e(url('/add-user')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal"><?php echo e(csrf_field()); ?>

                <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Username</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                            <input required="required" type="text" id="username" name="username" placeholder="Enter Username" class="form-control" value="">
                            <small class="form-text text-muted">Please enter username</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="first-name" class=" form-control-label">First Name</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="first-name" name="first-name" placeholder="Enter First Name" class="form-control">
                            <small class="form-text text-muted">Please enter first name</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="last-name" class=" form-control-label">Last Name</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="last-name" name="last-name" placeholder="Enter Last Name" class="form-control">
                            <small class="form-text text-muted">Please enter last name</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="other-name" class=" form-control-label">Other Names</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="other-name" name="other-name" placeholder="Enter Other Names" class="form-control">
                            <small class="form-text text-muted">Please enter additional names</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="phone" class=" form-control-label">Telephone</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" class="form-control">
                            <small class="form-text text-muted">Please enter phone number</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input required="required" type="email" id="email" name="email" placeholder="Enter Email" class="form-control">
                            <small class="help-block form-text">Please enter your email</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password" class=" form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            <small class="help-block form-text">Please enter a complex password</small>
                        </div>
                    </div>
                    <!-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="disabled-input" class=" form-control-label">Disabled Input</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                        </div>
                    </div> -->
                    
                
                  <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Active User</label>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-check">
                                <div class="radio">
                                    <label for="radio1" class="form-check-label ">
                                        <input type="radio" id="radio1" name="active-user" value="1" class="form-check-input" checked>Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="radio2" class="form-check-label ">
                                        <input type="radio" id="radio2" name="active-user" value="0" class="form-check-input">No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Is Admin</label>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-check">
                                <div class="radio">
                                    <label for="is-admin1" class="form-check-label ">
                                        <input type="radio" id="is-admin1" name="is-admin" value="1" class="form-check-input">Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="is-admin2" class="form-check-label ">
                                        <input type="radio" id="is-admin2" name="is-admin" value="0" class="form-check-input" checked>No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                             
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="image" class=" form-control-label">Add Image</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="file" id="image" name="image" accept='image/*' class="form-control-file">
                        </div>
                    </div>
                    
                
            </div>
        </div>
        </div><!--end of col span-12 -->
                   </div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form><!--end of modal form -->

					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
            <!-- end modal large user creation -->


            <!--  Modal content for the above branch -->
<div class="modal fade branchModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Create Branch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <!-- Begin page -->
        <div class="col-lg-12">
        <div class="card">
            <div style="background:#30419b;color:white" class="card-header">
                <strong>Create New</strong> Branch
            </div>
            <div class="card-body card-block">
                <form action="<?php echo e(url('/add-branch')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal"><?php echo e(csrf_field()); ?>

                   
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="branch-code" class=" form-control-label">Branch Code</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input required="required" type="text" id="branch-code" name="branch-code" placeholder="Enter Branch Code" class="form-control">
                            <small class="form-text text-muted">Please enter branch code</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="description" class=" form-control-label"> Description</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input required="required" type="text" id="description" name="description" placeholder="Enter description" class="form-control">
                            <small class="form-text text-muted">Please enter branch description</small>
                        </div>
                    </div>
                    <!-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="disabled-input" class=" form-control-label">Disabled Input</label>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                        </div>
                    </div> -->                 
            </div>
        </div>
        </div><!--end of col span-12 -->
                   </div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </form><!--end of modal form -->

					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
            <!-- end modal large branch creation -->


<!--  Modal content for the above example add access -->
<div class="modal fade accessListModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Access</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <!-- Begin page -->
       <div class="col-lg-12">
        <div class="card">
            <div style="background:#30419b;color:white" class="card-header">
                <strong>Add Access</strong> To User
            </div>
            <div class="card-body card-block">
                <form action="<?php echo e(url('/add-access')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal"><?php echo e(csrf_field()); ?>

                <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="username" class=" form-control-label">Username</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                            <select required="required" id="username" name="username" class="username-select">

                                <?php echo $optionUsersNoAccess ?>
                                
                            </select>  
                            <small class="form-text text-muted">Please enter username</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="access" class=" form-control-label">Access List</label>
                        </div>
                        <div class="col-9 col-md-6">
                              
                        <select required id="access" name="access[]" class="access-select" multiple>

                               <?php echo $optionBranches ?>

                            </select>  
                            <small class="form-text text-muted">Please enter access list</small>
                        </div>
                    </div>
            
                    <button style="margin-left:40%" type="submit" class="btn btn-primary">Add Access</button>

                    </form><!--end of modal form -->
                      </div><!-- End of card-->
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- end modal large Access creation -->
         </div>
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

                <footer class="footer">
                    © <?php echo date("Y") ?> <span class="d-none d-sm-inline-block"> - Union</i> Systems Global</span>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="<?php echo e(asset('css/reports_css/assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('css/reports_css/assets/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('css/reports_css/assets/js/metismenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('css/reports_css/assets/js/jquery.slimscroll.js')); ?>"></script>
        <script src="<?php echo e(asset('css/reports_css/assets/js/waves.min.js')); ?>"></script>

        <!-- Required datatable js -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.jss"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../plugins/datatables/jszip.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?php echo e(asset('css/reports_css/assets/pages/datatables.init.js')); ?>"></script>   

        <!-- App js -->
        <script src="<?php echo e(asset('css/reports_css/assets/js/app.js')); ?>"></script>

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/css/mdb.min.css" crossorigin="anonymous" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.17.0/js/mdb.min.js"></script> -->
        


        <script>
            if($(".alert-success").is(":visible")){
            $(".alert-success").fadeTo(5000, 100).slideUp(5000, function(){
            // $(".alert-success").slideUp(3000);
            // $(".alert-success").slideUp(4000);
            });
            }
            if($(".alert-error").is(":visible")){
            $(".alert-error").fadeTo(5000, 100).slideUp(5000, function(){
            // $(".alert-error").slideUp(3000);
            });
            }

            
           
        
            /* Custom filtering function which will search data in column four between two values */
// $.fn.dataTable.ext.search.push(
//     function( settings, data, dataIndex ) {
//         var min = parseInt( $('#min').val(), 10 );
//         var max = parseInt( $('#ma').val(), 10 );
//         var age = parseFloat( data[3] ) || 0; // use data for the age column
 
//         if ( ( isNaN( min ) && isNaN( max ) ) ||
//              ( isNaN( min ) && age <= max ) ||
//              ( min <= age   && isNaN( max ) ) ||
//              ( min <= age   && age <= max ) )
//         {
//             return true;
//         }
//         return false;
//     }
// );




// // The plugin function for adding a new filtering routine
    
    // $.fn.dataTable.ext.search.push(
    //     function(Settings, Data, DataIndex){
    //         var dateStart = parseDateValue($("#max").val());
    //         var dateEnd = parseDateValue($("#min").val());
    //         // aData represents the table structure as an array of columns, so the script access the date value
    //         // in the first column of the table via aData[0]
    //         var evalDate= parseDateValue(Data[3]);

    //         if (evalDate >= dateStart && evalDate <= dateEnd) {
    //             return true;
    //         }
    //         else {
    //             return false;
    //         }

    //     });
        
//     //     alert("dhgeufg");
    
//   /////this for the select input for decument name:://////
  // $.fn.dataTable.ext.search.push(
  //       function(settings, data, dataIndex){
  //           var input_data1 = $("#max").val();
  //          // var dateEnd = parseDateValue($("#dateEnd").val());
  //           // aData represents the table structure as an array of columns, so the script access the date value
  //           // in the first column of the table via aData[0]
  //           var actual_Date1= data[1];

  //          //Add conditions to the code right sorting:::///////
  //           if ((actual_Date1 == input_data1) || (input_data1 == "")) {
  //               return true;
  //           }
  //           else {
  //               return false;
  //           }

  //       });

//          /////this for the select input for branch:://////
//         $.fn.dataTable.ext.search.push(
//         function(oSettings, aData, iDataIndex){
//             var input_data = $("#branch_name").val();
//            // var dateEnd = parseDateValue($("#dateEnd").val());
//             // aData represents the table structure as an array of columns, so the script access the date value
//             // in the first column of the table via aData[0]
//             var actual_Date= aData[2];

//            //Add conditions to the code for correct sorting:::///////
//             if ((actual_Date == input_data) || (input_data == "")) {
//                 return true;
//             }
//             else {
//                 return false;
//             }

//         });


//     // Function for converting mm/dd/yyyy date value into a numeric string for comparison (example 08/12/2010 becomes 20100812
    // function parseDateValue(rawDate) {
    //     var dateArray= rawDate.split("/");
    //     var parsedDate= dateArray[2] + dateArray[0] + dateArray[1];
    //     return parsedDate;
    // }
 
// $.fn.dataTable.ext.search.push(
//         function (settings, data, dataIndex) {
//             var min = $('#min').datepicker('getDate');
//             var max = $('#max').datepicker('getDate');
//             var startDate = new Date(data[4]);
//             if (min == null && max == null) return true;
//             if (min == null && startDate <= max) return true;
//             if (max == null && startDate >= min) return true;
//             if (startDate <= max && startDate >= min) return true;
//             return false;
//         }
//     );
$("button#deleteAccess").click(function(){
//alert("grt");
var access_id = $(this).find("input#access_id").val();
//alert(branch_id);return false;
if(confirm("Do you really want to delete this User Access")==true){

  window.location.href = "./delete-access/"+access_id;

	  }else{

	 return false;
	 
	      }
    });


$("#sidebar-menu ul li a").attr('style','color:white');//side bar text color
$(document).ready(function() {
//this for the user current access inthe access table
// $(document).ready(function(){
for(var i=0;i<=50;i++){ 
script3 = document.createElement("script");
script3.prepend('new SlimSelect({select: ".currAccess-'+i+'",closeOnSelect: false,});');
document.body.appendChild(script3);
};//});
//this for the edit access modal
for(var i=0;i<=50;i++){ 
script2 = document.createElement("script");
script2.prepend('new SlimSelect({select: ".editaccess-select-'+i+'",closeOnSelect: false,});');
document.body.appendChild(script2);
};


//this is for the add new access to user modal
new SlimSelect({

select: '.username-select',
closeOnSelect: false,

});


new SlimSelect({

  select: '.access-select',
  closeOnSelect: false,
//   placeholder: 'Placeholder Text Here',

//   showSearch: false, // shows search field

//   searchText: 'Sorry couldnt find anything',

//   beforeOnChange: (info) => {

//   console.log(info)

//   return false // this will stop propagation

// 	    }

//   onChange: (info) => {

//  console.log(info)

// 	    }
});
////end of add access to new user modal select button code



//$('select').selectpicker();
setInterval(function(){
$('.ss-plus').hide();
$('td').css('padding','5px');
},100);



//date range search


    // $('#min').datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    // $('#max').datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
    
    // var table = $('#example').DataTable();

    // // Event listener to the two range filtering inputs to redraw on input
    // $('#min, #max').keyup(function () {
    //     table.draw();
    // });

} );
        </script>
<?php echo $__env->make('report.session-timeout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>

</html><?php /**PATH C:\xampp\htdocs\reportsapp\resources\views/report/view-access.blade.php ENDPATH**/ ?>