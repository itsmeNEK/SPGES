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
	<?php
		require("conn.php");
		$id	= $_REQUEST['id'];
	?>


			<p align="center"><b> SUMMARY OF ENROLLED COURSES</b> </p>
			<?php
				$stud = mysqli_query($conn, "SELECT * FROM tbl_stdprofile WHERE `studID` = '$id'");
				if(mysqli_num_rows($stud) > 0){
					while($rows = mysqli_fetch_array($stud)){
						$curID = $rows['curriculumID'];
					}
				}else{
					echo "<h3 style='color:red' align='center'>Please Fill Up the the Student Profile Form first to Update your Curriculum</h3>";
					$curID = "";
				}

				$result = mysqli_query($conn, "SELECT * from tbl_subject WHERE `currID`='$curID' ORDER BY yearLevel ASC, courseCode ASC" );
				$tmpsy=false;
				$tmpsm=false;
				$subTotal = false;
				$Total =0;

				if(mysqli_num_rows($result) > 0 ){
					while($row = mysqli_fetch_array($result)){
						$sem	= $row['courseSem'];
						$year	= $row['yearLevel'];
						$code	= $row['courseCode'];
						$desc = $row['courseDesc'];
						$unit	= $row['courseUnit'];

					if ($year != $tmpsy){
						$i = 0;
						if($subTotal != false){
					 		echo"	<tr align='center'>
					 			 <th></th>
					 			 <th>Total</th>
					 			 <th>$subTotal</th>
								 <th></th>
					 		</tr>";

					 		$subTotal = 0;
							echo "
							</tboby>
								</table>
									</div>
										</div>
										<br>
									";
				 		}

						echo "<p class='year' align='center'>$year</p> ";

						echo "<div class='row'>";

						$tmpsy = $year;
					}

			    if ($sem != $tmpsm){
						if($subTotal != false){
							echo"	<tr align='center'>
								 <th></th>
								 <th>Total</th>
								 <th>$subTotal</th>
								 <th></th>
							</tr>";

							$subTotal = 0;

								echo "
								</tbody>
							</table>
							<br>	";

							if($i % 2 == 0){
								echo "</div>
										</div>
									<div class='row'>
									<br>";
							}else{
								echo "</div>
									<br>";
								}
						}
						echo "
						<div class='col-6'>
							<table class='tborder' width='100%' style='font-size:14px'>
								<thead>
								  <tr>
								    <th align='left' style='text-transform: uppercase;' colspan='4'>&nbsp; $sem</th>
								  </tr>
								  <tr align='center'>
								    <th>Code</th>
								    <th>Description</th>
								    <th>Units</th>
										<th>Status</th>
								  </tr>
					      </thead>
								<tbody>";

						    $tmpsm = $sem;
								$i++;
			     	}
					 		echo "<tr>
				 				<td>$code</td>
				 				<td>$desc</td>
				 				<td align='center'>$unit</td>";
									$grade = mysqli_query($conn, "SELECT * FROM tbl_egrade WHERE `subjCode` = '$code' AND `studNo` = '$id' LIMIT 1");
									if(mysqli_num_rows($grade) > 0){
										while($grow = mysqli_fetch_array($grade)){
											$gradeCQ = $grow['gradeCQ'];

											if($gradeCQ != ''){
													echo "<td align='center' style='color:red'><b>Enrolled</b></td>";
											}

										}
									}else{
											echo "<td align='center'></td>";
									}

								echo"
				 				</tr>";

								 $subTotal += $unit;
								 $Total += $unit;

			 };

			 if($subTotal != false){
				echo"	<tr align='center'>
					 <th></th>
					 <th>Total</th>
					 <th>$subTotal</th>
					 <th></th>
				</tr>

				";

				$subTotal = 0;


			}

};





echo"
</tbody>
		</table>";





?>

	</body>


</html>

<br>
