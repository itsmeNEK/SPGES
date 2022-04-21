<!DOCTYPE html>
	<html lang="en">
		<head>
			<?php
				include 'session.php';
				require("caesarC.php");
			?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SPGES | Enrolled Courses Checklist</title>
			<link rel="icon" href="dist/dept.jpg" type="image/icon type">

			<link rel="stylesheet" href="dist/css/font.css">
			<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
			<link rel="stylesheet" href="dist/css/ionicons.css">
			<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
			<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
			<link rel="stylesheet" href="dist/css/adminlte.css">
			<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
			<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
			<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
			<link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
			<link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
		</head>

		<body class="hold-transition sidebar-mini layout-fixed">
			<div class="wrapper">
					<nav class="main-header navbar navbar-expand navbar-success navbar-light">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color:white"></i></a>
							</li>
						</ul>

						<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" style="color:white" href="#">
								<?php echo encipher($fName,13);?>
									</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link" data-toggle="dropdown" href="#">
										<i class="fa fa-user" style="color:white"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
										<a href="#" class="dropdown-item">
											<div class="media">
												<img src="dist/logo.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
												<div class="media-body">
													<h3 class="dropdown-item-title">
														Welcome
													</h3>
												<p class="text-sm"><?php echo encipher($fName,13);?></p>
													<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>
														<?php
															echo  date("Y/m/d");
														?>
													</p>
												</div>
											</div>
										</a>

										<div class="dropdown-divider"></div>

										<a href="logout.php" class="dropdown-item dropdown-footer">Log Out</a>
									</div>
								</li>
							</ul>
					</nav>

					<aside class="main-sidebar sidebar-dark-primary elevation-4">
						<a href="#" class="brand-link">
							<img src="dist/dept.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
							<span class="brand-text font-weight-light">SPGES</span>
						</a>

						<div class="sidebar">
							<nav class="mt-2">
								<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
									<li class="nav-item">
										<a href="dashboard.php" class="nav-link">
											<i class="nav-icon fas fa-tachometer-alt"></i>
											<p>Dashboard</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="profile.php" class="nav-link">
											<i class="nav-icon fas fa-address-card"></i>
											<p>Student Profile</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="enrolled_courses.php" class="nav-link active">
											<i class="nav-icon fas fa-graduation-cap"></i>
											<p>Enrolled Courses</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="grades.php" class="nav-link">
											<i class="nav-icon fas fa-address-book"></i>
											<p>Grades</p>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</aside>

					<div class="content-wrapper">
						<div class="content-header">
							<div class="container-fluid">
								<div class="row mb-2">
									<div class="col-sm-6">
										<h1 class="m-0">Enrolled Courses Checklist</h1>
									</div>

									<div class="col-sm-6">
										<ol class="breadcrumb float-sm-right">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active">Enrolled Courses Checklist</li>
										</ol>
									</div>
								</div>
							</div>
						</div>

						<section class="content">
							<div class="container-fluid">
								<div class="row">

									<div class="col-12">
										<div class="card">
										<input type="hidden" name="studNo" class="form-control float-right" id="txtstudNo" value="<?php echo $studNo;?>">

											<div class="card-body table-responsive" id="enr_courses_content">

											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>

					<footer class="main-footer">
						<strong>Copyright &copy; 2021-2022 SPGES</strong>

						<div class="float-right d-none d-sm-inline-block">
				  		<b>CCSICT</b>
						</div>
					</footer>
			</div>

			<script src="plugins/jquery/jquery.min.js"></script>
			<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
			<script>
			  $.widget.bridge('uibutton', $.ui.button)
			</script>
			<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="plugins/moment/moment.min.js"></script>
			<script src="plugins/daterangepicker/daterangepicker.js"></script>
			<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
			<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
			<script src="dist/js/adminlte.js"></script>
			<script src="dist/js/demo.js"></script>
			<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
			<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
			<script src="plugins/jquery-validation/additional-methods.min.js"></script>

			<script src="DataController.js"></script>
			<script>
				$(document).ready(function(){
					enr_course();
				});


			</script>
		</body>
	</html>
