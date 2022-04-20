											<table id="subj_table" class="table table-bordered table-hover table-sm">
												<thead>
													<tr>
														<th style="width: 10px">#</th>
														<th>Year Level</th>
														<th>Semester</th>
														<th>Course Code</th>
														<th>Course Title</th>
														<th>Units</th>
														<th style="width: 100px">Action</th>
													</tr>
												</thead>

												<tbody>

													<?php
														require('conn.php');

														$id = $_REQUEST['id'];

														$result = mysqli_query($conn, "SELECT * from  tbl_subject WHERE currID = $id ORDER BY yearLevel ASC, courseSem ASC, courseCode ASC");
															$i = 1;
															if(mysqli_num_rows($result) > 0 ){
																while($row = mysqli_fetch_array($result)){
																	echo
																		"<tr>
																			<td>$i</td>
																			<td id='year".$row['subjID']."'>".$row['yearLevel']."</td>
																			<td id='sem".$row['subjID']."'>".$row['courseSem']."</td>
																			<td id='code".$row['subjID']."'>".$row['courseCode']."</td>
																			<td id='title".$row['subjID']."'>".$row['courseDesc']."</td>
																			<td id='unit".$row['subjID']."'>".$row['courseUnit']."</td>

																			<td>
																				<a class='btn btn-warning btn-sm editCourse' data-id = '".$row['subjID']."'><span class='fas fa-edit'></span> </a>
																				<a class='btn btn-danger btn-sm  delCourse'  data-id = '".$row['subjID']."'><span class='fas fa-trash'></span> </a>
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

											    $('#subj_table').DataTable({
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
