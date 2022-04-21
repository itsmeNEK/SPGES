<!DOCTYPE HTML>
	<html lang="en">
		<head>
			<?php
				include 'session.php';
				require("caesarC.php");
			?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SPGES | Dashboard</title>
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
			<style>
				.logo{
					width:50%;
					display: block;
					margin-left: auto;
					margin-right: auto;
				}

				.dept{
					width:50%;
					display: block;
					margin-left: auto;
					margin-right: auto;
				}
				.name{
					text-shadow: 1px 1px 2px #000000;
					font-size:40px;
					color:#ffffff;
					margin-top: -2px;
					background: rgb(2,102,18);
					background: linear-gradient(90deg, rgba(2,102,18,1) 0%, rgba(36,170,5,1) 47%, rgba(34,203,7,1) 100%);
				}
				.card_vision{
					background-image:url("dist/sch.jpg");
					background-repeat: no-repeat;
					background-position: center;
					background-size: contain;
				}

			</style>
		</head>

		<body class="hold-transition sidebar-mini layout-fixed">
			<div class="wrapper">
				<div class="preloader flex-column justify-content-center align-items-center">
					<img class="animation__shake" src="dist/logo.png" height="100" width="100">
				</div>

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
						  <img src="dist/dept.jpg" class="brand-image img-circle elevation-3" style="opacity: 1">
						  <span class="brand-text font-weight-light">SPGES</span>
						</a>

						<div class="sidebar">
							<nav class="mt-2">
								<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
									<li class="nav-item">
										<a href="dashboard.php" class="nav-link active">
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
										<a href="enrolled_courses.php" class="nav-link">
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
										<h1 class="m-0">Dashboard</h1>
									</div>
									<div class="col-sm-6">
										<ol class="breadcrumb float-sm-right">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active">Dashboard</li>
										</ol>
									</div>
								</div>
							</div>
						</div>

						<section class="content">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12" align="center">
										<p class="name"><b>STUDENT PROFILING AND GRADE EVALUATION SYSTEM</b></p>
									</div>
								</div>
								<div class="row">
									<section class="col-lg-8">
										<div class="callout callout-success">
											<table class="table-condensed">
												<tr>
													<td rowspan="3" width="20%">
														<img class ="logo" src="dist/logo.png">
													</td>
												</tr>
												<tr align="center" style="font-size:20px; color:red;">
													<td>
														<b>	WELCOME TO</b>
													</td>
													<td rowspan="2" width="20%">
														<img class ="logo" src="dist/dept.jpg">
													</td>
												</tr>
												<tr align="center" style="font-size:20px; color:#006400;">
													<td>
														<b>ISABELA STATE UNIVERSITY</b>
													</td>
												</tr>
												<tr align="center" style="font-size:15px">
													<td  colspan="3">
															<b>COLLEGE OF COMPUTING STUDIES, INFORMATION AND COMMUNICATION TECHNOLOGY (CCSICT)</b>
													</td>
												</tr>
												<tr align="center" style="font-size:14px">
													<td  colspan="3">
														<i>Main Campus, Echague, Isabela</i>
													</td>
												</tr>
											</table>
										</div>
										<div class="card">
											<div class="card-body">
											<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			                  <ol class="carousel-indicators">
			                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
			                  </ol>
			                  <div class="carousel-inner">
			                    <div class="carousel-item active">
			                      <img class="d-block w-100" src="dist/slider/3.jpg" alt="First slide">
			                    </div>
			                    <div class="carousel-item">
			                      <img class="d-block w-100" src="dist/slider/7.jpg" alt="Second slide">
			                    </div>
			                    <div class="carousel-item">
			                      <img class="d-block w-100" src="dist/slider/9.jpg" alt="Third slide">
			                    </div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="dist/slider/1.jpg" alt="Fourth slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="dist/slider/2.jpg" alt="Fifth slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="dist/slider/4.jpg" alt="Six slide">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="dist/slider/5.jpg" alt="Seven slide">
								</div>
			                  </div>
			                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			                    <span class="carousel-control-custom-icon" aria-hidden="true">
			                      <i class="fas fa-chevron-left"></i>
			                    </span>
			                    <span class="sr-only">Previous</span>
			                  </a>
			                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			                    <span class="carousel-control-custom-icon" aria-hidden="true">
			                      <i class="fas fa-chevron-right"></i>
			                    </span>
			                    <span class="sr-only">Next</span>
			                  </a>
			                </div>
										</div>
										</div>
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
													<i class="fas fa-book mr-1"></i>
													 <b>COURSES OFFERED</b>
												</h3>
											</div>
											<div class="card-body">
												<?php
													require ('conn.php');

													$Result = mysqli_query($conn, "SELECT * FROM tbl_currperiod");
													if(mysqli_num_rows($Result) > 0){
														while($row = mysqli_fetch_array($Result)){
															$cursem = $row['curSem'];
															$cursy 	= $row['curSy'];
														}
													}
												?>
												<input type="hidden" class="form-control input-sm" id="txtcursem" value='<?php echo $cursem; ?>' disabled>
												<input type="hidden" class="form-control input-sm" id="txtcursy" value='<?php echo $cursy; ?>' disabled>
												<div class="tab-content" id="subj_offered">
												</div>
											</div>
										</div>
									</section>

									<section class="col-lg-4" >
									<b>
										<div class="row" style="overflow: scroll; height: 450px;">
											<div class="col-12">
												<div class="card card-orange">
													<div class="card-header">
														<h3 class="card-title">
															<b><i class="fas fa-chart-pie mr-1"></i>
															Vission
														</h3>
													</div>
													<div class="card-body card_vision">
														<div class="tab-content p-0" align='justify'>
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A leading Research University in the ASEAN Region.
														</div>
													</div>
												</div>
												<div class="card card-orange">
													<div class="card-header">
														<h3 class="card-title">
															<b><i class="fas fa-chart-pie mr-1"></i>
															Mission
														</h3>
													</div>
													<div class="card-body">
														<div class="tab-content p-0" align='justify'>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Isabela State University is committed to develop globally competitive human, technological resources and services through quality instruction, innovative research, responsive community engagement and viable resource management programs for inclusive growth and sustainable development.
														</div>
													</div>
												</div>
												<div class="card card-orange">
													<div class="card-header">
														<h3 class="card-title">
															<b><i class="fas fa-chart-pie mr-1"></i>
															Quality Policy
														</h3>
													</div>
													<div class="card-body">
														<div class="tab-content p-0" align='justify'>
															 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The ISABELA STATE UNIVERSITY endeavors to be a lead University in instruction, research, extension and resource generation through continuous improvement of services.
															<br><br>
															To uphold the commitment, ISU shall attain the following quality objectives:
															<br><br>
															Sustain academic excellence and quality in instruction;<br>
															Generate research breakthroughs;<br>
															Engage in sectoral activities for community development;<br>
															Develop products for globalization;<br>
															Support students participation to local and international fora to enhance their potentialities;<br>
															Comply with the standards set by statutory, regulatoryand accrediting bodies and;<br>
															Review on periodic basis, the Quality Management System (QMS) and gather feedbacks on the level of client satisfaction as basis for continuous improvement.
														</div>
													</div>
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-12">
												<div class="card ">
						              <div class="card-header bg-gradient-lightblue">
						                <h3 class="card-title">
						                  <i class="far fa-calendar-alt"></i>
						                  Calendar
						                </h3>
						              </div>
						              <div class="card-body pt-0">
						                <div id="calendar" style="width: 100%"></div>
						              </div>
						            </div>
											</div>
										</div>
									</section>
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
						loadsubj_offered();

						$('#calendar').datetimepicker({
							 format: 'L',
							 inline: true
						 })
					})
				</script>
		</body>
	</html>
