							<?php
								require('conn.php');

								$StudNo	= $_REQUEST['studno'];
								$Sem	= $_REQUEST['sem'];
								$Sy		= $_REQUEST['sy'];


								echo "
										<p><u><b>$Sem $Sy</b></u></p>
											<table class='table table-bordered table-hover table-sm' id='grade_table'>
												<thead align='center'>
													<tr>
														<th>Code</th>
														<th>Descriptive Title</th>
														<th>Units</th>
														<th>Grade C.Q</th>
														<th style='width: 100px'>Action</th>
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
														<td>
															<a class='btn btn-warning btn-sm editGrade' data-id = $gid><span class='fas fa-edit'></span> Edit</a>

														</td>


											";

									};

									echo "</tr>

												</table>";

								}

								echo"
								</tbody>
							</table>

								";
							?>


							<script>
								$(function () {
									$("#grade_table").DataTable({
										"paging": true,
										"lengthChange": true,
										"searching": false,
										"ordering": false,
										"info": true,
										"autoWidth": false,
										"responsive": true,
									});
								});
							</script>
