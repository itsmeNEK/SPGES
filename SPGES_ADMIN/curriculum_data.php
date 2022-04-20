
											<table class="table table-bordered table-hover table-sm" id="cur_table">
												<thead>
													<tr align="center">
														<th style="width: 10px">#</th>
														<th>Curriculum</th>
														<th>School Year</th>
														<th>Course List</th>
														<th>Course Offering</th>
														<th style="width: 100px">Action</th>
													</tr>
												</thead>

												<tbody align="center">

													<?php
														require('conn.php');

														$result = mysqli_query($conn, "SELECT * from  tbl_curriculum");
														$i = 1;
															if(mysqli_num_rows($result) > 0 ){
																while($row = mysqli_fetch_array($result)){
																	$curID 		= $row['curriculumID'];
																	$Prog	 		= $row['curriculum'];
																	$sy				= $row['schoolyear'];

																	echo
																		"<tr>
																			<td>$i</td>
																			<td id='cur".$row['curriculumID']."'><a target = '_blank' href='curriculum_data_print.php?id=$curID'>$Prog</a></td>
																			<td id='sy".$row['curriculumID']."'>$sy</td>
																			<td>
																				<a class='btn btn-info btn-sm CourseList' data-id = '".$row['curriculumID']."' href='course.php?id=".$row['curriculumID']."'><span class='fas fa-book'></span>&nbsp; Course List </a>
																			</td>
																			<td>
																				<a class='btn btn-success btn-sm SubjOfferedList' data-id = '".$row['curriculumID']."' href='subject_offered.php?id=".$row['curriculumID']."'><span class='fas fa-book'></span>&nbsp; Courses Offered </a>
																			</td>
																			<td>
																				<a class='btn btn-warning btn-sm editCur' data-id ='$curID'><span class='fas fa-edit'></span> </a>
																				<a class='btn btn-danger btn-sm  delCur'  data-id ='$curID'><span class='fas fa-trash'></span> </a>
																			</td>
																		</tr>
																		";
																	$i++;
																};

															}
													?>
												</tbody>
											</table>

											<script>
											$(function () {

												$("#cur_table").DataTable({
													"paging": true,
													"lengthChange": true,
													"searching": true,
													"ordering": false,
													"info": true,
													"autoWidth": false,
													"responsive": true,
												});
											});
											</script>
