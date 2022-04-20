											<table id="user_table" class="table table-bordered table-hover table-sm">
												<thead>
													<tr>
														<th style="width: 10px">#</th>
														<th>Firstname</th>
														<th>Lastname</th>
														<th>Username</th>
														<th>Password</th>
														<th style="width: 100px">Action</th>
													</tr>
												</thead>

												<tbody>

													<?php
														require('conn.php');

														$result = mysqli_query($conn, "SELECT * from tbl_user");
														$i = 1;
															if(mysqli_num_rows($result) > 0 ){
																while($row = mysqli_fetch_array($result)){
																	echo
																		"<tr>
																			<td>$i</td>
																			<td id='fname".$row['userID']."'>".$row['fname']."</td>
																			<td id='lname".$row['userID']."'>".$row['lname']."</td>
																			<td id='uname".$row['userID']."'>".$row['userName']."</td>
																			<td id='pass".$row['userID']."'>".$row['passWord']."</td>
																			<td>
																				<a class='btn btn-warning btn-sm editUser' data-id = '".$row['userID']."'><span class='fas fa-edit'></span> </a>
																				<a class='btn btn-danger btn-sm  delUser'  data-id = '".$row['userID']."'><span class='fas fa-trash'></span> </a>
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

											    $('#user_table').DataTable({
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
