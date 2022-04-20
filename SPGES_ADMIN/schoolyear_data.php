											<table id="sy_table" class="table table-bordered table-hover table-sm">
												<thead>
													<tr>
														<th style="width: 10px">#</th>
														<th>School Year</th>
														<th style="width: 100px">Action</th>
													</tr>
												</thead>

												<tbody>

													<?php
														require('conn.php');

														$result = mysqli_query($conn, "SELECT * from tbl_schoolyear");
														$i = 1;
															if(mysqli_num_rows($result) > 0 ){
																while($row = mysqli_fetch_array($result)){
																	echo
																		"<tr>
																			<td>$i</td>
																			<td id='sy".$row['syID']."'>".$row['schoolYear']."</td>
																			<td>
																				<a class='btn btn-warning btn-sm editSy' data-id = '".$row['syID']."'><span class='fas fa-edit'></span> </a>
																				<a class='btn btn-danger btn-sm  delSy'  data-id = '".$row['syID']."'><span class='fas fa-trash'></span> </a>
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

											    $('#sy_table').DataTable({
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
