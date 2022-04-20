							<?php
								require('conn.php');

								$StudNo	= $_REQUEST['studno'];
								$Sem	= $_REQUEST['sem'];
								$Sy		= $_REQUEST['sy'];


								echo "
										<p><u><b>$Sem $Sy</b></u></p>
											<table class='table table-bordered table-hover table-sm'>
												<thead align='center'>
													<tr>
														<th>Code</th>
														<th>Descriptive Title</th>
														<th>Units</th>
														<th>Grade</th>
													</tr>
												</thead>

								";

								$result = mysqli_query($conn, "SELECT `gradeID`, `subjCode`, `subjDesc`, `subjUnits`, `gradeCQ`  FROM tbl_egrade WHERE `studNo` = '$StudNo' and `schoolYear` = '$Sy' and `semester` = '$Sem'");

								if(mysqli_num_rows($result) > 0 ){
									while($row = mysqli_fetch_array($result)){
										$gid   = $row['gradeID'];
										$code  = $row['subjCode'];
										$desc  = $row['subjDesc'];
										$unit  = $row['subjUnits'];
										$grade = $row['gradeCQ'];

										echo
											"
													<tr align='center'>
														<td>$code</td>
														<td>$desc</td>
														<td>$unit</td>
														<td id='grade$gid'>$grade</td>

											";

									};

									echo "</tr>
									<tr>
										<td colspan='4' align='center' style='color:red'>********** Nothing Follows ***********</td>
									</tr>
												</table>";

								}else{
									echo
										"<tr>
											<td colspan='8' align='center' style='color:red'>********** No Records Found ***********</td>
										</tr>";
								};

								echo"
								</tbody>
							</table>

								";
							?>
