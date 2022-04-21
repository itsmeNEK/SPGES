<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SPGES | Student Profile</title>
			<link rel="icon" href="dist/dept.jpg" type="image/icon type">
			<link rel="stylesheet" href="dist/css/adminlte.css">

			<style>
				table{
					border-collapse: collapse;
				}

				.tborder th{
					border-collapse: collapse;
					 border: 1px solid black;
				}

				.tborder td{
				 	border: 1px solid black;
				}

				thead{
					font-weight: bold;
					font-family: Calibri, sans-serif;
				}

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
					font-size: 11pt;
					font-family: Calibri, sans-serif;
					margin-bottom: -10px;
					margin-bottom: -10px;
				}

				.year{
					font-size: 11pt;
					font-weight: bold;
					text-transform: uppercase;
					text-decoration: underline;
				}
			</style>
		</head>

		<body>
			<?php
				require("conn.php");
				require("caesarC.php");
				$id	= $_REQUEST['id'];
			?>

			<div class="container-fluid">
				<table>
					<tr>
						<td width="25%">
							<img class ="logo" src="dist/logo.png" alt="Italian Trulli">
						</td>
						<td  width='50%'>
							<p class='a'>
									Republic of the Philippines <br>
									<b>ISABELA STATE UNIVERSITY</b><br>
									Echague, Isabela<br><br>
								</p>
						</td>
						<td  width="25%">
							<img class ="dept" src="dist/dept.jpg" alt="Italian Trulli">
						</td>
					</tr>
				</table>

				<hr>

				<p align="center"><b>STUDENT PROFILE</b></p>

				<div class="row">
					<div class="col-1"></div>
						<div class="col-10">
							<?php
								$result = mysqli_query($conn, "SELECT * from   tbl_stdprofile WHERE `studID` = '$id' ");
									if(mysqli_num_rows($result) > 0 ){
										while($row = mysqli_fetch_array($result)){
											$studID 		= $row['studID'];
											$lname 			= encipher(strtoupper($row['lastName']),13);
											$fname 			=  encipher(strtoupper($row['firstName']),13);
											$mname 			=  encipher(strtoupper($row['middleName']),13);
											$extname 		=  encipher(strtoupper($row['extName']),13);
											$email			= $row['emailAdd'];
											$maddress		= strtoupper($row['mailingAdd']);
											$mzip 			= $row['mzipcode'];
											$mcount 		= strtoupper($row['mcountry']);
											$mobile			= $row['mobileno'];
											$pbirth			= strtoupper($row['birthPlace']);
											$bdate 			= $row['dateofBirth'];
											$citi				= strtoupper($row['Citizenship']);
											$sex				= strtoupper($row['Sex']);
											$cstat			= strtoupper($row['civilStatus']);
											$pos				= strtoupper($row['occupation']);
											$empname		= strtoupper($row['employer']);
											$empaddress	= strtoupper($row['empAdd']);
											$empzip 		= $row['empzip'];
											$empcount 	= strtoupper($row['empcountry']);
											$empmobile	= $row['empmobile'];
											$plans 			= $row['compplan'];
											$pic				= $row['piclink'];

											echo"
											<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
												<tr>
													<td colspan='5'><u><b>PERSONAL DATA</b></u></td>
												</tr>

												<tr>
													<td rowspan=5 width=15% align=left>
														<img src='/SPGES/SPGES_ADMIN/idpic/$pic' style='max-width: 100%;'>
													</td>
												</tr>
												<tr style='font-size:15px;'>
													<td width='25%'align='center'><b>$lname</b></td>
													<td width='25%' align='center'><b>$fname</b></td>
													<td width='25%' align='center'><b>$mname</b></td>
													<td width='10%' align='center'><b>$extname</b></td>
												</tr>
												<tr align='center' style='font-style:italic; font-size:12px;'>
													<td>Family Name</td>
													<td>First Name</td>
													<td>Middle Name</td>
													<td>Suffix</td>
												</tr>
												<tr style='font-size:15px;'>
													<td colspan='2' align='center'><b>$maddress</b></td>
													<td align='center'><b>$mcount</b></td>
													<td align='center'><b>$mzip</b></td>
												</tr>

												<tr align='center' style='font-style:italic; font-size:12px;'>
													<td colspan='2'>Street/Barangay/Town/City/Province</td>
													<td>Country</td>
													<td>Zip Code</td>
												</tr>

												<tr style='font-size:15px;'>
													<td><i>ID No.:&nbsp;</i><b>$studID</b></td>
													<td><i>Citizenship:&nbsp;</i><b>$citi</b></td>
													<td><i>Mobile No.:&nbsp;</i><b>$mobile</b> </td>
													<td colspan='2'><i>Email Address:</i><b>$email</b></td>
												</tr>
												<tr style='font-size:15px;'>
													<td><i>Place of Birth:</i></td>
													<td><b>$pbirth</b></td>
													<td><i>Birth Date:&nbsp;</i><b>$bdate</b></td>
													<td><i>Civil Status:&nbsp;</i><b>$cstat</b></td>
													<td><i>Sex:&nbsp;</i><b>$sex</b></td>
												</tr>

												<tr style='font-size:15px;'>
													<td colspan='3'><i>Present Occupation/Position: &nbsp;</i><b>$pos</b></td>
													<td colspan='2'><i>Employer Mobile No.: &nbsp;</i><b>$pos</b></td>
												</tr>

												<tr style='font-size:15px;'>
													<td colspan='5'><i>Name of Employer(Institution/Company):&nbsp;</i><b>$empname</b></td>
												</tr>

												<tr style='font-size:15px;'>
													<td width='15%'><i>Employer Address:</i></td>
													<td colspan='2' align='center'><b>$empaddress</b></td>
													<td align='center'><b>$empcount</b></td>
													<td align='center'><b>$empzip</b></td>
												</tr>

												<tr align='center' style='font-style:italic; font-size:12px;'>
													<td></td>
													<td colspan='2'>Street/Barangay/Town/City/Province</td>
													<td>Country</td>
													<td>Zip Code</td>
												</tr>
											</table>";
										}
									}else{
										echo"
											<table width='100%' >
												<tr>
													<td colspan='3' align='center' style='color:red'>
														************* NO RECORDS FOUND *********
													</td>
												</tr>
											</table>";
									};
						?>
						<br>

						<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
							<tr>
								<td colspan='5'><u><b>ACADEMIC BACKGROUND</b></u></td>
							</tr>
							<tr>
								<td colspan='5'><i>List of Schools previously attented starting with the most recent</></td>
							</tr>
							<tr style='font-size:15px;' align='center'>
									<td><b>Name</b></td>
									<td><b>School Address</b></td>
									<td><b>Major Fields</b></td>
									<td><b>Degree</b></td>
									<td><b>Date Recieved</b></td>
								</tr>
							<?php
								$educ_result = mysqli_query($conn, "SELECT * from tbl_educprofile WHERE `studID` = '$id' ");
								if(mysqli_num_rows($educ_result) > 0 ){
									while($srow = mysqli_fetch_array($educ_result)){
										$scName = $srow['schoolName'];
										$scAdd	= $srow['schoolAdd'];
										$Major	= $srow['major'];
										$Degree = $srow['degree'];
										$dRec		= $srow['dateRec'];

										echo"
										<tr style='font-size:15px;' align='center'>
											<td>$scName</td>
											<td>$scAdd</td>
											<td>$Major</td>
											<td>$Degree</td>
											<td>$dRec</td>
										</tr>
										";
									}
								}else{
									echo"
									<tr>
										<td colspan='5' align='center' style='color:red'> <b>************* NO RECORDS FOUND *********</b></td>
									</tr>";
								}
							?>
						</table>
						<br>

						<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
							<tr>
								<td colspan='5'><i>What researches other than thesis have you published? </></td>
								</tr>

								<tr style='font-size:15px;'>
									<td width='15%' align='center'><b>Title of Article</b></td>
									<td width='25%'align='center'><b>Title of Publication</b></td>
									<td width='25%' align='center'><b>Year Published</b></td>
								</tr>

							<?php
								$res_result = mysqli_query($conn, "SELECT * from tbl_publication WHERE `studid` = '$id' ");
								if(mysqli_num_rows($res_result) > 0 ){
									while($row = mysqli_fetch_array($res_result)){
										$art_title 	= $row['artTitle'];
										$pub_title	= $row['pubTitle'];
										$year_pub		= $row['pubYear'];

										echo"
										<tr align='center' style='font-size:15px;'>
											<td>$art_title</td>
											<td>$pub_title</td>
											<td>$year_pub</td>
										</tr>
										";
									}
								}else{
									echo"
									<tr>
										<td colspan='3' align='center' style='color:red'> <b>************* NO RECORDS FOUND *********</b></td>
									</tr>";
								}
							?>
						</table>
						<br>
						<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
							<tr>
								<td><i>Please list your membership in honor and professional organization. </></td>
							</tr>
							<?php
								$i = 1;
								$org_result = mysqli_query($conn, "SELECT * from tbl_organization WHERE `studid` = '$id' ");
								if(mysqli_num_rows($org_result) > 0 ){
									while($row = mysqli_fetch_array($org_result)){
										$org = $row['orgdesc'];
										echo"
										<tr style='font-size:15px;'>
											<td>&nbsp;&nbsp;<b>$i.</b> $org</td>
										</tr>
										";
										$i++;
									}
								}else{
									echo"
									<tr>
										<td align='center' style='color:red'> <b>************* NO RECORDS FOUND *********</b></td>
									</tr>";
								}
							?>
						</table>
						<br>
						<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
							<tr>
								<td><i>Please list scholarship, prize and awards you have recieved. </></td>
							</tr>
							<?php
								$i = 1;
								$aw_result = mysqli_query($conn, "SELECT * from tbl_award WHERE `studid` = '$id' ");
								if(mysqli_num_rows($aw_result) > 0 ){
									while($row = mysqli_fetch_array($aw_result)){
										$award = $row['awarddesc'];
										echo"
										<tr style='font-size:15px;'>
											<td>&nbsp;&nbsp;<b>$i.</b> $award</td>
										</tr>
										";
										$i++;
									}
								}else{
									echo"
									<tr>
										<td align='center' style='color:red'> <b>************* NO RECORDS FOUND *********</b></td>
									</tr>";
								}
							?>
						</table>
						<br>
						<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
							<tr>
								<td colspan='5'><i>Please list your training attented related to your field of specialization or work. </></td>
								</tr>
								<?php
									$i = 1;
									$tr_result = mysqli_query($conn, "SELECT * from tbl_training WHERE `studid` = '$id' ");
									if(mysqli_num_rows($tr_result) > 0 ){
										while($row = mysqli_fetch_array($tr_result)){
											$training = $row['trainingdesc'];
											echo"
											<tr style='font-size:15px;'>
												<td>&nbsp;&nbsp;<b>$i.</b> $training</td>
											</tr>
											";
											$i++;
										}
									}else{
										echo"
										<tr>
											<td align='center' style='color:red'> <b>************* NO RECORDS FOUND *********</b></td>
										</tr>";
									}
								?>
						</table>
						<br>
						<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
							<tr>
								<td><i>Unpublished research papers or theses. </></td>
							</tr>
							<?php
								$i = 1;
								$tr_result = mysqli_query($conn, "SELECT * from tbl_unpub WHERE `studid` = '$id' ");
								if(mysqli_num_rows($tr_result) > 0 ){
									while($row = mysqli_fetch_array($tr_result)){
										$unpub = $row['desc'];
										echo"
										<tr style='font-size:15px;'>
											<td>&nbsp;&nbsp;<b>$i.</b> $unpub</td>
										</tr>
										";
										$i++;
									}
								}else{
									echo"
									<tr>
										<td align='center' style='color:red'> <b>************* NO RECORDS FOUND *********</b></td>
									</tr>";
								}
							?>
						</table>
						<br>
						<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
							<tr>
								<td><i>Indicate your plans after completion of your graduate studies </></td>
							</tr>
							<tr>
								<?php
									if($plans == ""){
										echo"	<td align='center' style='color:red'> <b>************* NO RECORDS FOUND *********</b></td>";
									}else{
											echo"	<td>$plans</td>";
									}
								?>
							</tr>
						</table>
					</div>
					<div class="col-1"></div>
				</div>
				<hr>

			</div>
		</body>
	</html>
