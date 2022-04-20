<!DOCTYPE html>
	<html lang="en">
		<head>
			<?php
				include 'session.php';
			?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SPGES | Registration Form</title>

			<link rel="stylesheet" href="dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="dist/css/style.css">
			<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

			<style>
				.logo{
					width:25%;
					display: block;
					margin-left: auto;
					margin-right: auto;
				}

				.dept{
					width:30%;
					display: block;
					margin-left: auto;
					margin-right: auto;
				}

				.a {
					text-align-last: center;
					font-size: 13pt;
					font-family: Calibri, sans-serif;
					margin-bottom: -10px;
					margin-bottom: -10px;
				}

				.idpic {
				 	width: 50%;
					background-color: white;
				}

				.idpic img {
					width: 100%;
					height: auto;
				}
				.alert_custom {
				    position: relative;
				    padding: 0.75rem 1.25rem;
				    border: 1px solid transparent;
				    border-radius: 0.25rem;
				}
			</style>
		</head>
		<body>
			<div class="container">
				<table>
					<tr>
						<td>
							<img class ="logo" src="dist/logo.png">
						</td>
						<td  width='50%'>
							<p class='a'>
								Republic of the Philippines <br>
								<b>ISABELA STATE UNIVERSITY</b><br>
								Echague, Isabela<br><br>
							</p>
						</td>
						<td>
							<img class ="dept" src="dist/dept.jpg">
						</td>
					</tr>
				</table>
				<hr>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
  					<div class="panel panel-default">
    					<div class="panel-body">
      					<div class="stepper">
        					<ul class="nav nav-tabs" role="tablist">
          					<li role="presentation" class="active">
			            		<a class="persistant-disabled" href="#stepper-step-1" data-toggle="tab" aria-controls="stepper-step-1" role="tab" title="Personal Data">
			              		<span class="round-tab">1</span>
			            		</a>
			          		</li>
					          <li role="presentation" class="disabled">
					            <a class="persistant-disabled" href="#stepper-step-2" data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Academic Background">
					              <span class="round-tab">2</span>
					            </a>
					          </li>
					          <li role="presentation" class="disabled">
					            <a class="persistant-disabled" href="#stepper-step-3" data-toggle="tab" aria-controls="stepper-step-3" role="tab" title="Published & Unpublished Researches">
					              <span class="round-tab">3</span>
					            </a>
					          </li>
										<li role="presentation" class="disabled">
										 <a class="persistant-disabled" href="#stepper-step-4" data-toggle="tab" aria-controls="stepper-step-4" role="tab" title="Membership & Organizations">
											 <span class="round-tab">4</span>
										 </a>
									 </li>
									 <li role="presentation" class="disabled">
					            <a class="persistant-disabled" href="#stepper-step-5" data-toggle="tab" aria-controls="stepper-step-5" role="tab" title="Scholarships, Prizes and Awards">
					              <span class="round-tab">5</span>
					            </a>
					          </li>
										<li role="presentation" class="disabled">
		 			            <a class="persistant-disabled" href="#stepper-step-6" data-toggle="tab" aria-controls="stepper-step-6" role="tab" title="Trainings and Seminars">
		 			              <span class="round-tab">6</span>
		 			            </a>
		 			          </li>
										<li role="presentation" class="disabled">
		 			            <a class="persistant-disabled" href="#stepper-step-7" data-toggle="tab" aria-controls="stepper-step-7" role="tab" title="Plans after Graduation">
		 			              <span class="round-tab">7</span>
		 			            </a>
		 			          </li>
					          <li role="presentation" class="disabled">
					            <a class="persistant-disabled" href="#stepper-step-8" data-toggle="tab" aria-controls="stepper-step-8" role="tab" title="Profile Picture">
					              <span class="round-tab">8</span>
					            </a>
					          </li>
										<li role="presentation" class="disabled">
					            <a class="persistant-disabled" href="#stepper-step-9" data-toggle="tab" aria-controls="stepper-step-9" role="tab" title="Complete">
					              <span class="round-tab">9</span>
					            </a>
					          </li>
			        		</ul>

									<form role="form" id="personal_data_form">
										<div class="tab-content">
											<div class="tab-pane fade in active" role="tabpanel" id="stepper-step-1">
												<div class="table-responsive">
													<table  class="table-condensed text-nowrap" width="100%">
														<tr>
															<td colspan="6"><u><b>REGISTRATION DETAILS</b></u></td>
														</tr>
														<tr style="font-size:14px;">
															<td style="vertical-align: middle;"><i>Student ID:</i></td>
															<td align='center'>
																<input type="text" name="txtStudNo" class="form-control input-sm" id="txtStudNo">
															</td>
															<td style="vertical-align: middle;" align="right"><i>Semester</i></td>
															<td  align='center'>
																<select class="form-control form-contol-sm" name="sltSem" id="sltSem">
																	<option selected disabled>Select Semester</option>
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
															<td style="vertical-align: middle;"  align="right"><i>School Year</i></td>
															<td align='center'>
																<select class="form-control" name="sltSy" id="sltSy">
																	<option selected disabled>Select School Year</option>
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
													</table>
													<hr>
										  		<table class="table-condensed text-nowrap" width="100%">
														<tr>
												      <td colspan='5'><u><b>PERSONAL DATA</b></u></td>
														</tr>
										    		<tr style="font-size:15px;">
												      <td style="vertical-align: middle;"><i>Full Legal Name:</i></td>
												      <td align='center'>
												        <input type="text" name="txtlName" class="form-control input-sm" id="txtlName">
												      </td>
												      <td  align='center'>
												          <input type="text" name="txtfName" class="form-control input-sm" id="txtfName">
												      </td>
												      <td  align='center'>
												          <input type="text" name="txtmName" class="form-control input-sm" id="txtmName">
												      </td>
												      <td align='center'>
												          <input type="text" name="txtextName" class="form-control input-sm" id="txtextName">
												      </td>
										    		</tr>

												    <tr align='center' style='font-style:italic; font-size:12px;'>
												      <td></td>
												      <td>Family Name</td>
												      <td>First Name</td>
												      <td>Middle Name</td>
												      <td>Suffix</td>
												    </tr>

												    <tr style='font-size:15px;'>
												      <td><i>Mailing Address:</i></td>
												      <td colspan="3" align='center'>
												        <input type="text" name="txtstreet" class="form-control input-sm" id="txtstreet">
												      </td>
												      <td align='center'>
												        <input type="text" name="txtbgry" class="form-control input-sm" id="txtbgry">
												      </td>
												    </tr>

												    <tr align='center' style='font-style:italic; font-size:12px;'>
												      <td></td>
												      <td colspan="3">Room/Floor/Unit No., Bldg Name, House Lot/Block, Street, Subdivsion</td>
												      <td>Barangay</td>
												    </tr>

												    <tr align='center' style='font-size:15px;'>
												      <td>&nbsp;</td>
												      <td>
												        <input type="text" name="txtcity" class="form-control input-sm" id="txtcity">
												      </td>
												      <td>
												        <input type="text" name="txtprov" class="form-control input-sm" id="txtprov">
												      </td>
												      <td>
												        <input type="text" name="txtcountry" class="form-control input-sm" id="txtcountry">
												      </td>
															<td>
												        <input type="text" name="txtzip" class="form-control input-sm" id="txtzip">
												      </td>
												    </tr>

												    <tr align='center' style='font-style:italic; font-size:12px;'>
												      <td></td>
															<td>Town/City</td>
												      <td>Province/State</td>
												      <td>Country</td>
															<td>Zip Code</td>
												    </tr>

														<tr style='font-size:15px;'>
												      <td>Email Address:</td>
												      <td colspan="2">
												        <input type="text" name="txtemail" class="form-control input-sm" id="txtemail">
												      </td>
												      <td align="right">Mobile Number:</td>
												      <td>
												        <input type="text" name="txtmobile" class="form-control input-sm" id="txtmobile">
												      </td>
												    </tr>
												  </table>

												  <table class="table-condensed text-nowrap"  width="100%">
												    <tr style='font-size:15px;'>
												      <td><i>Place of Birth:</i></td>
												      <td colspan="3">
												        <input type="text" name="txtpBirth" class="form-control input-sm" id="txtpBirth">
												      </td>
												      <td align="right"><i>Birthday:</i></td>
												      <td>
												        <input type="date" name="txtbDate" class="form-control input-sm" id="txtbDate">
												      </td>
												    </tr>

												    <tr style='font-size:15px;'>
												      <td><i>Citizenship:</i></td>
												      <td>
												        <input type="text" name="txtciti" class="form-control input-sm" id="txtciti">
												      </td>
												      <td align="right"><i>Civil Status:</i></td>
												      <td>
												        <select name="sltstat" class="form-control input-sm" id="sltstat">
												          <option selected disabled>Select Status</option>
												          <option value="Single">Single</option>
												          <option value="Married">Married</option>
												          <option value="Widow/er">Widow/er</option>
												          <option value="Divorced">Divorced</option>
												        </select>
												      </td>
															<td align="right"><i>Sex</i></td>
												      <td>
												        <select name="sltsex" class="form-control input-sm" id="sltsex">
												          <option selected disabled>Select Sex</option>
												          <option value="Male">Male</option>
												          <option value="Female">Female</option>
												        </select>
												      </td>
												    </tr>
												  </table>

												  <table class="table-condensed text-nowrap"  width="100%">
												    <tr style='font-size:15px;'>
												      <td width="25%"><i>Present Occupation/Position:</i></td>
												      <td>
												        <input type="text" name="txtoccu" class="form-control input-sm" id="txtoccu">
												      </td>
												    </tr>

												    <tr style='font-size:15px;'>
												      <td><i>Name of Employer(Institution/Company):</i></td>
												      <td>
												        <input type="text" name="txtempName" class="form-control input-sm" id="txtempName">
												      </td>
												    </tr>
												  </table>

												  <table class="table-condensed text-nowrap"  width="100%">
														<tr style='font-size:15px;'>
												      <td><i>Mailing Address:</i></td>
												      <td align='center'>
												        <input type="text" name="txtestreet" class="form-control input-sm" id="txtestreet">
												      </td>
												      <td align='center'>
												        <input type="text" name="txtebrgy" class="form-control input-sm" id="txtebrgy">
												      </td>
												      <td align='center'>
												        <input type="text" name="txtecity" class="form-control input-sm" id="txtecity">
												      </td>
												      <td align='center'>
												        <input type="text" name="txtezip" class="form-control input-sm" id="txtezip">
												      </td>
												    </tr>

												    <tr align='center' style='font-style:italic; font-size:12px;'>
												      <td></td>
												      <td>Street Number</td>
												      <td>Barangay</td>
												      <td>City/Town</td>
												      <td>Zip Code</td>
												    </tr>
												    <tr align='center' style='font-size:15px;'>
												      <td width='15%'>&nbsp;</td>
												      <td>
												        <input type="text" name="txteprov" class="form-control input-sm" id="txteprov">
												      </td>
												      <td>
												        <input type="text" name="txtecountry" class="form-control input-sm" id="txtecountry">
												      </td>
												      <td colspan='2'>
												        <input type="text" name="txtemobile" class="form-control input-sm" id="txtemobile">
												      </td>
												    </tr>

												    <tr align='center' style='font-style:italic; font-size:12px;'>
												      <td></td>
												      <td>Province/State</td>
												      <td>Country</td>
												      <td colspan='2'>Mobile Number</td>
												    </tr>
												  </table>
												</div>
												<br>
												<ul class="list-inline pull-right">
													<li>
														<a href="dashboard.php" class="btn btn-default">Cancel</a>
													</li>
													<li>
														<a class="btn btn-primary next-step">Next</a>
													</li>
												</ul>
											</div>
											</form>

											<div class="tab-pane fade" role="tabpanel" id="stepper-step-2">
												<form name="add_educ" id="add_educ">
													<table class="table-condensed text-nonwrap" id="dynamic_field">
														<tr>
															<td colspan='5'><u><b>ACADEMIC BACKGROUND</b></u></td>
														</tr>
														<tr>
															<td colspan='5'><i>List of School Previously Attended Starting with the most recent</i></td>
														</tr>
														<tr>
															<td align='center'>Name</td>
															<td align='center'>School Address</td>
															<td align='center'>Major Fields</td>
															<td align='center'>Degree</td>
															<td align='center'>Date Recieved</td>
															<td></td>
														</tr>

														<tr style='font-size:13px;'>
															<td align='center'>

																<input type="text" name="txtschoolName[]" class="form-control input-sm" id="txtschoolName[]">
															</td>
															<td align='center'>
																<input type="text" name="txtschoolAdd[]" class="form-control input-sm" id="txtschoolAdd[]">
															</td>
															<td  align='center'>
																<input type="text" name="txtmajor[]" class="form-control input-sm" id="txtmajor[]">
															</td>
															<td  align='center'>
																<input type="text" name="txtdegree[]" class="form-control input-sm" id="txtdegree[]">
															</td>
															<td align='center'>
																<input type="text" name="txtdatere[]" class="form-control input-sm" id="txtdatere[]">
															</td>
															<td>
																<a class='btn btn-default btn-sm' id="add"><span class='fas fa-plus'></span></a>
															</td>
														</tr>
													</table>
												</form>
												<br>
												<ul class="list-inline pull-right">
													<li>
														<a class="btn btn-default prev-step">Back</a>
													</li>
													<li>
														<a class="btn btn-primary next-step">Next</a>
													</li>
												</ul>
											</div>

											<div class="tab-pane fade" role="tabpanel" id="stepper-step-3">
												<form name="add_pubres" id="add_pubres">
													<table class="table-condensed text-nowrap" id="pub_res_field" width="100%">
														<tr>
															<td colspan='5'><u><b>PUBLISHED RESEARCHES</b></u></td>
														</tr>
														<tr>
															<td colspan='5'><i>What researches other thesis have you published?</i></td>
														</tr>
														<tr align='center'>
															<td>Title of Article</td>
															<td>Title of Publication</td>
															<td>Year Published</td>
															<td></td>
														</tr>

														<tr style='font-size:13px;'>
															<td align='center'>
																<input type="text" name="txttitle[]" class="form-control input-sm" id="txttitle[]">
															</td>
															<td align='center'>
																<input type="text" name="txtpub[]" class="form-control input-sm" id="txtpub[]">
															</td>
															<td  align='center'>
																<input type="text" name="txtyearpub[]" class="form-control input-sm" id="txtyearpub[]">
															</td>
															<td>
																<a class='btn btn-default btn-sm' id="add_pub"><span class='fas fa-plus'></span></a>
															</td>
														</tr>
													</table>
												</form>
													<br>
												<form name="add_unpubres" id="add_unpubres">
													<table class="table-condensed text-nowrap" id="unpub_res_field" width="100%">
														<tr>
															<td colspan='5'><u><b>UNPUBLISHED RESEARCHES</b></u></td>
														</tr>
														<tr>
															<td colspan='5'><i>Unpublished research papers or theses.</i></td>
														</tr>

														<tr style='font-size:13px;'>
															<td align='center'>
																<input type="text" name="txtunpub_res[]" class="form-control input-sm" id="txtunpub_res[]">
															</td>
															<td>
																<a class='btn btn-default btn-sm' id="add_unpub"><span class='fas fa-plus'></span></a>
															</td>
														</tr>
													</table>
												</form>
												<br>
												<ul class="list-inline pull-right">
													<li>
														<a class="btn btn-default prev-step">Back</a>
													</li>
													<li>
														<a class="btn btn-primary next-step">Next</a>
													</li>
												</ul>
											</div>

											<div class="tab-pane fade" role="tabpanel" id="stepper-step-4">
												<form name="add_organization" id="add_organization">
													<table class="table-condensed text-nonwrap" id="org_field">
														<tr>
															<td colspan='2'><u><b>MEMBERSHIP AND ORGANIZATIONS</b></u></td>
														</tr>
														<tr>
															<td colspan='2'><i>Please list your membership in honor and professional organizations.</i></td>
														</tr>
														<tr style='font-size:13px;'>
															<td align='center'>
																<input type="text" name="txtorg[]" class="form-control input-sm" id="txtorg[]">
															</td>
															<td>
																<a class='btn btn-default btn-sm' id="add_org"><span class='fas fa-plus'></span></a>
															</td>
														</tr>
													</table>
												</form>
												<br>
												<ul class="list-inline pull-right">
													<li>
														<a class="btn btn-default prev-step">Back</a>
													</li>
													<li>
														<a class="btn btn-primary next-step">Next</a>
													</li>
												</ul>
											</div>

											<div class="tab-pane fade" role="tabpanel" id="stepper-step-5">
												<form name="add_awards" id="add_awards">
													<table class="table-condensed text-nonwrap" id="awards_field">
														<tr>
															<td colspan='2'><u><b>SCHOLARSHIPS, PRIZES AND AWARDS</b></u></td>
														</tr>
														<tr>
															<td colspan='2'><i>Please list scholarships, prizes and awards you have recieved.</i></td>
														</tr>
														<tr style='font-size:13px;'>
															<td align='center'>
																<input type="text" name="txtprize[]" class="form-control input-sm" id="txtprize[]">
															</td>
															<td>
																<a class='btn btn-default btn-sm' id="add_award"><span class='fas fa-plus'></span></a>
															</td>
														</tr>
													</table>
												</form>
												<br>
												<ul class="list-inline pull-right">
													<li>
														<a class="btn btn-default prev-step">Back</a>
													</li>
													<li>
														<a class="btn btn-primary next-step">Next</a>
													</li>
												</ul>
											</div>

											<div class="tab-pane fade" role="tabpanel" id="stepper-step-6">
												<form name="add_training" id="add_training">
													<table class="table-condensed text-nonwrap" id="training_field">
														<tr>
															<td colspan='2'><u><b>TRAININGS AND SEMINARS</b></u></td>
														</tr>
														<tr>
															<td colspan='2'><i>Please list your trainings attended related to your field of specialization.</i></td>
														</tr>
														<tr style='font-size:13px;'>
															<td align='center'>
																<input type="text" name="txttraining[]" class="form-control input-sm" id="txttraining[]">
															</td>
															<td>
																<a class='btn btn-default btn-sm' id="add_train"><span class='fas fa-plus'></span></a>
															</td>
														</tr>
													</table>
												</form>
												<br>
												<ul class="list-inline pull-right">
													<li>
														<a class="btn btn-default prev-step">Back</a>
													</li>
													<li>
														<a class="btn btn-primary next-step">Next</a>
													</li>
												</ul>
											</div>

											<div class="tab-pane fade" role="tabpanel" id="stepper-step-7">
												<table class="table-condensed text-nonwrap">
													<tr>
														<td><i>Indicate your plans after completion of your graduate studies.</i></td>
													</tr>
													<tr style='font-size:13px;'>
														<td align='center'>
															 <textarea class="form-control input-sm" rows="5"  name="txtplan" id="txtplan"></textarea>
														</td>
													</tr>
												</table>

												<ul class="list-inline pull-right">
													<li>
														<a class="btn btn-default prev-step">Back</a>
													</li>
													<li>
														<a class="btn btn-primary next-step">Next</a>
													</li>
												</ul>
											</div>
											<div class="tab-pane fade" role="tabpanel" id="stepper-step-8">
												<form>
												<table class="table-condensed  text-nonwrap" width=50%>
													<tr>
														<td ><i>Upload your 2x2 profile picture. </i></td>
													</tr>
													<tr style='font-size:13px;'>
														<td>
																<div class="custom-file">
																	<input type="file" class="form-control" id="customFile" onchange="preview_image(event)">
																</div>
														</td>
													</tr>
													<tr style='font-size:13px;'>
														<td>
															<div class="idpic">
																<img src="idpic/user.png" id="output_image">
															</div>
														</td>
													</tr>
												</table>
											</form>
												<ul class="list-inline pull-right">
													<li>
														<a class="btn btn-default prev-step">Back</a>
													</li>
													<li>
														<a href="dashboard.php" class="btn btn-default">Cancel</a>
													</li>
													<li>
														<a class="btn btn-primary" id="btnsave">Save</a>
													</li>
												</ul>
											</div>

											<div class="tab-pane fade" role="tabpanel" id="stepper-step-9">
												<table width='100%'>
													<tr>
														<td>
															<div class="alert alert-success">
															  <strong>Success!</strong> Your information have been successfully saved. Please Click the button below to return to homepage.
															</div>
														</td>

													</tr>
													<tr>
														<td align='center'>
															<a class="btn btn-primary" id="btnhome">Home</a>
														</td>
													</tr>
												</table>
										</div>

      						</div>
    						</div>
  						</div>
						</div>

					</div>
					<div class="col-md-1"></div>
				</div>
				<hr>
				<table width=100% style="color:#7b7878">
					<tr>
						<td>
							<strong>Copyright &copy; 2021-2022 SPGES</strong>
						</td>
						<td align="right">
							<b>CCSICT</b>
						</td>
					</tr>
				</table>
				<br>

				<div class="modal fade" id="modal_duplicate">
					<div class="modal-dialog">
						<div class="modal-content">
								<div class="alert_custom alert-danger" align="center">
									<h4><i class="icon fas fa-exclamation-triangle"></i> Error Saving Student Profile </h4>
									There is Already an Existing Student Profile. Please Proceed to Dashboard.
									<br>
									<a href="dashboard.php" class="btn btn-default">Home</a>
								</div>
						</div>
					</div>
				</div>

				<script src="plugins/jquery/jquery.min.js"></script>
				<script src="dist/js/bootstrap.min.js"></script>
				<script src="dist/js/script.js"></script>
				<script src="DataController.js"></script>

				<script>
				  $(document).ready(function(){

				    var i = 1;
						$(document).on("click","#add",function(){
							 i++;
							$("#dynamic_field").append('<tr id="row'+i+'"><td><input type="text" name="txtschoolName[]" class="form-control input-sm" id="txtschoolName"></td><td><input type="text" name="txtschoolAdd[]" class="form-control input-sm" id="txtschoolAdd"></td><td><input type="text" name="txtmajor[]" class="form-control input-sm" id="txtmajor"></td><td><input type="text" name="txtdegree[]" class="form-control input-sm" id="txtdegree"></td><td><input type="text" name="txtdatere[]" class="form-control input-sm" id="txtdatere"></td><td><a class="btn btn-danger btn-sm remove" id="'+i+'"><span class="fas fa-minus"></span></a></td></tr>');
						});

						$(document).on("click",".remove",function(){
							var btn_id = $(this).attr("id");
							$('#row'+btn_id+'').remove();
						});

						var a = 1;
						$(document).on("click","#add_pub",function(){
							 a++;
							$("#pub_res_field").append('<tr id="row'+a+'"><td><input type="text" name="txttitle[]" class="form-control input-sm" id="txttitle[]"></td><td><input type="text" name="txtpub[]" class="form-control input-sm" id="txtpub[]"></td><td><input type="text" name="txtyearpub[]" class="form-control input-sm" id="txtyearpub[]"></td><td><a class="btn btn-danger btn-sm remove_pub" id="'+a+'"><span class="fas fa-minus"></span></a></td></tr>');
						});

						$(document).on("click",".remove_pub",function(){
							var btn_id = $(this).attr("id");
							$('#row'+btn_id+'').remove();
						});

						var b = 1;
						$(document).on("click","#add_unpub",function(){
							 b++;
							$("#unpub_res_field").append('<tr id="row'+b+'"><td><input type="text" name="txtunpub_res[]" class="form-control input-sm" id="txtunpub_res[]"></td><td><a class="btn btn-danger btn-sm remove_unpub" id="'+b+'"><span class="fas fa-minus"></span></a></td></tr>');
						});

						$(document).on("click",".remove_unpub",function(){
							var btn_id = $(this).attr("id");
							$('#row'+btn_id+'').remove();
						});

						var c = 1;
						$(document).on("click","#add_org",function(){
							 c++;
							$("#org_field").append('<tr id="row'+c+'"><td><input type="text" name="txtorg[]" class="form-control input-sm" id="txtorg[]"></td><td><a class="btn btn-danger btn-sm remove_org" id="'+c+'"><span class="fas fa-minus"></span></a></td></tr>');
						});

						$(document).on("click",".remove_org",function(){
							var btn_id = $(this).attr("id");
							$('#row'+btn_id+'').remove();
						});

						var d = 1;
						$(document).on("click","#add_award",function(){
							 d++;
							$("#awards_field").append('<tr id="row'+d+'"><td><input type="text" name="txtprize[]" class="form-control input-sm" id="txtprize[]"></td><td><a class="btn btn-danger btn-sm remove_award" id="'+d+'"><span class="fas fa-minus"></span></a></td></tr>');
						});

						$(document).on("click",".remove_award",function(){
							var btn_id = $(this).attr("id");
							$('#row'+btn_id+'').remove();
						});

						var e = 1;
						$(document).on("click","#add_train",function(){
							 e++;
							$("#training_field").append('<tr id="row'+e+'"><td><input type="text" name="txttraining[]" class="form-control input-sm" id="txttraining[]"></td><td><a class="btn btn-danger btn-sm remove_award" id="'+e+'"><span class="fas fa-minus"></span></a></td></tr>');
						});

						$(document).on("click",".remove_train",function(){
							var btn_id = $(this).attr("id");
							$('#row'+btn_id+'').remove();
						});

						$(document).on("click","#btnsave",function(){
							pesonal_data();
						})
				  });
				</script>
			</body>
		</html>
