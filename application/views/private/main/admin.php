
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico">

    <title>E Recruitment - Admin </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/master_style.css">

	<!-- Superieur Admin skins -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo -->
	  <div class="logo-mini">
		  <span class="light-logo"><img src="<?= base_url() ?>assets/images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="<?= base_url() ?>assets/images/logo-dark.png" alt="logo"></span>
	  </div>
      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><div class="text-white ml-3"><b>E</b> Recruitment</div></span>
	  	  <span class="dark-logo"><div class="text-white ml-3"><b>E</b> Recruitment</div></span>
	  </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		  </a>
	  </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url() ?>assets/images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(<?= base_url() ?>assets/images/user-info.jpg)" data-overlay="3">
				  <div class="flexbox align-self-center">					  
				  	<img src="<?= base_url() ?>assets/images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">					  
					<h4 class="user-name align-self-center">
					  <span>Samuel Brus</span>
					  <small>samuel@gmail.com</small>
					</h4>
				  </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item btn-logout" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
              </li>
            </ul>
          </li>		
		
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="index.html">
			<img src="<?= base_url() ?>assets/images/avatar/7.jpg" alt="user">
              <span>
				<span class="d-block font-weight-600 font-size-16">Samuel Brus</span>
				<span class="email-id">samuel@gmail.com</span>
			  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
            <li><a href="javascript:void()" class="btn-logout"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>MAIN MENU</li>
		  
		<li>
          <a href="#/dashboard">
            <i class="mdi mdi-directions"></i>
			<span>Dashboard</span>
          </a>
        </li> 
		<li>
          <a href="#/lowongan">
            <i class="mdi mdi-directions"></i>
			<span>Lowongan</span>
          </a>
        </li> 
		<li>
          <a href="#/aplikasi">
            <i class="mdi mdi-directions"></i>
			<span>Aplikasi</span>
          </a>
        </li> 
		<li>
          <a href="#/user">
            <i class="mdi mdi-directions"></i>
			<span>User</span>
          </a>
        </li> 
		<li>
          <a href="javascript:void(0);" class="btn-logout" id="btn_logout">
            <i class="mdi mdi-directions"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
  </aside>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="page_content">
   
  </div>
  <!-- /.content-wrapper -->
 
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


	<!-- jQuery 3 -->
	<script src="<?= base_url() ?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- popper -->
	<script src="<?= base_url() ?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?= base_url() ?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="<?= base_url() ?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="<?= base_url() ?>assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Superieur Admin App -->
	<script src="<?= base_url() ?>assets/js/template.js"></script>
	
	<!-- Superieur Admin for demo purposes -->
	<script src="<?= base_url() ?>assets/js/demo.js"></script>

	<script src="<?= base_url() ?>src/private/additional.js"></script>
	<script src="<?= base_url() ?>src/private/main.js"></script>

  <script>
      document.addEventListener('DOMContentLoaded', function () {
          mainController.init()
      })
  </script>
	

</body>
</html>
