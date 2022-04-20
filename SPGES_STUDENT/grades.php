<!DOCTYPE html>
	<html lang="en">
		<head>
			<?php
				include 'session.php';
			?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SPGES | Student Grades</title>
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
													<p class="text-sm"><?php echo $fName;?></p>
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
										<a href="enrolled_courses.php" class="nav-link">
											<i class="nav-icon fas fa-graduation-cap"></i>
											<p>Enrolled Courses</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="grades.php" class="nav-link active">
											<i class="nav-icon fas fa-address-book"></i>
											<p>Student Grades</p>
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
										<h1 class="m-0">Student Grades</h1>
									</div>

									<div class="col-sm-6">
										<ol class="breadcrumb float-sm-right">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active">Student Grades</li>
										</ol>
									</div>
								</div>
							</div>
						</div>

						<section class="content">
							<div class="container-fluid">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Search Grades</h3>
									</div>

									<div class="card-body">
										<form id="quickForm">
											<table  width=100%>
												<tr>
													<?php
														require ('conn.php');

														$Result = mysqli_query($conn, "SELECT * FROM tbl_stdprofile WHERE `studID` = '$studNo'");

														if(mysqli_num_rows($Result) > 0){
															while($row = mysqli_fetch_array($Result)){
																$stud_name = $row['lastName'] .', '. $row['firstName'] .' '. $row['middleName'] .' '. $row['extName'];
																$studNo 	 = $row['studID'];
															}
														}else{
															$stud_name = "";
														}
													?>

													<td>ID#: </td>
													<td>
														<u><?php echo $studNo; ?></u>
														<input type="hidden" class="form-control form-control-sm" id="txtStud" name="txtStud" value="<?php echo $studNo;?>">
													</td>

													<th rowspan=2  style="vertical-align:top;">Semester</th>

													<td rowspan=2 width=18%>
														<div class="form-group">
															<select class="form-control form-control-sm" name="sltSem" id="sltSem">
																<option selected="selected" disabled>Select Semester</option>
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
														</div>
													</td>
													<td width=3%>&nbsp;</td>

													<th rowspan=2 style="vertical-align:top;"> School Year</th>

													<td rowspan=2 width=18%>
														<div class="form-group">
															<select class="form-control form-control-sm" name="sltSy" id="sltSy">
																<option selected="selected" disabled>Select School Year</option>
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
														</div>
													</td>
													<td width=3%>&nbsp;</td>
													<td rowspan=2 width=12%>
														<div class="form-group">
															<button type="submit" class="btn btn-primary btn-sm" id="btnsearch">
																<i class="fas fa-search "></i>
																Search
															</button>
														</div>
													</td>
												</tr>

												<tr>
													<td>Name: </td>
													<td><u><?php echo  $stud_name ?></u> </td>
												</tr>
											</table>
										</form>

										<br>
										<div class="row">
											<div class="col-1"></div>
											<div class="col-10" id="stud_grade_details" >

											</div>
											<div class="col-1"></div>
										</div>

									</div>

									<div class="card-footer clearfix"></div>
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


			<!-- modal -->
				<div class="modal fade" id="modalEditGrade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Grade</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="etxtgrade">Grade C.Q</label>
										<input type="text" name="etxtgrade" class="form-control" id="etxtgrade" placeholder="Enter Grade C.Q">
									</div>
							</div>

							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary btn-md" id="btnEditGrade">Save</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			<!-- /.modal -->



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
					//loadCurriculum();

				});

				$(function () {
				  $.validator.setDefaults({
					submitHandler: function () {

						loadStudent_grade_details();
					}
				  });
				  $('#quickForm').validate({
					rules: {
					  txtStud: {
						required: true,
					  },
					  sltSem: {
						required: true,
					  },
					  sltSy: {
						required: true,
					  },
					},
					messages: {
					  txtStud: {
						required: "Enter Student No.",
					  },
					  sltSem: {
						required: "Select Semester",
					  },
					  sltSy: {
						required: "Select School Year",
					  }
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
