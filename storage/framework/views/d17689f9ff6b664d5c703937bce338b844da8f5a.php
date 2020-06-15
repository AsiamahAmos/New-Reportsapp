<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Offline Report</title>
    
    


    <!-- Fontfaces CSS <?php echo e(asset('css/backend_css/bootstrap.min.css')); ?>-->
    <link href="<?php echo e(asset('css/reports_css/font-face.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('js/reports_js/vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('js/reports_js/vendor/font-awesome-5/css/fontawesome-all.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('js/reports_js/vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!--<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" media="all">https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css-->

    <!-- Bootstrap CSS-->
    <link href="<?php echo e(asset('js/reports_js/vendor/bootstrap-4.1/bootstrap.min.css')); ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo e(asset('js/reports_js/vendor/animsition/animsition.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('js/reports_js/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('js/reports_js/vendor/wow/animate.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('js/reports_js/vendor/css-hamburgers/hamburgers.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('js/reports_js/vendor/slick/slick.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('js/reports_js/vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('js/reports_js/vendor/perfect-scrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo e(asset('css/reports_css/theme.css')); ?>" rel="stylesheet" media="all">
    
    <!--Simple JS datepicker start-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/reports_css/datepicker.css')); ?>" /> 
    <script type="text/javascript" src="<?php echo e(asset('js/reports_js/datepicker.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/reports_js/timepicker.js')); ?>"></script>
    <!--Simple JS datepicker end-->

    <!--This is for the jquery datatable plugin-->
 <!---Load the styles for the table.  This stylesheet points to the images used in the table controls--->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('js/reports_js/assets/css/dataTableStyles.css')); ?>" />
<!---Load the CSS to be used by the jQuery UI Datepicker--->
<link type="text/css" href="<?php echo e(asset('js/reports_js/assets/jquery-ui-1.8.4.custom/css/blitzer/jquery-ui-1.8.4.custom.css')); ?>" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('js/reports_js/assets/css/demoStyles.css')); ?>" />

<style>
.badge{
    padding:.5em .4em .5em .4em;
    background-image:linear-gradient(to bottom,#17a2b8 0%,#17a2b8 100%);
    }
span.badge input{
    padding:.5em .4em .5em .4em;
    }
#dateStart, #dateEnd {
    font-size:16px;
    font-family: sans-serif;
    font-weight:700;
    color:#aaa;
    line-height:1.2;
    padding:.4em .1em .4em .1em;
    width:25%;
    max-width:25%;
    box-sizing: border-box;
    margin:0;
    border:1px solid #003875;;
    box-shadow:20px 20px 20px 20px rbga(59,153,252,.9);
    border-radius:.5em;
    -moz-appearance:none;
    -webkit-appearance:none;
    appearance:none;
    background-color:#efff;
    outline:none;
    background-image:linear-gradient(to bottom, #ffffff 5%,#aacef5 100%);

}
    
#document_name, #branch_name {
    /*display: block;*/
    font-size:16px;
    font-family: sans-serif;
    font-weight:700;
    color:#aaa;
    line-height:1.2;
    padding:.4em .1em .4em .1em;
    width:25%;
    max-width:25%;
    box-sizing: border-box;
    margin:0;
    border:1px solid #003875;;
    box-shadow:20px 20px 20px 20px rbga(59,153,252,.9);
    border-radius:.5em;
    -moz-appearance:none;
    -webkit-appearance:none;
    appearance:none;
    background-color:#efff;
    outline:none;
    background-image: url('data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
	  linear-gradient(to bottom, #ffffff 5%,#aacef5 100%);
	background-repeat: no-repeat, repeat;
	background-position: right .7em top 50%, 0 0;
	background-size: .65em auto, 100%;
}
#document_name:hover, #branch_name:hover, #dateStart:hover, #dateEnd:hover {
    border-color:#888;
}
#document_name:focus, #branch_name:focus, #dateStart:focus, #dateEnd:focus{
border-color:#aaa;
box-shadow:0 0 1px 3px rbga(59,153,252,.7);
box-shadow:0 0 0 3px -moz-mac-focusring;
color:#222;
outline:none;
}

#document_name option, #branch_name option{
    font-weight:normal;
}

#document_name:disabled, #branch_name:disabled, #document_name[aria-disabled=true],  #branch_name[aria-disabled=true] {
    color:graytext;
}

