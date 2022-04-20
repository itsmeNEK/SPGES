											<table class="table table-bordered table-hover table-sm">
												<thead>
													<tr>
														<th>Semester</th>
														<th>School Year</th>
														<th style="width: 100px">Action</th>
													</tr>
												</thead>
												
												<tbody>
												
													<?php
														require('conn.php');
														
														$result = mysqli_query($conn, "SELECT * FROM tbl_currperiod");
														$i = 1;
															if(mysqli_num_rows($result) > 0 ){
																while($row = mysqli_fetch_array($result)){
																	echo
																		"<tr>
																			<td id='cursem".$row['curID']."'>".$row['curSem']."</td>
																			<td id='cursy".$row['curID']."'>".$row['curSy']."</td>
																			<td>
																				<a class='btn btn-warning btn-sm editPeriod' data-id = '".$row['curID']."'><span class='fas fa-edit'></span> Edit </a>
																				
																			</td>
																		</tr>
																		";
																	$i++;
																};
																
															}else{
																echo 
																	"<tr>
																		<td colspan='4' align='center' style='color:red'>********** No Records Found ***********</tr>
																	</td>";
															};
													?>
												</tbody>
											</table>