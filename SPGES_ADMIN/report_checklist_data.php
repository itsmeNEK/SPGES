<table class='table table-bordered table-hover table-sm' id='summ_table'>
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
			require("caesarC.php");

			$filter_sy  = $_REQUEST['filter_sy'];
			$filter_sem = $_REQUEST['filter_sem'];

			if($filter_sy == "All" and $filter_sem == "All"){
				$result = mysqli_query($conn, "SELECT
																			  tbl_stdprofile.studID,
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
							$id 		= $row['studID'];
							$curID 	= $row['curriculumID'];
							$lName 	= Encipher($row['lastName'],13);
							$fName 	= Encipher($row['firstName'],13);
							$mName 	= Encipher($row['middleName'],13);
							$ext 	= Encipher($row['extName'],13);
							$cur 		= $row['curriculum'];
							$sy 		= $row['schoolyear'];
							$email 	= $row['emailAdd'];

								echo"
									<tr align='center'>
										<td>$i</td>
										<td id='desc$id'>
											<a target = '_blank' href='report_checklist_data_print.php?id=$curID&recID=$id'>$lName</a>
										</td>
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
							$lName 	= Encipher($row['lastName'],13);
							$fName 	= Encipher($row['firstName'],13);
							$mName 	= Encipher($row['middleName'],13);
							$ext 	= Encipher($row['extName'],13);
							$cur 		= $row['curriculum'];
							$sy 		= $row['schoolyear'];
							$email 	= $row['emailAdd'];

								echo"
									<tr align='center'>
										<td>$i</td>
										<td id='desc$id'>
											<a target = '_blank' href='report_checklist_data_print.php?id=$curID'>$lName</a>
										</td>
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
							$lName 	= Encipher($row['lastName'],13);
							$fName 	= Encipher($row['firstName'],13);
							$mName 	= Encipher($row['middleName'],13);
							$ext 	= Encipher($row['extName'],13);
							$cur 		= $row['curriculum'];
							$sy 		= $row['schoolyear'];
							$email 	= $row['emailAdd'];

								echo"
									<tr align='center'>
										<td>$i</td>
										<td id='desc$id'>
											<a target = '_blank' href='report_checklist_data_print.php?id=$curID'>$lName</a>
										</td>
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
							$lName 	= Encipher($row['lastName'],13);
							$fName 	= Encipher($row['firstName'],13);
							$mName 	= Encipher($row['middleName'],13);
							$ext 	= Encipher($row['extName'],13);
							$cur 		= $row['curriculum'];
							$sy 		= $row['schoolyear'];
							$email 	= $row['emailAdd'];

								echo"
									<tr align='center'>
										<td>$i</td>
										<td id='desc$id'>
											<a target = '_blank' href='report_checklist_data_print.php?id=$curID'>$lName</a>
										</td>
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

		<script>
			$(function () {
				$("#summ_table").DataTable({
					"paging": true,
					"lengthChange": true,
					"searching": true,
					"ordering": true,
					"info": true,
					"autoWidth": false,
					"responsive": true,
				});
			});
		</script>