#document_name:disabled:hover, #branch_name:disabled:hover, #branch_name[aria-disabled=true],  #document_name[aria-disabled=true]{
    border-color:#aaa;
}

}
</style>

</head>

<body style="font-family:candara;font-weight:bold" class="animsition">
  <div class="page-wrapper">
     <header style="left:0px" class="header-desktop d-none d-lg-block">
            <div class="section__content section__content--p70">
              <div class="header3-wrap">
                <div class="logo">
                    <a style="margin-left:20px" href="#">
                    <h5 style="float:left;margin-top:30px;color:#003875"><?php echo "Welcome ". $current_user ?> </h5>
                    <!-- <img style="height:75px;width:500px;margin-left:350px;margin-top:-5px;opacity:0" src="<?php echo e(asset('images/reports_image/icon/offline-logo-blue.png')); ?>" alt="" /> -->
                    <font  color="#003875" style="height:75px;max-width:1000px;margin-left:350px;margin-top:-5px;opacity:1;font-size:50px;font-family:Poppins,sans-serif">Report Viewer</font>
                    </a>
                </div>
              <?php $__currentLoopData = $detailsUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="padding:20px 20px" class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                        <div class="image">
                            <img src="<?php echo e(asset('images/reports_image/icon/avatar-01.jpg')); ?>" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?php echo $current_user ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="<?php echo e(asset('images/reports_image/icon/avatar-01.jpg')); ?>" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?php echo $current_user ?></a>
                                    </h5>
                                    <span class="email"><?php echo e($detail->email); ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="<?php echo e(url('/user-settings/'.$detail->id)); ?>">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="<?php echo e(url('/reports')); ?>">
                                        <i class="zmdi zmdi-book"></i>View reports</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                            <a  href="<?php echo e(url('/logout')); ?>"><i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- <div style="float:right;margin-top:25px">
                <button class="btn btn-default btn-sm" onclick="$.fn.idleTimeout().logout();"><h5>  <a style="text-size:13px;color:#003875" href="<?php echo e(url('/logout')); ?>"><img style="height:15px;width:15px" src="<?php echo e(asset('images/reports_image/icon/logout.png')); ?>"/>&nbsp;Logout</a></h5></button>
                </div>  -->
              </div>
            </div> 
        </header>
        <!-- HEADER MOBILE-->
        <!-- <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo e(asset('images/reports_image/icon/logo.png')); ?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html"> 
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header> -->
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <!-- <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img style="height:75px;width:500px" src="<?php echo e(asset('images/reports_image/icon/reports.png')); ?>" alt="Cool Admin" />
                </a>
            </div>
           <div id="side-bar" class="menu-sidebar__content js-scrollbar1"> -->
          <!--      <nav class="navbar-sidebar">
              -      <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li class="active">
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>-->
            <!-- </div>
        </aside> -->
        <!-- END MENU SIDEBAR

        <!-- PAGE CONTAINER-->
        <div id="container" class="page-container--bgf7">
            <!-- HEADER DESKTOP-->
            <!-- <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                        </div>
                    </div>
                </div>
            </header> -->
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <section style="margin-top:78px" class="p-t-20">
                <div class="container">
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
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Users</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <!-- <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div> -->
                                    <!-- <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div> -->
                                    <button class="au-btn-filter">
                                    <a href="<?php echo e(url('/reports')); ?>">
                                        <i class="zmdi zmdi-book"></i>View reports</a></button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#largeModal">
                                    <i class="zmdi zmdi-account-add"></i>add user</button>
                                    <!-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                            <table id="commentTable" class="table table-data2 dataTablesTable" border="0" cellpadding="0" cellspacing="0" width="50%" style ="border-radius:10px;-moz-border:none;-webkit-border:none">
                                    <thead>
                                        <tr id="theadRow">
                                            <!-- <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th> -->
                                            <th width="12%">First Name&nbsp;</th>
                                            <th>Last Name&nbsp;</th>
                                            <th>Other Names&nbsp;&nbsp;</th>
                                            <th>Telephone&nbsp;</th>
                                            <th>Email&nbsp;</th>
                                            <th>Active User</th>
                                            <th>Is Admin</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="tr-shadow">
                                            <!-- <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td> -->
                                            <td>
                                            <span class="status--process">
                                            <?php echo e($user->first_name); ?></span>
                                            </td>
                                            <td>
                                                <span class="status--process"><?php echo e($user->last_name); ?></span>
                                            </td>
                                            <td class="desc"><?php echo e($user->other_name); ?></td>
                                            <td><?php echo e($user->telephone); ?></td>
                                            <td>
                                                <span class="block-email"><?php echo e($user->email); ?></span>
                                            </td>
                                            
                                            <td><?php echo e($user->active_flag); ?></td>

                                            <td><?php echo e($user->is_admin); ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                    
                                                    <button class="item" data-placement="top" title="Edit" data-toggle="modal" data-target="#editUserModal-<?php echo e($user->id); ?>">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button id="deleteUser" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <input type="hidden" id="user_id" value="<?php echo e($user->id); ?>"/>
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>

                                                </div>
                                            </td>
                                        </tr>

                                        <!-- <tr class="spacer"></tr> -->
                                        
                                         <!-- modal edit user modal -->
			<div class="modal fade" id="editUserModal-<?php echo e($user->id); ?>" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Edit User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
		<div class="modal-body">
                            
        <div class="col-lg-12">
        <div class="card">
            <div style="background:#17a2b8;color:white" class="card-header">
                <strong>Edit this</strong> User
            </div>
            <div class="card-body card-block">
                <form action="<?php echo e(url('/edit-user/'.$user->id)); ?>" method="post" enctype="multipart/form-data" class="form-horizontal"><?php echo e(csrf_field()); ?>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Static</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">Username</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="first-name" class=" form-control-label">First Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                              
                            <input type="text" id="first-name" name="first-name" placeholder="Enter First Name" class="form-control" value="<?php echo e($user->first_name); ?>">
                            <small class="form-text text-muted">Please enter first name</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="last-name" class=" form-control-label">Last Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="last-name" name="last-name" placeholder="Enter Last Name" class="form-control" value="<?php echo e($user->last_name); ?>">
                            <small class="form-text text-muted">Please enter last name</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="other-name" class=" form-control-label">Other Names</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="other-name" name="other-name" placeholder="Enter Other Names" class="form-control" value="<?php echo e($user->other_name); ?>">
                            <small class="form-text text-muted">Please enter additional names</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="phone" class=" form-control-label">Telephone</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" class="form-control" value="<?php echo e($user->telephone); ?>">
                            <small class="form-text text-muted">Please enter phone number</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control" value="<?php echo e($user->email); ?>">
                            <small class="help-block form-text">Please enter your email</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password" class=" form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control" value="<?php echo e($user->password); ?>">
                            <small class="help-block form-text">Please enter a complex password</small>
                        </div>
                    </div>
                    <!-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="disabled-input" class=" form-control-label">Disabled Input</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                        </div>
                    </div> -->
                    
                
                  <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Active User</label>
                        </div>
                        <div class="col col-md-9">
                            <div class="form-check">
                                <div class="radio">
                                    <label for="radio1" class="form-check-label ">
                                        
                                        <input type="radio" id="radio1" name="active-user" value="1" class="form-check-input" <?php if($user->active_flag == 1): ?> checked <?php endif; ?>>
                                        Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="radio2" class="form-check-label ">
                                        
                                        <input type="radio" id="radio2" name="active-user" value="0" class="form-check-input" <?php if($user->active_flag == 0): ?> checked <?php endif; ?>>       
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Is Admin</label>
                        </div>
                        <div class="col col-md-9">
                            <div class="form-check">
                                <div class="radio">
                                    <label for="is-admin1" class="form-check-label ">
                                        
                                        <input type="radio" id="is-admin1" name="is-admin" value="1" class="form-check-input" <?php if($user->is_admin == 1): ?>checked <?php endif; ?>>  
                                        Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="is-admin2" class="form-check-label ">
                                        <input type="radio" id="is-admin2" name="is-admin" value="0" class="form-check-input" <?php if($user->is_admin == 0): ?> checked <?php endif; ?>>No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                             
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="image" class=" form-control-label">Add Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="image" name="image" class="form-control-file">
                            <input type="hidden" id="current_image" name="current_image" placeholder="Enter Phone Number" class="form-control" value="<?php echo e($user->image); ?>">
                        </div>
                    </div>
                    
                
            </div>
        </div>
        </div><!--end of col span-12 -->

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-success">Edit User</button>
                        </div>
                    </form><!--end of modal form -->

					</div>
				</div>
			</div>
			<!-- end modal large -->

                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Create User modal large -->
			<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Create User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
		<div class="modal-body">
                            
        <div class="col-lg-12">
        <div class="card">
            <div style="background:#17a2b8;color:white" class="card-header">
                <strong>Create New</strong> User
            </div>
            <div class="card-body card-block">
                <form action="<?php echo e(url('/add-user')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal"><?php echo e(csrf_field()); ?>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Static</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">Username</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="first-name" class=" form-control-label">First Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="first-name" name="first-name" placeholder="Enter First Name" class="form-control">
                            <small class="form-text text-muted">Please enter first name</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="last-name" class=" form-control-label">Last Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="last-name" name="last-name" placeholder="Enter Last Name" class="form-control">
                            <small class="form-text text-muted">Please enter last name</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="other-name" class=" form-control-label">Other Names</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="other-name" name="other-name" placeholder="Enter Other Names" class="form-control">
                            <small class="form-text text-muted">Please enter additional names</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="phone" class=" form-control-label">Telephone</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" class="form-control">
                            <small class="form-text text-muted">Please enter phone number</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control">
                            <small class="help-block form-text">Please enter your email</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password" class=" form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                            <small class="help-block form-text">Please enter a complex password</small>
                        </div>
                    </div>
                    <!-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="disabled-input" class=" form-control-label">Disabled Input</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                        </div>
                    </div> -->
                    
                
                  <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Active User</label>
                        </div>
                        <div class="col col-md-9">
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
                        <div class="col col-md-9">
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
                        <div class="col-12 col-md-9">
                            <input type="file" id="image" name="image" class="form-control-file">
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

					</div>
				</div>
			</div>
            <!-- end modal large -->
            
            
            </section>
            <div id="endBlock"></div>
            <div class="row">
            <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © <?php date('Y');?>. All rights reserved. Union Systems <a href="https://unionsg.com">Unionsg</a>.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo e(asset('js/reports_js/vendor/jquery-3.2.1.min.js')); ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo e(asset('js/reports_js/vendor/bootstrap-4.1/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/reports_js/vendor/bootstrap-4.1/bootstrap.min.js')); ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo e(asset('js/reports_js/vendor/slick/slick.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('js/reports_js/vendor/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/reports_js/vendor/animsition/animsition.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/reports_js/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('js/reports_js/vendor/counter-up/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/reports_js/vendor/counter-up/jquery.counterup.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('js/reports_js/vendor/circle-progress/circle-progress.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/reports_js/vendor/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('js/reports_js/vendor/chartjs/Chart.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/reports_js/vendor/select2/select2.min.js')); ?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo e(asset('js/reports_js/main.js')); ?>"></script>

   <!---- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>-->
    


<!---Load jQuery--->
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>-->
<!--Load jquery core library 1.4.4-->
<script type="text/javascript" src="<?php echo e(asset('js/reports_js/jquery1.4.4.min.js')); ?>"></script>
<!--End of jquery core lib-->
<!---Load a custom jQuery UI script to power the Datepicker widget--->
<script type="text/javascript" src="<?php echo e(asset('js/reports_js/assets/jquery-ui-1.8.4.custom/js/jquery-ui-1.8.4.custom.min.js')); ?>"></script>
<!---Load the dataTables jQuery plugin--->
<script type="text/javascript" src="<?php echo e(asset('js/reports_js/assets/DataTables-1.7.4/media/js/jquery.dataTables.min.js')); ?>"></script>

<script type="text/javascript">
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
    // The plugin function for adding a new filtering routine
    
    // $.fn.dataTableExt.afnFiltering.push(
    //     function(oSettings, aData, iDataIndex){
    //         var dateStart = parseDateValue($("#dateStart").val());
    //         var dateEnd = parseDateValue($("#dateEnd").val());
    //         // aData represents the table structure as an array of columns, so the script access the date value
    //         // in the first column of the table via aData[0]
    //         var evalDate= parseDateValue(aData[4]);

    //         if (evalDate >= dateStart && evalDate <= dateEnd) {
    //             return true;
    //         }
    //         else {
    //             return false;
    //         }

    //     });
        
    //     alert("dhgeufg");
    
  /////this for the select input for decument name:://////
//   $.fn.dataTableExt.afnFiltering.push(
//         function(oSettings, aData, iDataIndex){
//             var input_data1 = $("#document_name").val();
//            // var dateEnd = parseDateValue($("#dateEnd").val());
//             // aData represents the table structure as an array of columns, so the script access the date value
//             // in the first column of the table via aData[0]
//             var actual_Date1= aData[1];

//            //Add conditions to the code right sorting:::///////
//             if ((actual_Date1 == input_data1) || (input_data1 == "")) {
//                 return true;
//             }
//             else {
//                 return false;
//             }

//         });

         /////this for the select input for branch:://////
        // $.fn.dataTableExt.afnFiltering.push(
        // function(oSettings, aData, iDataIndex){
        //     var input_data = $("#branch_name").val();
        //    // var dateEnd = parseDateValue($("#dateEnd").val());
        //     // aData represents the table structure as an array of columns, so the script access the date value
        //     // in the first column of the table via aData[0]
        //     var actual_Date= aData[2];

        //    //Add conditions to the code for correct sorting:::///////
        //     if ((actual_Date == input_data) || (input_data == "")) {
        //         return true;
        //     }
        //     else {
        //         return false;
        //     }

        // });


    // Function for converting mm/dd/yyyy date value into a numeric string for comparison (example 08/12/2010 becomes 20100812
    function parseDateValue(rawDate) {
        var dateArray= rawDate.split("/");
        var parsedDate= dateArray[2] + dateArray[0] + dateArray[1];
        return parsedDate;
    }
 

    $(function() { //document.ready function
        // Implements the dataTables plugin on the HTML table
        
        var $dTable= $("table.dataTablesTable").dataTable( {
            "iDisplayLength": 10,
            "bStateSave": false,
           // "paging":true,
            //"select": {
            //    "items":"cells",
             //   "info":true
          //  }, 
            //"searching": false
            "bJQueryUI":false,
            'bFilter': true,
            "bDeferRender" : true,
            "bPaginate": true,
            "bSort":true,
            "bProcessing": true,
           // "sPaginationType":"full_numbers",
            "oLanguage": { 
                "sLengthMenu": 'Show <select><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option></select> entries',
                "sSearch": '<h4><span class="badge badge-success">General Search: </span>'
                //"sSearch":"."
            },
           // "oLanguage": {
            //    "sSearch": 'Show <select><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option></select> entries'
           // },
            "aaSorting": [[4,'asc']],
            "aoColumns": [
                null,
                null,
                null,
                null,
                null,         
                //{ "sType": "date" }
            ]
        } );
        //alert("amos");
        
        // The dataTables plugin creates the filtering and pagination controls for the table dynamically, so these
        // lines will clone the date range controls currently hidden in the baseDateControl div and append them to
        // the feedbackTable_filter block created by dataTables
        // $dateControls= $("#baseDateControl").children("div").clone();
        // $("#feedbackTable_filter").prepend($dateControls);

        // Implements the jQuery UI Datepicker widget on the date controls
        //No longer in use //
        // $('.datepicke').datepicker(
        //    {
        //    uiLibrary: 'bootstrap4'
        //    //showOn: 'button', 
        //   // buttonImage: 'assets/images/calendar.gif', 
        //   // buttonImageOnly: true
        // });
        

        // Create event listeners that will filter the table whenever the user types in either date range box or
        // changes the value of either box using the Datepicker pop-up calendar
        //var dateStart = $("#dateStart").val();
        
        // $("#dateStart").keyup ( function() { $dTable.fnDraw(); } );
        // $("#dateStart").change( function() { $dTable.fnDraw(); } );
        // $("#dateEnd").keyup ( function() { $dTable.fnDraw(); } );
        // $("#dateEnd").change( function() { $dTable.fnDraw(); } );
        // $('#document_name').change(  function() { $dTable.fnDraw(); } ); 
        // $('#document_name').keyup( function() { $dTable.fnDraw(); } );
        // $('#branch_name').change(  function() { $dTable.fnDraw(); } ); 
        //$('#branch_name').keyup( function() { $dTable.fnDraw(); } );
        

        $("#all-reports").click(function(e){
            e.preventDefault();
          $("#all").attr("style","background:#003875");
          $("#today").attr("style","background:#17a2b8");
          $("#week").attr("style","background:#17a2b8");
          $("#month").attr("style","background:#17a2b8");

          var today = new Date();
          var dd = String(today.getDate()).padStart(2,'0');
          var mm = String(today.getMonth() + 1).padStart(2,'0');
          var yyyy = today.getFullYear();
          today = mm + '/' + dd + '/' + yyyy;
          var startDate = "01/01/1980";
          var endDate = today;

          $("#dateStart").val(startDate);
          $("#dateEnd").val(endDate);
          $dTable.fnDraw();

        });

        $("#today-reports").click(function(e){
            e.preventDefault();
          $("#all").attr("style","background:#17a2b8");
          $("#today").attr("style","background:#003875");
          $("#week").attr("style","background:#17a2b8");
          $("#month").attr("style","background:#17a2b8");
          var today = new Date();
          var dd = String(today.getDate()).padStart(2,'0');
          var mm = String(today.getMonth() + 1).padStart(2,'0');
          var yyyy = today.getFullYear();
          today = mm + '/' + dd + '/' + yyyy;
          var startDate = today;
          var endDate = today;
          $("#dateStart").val(startDate);
          $("#dateEnd").val(endDate);
          $dTable.fnDraw();
        });
        
        $("#week-reports").click(function(e){
            e.preventDefault();
            $("#all").attr("style","background:#17a2b8");
            $("#today").attr("style","background:#17a2b8");
            $("#week").attr("style","background:#003875");
            $("#month").attr("style","background:#17a2b8");
            var curr = new Date();
            var first = curr.getUTCDate() - curr.getUTCDay();
            var last = first + 6;
            var firstday = new Date(curr.setDate(first)).toLocaleDateString();//leading zero is stripped
            var lastday = new Date(curr.setDate(last)).toLocaleDateString();//leading zero is stripped

        /////add leading zero in date
            var split_firstday = firstday.split('/');
            var s_dd = String(split_firstday[0]).padStart(2,'0');
            var s_mm = String(split_firstday[1]).padStart(2,'0');
            var s_yyyy = split_firstday[2];
            var start_date = s_dd + '/' + s_mm +'/' + s_yyyy;

            var split_lastday = lastday.split('/');
            var e_dd = String(split_lastday[0]).padStart(2,'0');
            var e_mm = String(split_lastday[1]).padStart(2,'0');
            var e_yyyy = split_lastday[2];
            var end_date = e_dd + '/' + e_mm +'/' + e_yyyy;

            $("#dateStart").val(start_date);
            $("#dateEnd").val(end_date);
            $dTable.fnDraw();
        //   var today = new Date();
        //   actual_day = today.getDay();
          //alert(actual_day);
        //   switch(actual_day){
        //       case 1:
        //   var today = new Date();
        //   var s_dd = String(today.getDate()).padStart(2,'0');
        //   var e_dd = String(today.getDate()+6).padStart(2,'0');
        //   var mm = String(today.getMonth() + 1).padStart(2,'0');
        //   var yyyy = today.getFullYear();
        //   today = mm + '/' + s_dd + '/' + yyyy;
        //   var startDate = today;
        //   var endDate = mm + '/' + e_dd + '/' + yyyy;
        //   $("#dateStart").val(startDate);
        //   $("#dateEnd").val(endDate);
        //   $dTable.fnDraw();
        //       break;

        //       case 2:
        //   var today = new Date();
        //   var s_dd = String(today.getDate()-1).padStart(2,'0');
        //   var e_dd = String(today.getDate()+5).padStart(2,'0');
        //   var mm = String(today.getMonth() + 1).padStart(2,'0');
        //   var yyyy = today.getFullYear();
        //   today = mm + '/' + s_dd + '/' + yyyy;
        //   var startDate = today;
        //   var endDate = mm + '/' + e_dd + '/' + yyyy;
        //   $("#dateStart").val(startDate);
        //   $("#dateEnd").val(endDate);
        //   $dTable.fnDraw();
        //       break;

        //       case 3:
        //   var today = new Date();
        //   var s_dd = String(today.getDate()-2).padStart(2,'0');
        //   var e_dd = String(today.getDate()+4).padStart(2,'0');
        //   var mm = String(today.getMonth() + 1).padStart(2,'0');
        //   var yyyy = today.getFullYear();
        //   today = mm + '/' + s_dd + '/' + yyyy;
        //   var startDate = today;
        //   var endDate = mm + '/' + e_dd + '/' + yyyy;
        //   $("#dateStart").val(startDate);
        //   $("#dateEnd").val(endDate);
        //   $dTable.fnDraw();
        //       break;

        //       case 4:
        //   var today = new Date();
        //   var s_dd = String(today.getDate()-3).padStart(2,'0');
        //   var e_dd = String(today.getDate()+3).padStart(2,'0');
        //   var mm = String(today.getMonth() + 1).padStart(2,'0');
        //   var yyyy = today.getFullYear();
        //   today = mm + '/' + s_dd + '/' + yyyy;
        //   var startDate = today;
        //   var endDate = mm + '/' + e_dd + '/' + yyyy;
        //   $("#dateStart").val(startDate);
        //   $("#dateEnd").val(endDate);
        //   $dTable.fnDraw();
        //       break;

        //       case 5:
        //       //alert("test");
        //   var today = new Date();
        //   var s_dd = String(today.getDate()-4).padStart(2,'0');
        //   var e_dd = String(today.getDate()+2).padStart(2,'0');
        //   var mm = String(today.getMonth() + 1).padStart(2,'0');
        //   var yyyy = today.getFullYear();
        //   today = mm + '/' + s_dd + '/' + yyyy;
        //   var startDate = today;
        //   var endDate = mm + '/' + e_dd + '/' + yyyy;
        //   $("#dateStart").val(startDate);
        //   $("#dateEnd").val(endDate);
        //   $dTable.fnDraw();
        //       break;

        //       case 6:
        //   var today = new Date();
        //   var s_dd = String(today.getDate()-5).padStart(2,'0');
        //   var e_dd = String(today.getDate()+1).padStart(2,'0');
        //   var mm = String(today.getMonth() + 1).padStart(2,'0');
        //   var yyyy = today.getFullYear();
        //   today = mm + '/' + s_dd + '/' + yyyy;
        //   var startDate = today;
        //   var endDate = mm + '/' + e_dd + '/' + yyyy;
        //   $("#dateStart").val(startDate);
        //   $("#dateEnd").val(endDate);
        //   $dTable.fnDraw();
        //       break;

        //       case 7:
        //   var today = new Date();
        //   var s_dd = String(today.getDate()-6).padStart(2,'0');
        //   var e_dd = String(today.getDate()).padStart(2,'0');
        //   var mm = String(today.getMonth() + 1).padStart(2,'0');
        //   var yyyy = today.getFullYear();
        //   today = mm + '/' + s_dd + '/' + yyyy;
        //   var startDate = today;
        //   var endDate = mm + '/' + e_dd + '/' + yyyy;
        //   $("#dateStart").val(startDate);
        //   $("#dateEnd").val(endDate);
        //   $dTable.fnDraw();
        //       break;
              
        //       default:

        //   }
    
        });

        $("#month-reports").click(function(e){
            e.preventDefault();
          $("#all").attr("style","background:#17a2b8");
          $("#today").attr("style","background:#17a2b8");
          $("#week").attr("style","background:#17a2b8");
          $("#month").attr("style","background:#003875");
          var today = new Date();
          var mm = String(today.getMonth() + 1).padStart(2,'0');
          var yyyy = today.getFullYear();
          var startDate = mm + "/01/"+ yyyy;
          var endDate = mm + "/31/"+ yyyy;
          $("#dateStart").val(startDate);
          $("#dateEnd").val(endDate);
          $dTable.fnDraw();
        });

        setInterval(function(){
           // $("#dateStart").attr("value", dateStart);
           $(".datepickerdropdown input").click( function() {$dTable.fnDraw(); } );
           $(".dataTablesTable td").attr("style","color:black");//added css

           $("tr.even").not("tr.odd").attr("style","background-color:#aacef5;background-image:linear-gradient(to bottom, #ffffff 20%,#aacef5 80%)");

           $("tr.even").not("tr.odd").find("td").attr("style","padding:10px 40px;font-size:17px;color:#003875");

           $("tr.odd").not("tr.even").attr("style","background-color:#0000;background-image:linear-gradient(to bottom, #ffffff 20%,#aacef5 80%)");

           $("tr.odd").not("tr.even").find("td").attr("style","padding:10px 40px;font-size:17px;color:#003875");

           //$(".dataTablesTable tbody").css("colore","black"); 

           $(".dataTablesTable tbody tr:last td:last").css("text-align","center");

           $(".dataTablesTable tbody tr:last td:last").attr("colspan","7");
          
                },100);///this draw the table at every moment of 100microseconds///was added because the date picker was not reponding
       });
 

//      $(document).ready(function() {
//     /* Initialise the DataTable */
//     var oTable = $('table.dataTablesTabl').dataTable({
//         "oLanguage": {
//             "sSearch": "Search all columns:"
//         },
//         "iDisplayLength": 10,
//         "bJQueryUI": true,
//         "sPaginationType": "full_numbers",
//         "bFilter": true,
//     }); 

//     /* Add a select menu for each TH element in the table footer */
//     var indexOfMyCol = 2;//you want it on the third column
// $("thead th").each( function ( i ) {
//     if(i === indexOfMyCol){ 
//       this.innerHTML = fnCreateSelect( oTable.fnGetColumnData(i) );
//       $('select', this).change( function () {
//         oTabl.fnFilter( $(this).val(), i );
//       } );
//     }
// } );          
// } );

// $('#mySelec').on('change',function(){
//         var selectedValue = $(this).val();
//         dTable.fnDraw("^"+selectedValue+"$", 0, true); //Exact value, column, reg
//     });



//     oTable = $('table.dataTablesTable').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel  said
// $('#max').keyup(function(){
//       oTable.search($(this).val()).draw() ;
// })

///These are additional css for the datatable.:::///////#00aced
$(document).ready(function(){

// $("#search-items").hide();
// $("#toggle-search").click(function(e){
//     e.preventDefault();
//    // alert("test"); return false;
//     if($("#search-items").is(":hidden")){
//         $("#search-items").fadeIn();
//     }else{
//         $("#search-items").fadeOut();
//     }

// });
//alert("hi");
$("#search-items").css("margin-bottom","-200px");
//$("#commentTable_length").css("margin-top","10px");//
$("#all").attr("style","background:#003875");//this changes the color of all reports button on 1st load
$(".dataTablesTable").attr("style","border-collapse:separate;border:10px solid green;border-radius:10px;-moz-border-style:none;-webkit-border-style:none;");

$(".dataTablesTable th").attr("style","background-color:#17a2b8;color:white;font-weight:bold;font-size:15px;");

$(".dataTablesTable th").eq(1).attr("style","background-color:#17a2b8;color:white;font-weight:bold;font-size:15px;border-radius:0px 0px 0px");

$(".dataTablesTable th").first().attr("style","background-color:#17a2b8;color:white;font-weight:bold;font-size:15px;border-radius:10px 0px 0px");
$(".dataTablesTable th").last().attr("style","background-color:#17a2b8;color:white;font-weight:bold;font-size:15px;border-radius:0px 10px 0px 0px");
//$(".dataTablesTable tr:last").attr("style","border-radius:20px");
//$("#commentTable_filter input").remove();//this hide the datatable search field
$("#commentTable_filter input").attr("style","width:650px;height:30px;border:1px solid #17a2b8;margin-right:-40px;border-radius:8px;padding:.4em .4em .4em .4em;background:#efff;background-image:linear-gradient(to bottom, #ffffff 5%,#aacef5 100%);");
$(".dateControlBlock").attr("style","margin-top:-35px;margin-right:-22px");
//$("#commentTable_filter").attr("style","margin-right:-35px");
$(".dataTables_wrapper").attr("style","margin-top:80px");
$("#container").attr("style","background-color:#ddd;background-image:linear-gradient(to bottom,#ddd 80%,#ddd 20%);");
//$("div[title=Next]").html("<img src='http://localhost/reportsapp/images/reports_image/icon/reports.png' alt='Next' style='width:80px;height:50px'/>").attr("style","width:80px;height:50px");
//$("div[title=Previous]").html("<img src='http://localhost/reportsapp/images/reports_image/icon/reports.png' alt='Previous' style='width:80px;height:50px'/>").attr("style","width:80px;height:50px");
//$("#document_name").attr("style","border:1.7px solid blue;background:#eee;width:200px;height:40px;border-radius:5px");
//alert($(".datepickerdropdown input"));
});
</script>
    

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
 
      // idle settings
      idleTimeLimit: 500,           // 'No activity' time limit in seconds. 1200 = 20 Minutes
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
<!--end of the seesion time out code-->

</body>

</html>
<!-- end document-->
<?php /**PATH C:\xampp\htdocs\reportsapp\resources\views/offline_report/create_user.blade.php ENDPATH**/ ?>