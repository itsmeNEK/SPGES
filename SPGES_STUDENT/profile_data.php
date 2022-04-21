
								<?php
									require("conn.php");
									require("caesarC.php");



									$id	= $_REQUEST['id'];

									$result = mysqli_query($conn, "SELECT * from   tbl_stdprofile WHERE `studID` = '$id' LIMIT 1");

									if(mysqli_num_rows($result) > 0 ){
										while($row = mysqli_fetch_array($result)){
											$studID 		= $row['studID'];
											$lname 			= encipher(strtoupper($row['lastName']),13);
											$fname 			=  encipher(strtoupper($row['firstName']),13);
											$mname 			=  encipher(strtoupper($row['middleName']),13);
											$extname 		=  encipher(strtoupper($row['extName']),13);
											$email			= $row['emailAdd'];
											$maddress		= strtoupper($row['mailingAdd']);
											$mzip 			= $row['mzipcode'];
											$mcount 		= strtoupper($row['mcountry']);
											$mobile			= $row['mobileno'];
											$pbirth			= strtoupper($row['birthPlace']);
											$bdate 			= $row['dateofBirth'];
											$citi				= strtoupper($row['Citizenship']);
											$sex				= strtoupper($row['Sex']);
											$cstat			= strtoupper($row['civilStatus']);
											$pos				= strtoupper($row['occupation']);
											$empname		= strtoupper($row['employer']);
											$empaddress	= strtoupper($row['empAdd']);
											$empzip 		= $row['empzip'];
											$empcount 	= strtoupper($row['empcountry']);
											$empmobile	= $row['empmobile'];
											$plans 			= $row['compplan'];
											$pic				= $row['piclink'];

											echo
												"
												<table align='left'>
													<tr>
														<td><a target = '_blank'href='profile_view_data.php?id=$studID' class='btn btn-info btn-sm'><span class='fas fa-tv'></span><b>&nbsp; View</b></a></td>
														<td><a target = '_blank' href='profile_edit_data.php'class='btn btn-warning btn-sm' ><span class='fas fa-edit'></span><b> Edit</b></a></td>
													</tr>
												</table>
												<br><br>

												<table class='table-bordered text-nowrap table-sm' width='100%' id='tbl_enrhistory'>
													<tr>
														<td colspan='5'><u><b>PERSONAL DATA</b></u></td>
													</tr>

													<tr>
														<td rowspan=5 width=15% align=left>
															<img src='/SPGES/SPGES_ADMIN/idpic/$pic' style='max-width: 100%;'>
														</td>
													</tr>
													<tr style='font-size:15px;'>
														<td width='25%'align='center'><b>$lname</b></td>
														<td width='25%' align='center'><b>$fname</b></td>
														<td width='25%' align='center'><b>$mname</b></td>
														<td width='10%' align='center'><b>$extname</b></td>
													</tr>
													<tr align='center' style='font-style:italic; font-size:12px;'>
														<td>Family Name</td>
														<td>First Name</td>
														<td>Middle Name</td>
														<td>Suffix</td>
													</tr>
													<tr style='font-size:15px;'>
														<td colspan='2' align='center'><b>$maddress</b></td>
														<td align='center'><b>$mcount</b></td>
														<td align='center'><b>$mzip</b></td>
													</tr>

													<tr align='center' style='font-style:italic; font-size:12px;'>
														<td colspan='2'>Street/Barangay/Town/City/Province</td>
														<td>Country</td>
														<td>Zip Code</td>
													</tr>

													<tr style='font-size:15px;'>
														<td><i>ID No.:&nbsp;</i><b>$studID</b></td>
														<td><i>Citizenship:&nbsp;</i><b>$citi</b></td>
														<td><i>Mobile No.:&nbsp;</i><b>$mobile</b> </td>
														<td colspan='2'><i>Email Address:</i><b>$email</b></td>
													</tr>
													<tr style='font-size:15px;'>
														<td><i>Place of Birth:</i></td>
														<td><b>$pbirth</b></td>
														<td><i>Birth Date:&nbsp;</i><b>$bdate</b></td>
														<td><i>Civil Status:&nbsp;</i><b>$cstat</b></td>
														<td><i>Sex:&nbsp;</i><b>$sex</b></td>
													</tr>

													<tr style='font-size:15px;'>
														<td colspan='3'><i>Present Occupation/Position: &nbsp;</i><b>$pos</b></td>
														<td colspan='2'><i>Employer Mobile No.: &nbsp;</i><b>$empmobile</b></td>
													</tr>

													<tr style='font-size:15px;'>
														<td colspan='5'><i>Name of Employer(Institution/Company):&nbsp;</i><b>$empname</b></td>
													</tr>

													<tr style='font-size:15px;'>
														<td width='15%'><i>Employer Address:</i></td>
														<td colspan='2' align='center'><b>$empaddress</b></td>
														<td align='center'><b>$empcount</b></td>
														<td align='center'><b>$empzip</b></td>
													</tr>

													<tr align='center' style='font-style:italic; font-size:12px;'>
														<td></td>
														<td colspan='2'>Street/Barangay/Town/City/Province</td>
														<td>Country</td>
														<td>Zip Code</td>
													</tr>
												</table>
												";

										}

									}else{
										echo
											"
											<table width='100%' >
												<tr>
													<td colspan='3' align='center' style='color:red'>Welcome to MIT Please fill up the form by clicking the button below</td>
												</tr>
												<tr>
													<td colspan='3' align='center' style='color:red'>&nbsp;</td>
												</tr>

												<tr>
												<td>
&nbsp;
												</td>
													<td width='20%'>
															<a class='btn btn-primary btn-flat btn-sm addEnr'>Fill Up Form</a>
													</td>
													<td>
														&nbsp;
													</td>
												</tr>
											</table>

											";
									};




								?>
