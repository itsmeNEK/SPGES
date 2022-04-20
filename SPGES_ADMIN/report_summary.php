<!DOCTYPE html>
	<html lang="en">
	<?php
		include 'session.php';
	?>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SPGES | Summary of Students</title>
			<link rel="icon" href="dist/dept.jpg" type="image/icon type">

			<link rel="stylesheet" href="dist/css/font.css">
			<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
			<link rel="stylesheet" href="dist/css/ionicons.css">
			<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
			<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
			<link rel="stylesheet" href="dist/css/adminlte.min.css">
			<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
			<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
			<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
			<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
			<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
			<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
							<?php echo $fName;?>
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
											<p class="text-sm"><?php echo $fName; ?></p>
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
						<li class="nav-item">
						<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
							<i class="fas fa-cogs" style="color:white"></i>
						</a>
					</li>
				</ul>
			</nav>

			<aside class="control-sidebar  sidebar-dark-primary elevation-4">
				<a href="#" class="brand-link" align="center">
					<span class="brand-text font-weight-light"><b>SYSTEM SETTINGS</b></span>
				</a>

				<div class="sidebar">
					<nav class="mt-2"  style="color:white;">
						<ul class="nav nav-pills nav-compact nav-child-indent nav-sidebar flex-column" role="menu" data-accordion="false">
							<li class="nav-item">
								<a href="period.php" class="nav-link">
									<i class="fas fa-calendar-times nav-icon"></i>
									<p>Current Period</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="semester.php" class="nav-link">
									<i class="far fa-calendar nav-icon"></i>
									<p>Semester</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="schoolyear.php" class="nav-link">
									<i class="fas fa-calendar-alt nav-icon"></i>
									<p>School Year</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="yearlevel.php" class="nav-link">
									<i class="fas fa-bars nav-icon"></i>
									<p>Year Level</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="user.php" class="nav-link">
									<i class="fas fa-users nav-icon"></i>
										<p>User Settings</p>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</aside>

			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<a href="#" class="brand-link">
					<img src="dist/dept.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">SPGES</span>
				</a>

				<div class="sidebar">
					<nav class="mt-2">
						<ul class="nav nav-pills nav-child-indent nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<li class="nav-item">
								<a href="dashboard.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="curriculum.php" class="nav-link">
									<i class="nav-icon fas fa-graduation-cap"></i>
									<p>Curriculum</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="grades.php" class="nav-link">
									<i class="nav-icon fas fa-address-book"></i>
									<p>Student Grades</p>
								</a>
							</li>

							<li class="nav-item menu-open">
								<a href="#" class="nav-link active">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>
										Reports
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>

								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="report_profile.php" class="nav-link">
											<i class="far fa-id-card nav-icon"></i>
											<p>Student Profile</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="report_checklist.php" class="nav-link">
											<i class="far fa-file nav-icon"></i>
											<p>Curriculum Checklist</p>
										</a>
									</li>

									<li class="nav-item">
										<a href="report_summary.php" class="nav-link active">
											<i class="far fa-file nav-icon"></i>
											<p>Summary of Students</p>
										</a>
									</li>
								</ul>
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
								<h1 class="m-0">Summary of Students</h1>
							</div>

							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Reports</a></li>
									<li class="breadcrumb-item active">Summary of Students</li>
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
									<div class="card-body">
										<form id="quickForm">
											<table class="table text-nowrap">
												<tr>
													<td width="5%" algin="center">Semester</td>
													<td>
														<select class="form-control form-control-sm" name="sfsltSem" id="sfsltSem">
															<option selected="selected" value="All">All Semester</option>
															<?php
																require ('conn.php');

																$SResult = mysqli_query($conn, "SELECT * FROM tbl_semester");

																if(mysqli_num_rows($SResult) > 0){
																	while($row = mysqli_fetch_array($SResult)){
																		echo"
																			<option value='".$row['semester']."'>".$row['semester']."</option>";
																	}
																}
															?>
														</select>
													</td>
													<td width="10%">School Year</td>
													<td>
														<select class="form-control form-control-sm" name="sfsltSy" id="sfsltSy">
																<option selected="selected" value="All">All School Year</option>
																	<?php
																		require ('conn.php');

																		$PResult = mysqli_query($conn, "SELECT * FROM tbl_schoolyear");
																			if(mysqli_num_rows($PResult) > 0){
																				while($row = mysqli_fetch_array($PResult)){
																					echo"
																						<option value='".$row['schoolYear']."'>".$row['schoolYear']."</option>";
																				}
																			}
																	?>
															</select>
													</td>
													<td width="10%">
														<a class='btn btn-primary btn-sm' id="btnsum_filter" >
															<span class='fas fa-filter'></span>
															<b>&nbsp; Filter &nbsp;</b>
														</a>
													</td>
													<td width="10%">
														<a class='btn btn-success btn-sm' id="btnsum_print" >

															<span class='fas fa-print'></span>
															<b>&nbsp; Print &nbsp;</b>
														</a>
													</td>
												</tr>
											</table>
										</form>

											<div id="report_summary_content">

											</div>
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
			<script src="plugins/datatables/jquery.dataTables.min.js"></script>
			<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
			<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
			<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
			<script src="DataController.js"></script>
<script>
$(document).ready(function(){
	loadsummary();

});

$(function () {

 $.validator.setDefaults({
  submitHandler: function () {
    searchStudentProfile()
    }
  });
  $('#quickForm').validate({
    rules: {
     txtStudName: {
        required: true,
      },
    },
    messages: {
     txtStudName: {
       required: "Please Enter Student Lastname",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
 });
});
</script>
		</body>
	</html>
