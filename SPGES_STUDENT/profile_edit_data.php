<!DOCTYPE html>
	<html lang="en">
		<head>
			<?php
				include 'session.php';
			?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SPGES | Edit Student Profile</title>


			<link rel="stylesheet" href="dist/css/style.css">
			<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
			<link rel="stylesheet" href="dist/css/adminlte.min.css">
				<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
				.tabl td, .tabl th {
				    padding: 0.50rem;
				    vertical-align: top;

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

				<div class="card card-primary card-outline card-tabs">
					<div class="card-header p-0 pt-1 border-bottom-0">
						<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="personal_tab" data-toggle="pill" href="#personal_data_tab" role="tab" aria-controls="personal_data_tab" aria-selected="true">PERSONAL DATA</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="educationa_tab" data-toggle="pill" href="#educational_data_tab" role="tab" aria-controls="educational_data_tab" aria-selected="false">EDUCATIONAL BACKGROUND</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="published_tab" data-toggle="pill" href="#published_data_tab" role="tab" aria-controls="published_data_tab" aria-selected="false">RESEARCHES PUBLISHED</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="organization_tab" data-toggle="pill" href="#organization__data_tab" role="tab" aria-controls="organization__data_tab" aria-selected="false">ORGANIZATIONS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="scholarship_tab" data-toggle="pill" href="#scholarship_data_tab" role="tab" aria-controls="scholarship_data_tab" aria-selected="false">SCHOLARSHIPS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="training_tab" data-toggle="pill" href="#training_data_tab" role="tab" aria-controls="training_data_tab" aria-selected="false">TRAININGS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="other_tab" data-toggle="pill" href="#other_data_tab" role="tab" aria-controls="other_data_tab" aria-selected="false">OTHERS</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="custom-tabs-three-tabContent">
							<div class="tab-pane fade show active" id="personal_data_tab" role="tabpanel" aria-labelledby="personal_tab">
								<form role="form" id="personal_data_form">
									<div class="table-responsive" align="center" id="p_data">
										<table class="text-nowrap" width="90%" style="border-collapse: separate;">
											<tr>
												<td colspan='4'>
													<input type="hidden" name="txtstudNo" class="form-control form-control-sm" id="txtstudNo" value='<?php echo $studNo; ?>' disabled>
												</td>
												<td align="right" id="control_button">
													<a href="#" class='btn btn-warning btn-sm' id="btnEdit"><span class='fas fa-edit'></span><b> Edit</b></a>
												</td>
											</tr>
											<tr>
												<td colspan='5'><u><b>PERSONAL DATA</b></u></td>
											</tr>

													<?php
														require "conn.php";
														require("caesarC.php");

														$result = mysqli_query($conn,"SELECT * FROM tbl_stdprofile WHERE `studID` = '$studNo'");
															if(mysqli_num_rows($result) > 0){
																while($row = mysqli_fetch_array($result)){
																	$fName			= $row['firstName'];
																	$lName 			= $row['lastName'];
																	$mName			= $row['middleName'];
																	$extName		= $row['extName'];
																	$address		= $row['mailingAdd'];
																	$zip				= $row['mzipcode'];
																	$country		= $row['mcountry'];
																	$mobileno 	= $row['mobileno'];
																	$bPlace			= $row['birthPlace'];
																	$bDate			= $row['dateofBirth'];
																	$email			= $row['emailAdd'];
																	$citi 			= $row['Citizenship'];
																	$status			= $row['civilStatus'];
																	$sex				= $row['Sex'];
																	$occu				= $row['occupation'];
																	$empname		= $row['employer'];
																	$empmobile	= $row['empmobile'];
																	$empaddress	= $row['empAdd'];
																	$empzip			= $row['empzip'];
																	$empcountry	= $row['empcountry'];
																	$plan 			= $row['compplan'];
																	$piclink		= $row['piclink'];
																}
															}
													 ?>

											<tr style="font-size:15px;">
												<td style="vertical-align: middle;"><i>Full Legal Name:</i></td>
												<td align="center">
													<input type="text" name="txtlName" class="form-control form-control-sm pdata" id="txtlName" value="<?php echo encipher($lName,13); ?>" disabled>
												</td>
												<td  align='center'>
													<input type="text" name="txtfName"  class="form-control  form-control-sm pdata" id="txtfName" value="<?php echo encipher($fName,13); ?>" disabled>
												</td>
												<td  align='center'>
													<input type="text" name="txtmName" class="form-control  form-control-sm pdata" id="txtmName" value="<?php echo encipher($mName,13); ?>" disabled>
												</td>
												<td align='center' width="15%">
													<input type="text" name="txtextName" class="form-control  form-control-sm pdata" id="txtextName" value="<?php echo encipher($extName,13); ?>" disabled>
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
												<td colspan="2" align='center'>
													<input type="text" name="txtstreet" class="form-control  form-control-sm pdata" id="txtstreet" value="<?php echo $address; ?>" disabled>
												</td>
												<td>
													<input type="text" name="txtcountry" class="form-control  form-control-sm pdata" id="txtcountry" value="<?php echo $country; ?>" disabled>
												</td>
												<td>
													<input type="text" name="txtzip" class="form-control  form-control-sm pdata" id="txtzip" value="<?php echo $zip; ?>" disabled>
												</td>
											</tr>

											<tr align='center' style='font-style:italic; font-size:12px;'>
												<td></td>
												<td colspan="2">Street/Barangay/Town/City/Province</td>
												<td>Country</td>
												<td>Zip Code</td>
											</tr>
										</table>
										<table class="table-condensed text-nowrap"  width="90%" style="border-collapse: separate;">
											<tr style='font-size:15px;'>
												<td>Email Address:</td>
												<td colspan="3">
													<input type="text" name="txtemail" class="form-control  form-control-sm pdata" id="txtemail" value="<?php echo $email; ?>" disabled>
												</td>
												<td align="right"><i>Mobile Number:</i>&nbsp;</td>
												<td>
													<input type="text" name="txtmobile" class="form-control  form-control-sm pdata" id="txtmobile" value="<?php echo $mobileno; ?>" disabled>
												</td>
											</tr>
											<tr align='center' style='font-style:italic; font-size:3px;'>
												<td colspan="6">&nbsp;</td>
											</tr>
											<tr style='font-size:15px;'>
												<td><i>Place of Birth:</i></td>
												<td colspan="3">
													<input type="text" name="txtpBirth" class="form-control  form-control-sm pdata" id="txtpBirth" value="<?php echo $bPlace; ?>" disabled>
												</td>
												<td align="right"><i>Birthday:</i>&nbsp;</td>
												<td>
													<input type="date" name="txtbDate" class="form-control  form-control-sm pdata" id="txtbDate" value="<?php echo date("Y-m-d", strtotime($bDate)) ?>" disabled>
												</td>
											</tr>
											<tr align='center' style='font-style:italic; font-size:3px;'>
												<td colspan="6">&nbsp;</td>
											</tr>
											<tr style='font-size:15px;'>
												<td><i>Citizenship:</i></td>
												<td>
													<input type="text" name="txtciti" class="form-control  form-control-sm pdata" id="txtciti" value="<?php echo $citi; ?>" disabled>
												</td>
												<td align="right"><i>Civil Status:</i>&nbsp;</td>
												<td>
													<select name="sltstat" class="form-control  form-control-sm pdata" id="sltstat" value="<?php echo $status; ?>" disabled>
														<option selected disabled>Select Status</option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>
														<option value="Widow/er">Widow/er</option>
														<option value="Divorced">Divorced</option>
													</select>
												</td>
												<td align="right"><i>Sex:</i>&nbsp;</td>
												<td>
													<select name="sltsex" class="form-control  form-control-sm pdata" id="sltsex" value="<?php echo $sex; ?>" disabled>
														<option selected disabled>Select Sex</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
												</td>
											</tr>
											<tr align='center' style='font-style:italic; font-size:3px;'>
												<td colspan="6">&nbsp;</td>
											</tr>
										</table>
										<table class="table-condensed text-nowrap"  width="90%" style="border-collapse: separate;">
											<tr style='font-size:15px;'>
												<td width="25%"><i>Present Occupation/Position:</i></td>
												<td>
													<input type="text" name="txtoccu" class="form-control  form-control-sm pdata" id="txtoccu" value="<?php echo $occu; ?>" disabled>
														</td>
														<td align="right"><i>Mobile Number:</i> &nbsp;</td>
														<td>
															<input type="text" name="txtemobile" class="form-control  form-control-sm pdata" id="txtemobile" value="<?php echo $empmobile; ?>" disabled>
														</td>
													</tr>

													<tr style='font-size:15px;'>
														<td><i>Name of Employer(Institution/Company):</i></td>
														<td colspan="3">
															<input type="text" name="txtempName" class="form-control  form-control-sm pdata" id="txtempName" value="<?php echo $bPlace; ?>" disabled>
														</td>
													</tr>
												</table>

												<table class="table-condensed text-nowrap"  width="90%" style="border-collapse: separate;">
													<tr style='font-size:15px;'>
														<td width="15%"><i>Mailing Address:</i></td>
														<td align='center' colspan="2">
															<input type="text" name="txtestreet" class="form-control  form-control-sm pdata" id="txtestreet" value="<?php echo $empaddress; ?>" disabled>
														</td>
														<td align='center' width="20%">
															<input type="text" name="txtecountry" class="form-control  form-control-sm pdata" id="txtecountry" value="<?php echo $empcountry; ?>" disabled>
														</td>

														<td align='center' width="15%">
															<input type="text" name="txtezip" class="form-control  form-control-sm pdata" id="txtezip" value="<?php echo $empzip; ?>" disabled>
														</td>
													</tr>

													<tr align='center' style='font-style:italic; font-size:12px;'>
														<td></td>
														<td colspan="2">Street/Barangay/Town/City/Province</td>
														<td>Counrty</td>
														<td>Zip Code</td>
													</tr>
												</table>
											</div>
										</form>
							</div>
							<div class="tab-pane fade" id="educational_data_tab" role="tabpanel" aria-labelledby="educationa_tab">
								<div class="table-responsive" align="center" id="educ_data">
									<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
										<tr>
											<td colspan='5'><u><b>ACADEMIC BACKGROUND</b></u></td>
											<td align="center">
												<a href="#" class='btn btn-primary btn-sm' id="btnAddEduc"><span class='fas fa-plus'></span> ADD NEW</a>
											</td>
										</tr>
										<tr>
											<td colspan='6'><i>List of Schools previously attented starting with the most recent</></td>
										</tr>
										<tr style='font-size:15px;' align='center'>
												<td><b>Name</b></td>
												<td><b>School Address</b></td>
												<td><b>Major Fields</b></td>
												<td><b>Degree</b></td>
												<td><b>Date Recieved</b></td>
												<td width="10%"><b>Action</b></td>
											</tr>
										<?php
											$educ_result = mysqli_query($conn, "SELECT * from tbl_educprofile WHERE `studID` = '$studNo' ");
											if(mysqli_num_rows($educ_result) > 0 ){
												while($srow = mysqli_fetch_array($educ_result)){
													$educID = $srow['educID'];
													$scName = $srow['schoolName'];
													$scAdd	= $srow['schoolAdd'];
													$Major	= $srow['major'];
													$Degree = $srow['degree'];
													$dRec		= $srow['dateRec'];

													echo"
													<tr style='font-size:15px;' align='center'>
														<td id='scName".$srow['educID']."'>$scName</td>
														<td id='scAdd".$srow['educID']."'>$scAdd</td>
														<td id='scMajor".$srow['educID']."'>$Major</td>
														<td id='scDegree".$srow['educID']."'>$Degree</td>
														<td id='scDate".$srow['educID']."'>$dRec</td>
														<td>
															<a class='btn btn-warning btn-sm btneditEduc' data-id = '$educID'><span class='fas fa-edit'></span> </a>
															<a class='btn btn-danger btn-sm  btndelEduc'  data-id = '$educID'><span class='fas fa-trash'></span> </a>
														</td>
													</tr>
													";
												}
											}else{
												echo"
												<tr>
													<td colspan='6' align='center' style='color:red'> <b>************* NO RECORDS FOUND *********</b></td>
												</tr>";
											}
										?>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="published_data_tab" role="tabpanel" aria-labelledby="published_tab">
								<div class="table-responsive" align="center" id="pub_data">
									<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
										<tr>
											<td colspan='3'><u><b>PUBLISHED RESEARCHES</b></u></td>
											<td align="center">
												<a href="#" class='btn btn-primary btn-sm' id="btnAddPub"><span class='fas fa-plus'></span> ADD NEW</a>
											</td>
										</tr>
										<tr>
											<td colspan='4'><i>What researches other than thesis have you published? </></td>
											</tr>

											<tr style='font-size:15px;' align='center'>
												<td><b>Title of Article</b></td>
												<td><b>Title of Publication</b></td>
												<td><b>Year Published</b></td>
												<td width="10%"><b>Action</b></td>
											</tr>

										<?php
											$res_result = mysqli_query($conn, "SELECT * from tbl_publication WHERE `studid` = '$studNo' ");
											if(mysqli_num_rows($res_result) > 0 ){
												while($row = mysqli_fetch_array($res_result)){
													$pubID			= $row['pubid'];
													$art_title 	= $row['artTitle'];
													$pub_title	= $row['pubTitle'];
													$year_pub		= $row['pubYear'];

													echo"
													<tr align='center' style='font-size:15px;'>
														<td id='Title$pubID'>$art_title</td>
														<td id='TitlePub$pubID'>$pub_title</td>
														<td id='PubYear$pubID'>$year_pub</td>
														<td>
															<a class='btn btn-warning btn-sm btneditPub' data-id = '$pubID'><span class='fas fa-edit'></span> </a>
															<a class='btn btn-danger btn-sm  btndelPub'  data-id = '$pubID'><span class='fas fa-trash'></span> </a>
														</td>
													</tr>
													";
												}
											}else{
												echo"
												<tr>
													<td colspan='4' align='center' style='color:red'> <b>************* NO RECORDS FOUND *********</b></td>
												</tr>";
											}
										?>
									</table>
									<br>
									<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
										<td colspan="2"><u><b>UNPUBLISHED RESEARCHES</b></u></td>
										<td align="center">
											<a href="#" class='btn btn-primary btn-sm' id="btnAddUnpub"><span class='fas fa-plus'></span> ADD NEW</a>
										</td>
									</tr>
									<tr>
										<td colspan="3"><i>Unpublished research papers or theses. </></td>
									</tr>
									<tr style='font-size:15px;' align='center'>
										<td width="3%"><b>#</b></td>
										<td><b></b></td>
										<td width="10%"><b>Action</b></td>
									</tr>
									<?php
										$i = 1;
										$tr_result = mysqli_query($conn, "SELECT * from tbl_unpub WHERE `studid` = '$studNo' ");
										if(mysqli_num_rows($tr_result) > 0 ){
											while($row = mysqli_fetch_array($tr_result)){
												$unpubid	= $row['unpubid'];
												$unpub = $row['desc'];
												echo"
												<tr style='font-size:15px;'>
													<td align='center'><b>$i.</b></td>
													<td id='desc$unpubid'>$unpub</td>
													<td align='center'>
														<a class='btn btn-warning btn-sm btneditUnpub' data-id = '$unpubid'><span class='fas fa-edit'></span> </a>
														<a class='btn btn-danger btn-sm  btndelUnpub'  data-id = '$unpubid'><span class='fas fa-trash'></span> </a>
													</td>
												</tr>
												";
												$i++;
											}
											}else{
												echo"
												<tr>
													<td align='center' style='color:red' colspan='2'> <b>************* NO RECORDS FOUND *********</b></td>
												</tr>";
											}
										?>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="organization__data_tab" role="tabpanel" aria-labelledby="organization_tab">
								<div class="table-responsive" align="center" id="org_data">
									<table class='table-bordered text-nowrap table-sm' width='70%' id='tbl_enrhistory'>
										<tr>
											<td colspan="2"><u><b>MEMBERSHIP & ORGANIZATIONS</b></u></td>
											<td align="center">
												<a href="#" class='btn btn-primary btn-sm' id="btnAddOrg"><span class='fas fa-plus'></span> ADD NEW</a>
											</td>
										</tr>
										<tr>
											<td colspan="3"><i>Please list your membership in honor and professional organization. </></td>
										</tr>
										<tr style='font-size:15px;' align='center'>
											<td align="center" width=4%><b>#</b></td>
											<td><b></b></td>
											<td width="10%"><b>Action</b></td>
										</tr>
										<?php
											$i = 1;
											$org_result = mysqli_query($conn, "SELECT * from tbl_organization WHERE `studid` = '$studNo' ");
											if(mysqli_num_rows($org_result) > 0 ){
												while($row = mysqli_fetch_array($org_result)){
													$orgID 	= $row['orgid'];
													$org		= $row['orgdesc'];
													echo"
													<tr style='font-size:15px;'>
														<td align='center'><b>$i.</b></td>
														<td id='orgDesc$orgID'>$org</td>
														<td align='center'>
															<a class='btn btn-warning btn-sm btneditOrg' data-id = '$orgID'><span class='fas fa-edit'></span> </a>
															<a class='btn btn-danger btn-sm  btndelOrg'  data-id = '$orgID'><span class='fas fa-trash'></span> </a>
														</td>
													</tr>
													";
													$i++;
												}
											}else{
												echo"
												<tr>
													<td align='center' style='color:red' colspan='3'> <b>************* NO RECORDS FOUND *********</b></td>
												</tr>";
											}
										?>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="scholarship_data_tab" role="tabpanel" aria-labelledby="scholarship_tab">
								<div class="table-responsive" align="center" id="award_data">
									<table class='table-bordered text-nowrap table-sm' width='70%' id='tbl_enrhistory'>
										<tr>
											<td colspan="2"><u><b>AWARDS & SCHOLARSHIPS</b></u></td>
											<td align="center">
												<a href="#" class='btn btn-primary btn-sm' id="btnAddScho"><span class='fas fa-plus'></span> ADD NEW</a>
											</td>
										</tr>
										<tr>
											<td colspan="3"><i>Please list scholarship, prize and awards you have recieved. </></td>
										</tr>
										<tr style='font-size:15px;' align='center'>
											<td width="4%" align="center"><b>#</b></td>
											<td><b></b></td>
											<td width="10%"><b>Action</b></td>
										</tr>
										<?php
											$i = 1;
											$aw_result = mysqli_query($conn, "SELECT * from tbl_award WHERE `studid` = '$studNo' ");
											if(mysqli_num_rows($aw_result) > 0 ){
												while($row = mysqli_fetch_array($aw_result)){
													$awardID	= $row['awardid'];
													$award 		= $row['awarddesc'];
													echo"
													<tr style='font-size:15px;'>
														<td align='center'><b>$i.</b></td>
														<td id='award$awardID'>$award</td>
														<td align='center'>
															<a class='btn btn-warning btn-sm btneditScho' data-id = '$awardID'><span class='fas fa-edit'></span> </a>
															<a class='btn btn-danger btn-sm  btndelScho'  data-id = '$awardID'><span class='fas fa-trash'></span> </a>
														</td>
													</tr>
													";
													$i++;
												}
											}else{
												echo"
												<tr>
													<td align='center' style='color:red' colspan='3'> <b>************* NO RECORDS FOUND *********</b></td>
												</tr>";
											}
										?>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="training_data_tab" role="tabpanel" aria-labelledby="training_tab">
								<div class="table-responsive" align="center" id="sem_data">
									<table class='table-bordered text-nowrap table-sm' width='70%' id='tbl_enrhistory'>
										<tr>
											<td colspan="2"><u><b>SEMINARS AND TRAINING</b></u></td>
											<td align="center">
												<a href="#" class='btn btn-primary btn-sm' id="btnAddSem"><span class='fas fa-plus'></span> ADD NEW</a>
											</td>
										</tr>
										<tr>
											<td colspan='3'><i>Please list your training attented related to your field of specialization or work. </></td>
										</tr>
											<tr style='font-size:15px;' align='center'>
												<td width="4%"><b>#</b></td>
												<td><b></b></td>
												<td width="10%"><b>Action</b></td>
											</tr>
											<?php
												$i = 1;
												$tr_result = mysqli_query($conn, "SELECT * from tbl_training WHERE `studid` = '$studNo' ");
												if(mysqli_num_rows($tr_result) > 0 ){
													while($row = mysqli_fetch_array($tr_result)){
														$trainID 	= $row['trainingid'];
														$training = $row['trainingdesc'];
														echo"
														<tr style='font-size:15px;'>
															<td align='center'><b>$i.</b></td>
															<td id='train$trainID'>$training</td>
															<td align='center'>
																<a class='btn btn-warning btn-sm btneditSem' data-id = '$trainID'><span class='fas fa-edit'></span> </a>
																<a class='btn btn-danger btn-sm  btndelSem'  data-id = '$trainID'><span class='fas fa-trash'></span> </a>
															</td>
														</tr>
														";
														$i++;
													}
												}else{
													echo"
													<tr>
														<td align='center' style='color:red' colspan='3'> <b>************* NO RECORDS FOUND *********</b></td>
													</tr>";
												}
											?>
									</table>
								</div>
							</div>
							<div class="tab-pane fade" id="other_data_tab" role="tabpanel" aria-labelledby="other_tab">
								<div class="row">
									<div class="col-6">
										<div class="table-responsive" align="center">
											<table class="table-condensed text-nonwrap" width="100%">
												<tr>
													<td><u><b>FUTURE PLANS</b></u></td>
													<td align="right" id="btnControl">
															<a href="#" class='btn btn-warning btn-sm' id="btnEditPlan"><span class='fas fa-edit'></span><b> Edit</b></a>
													</td>
												</tr>
												<tr>
													<td colspan="2"><i>Indicate your plans after completion of your graduate studies.</i></td>
												</tr>
												<tr style='font-size:13px;'>
													<td colspan="2" align='center'>
														 <textarea class="form-control data_plan" rows="5"  name="txtplan" id="txtplan" disabled><?php echo $plan ?></textarea>
													</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="col-1"></div>
									<div class="col-5" >
										<form id="pic_data">
										<table class="table-condensed text-nonwrap" width=80%>
											<tr>
												<td ><i>Upload your 2x2 profile picture. </i></td>
											</tr>
											<tr style='font-size:13px;'>
												<td>
														<div class="custom-file">
															<input type="file" class="form-control form-control-sm" id="customFile" onchange="preview_image(event)">
														</div>
												</td>
											</tr>
											<tr style='font-size:13px;'>
												<td align="center">
													<div class="idpic">
														<img src="/SPGES/SPGES_ADMIN/idpic/<?php echo $piclink?>" id="output_image">
													</div>
												</td>
											</tr>
											<tr>
												<td align="right">
													<a href="#" class='btn btn-primary btn-sm' id="btnEditPic"><span class='fas fa-save'></span><b> Save</b></a>
												</td>
											</tr>
										</table>
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- HTML CODE MODAL -->

				<!-- MODAL EDUCATIONAL BACKGROUND -->
					<div class="modal fade" id="modalAddEduc">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Educational Background</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form name="add_educ" id="add_educ">
										<table class="table-condensed text-nonwrap" id="dynamic_field" width=100%>
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
													<input type="text" name="txtschoolName[]" class="form-control form-control-sm" id="txtschoolName[]">
												</td>
												<td align='center'>
													<input type="text" name="txtschoolAdd[]" class="form-control form-control-sm" id="txtschoolAdd[]">
												</td>
												<td  align='center'>
													<input type="text" name="txtmajor[]" class="form-control form-control-sm" id="txtmajor[]">
												</td>
												<td  align='center'>
													<input type="text" name="txtdegree[]" class="form-control form-control-sm" id="txtdegree[]">
												</td>
												<td align='center'>
													<input type="text" name="txtdatere[]" class="form-control form-control-sm" id="txtdatere[]">
												</td>
												<td>
													<a class='btn btn-default btn-sm' id="add"><span class='fas fa-plus'></span></a>
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary btn-md" id="btnSaveEduc">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalEditEduc">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit Course</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<table class="tabl text-nonwrap" id="dynamic_field" width=100%>
											<tr>
												<td>Name</td>
												<td>
													<input type="text" name="etxtschoolName" class="form-control form-control-sm" id="etxtschoolName">
												</td>
											</tr>
											<tr>
												<td>School Address</td>
												<td>
													<input type="text" name="etxtschoolAdd" class="form-control form-control-sm" id="etxtschoolAdd">
												</td>
											</tr>
											<tr>
												<td>Major Fields</td>
												<td>
													<input type="text" name="etxtmajor" class="form-control form-control-sm" id="etxtmajor">
												</td>
											</tr>
											<tr>
												<td>Degree</td>
												<td>
													<input type="text" name="etxtdegree" class="form-control form-control-sm" id="etxtdegree">
												</td>
											</tr>
											<tr>
												<td>Date Recieved</td>
												<td>
													<input type="text" name="etxtdatere" class="form-control form-control-sm" id="etxtdatere">
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary btn-md" id="btnEdit_Educ">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalDelEduc">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Delete Educational Background</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p style="font-size:15px; color:red"> Are you Sure you want to Delete this Record? <p>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-danger btn-md" id="btnDel_Educ">Yes</button>
								</div>
							</div>
						</div>
					</div>
				<!--END OF MODAL EDUCATIONAL BACKGROUND -->

				<!-- MODAL PUBLISHED RESEARCHES -->
					<div class="modal fade" id="modalAddPub">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Published Researches</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form name="add_pubres" id="add_pubres">
										<table class="tabl text-nowrap" id="pub_res_field" width="100%">
											<tr align='center'>
												<td>Title of Article</td>
												<td>Title of Publication</td>
												<td>Year Published</td>
												<td></td>
											</tr>
											<tr style='font-size:13px;'>
												<td align='center'>
													<input type="text" name="txttitle[]" class="form-control form-control-sm" id="txttitle[]">
												</td>
												<td align='center'>
													<input type="text" name="txtpub[]" class="form-control form-control-sm" id="txtpub[]">
												</td>
												<td  align='center'>
													<input type="text" name="txtyearpub[]" class="form-control form-control-sm" id="txtyearpub[]">
												</td>
												<td>
													<a class='btn btn-default btn-sm' id="add_pub"><span class='fas fa-plus'></span></a>
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary btn-md" id="btnSave_Pub">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalEditPub">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit Published Researches</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<table class="tabl text-nowrap" id="pub_res_field" width="100%">
											<tr>
												<td>Title of Article</td>
												<td align='center'>
													<input type="text" name="etxttitle" class="form-control form-control-sm" id="etxttitle">
												</td>
											</tr>
											<tr>
												<td>Title of Publication</td>
												<td align='center'>
													<input type="text" name="etxtpub" class="form-control form-control-sm" id="etxtpub">
												</td>
											</tr>
											<tr>
												<td>Year Published</td>
												<td  align='center'>
													<input type="text" name="etxtyearpub" class="form-control form-control-sm" id="etxtyearpub">
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary btn-md" id="btnEdit_Pub">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalDelPub">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Delete Published Researches</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p style="font-size:15px; color:red"> Are you Sure you want to Delete this Record? <p>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-danger btn-md" id="btnDel_Pub">Yes</button>
								</div>
							</div>
						</div>
					</div>
				<!--END OF MODAL PUBLISHED RESEARCHES -->

				<!-- MODAL UNPUBLISHED RESEARCHES -->
					<div class="modal fade" id="modalAddUnpub">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Unpublished Researches</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
										<form name="add_unpubres" id="add_unpubres">
											<table class="tabl text-nowrap" id="unpub_res_field" width="100%">
												<tr style='font-size:13px;'>
													<td align='center'>
														<input type="text" name="txtunpub_res[]" class="form-control form-control-sm" id="txtunpub_res[]">
													</td>
													<td>
														<a class='btn btn-default btn-sm' id="add_unpub"><span class='fas fa-plus'></span></a>
													</td>
												</tr>
											</table>
										</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary btn-md" id="btnSaveUnpub">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalEditUnpub">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit Unpublished Researches</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<table class="tabl text-nowrap" id="pub_res_field" width="100%">
											<tr>
												<td align='center'>
													<input type="text" name="etxtunpub_res" class="form-control form-control-sm" id="etxtunpub_res">
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary btn-md" id="btnEdit_Unpub">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalDelUnpub">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Delete Unpublished Researches</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p style="font-size:15px; color:red"> Are you Sure you want to Delete this Record? <p>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-danger btn-md" id="btnDel_Unpub">Yes</button>
								</div>
							</div>
						</div>
					</div>
				<!--END OF MODAL UNPUBLISHED RESEARCHES -->

				<!-- MODAL ORGANIZATIONS -->
					<div class="modal fade" id="modalAddOrg">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Membership and Organizations</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form name="add_organization" id="add_organization">
										<table class="tabl text-nonwrap" id="org_field" width="100%">
											<tr style='font-size:13px;'>
												<td align='center'>
													<input type="text" name="txtorg[]" class="form-control form-control-sm" id="txtorg[]">
												</td>
												<td>
													<a class='btn btn-default btn-sm' id="add_org"><span class='fas fa-plus'></span></a>
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary btn-md" id="btnSaveOrg">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalEditOrg">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit Membership and Organizations</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<table class="tabl text-nowrap" id="pub_res_field" width="100%">
											<tr>
												<td align='center'>
													<input type="text" name="etxtorg" class="form-control form-control-sm" id="etxtorg">
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary btn-md" id="btnEdit_Org">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalDelOrg">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Delete Membership and Organizations</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p style="font-size:15px; color:red"> Are you Sure you want to Delete this Record? <p>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-danger btn-md" id="btnDel_Org">Yes</button>
								</div>
							</div>
						</div>
					</div>
				<!--END OF MODAL ORGANIZATIONS -->

				<!-- MODAL SCHOLARSHIPS -->
					<div class="modal fade" id="modalAddScho">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Awards and Scholarships</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form name="add_awards" id="add_awards">
										<table class="tabl text-nonwrap" id="awards_field" width="100%">
											<tr style='font-size:13px;'>
												<td align='center'>
													<input type="text" name="txtprize[]" class="form-control form-control-sm" id="txtprize[]">
												</td>
												<td>
													<a class='btn btn-default btn-sm' id="add_award"><span class='fas fa-plus'></span></a>
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary btn-md" id="btnSaveScho">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalEditScho">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit Awards and Scholarships</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<table class="tabl text-nowrap" id="pub_res_field" width="100%">
											<tr>
												<td align='center'>
													<input type="text" name="etxtprize" class="form-control form-control-sm" id="etxtprize">
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary btn-md" id="btnEdit_Scho">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalDelScho">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Delete Awards and Scholarships</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p style="font-size:15px; color:red"> Are you Sure you want to Delete this Record? <p>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-danger btn-md" id="btnDel_Scho">Yes</button>
								</div>
							</div>
						</div>
					</div>
				<!--END OF MODAL UNPUBLISHED RESEARCHES -->

				<!-- MODAL SEMINAR AND TRAINING -->
					<div class="modal fade" id="modalAddSem">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Seminar and Trainings</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form name="add_training" id="add_training">
										<table class="tabl text-nonwrap" id="training_field" width="100%">
											<tr style='font-size:13px;'>
												<td align='center'>
													<input type="text" name="txttraining[]" class="form-control form-control-sm" id="txttraining[]">
												</td>
												<td>
													<a class='btn btn-default btn-sm' id="add_train"><span class='fas fa-plus'></span></a>
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary btn-md" id="btnSaveSem">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalEditSem">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit Seminar and Training</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<table class="tabl text-nowrap" id="pub_res_field" width="100%">
											<tr>
												<td align='center'>
													<input type="text" name="etxttraining" class="form-control form-control-sm" id="etxttraining">
												</td>
											</tr>
										</table>
									</form>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary btn-md" id="btnEdit_Sem">Save</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalDelSem">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Delete Seminar and Training</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p style="font-size:15px; color:red"> Are you Sure you want to Delete this Record? <p>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-danger btn-md" id="btnDel_Sem">Yes</button>
								</div>
							</div>
						</div>
					</div>
				<!--END OF MODAL UNPUBLISHED RESEARCHES -->

				<!--- SCRIPT -->
				<script src="plugins/jquery/jquery.min.js"></script>
				<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
				<script src="dist/js/adminlte.min.js"></script>
				<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
				<script src="DataController.js"></script>
				<script type="text/javascript">

				</script>
			</body>
		</html>
