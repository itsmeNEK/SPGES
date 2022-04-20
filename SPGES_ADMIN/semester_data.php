											<table id="sem_table" class="table table-bordered table-hover table-sm">
												<thead>
													<tr>
														<th style="width: 10px">#</th>
														<th>Semester</th>
														<th style="width: 100px">Action</th>
													</tr>
												</thead>

												<tbody>

													<?php
														require('conn.php');

														$result = mysqli_query($conn, "SELECT * from tbl_semester");
														$i = 1;
															if(mysqli_num_rows($result) > 0 ){
																while($row = mysqli_fetch_array($result)){
																	echo
																		"<tr>
																			<td>$i</td>
																			<td id='sem".$row['semID']."'>".$row['semester']."</td>
																			<td>
																				<a class='btn btn-warning btn-sm editSem' data-id = '".$row['semID']."'><span class='fas fa-edit'></span> </a>
																				<a class='btn btn-danger btn-sm  delSem'  data-id = '".$row['semID']."'><span class='fas fa-trash'></span> </a>
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

											    $('#sem_table').DataTable({
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
