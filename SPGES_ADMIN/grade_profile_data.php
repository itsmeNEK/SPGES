								<?php
									require("conn.php");
												
									$StudNo	= $_REQUEST['studno'];
									$Sem	= $_REQUEST['sem'];
									$Sy		= $_REQUEST['sy'];
												
									$result = mysqli_query($conn, "SELECT  `firstName`, `lastName`, `middleName`, `yearLevel`, `program`, `piclink` from   tbl_studprofile WHERE `studID` = '$StudNo' and `schoolYear` = '$Sy' and `semester` = '$Sem' ");
									
									if(mysqli_num_rows($result) > 0 ){
										while($row = mysqli_fetch_array($result)){
											
											$name		= $row['lastName']  .', '.  $row['firstName']  .' '.  $row['middleName'];
											$program	= $row['program'];
											$year		= $row['yearLevel'];
											$pic		= $row['piclink'];
											echo
												"
												<table style='border: 1px solid #b4b4b4;'>
													<tr>
														<td style='padding-top: 5px;  padding-right: 5px;  padding-bottom: 5px;  padding-left: 5px;'>
															<table>
																<tr>
																	<td rowspan=5 width=15% align=left>
																		<img src='idpic/$pic' style='max-width: 100%; padding-right:10px;'>
																	</td>
																</tr>
																
																<tr>
																	<td><b> Student No:</b> $StudNo</td>
																	
																</tr>
																<tr>
																	<td><b> Student Name:</b> $name</td>
																</tr>
																<tr>
																	<td><b> Program:</b> $program</td>
																</tr>
																<tr>
																	<td><b> Year Level:</b> $year</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												";
																
										}
																
									}else{
										echo 
											"<tr>
												<td colspan='8' align='center' style='color:red'>********** No Records Found ***********</td>
											</tr>";
									};
											
												
												
								?>