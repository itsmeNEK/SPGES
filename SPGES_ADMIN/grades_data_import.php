<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SPGES | Import Grades</title>
			<link rel="icon" href="dist/dept.jpg" type="image/icon type">

			<link rel="stylesheet" href="dist/css/font.css">
			<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
			<link rel="stylesheet" href="dist/css/ionicons.css">
			<link rel="stylesheet" href="dist/css/adminlte.min.css">
			<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
			<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
      <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
      <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
		</head>

		<body>
			<div class="wrapper">
				<div class="content-header"></div>
			     <div class="container-fluid">
						<div class="row">
							<div class="col-md-5">
								<div class="card card-gray">
                  <div class="card-header">
                    <b>Import Student Grades</b>
                  </div>

									<div class="card-body">
										 <form id="upload_csv" method="post" enctype="multipart/form-data">
                    <table class="table">
											<tr>
                        <td colspan="4" style="font-size:12pt;">Choose .csv files</td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <input type="file" name="csv_file" id="csv_file" accept=".csv" />
                        </td>
                        <td>
                        <input type="submit" name="upload" id="upload" value="Upload"  class="btn btn-primary" />
                        </td>
                      </tr>
										</form>

                      <tr>
												<td algin="center" style="font-size:11pt;">Semester</td>
												<td width="30%">
													<select class="form-control form-control-sm" name="fsltSem" id="fsltSem">
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
												<td width="5%" style="font-size:11pt;">School Year</td>
												<td width="30%">
													<select class="form-control form-control-sm" name="fsltSy" id="fsltSy">
														<option selected="selected" >Select School Year</option>
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
											</tr>
											<tr>
												<td width="5%" algin="center" style="font-size:12pt;">Course</td>
												<td colspan="3">
													<select id="sltsubj" class="form-control form-control-sm select2 select2-primary" data-dropdown-css-class="select2-primary " style="width: 100%;">
														<option selected="selected" disabled>Select Course</option>
														<?php
															require ('conn.php');

															$SResult = mysqli_query($conn, "SELECT * FROM tbl_subject GROUP BY courseCode");

															if(mysqli_num_rows($SResult) > 0){
																while($row = mysqli_fetch_array($SResult)){
																	$code = $row['courseCode'];
																	$desc = $row['courseDesc'];
																	$unit = $row['courseUnit'];
																	echo"
																		<option value='$code-$desc-$unit'>$code-$desc</option>";
																}
															}
														?>
													</select>
												</td>
											</tr>
										</table>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="card">
								<div class="card-body" id="csv_file_data">


							</div>
						</div>
							</div>
					</div>
				</div>
			</section>
		</div>




			</div>
			<script src="plugins/jquery/jquery.min.js"></script>
			<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
			<script>
				$.widget.bridge('uibutton', $.ui.button)
			</script>
			<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="plugins/moment/moment.min.js"></script>
			<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
			<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
			<script src="dist/js/adminlte.js"></script>
			<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
      <script src="plugins/select2/js/select2.full.min.js"></script>
			<script src="DataController.js"></script>
			<script>

			$(document).ready(function(){
			 $('#upload_csv').on('submit', function(event){
			  event.preventDefault();
			  $.ajax({
			   url:"fetch.php",
			   method:"POST",
			   data:new FormData(this),
			   dataType:'json',
			   contentType:false,
			   cache:false,
			   processData:false,
			   success:function(data)
			   {
			    var html = '<table class="table table-bordered table-hover table-sm">';
			    if(data.column)
			    {
			     html += '<tr align="center">';
			     for(var count = 0; count < data.column.length; count++)
			     {
			      html += '<th>'+data.column[count]+'</th>';
			     }
			     html += '</tr>';
			    }

			    if(data.row_data)
			    {
			     for(var count = 0; count < data.row_data.length; count++)
			     {
			      html += '<tr align="center">';
			      html += '<td class="stud_no">'+data.row_data[count].stud_no+'</td>';
			      html += '<td class="stud_name">'+data.row_data[count].stud_name+'</td>';
						html += '<td class="stud_grade">'+data.row_data[count].stud_grade+'</td></tr>';
			     }
			    }
			    html += '<table>';
			    html += '<br><div align="center"><button type="button" id="import_data" class="btn btn-success">Save Grades</button></div>';

			    $('#csv_file_data').html(html);
			    $('#upload_csv')[0].reset();
			   }
			  })
			 });

				$(document).on('click', '#import_data', function(){
					var subj = $("#sltsubj").val();
					var sem  = $("#fsltSem").val();
					var sy 	 = $("#fsltSy").val();
					var stud_no =[];
			  	var stud_name = [];
			  	var stud_grade = [];

					$('.stud_no').each(function(){
						stud_no.push($(this).text());
					})
				  $('.stud_name').each(function(){
				   	stud_name.push($(this).text());
				  });
				  $('.stud_grade').each(function(){
				   	stud_grade.push($(this).text());
				  });

				  $.ajax({
				   	url:"import.php",
				   	method:"post",
				   	data:{subj:subj,sem:sem,sy:sy,stud_no:stud_no,stud_name:stud_name,stud_grade:stud_grade},
				   	success:function(data)
				   	{
				   	$('#csv_file_data').html('<div class="alert alert-success">Grades Successfully Save</div>');
				  	}
				  })
			 	});
			});

			$(function () {
			  //Initialize Select2 Elements
			  $('.select2').select2()

			  //Initialize Select2 Elements
			  $('.select2bs4').select2({
			    theme: 'bootstrap4'
			  })
			})

			</script>
		</body>
	</html>
