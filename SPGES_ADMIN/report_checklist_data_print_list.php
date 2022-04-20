<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SPGES | Summary of Students</title>

			<link rel="stylesheet" href="dist/css/adminlte.min.css">

				<style>
					table{
						border-collapse: collapse;
					}

				.tborder{
						border-collapse: collapse;
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
		$filter_sy  = $_REQUEST['filter_sy'];
		$filter_sem = $_GET['filter_sem'];


		?>

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

			</tr>
		</table>
		<hr>

		<table class='tborder' width="100%">
			<tr>
				<td align="center"><b>SUMMARY OF CURRICULUM CHECKLIST</b></td>
			</tr>
			<tr>
				<td align="center"><b><?php echo strtoupper($filter_sem) .' - '. strtoupper( $filter_sy);?></b></td>
			</tr>
		</table>
		<br>

<table class='table table-bordered table-hover table-sm' align="center" width="100%">
	<thead>
		<tr align='center'>
			<th style='width: 10px'>#</th>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Ext</th>
			<th>Email</th>
			<th>Curriculum</th>
			<th>School Year</th>
		</tr>
	</thead>

	<tbody>
		<?php
			require('conn.php');


			if($filter_sy == "All" and $filter_sem == "All"){
				$result = mysqli_query($conn, "SELECT
																			  tbl_stdprofile.recID,
																			  tbl_stdprofile.lastName,
																			  tbl_stdprofile.firstName,
																			  tbl_stdprofile.middleName,
																			  tbl_stdprofile.extName,
																			  tbl_curriculum.curriculum,
																			  tbl_stdprofile.schoolyear,
																				tbl_stdprofile.curriculumID,
																				tbl_stdprofile.emailAdd
																			FROM
																			 tbl_stdprofile
																			INNER JOIN tbl_curriculum ON (tbl_stdprofile.curriculumID=tbl_curriculum.curriculumID)
																			ORDER BY tbl_stdprofile.lastName ASC,  tbl_stdprofile.schoolyear DESC");
				$i = 1;
					if(mysqli_num_rows($result) > 0 ){
						while($row = mysqli_fetch_array($result)){
							$id 		= $row['recID'];
							$curID 	= $row['curriculumID'];
							$lName 	= $row['lastName'];
							$fName 	= $row['firstName'];
							$mName 	= $row['middleName'];
							$ext 		= $row['extName'];
							$cur 		= $row['curriculum'];
							$sy 		= $row['schoolyear'];
							$email 	= $row['emailAdd'];

								echo"
									<tr align='center'>
										<td>$i</td>
										<td>$lName</td>
										<td>$fName</td>
										<td>$mName</td>
										<td>$ext</td>
										<td>$email</td>
										<td>$cur</td>
										<td>$sy</td>
									</tr>";
							$i++;
						};

						echo"
								</tbody>
							</table>";
					}
			}elseif($filter_sy == "All" and $filter_sem != "All") {
				$result = mysqli_query($conn, "SELECT
																				tbl_stdprofile.recID,
																				tbl_stdprofile.lastName,
																				tbl_stdprofile.firstName,
																				tbl_stdprofile.middleName,
																				tbl_stdprofile.extName,
																				tbl_curriculum.curriculum,
																				tbl_stdprofile.schoolyear,
																				tbl_stdprofile.curriculumID,
																				tbl_stdprofile.emailAdd
																			FROM
																			 tbl_stdprofile
																			INNER JOIN tbl_curriculum ON (tbl_stdprofile.curriculumID=tbl_curriculum.curriculumID)
																			WHERE tbl_stdprofile.semester = '$filter_sem'
																			ORDER BY tbl_stdprofile.lastName ASC,  tbl_stdprofile.schoolyear DESC");
				$i = 1;
					if(mysqli_num_rows($result) > 0 ){
						while($row = mysqli_fetch_array($result)){
							$id 		= $row['recID'];
							$curID 	= $row['curriculumID'];
							$lName 	= $row['lastName'];
							$fName 	= $row['firstName'];
							$mName 	= $row['middleName'];
							$ext 		= $row['extName'];
							$cur 		= $row['curriculum'];
							$sy 		= $row['schoolyear'];
							$email 	= $row['emailAdd'];

								echo"
									<tr align='center'>
										<td>$i</td>
										<td>$lName</td>
										<td>$fName</td>
										<td>$mName</td>
										<td>$ext</td>
										<td>$email</td>
										<td>$cur</td>
										<td>$sy</td>
									</tr>";
							$i++;
						};

						echo"
								</tbody>
							</table>";
					}
			}elseif($filter_sy != "All" and $filter_sem == "All"){
				$result = mysqli_query($conn, "SELECT
																				tbl_stdprofile.recID,
																				tbl_stdprofile.lastName,
																				tbl_stdprofile.firstName,
																				tbl_stdprofile.middleName,
																				tbl_stdprofile.extName,
																				tbl_curriculum.curriculum,
																				tbl_stdprofile.schoolyear,
																				tbl_stdprofile.curriculumID,
																				tbl_stdprofile.emailAdd
																			FROM
																			 tbl_stdprofile
																			INNER JOIN tbl_curriculum ON (tbl_stdprofile.curriculumID=tbl_curriculum.curriculumID)
																			WHERE tbl_stdprofile.schoolyear = '$filter_sy'
																			ORDER BY tbl_stdprofile.lastName ASC,  tbl_stdprofile.schoolyear DESC");
				$i = 1;
					if(mysqli_num_rows($result) > 0 ){
						while($row = mysqli_fetch_array($result)){
							$id 		= $row['recID'];
							$curID 	= $row['curriculumID'];
							$lName 	= $row['lastName'];
							$fName 	= $row['firstName'];
							$mName 	= $row['middleName'];
							$ext 		= $row['extName'];
							$cur 		= $row['curriculum'];
							$sy 		= $row['schoolyear'];
							$email 	= $row['emailAdd'];

								echo"
									<tr align='center'>
										<td>$i</td>
										<td>$lName</td>
										<td>$fName</td>
										<td>$mName</td>
										<td>$ext</td>
										<td>$email</td>
										<td>$cur</td>
										<td>$sy</td>
									</tr>";
							$i++;
						};

						echo"
								</tbody>
							</table>";
					}
			}elseif($filter_sy != "All" and $filter_sem != "All"){
				$result = mysqli_query($conn, "SELECT
																				tbl_stdprofile.recID,
																				tbl_stdprofile.lastName,
																				tbl_stdprofile.firstName,
																				tbl_stdprofile.middleName,
																				tbl_stdprofile.extName,
																				tbl_curriculum.curriculum,
																				tbl_stdprofile.schoolyear,
																				tbl_stdprofile.curriculumID,
																				tbl_stdprofile.emailAdd
																			FROM
																			 tbl_stdprofile
																			INNER JOIN tbl_curriculum ON (tbl_stdprofile.curriculumID=tbl_curriculum.curriculumID)
																			WHERE tbl_stdprofile.schoolyear = '$filter_sy' AND tbl_stdprofile.semester = '$filter_sem'
																			ORDER BY tbl_stdprofile.lastName ASC,  tbl_stdprofile.schoolyear DESC");
				$i = 1;
					if(mysqli_num_rows($result) > 0 ){
						while($row = mysqli_fetch_array($result)){
							$id 		= $row['recID'];
							$curID 	= $row['curriculumID'];
							$lName 	= $row['lastName'];
							$fName 	= $row['firstName'];
							$mName 	= $row['middleName'];
							$ext 		= $row['extName'];
							$cur 		= $row['curriculum'];
							$sy 		= $row['schoolyear'];
							$email 	= $row['emailAdd'];

								echo"
									<tr align='center'>
										<td>$i</td>
										<td>$lName</td>
										<td>$fName</td>
										<td>$mName</td>
										<td>$ext</td>
										<td>$email</td>
										<td>$cur</td>
										<td>$sy</td>
									</tr>";
							$i++;
						};

						echo"
								</tbody>
							</table>";
					}
			}


		?>


		<br>
		<table width='100%'>
			<tr>
				<td width='60%'>
					Prepared by:
					<br><br><br>
					<b>______________________________________________________________</b> <br>
					<i>Program Chair, Computing Education Graduate Program</i>
				</td>

				<td width='40%'> Noted by:
					<br><br><br>
					<b>______________________________________</b>	<br>
					<i>Dean, Central Graduate School</i>
				</td>
			</tr>
		</table>

		</body>
	</html>
