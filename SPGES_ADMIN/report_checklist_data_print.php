<html>


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

	<body>



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

		<br>
		<table align="center" >
			<tr>

				<?php
				$id = $_GET['id'];
				require('conn.php');

				$result = mysqli_query($conn, "SELECT * from tbl_curriculum WHERE `curriculumID`='$id'");
						if(mysqli_num_rows($result) > 0 ){
						while($row = mysqli_fetch_array($result)){
							$prog	= $row['curriculum'];
				echo"
				<td  width='50%'>
					<p class='a'>

							<b>MASTER IN INFORMATION TECHNOLOGY (MIT)</b><br>
							<b>$prog</b><br>
						</p>
				</td>
				";
			}
		}
				?>

			</tr>
		</table>

		<br>
	<br>
		<table>
			<tr>
				<?php
				$recid = $_GET['recID'];
				require('conn.php');

				$result = mysqli_query($conn, "SELECT * from tbl_stdprofile WHERE `recID`='$recid'");
						if(mysqli_num_rows($result) > 0 ){
							while($row = mysqli_fetch_array($result)){
							$fullname = strtoupper($row['lastName']) .', '.strtoupper( $row['firstName']) .' '. strtoupper($row['middleName']) .' '. strtoupper($row['extName']) ;
				echo"
				<td><b>NAME:</b><u> $fullname</u></td>
				";
			}
		}
				?>
			</tr>

		</table>
			<?php
			$id = $_GET['id'];
			$studID = $_GET['recID'];
			require('conn.php');

			$result = mysqli_query($conn, "SELECT * from tbl_subject WHERE `currID`='$id'" );
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

						if($subTotal != false){
				 		echo"	<tr>
				 			 <th width='10%'></th>
				 			 <th width='70%' align='right'>Total</th>
				 			 <th width='10%'>$subTotal</th>
							 <th width='10%' ></th>
				 		</tr>

				 		";

				 		$subTotal = 0;
						echo "
						</tboby>
								</table>



								";


				 	}


							echo "
									<p class='year'>$year</p> ";

										$tmpsy = $year;
					}

			    if ($sem != $tmpsm){
						if($subTotal != false){
							echo"	<tr>

								 <th width='10%'></th>
								 <th width='70%' align='right'>Total</th>
								 <th width='10%'>$subTotal</th>
								 <th width='10%'></th>
							</tr>

							";

							$subTotal = 0;

							echo "

							</tbody>
											</table>
											<br>";

						}

						echo "
						<table class='tborder' width='100%' align='center'>
									<thead>
							               	<tr>
							                 	<th align='left' style='text-transform: uppercase;' colspan='4'>$sem</th>
							               	</tr>
							               	<tr>
							                 	<th width='10%'>Code</th>
							                 	<th width='70%'>Description</th>
							                 	<th width='10%'>Units</th>
																<th width='10%'>Grades</th>
							               </tr>
				              			</thead>

														<tbody>
										 ";
						         $tmpsm = $sem;

			     	 	}

					 echo "<tr>
				 					<td>$code</td>
				 					<td>$desc</td>
				 					<td align='center'>$unit</td>";
									$grade = mysqli_query($conn, "SELECT * FROM tbl_egrade WHERE `subjCode` = '$code' AND `studNo` = '$studID'");
									if(mysqli_num_rows($grade) > 0){
										while($grow = mysqli_fetch_array($grade)){
											$gradeCQ = $grow['gradeCQ'];
											echo "<td align='center'>$gradeCQ</td>";
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
				echo"	<tr>
					 <th width='10%'></th>
					 <th width='70%' align='right'>Total</th>
					 <th width='10%'>$subTotal</th>
					 <th width='10%'></th>
				</tr>

				";

				$subTotal = 0;


			}
			echo"	<tr>
				 <th width='10%'></th>
				 <th width='70%' align='right'>Total Units</th>
				 <th width='10%'>$Total</th>
				 <th width='10%'></th>
			</tr>";
};





echo"
</tbody>
		</table>";





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

<br>
