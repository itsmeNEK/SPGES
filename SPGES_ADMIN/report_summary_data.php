<table class='table table-bordered table-hover table-sm' id='summ_table'>
	<thead>
		<tr align='center'>
			<th style='width: 10px'>#</th>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Ext</th>
			<th>Sex</th>
			<th>Semester</th>
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
				$result = mysqli_query($conn, "SELECT * FROM tbl_stdprofile	ORDER BY lastName ASC, semester ASC,  schoolyear DESC");
				$i = 1;
					if(mysqli_num_rows($result) > 0 ){
						while($row = mysqli_fetch_array($result)){
							$id 		= $row['recID'];
							$lName 	= Encipher($row['lastName'],13);
							$fName 	= Encipher($row['firstName'],13);
							$mName 	= Encipher($row['middleName'],13);
							$ext 	= Encipher($row['extName'],13);
							$sy 		= $row['schoolyear'];
							$sex 		= $row['Sex'];
							$sem		= $row['semester'];

								echo"
									<tr align='center'>
										<td>$i</td>
										<td>$lName</td>
										<td>$fName</td>
										<td>$mName</td>
										<td>$ext</td>
										<td>$sex</td>
										<td>$sem</td>
										<td>$sy</td>
									</tr>";
							$i++;
						};

						echo"
								</tbody>
							</table>";
					}
			}elseif($filter_sy == "All" and $filter_sem != "All") {
				$result = mysqli_query($conn, "SELECT * FROM tbl_stdprofile	WHERE semester = '$filter_sem' ORDER BY lastName ASC, semester ASC,  schoolyear DESC");
				$i = 1;
				if(mysqli_num_rows($result) > 0 ){
					while($row = mysqli_fetch_array($result)){
						$id 		= $row['recID'];
						$lName 	= Encipher($row['lastName'],13);
						$fName 	= Encipher($row['firstName'],13);
						$mName 	= Encipher($row['middleName'],13);
						$ext 	= Encipher($row['extName'],13);
						$sy 		= $row['schoolyear'];
						$sex 		= $row['Sex'];
						$sem		= $row['semester'];

							echo"
								<tr align='center'>
									<td>$i</td>
									<td>$lName</td>
									<td>$fName</td>
									<td>$mName</td>
									<td>$ext</td>
									<td>$sex</td>
									<td>$sem</td>
									<td>$sy</td>
								</tr>";
						$i++;
					};

					echo"
							</tbody>
						</table>";
				}
			}elseif($filter_sy != "All" and $filter_sem == "All"){
				$result = mysqli_query($conn, "SELECT * FROM tbl_stdprofile	WHERE schoolyear = '$filter_sy' ORDER BY lastName ASC, semester ASC,  schoolyear DESC");
				$i = 1;
				if(mysqli_num_rows($result) > 0 ){
					while($row = mysqli_fetch_array($result)){
						$id 		= $row['recID'];
						$lName 	= Encipher($row['lastName'],13);
						$fName 	= Encipher($row['firstName'],13);
						$mName 	= Encipher($row['middleName'],13);
						$ext 	= Encipher($row['extName'],13);
						$sy 		= $row['schoolyear'];
						$sex 		= $row['Sex'];
						$sem		= $row['semester'];

							echo"
								<tr align='center'>
									<td>$i</td>
									<td>$lName</td>
									<td>$fName</td>
									<td>$mName</td>
									<td>$ext</td>
									<td>$sex</td>
									<td>$sem</td>
									<td>$sy</td>
								</tr>";
						$i++;
					};

					echo"
							</tbody>
						</table>";
				}
			}elseif($filter_sy != "All" and $filter_sem != "All"){
				$result = mysqli_query($conn, "SELECT * FROM tbl_stdprofile	WHERE schoolyear = '$filter_sy' AND semester = '$filter_sem' ORDER BY lastName ASC, semester ASC,  schoolyear DESC");
				$i = 1;
				if(mysqli_num_rows($result) > 0 ){
					while($row = mysqli_fetch_array($result)){
						$id 		= $row['recID'];
						$lName 	= Encipher($row['lastName'],13);
						$fName 	= Encipher($row['firstName'],13);
						$mName 	= Encipher($row['middleName'],13);
						$ext 	= Encipher($row['extName'],13);
						$ext 		= $row['extName'];
						$sy 		= $row['schoolyear'];
						$sex 		= $row['Sex'];
						$sem		= $row['semester'];

							echo"
								<tr align='center'>
									<td>$i</td>
									<td>$lName</td>
									<td>$fName</td>
									<td>$mName</td>
									<td>$ext</td>
									<td>$sex</td>
									<td>$sem</td>
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
