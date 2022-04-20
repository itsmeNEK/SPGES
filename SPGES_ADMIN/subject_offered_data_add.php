<html>
<link rel="stylesheet" href="dist/css/adminlte.css">
<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
		<table >
			<tr>
				<td width="25%">
					<img class ="logo" src="dist/logo.png" alt="Italian Trulli">
				</td>

				<td  width="50%">
					<p class="a">
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
	<?php
		require("conn.php");
		$id	= $_GET['id'];
	?>

		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10" id="offer_data">
				<p align="center"><b> SUMMARY OF ENROLLED COURSES</b> </p>
				<input type="hidden" name="txtcurID" class="form-control input-sm" id="txtcurID" value="<?php echo $id;?>" disabled>
				<?php


					$result = mysqli_query($conn, "SELECT * from tbl_subject WHERE `currID`='$id' ORDER BY yearLevel ASC, courseCode ASC" );
					$tmpsy=false;
					$tmpsm=false;
					$subTotal = false;
					$Total =0;

					if(mysqli_num_rows($result) > 0 ){
						while($row = mysqli_fetch_array($result)){
							$subjID = $row['subjID'];
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
					 				<td id='code$subjID' align='center'>$code</td>
					 				<td id='desc$subjID'>$desc</td>
					 				<td id='unit$subjID' align='center'>$unit</td>";
										$grade = mysqli_query($conn, "SELECT * FROM tbl_subj_offered WHERE `subjID` = '$subjID'");
										if(mysqli_num_rows($grade) > 0){
												while($row = mysqli_fetch_array($grade)){
													$subjID = $row['subjID'];
													if($subjID != ""){
															echo "<td align='center' style='color:red'><b>OFFERED</b></td>";
													}
												}
											}else{
													echo "<td align='center' width='15%'>
																		<a class='btn btn-primary btn-block btn-sm btnOffer'  data-id = '$subjID'><span class='fas fa-plus'></span><b>OFFER</b</a>
																</td>";
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
			</div>
			<div class="col-sm-1"></div>

		</div>


	</body>

	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
	<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<script src="dist/js/adminlte.js"></script>
	<script src="DataController.js"></script>


</html>

<br>
