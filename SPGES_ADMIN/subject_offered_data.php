
											<table id="subj_table" class="table table-bordered table-hover table-sm">
												<thead>
													<tr align="center">
														<th style="width: 10px">#</th>
														<th>School Year</th>
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

														$result = mysqli_query($conn, "SELECT * from  tbl_subj_offered WHERE curID = $id ORDER BY schoolyear ASC, semester ASC, subjCode ASC");
															$i = 1;
															if(mysqli_num_rows($result) > 0 ){
																while($row = mysqli_fetch_array($result)){
																	echo
																		"<tr>
																			<td>$i</td>
																			<td id='year".$row['recID']."'>".$row['schoolyear']."</td>
																			<td id='sem".$row['recID']."'>".$row['semester']."</td>
																			<td id='code".$row['recID']."'>".$row['subjCode']."</td>
																			<td id='title".$row['recID']."'>".$row['subjDesc']."</td>
																			<td id='unit".$row['recID']."'>".$row['subjUnit']."</td>

																			<td align='center'>
																				<a class='btn btn-warning btn-sm editOffer' data-id = '".$row['recID']."'><span class='fas fa-edit'></span> </a>
																				<a class='btn btn-danger btn-sm  delOffer'  data-id = '".$row['recID']."'><span class='fas fa-trash'></span> </a>
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
