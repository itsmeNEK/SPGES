<table class='table table-bordered table-hover table-sm' id='profile_table'>
	<thead align="center">
		<tr>
			<th style='width: 10px'>#</th>
			<th>Student Name</th>
			<th>Sex</th>
			<th>Citizenship</th>
			<th>Date of Birth</th>
			<th>Semester</th>
			<th>School Year</th>
			<th style='width: 100px'>Action</th>
		</tr>
	</thead>

	<tbody>
		<?php
			require('conn.php');

			$result = mysqli_query($conn, "SELECT * from tbl_stdprofile ORDER BY lastName ASC, semester ASC, schoolyear DESC");
				$i = 1;

				if(mysqli_num_rows($result) > 0 ){
					while($row = mysqli_fetch_array($result)){
						$recID 		= $row['recID'];
						$id 			= $row['studID'];
						$fullname = $row['lastName'] .', '. $row['firstName'] .' '. $row['middleName'] .' '. $row['extName'];
						$sex 			= $row['Sex'];
						$bday			= $row['dateofBirth'];
						$citi			= $row['Citizenship'];
						$sem			= $row['semester'];
						$sy				= $row['schoolyear'];
						echo
							"<tr align='center'>
								<td>$i</td>
								<td  id='desc$id'>
									<a target = '_blank' href='report_profile_data_print.php?id=$id'>$fullname</a>
								</td>
								<td id='desc".$row['recID']."'>$sex</td>
								<td id='desc".$row['recID']."'>$citi</td>
								<td id='desc".$row['recID']."'>$bday</td>
								<td id='desc".$row['recID']."'>$sem</td>
								<td id='desc".$row['recID']."'>$sy</td>
								<td>
									<a target = '_blank' href='profile_edit_data.php?id=$id'class='btn btn-warning btn-sm' ><span class='fas fa-edit'></span></a>
									<a class='btn btn-danger btn-sm  delProfile'  data-id=$recID><span class='fas fa-trash'></span> </a>
								</td>
							</tr>";

						$i++;
					}

																echo"
																</tbody>
															</table>
																";
															}
													?>

													<script>
														$(function () {
															$("#profile_table").DataTable({
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
