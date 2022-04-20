<!DOCTYPE html>
	<html lang="en">
		<?php
			include 'session.php';
		?>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SPGES | Dashboard</title>
			<link rel="icon" href="dist/logo.png" type="image/icon type">

			<link rel="stylesheet" href="dist/css/font.css">
			<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
			<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
			<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
			<link rel="stylesheet" href="dist/css/adminlte.css">
			<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
			<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
			<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
			<style>
				.card-custom {
			    -ms-flex: 1 1 auto;
			    flex: 1 1 auto;
			    min-height: 1px;
				}
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
									<a href="dashboard.php" class="nav-link active">
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

								<li class="nav-item">
									<a href="#" class="nav-link">
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
											<a href="report_summary.php" class="nav-link">
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
									<div class="col-lg-3 col-6">
										<div class="small-box bg-lightblue">
											<div class="inner">
												<?php
													include ('conn.php');
													$sql = mysqli_query($conn, "SELECT * FROM tbl_stdprofile");
													if(mysqli_num_rows($sql) > 0){
													$total = mysqli_num_rows($sql);
												}else{
													$total = 0;
												}
												?>
												<h3><?php echo $total ?></h3>
												<p>Total Students</p>
											</div>

											<div class="icon">
												<i class="fas fa-users"></i>
											</div>
											<a href="#" class="small-box-footer" style='font-size:5px'>&nbsp;</a>
										</div>
									</div>
									<div class="col-lg-3 col-6">
										<div class="small-box bg-success">
											<div class="inner">
												<?php
													include ('conn.php');
														$period = mysqli_query($conn,"SELECT * FROM tbl_currperiod");
															if(mysqli_num_rows($period) > 0 ){
																while($row = mysqli_fetch_array($period)){
																	$cursem = $row['curSem'];
																	$cursy 	= $row['curSy'];
																}
																$sql = mysqli_query($conn, "SELECT * FROM tbl_stdprofile WHERE schoolyear = '$cursy'");
																if(mysqli_num_rows($sql) > 0){
																$curtotal = mysqli_num_rows($sql);
															}else{
																$curtotal = 0;
															}
															}else{
																$curtotal = 0;
															}


												?>
												<h3><?php echo $curtotal ?></h3>
												<p>Currently Enrolled </p>
											</div>

											<div class="icon">
												<i class="fas fa-user"></i>
											</div>
											<a href="#" class="small-box-footer" style='font-size:5px'>&nbsp;</a>
										</div>
									</div>
									<div class="col-lg-3 col-6">
										<div class="small-box bg-warning">
											<div class="inner">
												<?php
													include ('conn.php');
													$sql = mysqli_query($conn, "SELECT * FROM tbl_student");
													if(mysqli_num_rows($sql) > 0){
													$totaluser = mysqli_num_rows($sql);
												}else{
													$totaluser = 0;
												}
												?>
												<h3><?php echo $totaluser?></h3>

												<p>Student User</p>
											</div>
											<div class="icon">
												<i class="fas fa-user-circle"></i>
											</div>
											<a href="#" class="small-box-footer" style='font-size:5px'>&nbsp;</a>
										</div>
									</div>
									<div class="col-lg-3 col-6">
										<div class="small-box bg-danger">
											<div class="inner">
												<?php
													include ('conn.php');
													$sql = mysqli_query($conn, "SELECT * FROM tbl_user");
													if(mysqli_num_rows($sql) > 0){
													$user = mysqli_num_rows($sql);
												}else{
													$user = 0;
												}
												?>
												<h3><?php echo $user; ?></h3>

												<p>Users</p>
											</div>
											<div class="icon">
												<i class="fas fa-users-cog"></i>
											</div>
											<a href="#" class="small-box-footer" style='font-size:5px'>&nbsp;</a>
										</div>
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
											<div class="card-custom">
												<div class="tab-content p-0" align='justify'>
														<img src="dist/sch.jpg" width="100%">
												</div>
											</div>
										</div>
										<div class="card card-success">
											<div class="card-header">
												<h3 class="card-title">Enrolment Trends</h3>
											</div>
											<div class="card-body">
												<div class="chart">
													<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
												</div>
											</div>
										</div>
									</section>
									<section class="col-lg-4" >
									<b>
										<div class="row" style="overflow: scroll; height: 425px;">
											<div class="col-12">
												<div class="card card-orange">
													<div class="card-header">
														<h3 class="card-title">
															<b><i class="fas fa-chart-pie mr-1"></i>
															Vission
														</h3>
													</div>
													<div class="card-body">
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

			<?php
  			require "conn.php";

  			$sql = mysqli_query($conn,"SELECT `semester`,`schoolyear` FROM `tbl_stdprofile`GROUP BY `schoolyear`,`semester` ORDER BY `schoolyear` DESC LIMIT 4");
				if(mysqli_num_rows($sql) > 0 ){
					while($row = mysqli_fetch_array($sql)){
			      $chart_data="";
			      $sch[] = $row['schoolyear'];
			      $reverse = array_reverse($sch);
			    }
				}else{
					$reverse = "";
				}


			    $SResult = mysqli_query($conn, "SELECT * FROM tbl_semester");

			    if(mysqli_num_rows($SResult) > 0){
			      $ctr = mysqli_num_rows($SResult);
			      while($row = mysqli_fetch_array($SResult)){
			        $sem[]  =$row['semester'];
			      }
			    }

			     for($i = 0; $i < $ctr;$i++){
			       $select = mysqli_query($conn,"SELECT schoolyear,semester, COUNT(*) as Total FROM `tbl_stdprofile` WHERE `semester` = '$sem[$i]' GROUP BY `schoolyear` ORDER BY `schoolyear` DESC LIMIT 4");
			         if (mysqli_num_rows($select) > 0){
			           while ($srow = mysqli_fetch_array($select)){
			             $data[$i][] = $srow['Total'];
			           }

								 $len = count($data[$i]);
									if($len < 4){
										while ($len < 4){
										array_push($data[$i], "0");
											$len = count($data[$i]);
										}
									}
			         }else{
								 $data[$i][] = "0,0,0,0";
							 }

			     }
      	?>
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
				<script src="plugins/chart.js/Chart.min.js"></script>
				<script src="DataController.js"></script>
				<script>
					$(document).ready(function(){
						$('#calendar').datetimepicker({
							 format: 'L',
							 inline: true
						 })
					});

					$(document).ready(function(){
						$('#calendar').datetimepicker({
							 format: 'L',
							 inline: true
						 })
					})

					$(function () {

						var barChartCanvas = $('#barChart').get(0).getContext('2d')

						var areaChartData = {
							labels  : <?php echo json_encode($reverse); ?>,
							datasets: [
								{
									label               : <?php echo json_encode($sem[1]); ?>,
									backgroundColor     : 'rgba(60, 141, 188)',
									borderColor         : 'rgba(60, 141, 188)',
									pointRadius          : false,
									pointColor          : '#3b8bba',
									pointStrokeColor    : 'rgba(60, 141, 188)',
									pointHighlightFill  : '#fff',
									pointHighlightStroke: 'rgba(60, 141, 188)',
									data                : <?php echo json_encode($data[1]); ?>
								},
								{
									label               : <?php echo json_encode($sem[0]); ?>,
									backgroundColor     : 'rgba(0, 166, 90)',
									borderColor         : 'rgba(0, 166, 90)',
									pointRadius         : false,
									pointColor          : 'rgba(0, 166, 90)',
									pointStrokeColor    : '#c1c7d1',
									pointHighlightFill  : '#fff',
									pointHighlightStroke: 'rgba(0, 166, 90)',
									data                : <?php echo json_encode($data[0]); ?>
								},
								{
									label               : <?php echo json_encode($sem[2]); ?>,
									backgroundColor     : 'rgba(243, 156, 18)',
									borderColor         : 'rgba(243, 156, 18)',
									pointRadius         : false,
									pointColor          : 'rgba(243, 156, 18)',
									pointStrokeColor    : '#c1c7d1',
									pointHighlightFill  : '#fff',
									pointHighlightStroke: 'rgba(243, 156, 18)',
									data                : <?php echo json_encode($data[2]); ?>
								},
							]
						}


						var barChartData = $.extend(true, {}, areaChartData)
						var temp0 = areaChartData.datasets[0]
						var temp1 = areaChartData.datasets[1]
						barChartData.datasets[0] = temp1
						barChartData.datasets[1] = temp0

						var barChartOptions = {
							responsive              : true,
							maintainAspectRatio     : false,
							datasetFill             : false
						}

						new Chart(barChartCanvas, {
							type: 'bar',
							data: barChartData,
							options: barChartOptions
						})


				  })
				</script>

			</body>
		</html>
