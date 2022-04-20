// JQUERY SCRIPT //

// SCRIPT FOR MODULE SEMESTER //

$(document).ready(function(){
	$("#addSemester").on("click",function(){
		$("#modalNewSem").modal("show");
		$("#txtSemester").val("");

	});

	$(document).on("click",".editSem",function(){
		var SemID = $(this).data('id');
		var ESem  = $('#sem'+SemID).text();
		$("#modalEditSem").modal("show");
		$("#etxtSemester").val(ESem);
		$('#btnEditSem').val(SemID);
	});

	$("#btnEditSem").on("click",function(){
		var SemID = $(this).val();
		var ESem  = $("#etxtSemester").val();
		var mode  = "EditSemester";

		editSemester(SemID,ESem,mode);
	});

	$(document).on("click",".delSem", function(){
		var id = $(this).data('id');
		$("#modalDelSem").modal("show");
		$("#btnDelSem").val(id);
	});

	$("#btnDelSem").on("click",function(){
		var DSemID = $(this).val();
		var mode   = "DelSemester";

		delSem(DSemID,mode);
	});

})

function encrypt(){
	$(document).ready(function(){
		var filter_sem = $("#fsltSem").val();
		var filter_sy	 = $("#fsltSy").val();

		$.post(
			"report_checklist_data.php",
			{
				filter_sem:filter_sem,
				filter_sy:filter_sy
			},
				function(data){
					$("#summary_content").html(data);
				}
		)
	})
}

function loadSemester(){
	$(document).ready(function(){
		$("#sem_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...")

		var semList =	$.get("semester_data.php");

		semList.done(function(data){
			$("#sem_content").html(data);
		});

		semList.fail(function(){
			$("#sem_content").html("Error: There was problem loading the page!");
		});
	});
}

function AddSemester(){
	$(document).ready(function(){
		var ASem_Value = $("#txtSemester").val();
		var mode = "AddNewSemester";

		$.post(
			"DataQuery.php",
			{
				ASem_Value:ASem_Value,
				mode:mode
			},
				function(data){
					if(data == 1){
						$("#modalNewSem").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Added New Semester'
							  });

						});
						loadSemester();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Saving New Semester'
							  });
						});

					}
				}
		)
	});
}

function editSemester(SemID,ESem,mode){
	$(document).ready(function(){
		$.post(
			"DataQuery.php",
			{
				SemID:SemID,
				ESem:ESem,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditSem").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Updated Semester'
							  });
						});
						loadSemester();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Updating Semester'
							  });
						});
					}
				}
		)
	});
}

function delSem(DSemID,mode){
	$(document).ready(function(){

		$.post(
			"DataQuery.php",
			{
				DSemID:DSemID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelSem").modal("hide");

						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Deleted Semester'
							  });
						});
						loadSemester();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Deleting Semester'
							  });
						});
					}
				}
		)
	});
}

// SCRIPT FOR MODULE SCHOOL YEAR //
$(document).ready(function(){
	$("#addSy").on("click",function(){
		$("#modalNewSy").modal("show");
		$("#txtSy").val("");
	});

	$(document).on("click",".editSy",function(){
		var ESyID = $(this).data('id');
		var ESy  = $('#sy'+ESyID).text();
		$("#modalEditSy").modal("show");
		$("#etxtSy").val(ESy);
		$('#btnEditSy').val(ESyID);
	});

	$("#btnEditSy").on("click",function(){
		var ESyID = $(this).val();
		var ESy  = $("#etxtSy").val();
		var mode  = "EditSy";

		editSy(ESyID,ESy,mode);
	});

	$(document).on("click",".delSy", function(){
		var id = $(this).data('id');
		$("#modalDelSy").modal("show");
		$("#btnDelSy").val(id);
	});

	$("#btnDelSy").on("click",function(){
		var DSyID = $(this).val();
		var mode   = "DelSy";

		delSy(DSyID,mode);
	});

})

function loadSchoolYear(){
	$(document).ready(function(){
		$("#sy_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...")

		var syList = $.get("schoolyear_data.php");

		syList.done(function(data){
			$("#sy_content").html(data);
		});

		syList.fail(function(){
			$("#sy_content").html("Error: There was problem loading the page!");
		});
	});
}

function addSchoolYear(){
	$(document).ready(function(){
		var ASy_Value = $("#txtSy").val();
		var mode = "AddNewSy";
		$.post(
			"DataQuery.php",
			{
				ASy_Value:ASy_Value,
				mode:mode
			},
				function(data){
					if(data == 1){
						$("#modalNewSy").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Added New School Year'
							  });
						});
						loadSchoolYear();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Saving New School Year'
							  });
						});
					}
				}
		)
	})
}

function editSy(ESyID,ESy,mode){
	$(document).ready(function(){
		$.post(
			"DataQuery.php",
			{
				ESyID:ESyID,
				ESy:ESy,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditSy").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Updated School Year'
							  });
						});
						loadSchoolYear();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Updating School Year'
							  });
						});
					}
				}
		)
	});
}

function delSy(DSyID,mode){
	$(document).ready(function(){

		$.post(
			"DataQuery.php",
			{
				DSyID:DSyID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelSy").modal("hide");

						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Deleted School Year'
							  });

						});
						loadSchoolYear();
					}else{

						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Deleting School Year'
							  });
						});

					}
				}
		)
	});
}

// SCRIPT FOR MODULE YEAR LEVEL //
$(document).ready(function(){
	$("#addYear").on("click",function(){
		$("#modalNewYear").modal("show");
		$("#txtYear").val("");
	});

	$(document).on("click",".editYear",function(){
		var EYearID = $(this).data('id');
		var EYear  = $('#year'+EYearID).text();
		$("#modalEditYear").modal("show");
		$("#etxtYear").val(EYear);
		$('#btnEditYear').val(EYearID);
	});

	$("#btnEditYear").on("click",function(){
		var EYearID = $(this).val();
		var EYear   = $("#etxtYear").val();
		var mode  = "EditYear";

		editYear(EYearID,EYear,mode);
	});

	$(document).on("click",".delYear", function(){
		var id = $(this).data('id');
		$("#modalDelYear").modal("show");
		$("#btnDelYear").val(id);
	});

	$("#btnDelYear").on("click",function(){
		var DYearID = $(this).val();
		var mode   = "DelYear";

		delYear(DYearID,mode);
	});

})

function loadYearLevel(){
	$(document).ready(function(){
		$("#year_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...")

		var yearList = $.get("yearlevel_data.php");

		yearList.done(function(data){
			$("#year_content").html(data);
		});

		yearList.fail(function(){
			$("#year_content").html("Error: There was problem loading the page!");
		});
	});
}

function AddYear(){
	$(document).ready(function(){
		var AYear = $("#txtYear").val();
		var mode = "AddNewYear";
		$.post(
			"DataQuery.php",
			{
				AYear:AYear,
				mode:mode
			},
				function(data){
					if(data == 1){
						$("#modalNewYear").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Added New Year Level'
							  });
						});
						loadYearLevel();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Saving New Year Level'
							  });
						});
					}
				}
		)
	})
}

function editYear(EYearID,EYear,mode){
	$(document).ready(function(){
		$.post(
			"DataQuery.php",
			{
				EYearID:EYearID,
				EYear:EYear,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditYear").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Year Level Updated Successfully'
							  });
						});
						loadYearLevel();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Updating Year Level'
							  });
						});
					}
				}
		)
	});
}

function delYear(DYearID,mode){
	$(document).ready(function(){

		$.post(
			"DataQuery.php",
			{
				DYearID:DYearID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelYear").modal("hide");

						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Year Level Deleted Successfully'
							  });

						});
						loadYearLevel();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Deleting Year Level'
							  });
						});

					}
				}
		)
	});
}


// SCRIPT FOR MODULE STUDENT PROFILE AND ENROLMET //
$(document).ready(function(){

	$(document).on("click",".editProg",function(){
		var EProgID = $(this).data('id');
		var EProgCode  = $('#code'+EProgID).text();
		var EProgDesc  = $('#desc'+EProgID).text();
		$("#modalEditProgram").modal("show");
		$("#etxtCode").val(EProgCode);
		$("#etxtDesc").val(EProgDesc);
		$('#btnEditProgram').val(EProgID);
	});

	$("#btnEditProgram").on("click",function(){
		var EProgID = $(this).val();
		var EProgCode  = $("#etxtCode").val();
		var EProgDesc  = $("#etxtDesc").val();
		var mode  = "EditProg";

		editProg(EProgID,EProgCode,EProgDesc,mode);
	});

	$(document).on("click",".delProfile", function(){
		var id = $(this).data('id');
		$("#modalDelProfile").modal("show");
		$("#btnDelProfile").val(id);
	});

	$("#btnDelProfile").on("click",function(){
		var DProfID = $(this).val();
		var mode   = "DelProfile";

		delProfile(DProfID,mode);
	});

})

function loadStudentProfile(){
	$(document).ready(function(){

		$("#profile_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...")

		var profile = $.get("report_profile_data.php");

		profile.done(function(data){
			$("#profile_content").html(data);
			return false;
		});

		profile.fail(function(){
			$("#profile_content").html("Error: There was problem loading the page!");
		});
	});
}

function delProfile(DProfID,mode){
	$(document).ready(function(){

		$.post(
			"DataQuery.php",
			{
				DProfID:DProfID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelProfile").modal("hide");
						loadStudentProfile();
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Student Profile Successfully Deleted'
							  });
						});
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Deleting Student Profile'
							  });
						});

					}
				}
		)
	});
}

// SCRIPT FOR MODULE PERIOD //
$(document).ready(function(){

	$(document).on("click",".editPeriod",function(){
		var EPerID 		= $(this).data('id');
		var ECurSY  	= $('#cursy'+EPerID).text();
		var ECurSem  	= $('#cursem'+EPerID).text();

		$("#modalEditPeriod").modal("show");
		$("#esltSem").val(ECurSem).change();
		$("#esltSy").val(ECurSY).change();
		$('#btnEditPeriod').val(EPerID);
	});

	$("#btnEditPeriod").on("click",function(){
		var EPerID 	= $(this).val();
		var ESy   	= $("#esltSy").val();
		var ESem	= $("#esltSem").val();
		var mode  	= "EditPeriod";

		editPeriod(EPerID,ESy,ESem,mode);
	});
})

function loadPeriod(){
	$(document).ready(function(){
		$("#period_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...")

		var periodList = $.get("period_data.php");

		periodList.done(function(data){
			$("#period_content").html(data);
			return false;
		});

		periodList.fail(function(){
			$("#period_content").html("Error: There was problem loading the page!");
		});
	});
}

function editPeriod(EPerID,ESy,ESem,mode){
	$(document).ready(function(){
		$.post(
			"DataQuery.php",
			{
				EPerID:EPerID,
				ESem:ESem,
				ESy:ESy,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditPeriod").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Current Period Updated Successfully'
							  });
						});
						loadPeriod();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Updating Current Period'
							  });
						});
					}
				}
		)
	});
}

// SCRIPT FOR MODULE USER LIST //

$(document).ready(function(){
	$("#addUser").on("click",function(){
		$("#modalNewUser").modal("show");
		$("#txtFname").val("");
		$("#txtLname").val("");
		$("#txtUname").val("");
		$("#txtPass").val("");
	});

	$(document).on("click",".editUser",function(){
		var EUserID = $(this).data('id');
		var EFName	= $('#fname'+EUserID).text();
		var ELName	= $('#lname'+EUserID).text();
		var EUName	= $('#uname'+EUserID).text();
		var EPass	= $('#pass'+EUserID).text();
		$("#modalEditUser").modal("show");
		$("#etxtFname").val(EFName);
		$("#etxtLname").val(ELName);
		$("#etxtUname").val(EUName);
		$("#etxtPass").val(EPass);
		$('#btnEditUser').val(EUserID);
	});

	$("#btnEditUser").on("click",function(){
		var EUserID  = $(this).val();
		var EFname   = $("#etxtFname").val();
		var ELname   = $("#etxtLname").val();
		var EUname   = $("#etxtUname").val();
		var EPass    = $("#etxtPass").val();
		var mode  = "EditUser";

		editUser(EUserID,EFname,ELname,EUname,EPass,mode);
	});

	$(document).on("click",".delUser", function(){
		var UserID = $(this).data('id');
		$("#modalDelUser").modal("show");
		$("#btnDelUser").val(UserID);
	});

	$("#btnDelUser").on("click",function(){
		var DUserID = $(this).val();
		var mode   = "DelUser";

		delUser(DUserID,mode);
	});

})

function loadUser(){
	$(document).ready(function(){
		$("#user_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...")

		var userList = $.get("user_data.php");

		userList.done(function(data){
			$("#user_content").html(data);
			return false;
		});

		userList.fail(function(){
			$("#user_content").html("Error: There was problem loading the page!");
		});
	});
}

function AddUser(){
	$(document).ready(function(){
		var AFName = $("#txtFname").val();
		var ALName = $("#txtLname").val();
		var AUName = $("#txtUname").val();
		var APass  = $("#txtPass").val();
		var mode = "AddNewUser";
		$.post(
			"DataQuery.php",
			{
				AFName:AFName,
				ALName:ALName,
				AUName:AUName,
				APass:APass,
				mode:mode
			},
				function(data){
					if(data == 1){
						$("#modalNewUser").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Added New User'
							  });
						});
						loadUser();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Saving New Year Level'
							  });
						});
					}
				}
		)
	})
}

function editUser(EUserID,EFname,ELname,EUname,EPass,mode){
	$(document).ready(function(){
		$.post(
			"DataQuery.php",
			{
				EUserID:EUserID,
				EFname:EFname,
				ELname:ELname,
				EUname:EUname,
				EPass:EPass,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditUser").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'User Information Updated Successfully'
							  });
						});
						loadUser();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Updating User Information'
							  });
						});
					}
				}
		)
	});
}

function delUser(DUserID,mode){
	$(document).ready(function(){

		$.post(
			"DataQuery.php",
			{
				DUserID:DUserID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelUser").modal("hide");

						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Deleted User'
							  });

						});
						loadUser();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Deleting User'
							  });
						});

					}
				}
		)
	});
}

// SCRIPT FOR MODULE CURRICULUM //
$(document).ready(function(){
	$("#addCur").on("click",function(){
		$("#modalNewCur").modal("show");
		$("#txtcurr").val("");
	});

	$(document).on("click",".editCur",function(){
		var ECurID  = $(this).data('id');
		var ECurr	= $('#cur'+ECurID).text();
		var ECurrSy = $('#sy'+ECurID).text();

		$("#modalEditCur").modal("show");
		$("#etxtcurr").val(ECurr);
		$("#esltSy").val(ECurrSy);
		$('#btnEditCur').val(ECurID);
	});

	$("#btnEditCur").on("click",function(){
		var ECurID  = $(this).val();
		var ECurr   = $("#etxtcurr").val();
		var ESy			= $("#esltSy").val();
		var mode  	= "EditCur";

		editCur(ECurID,ECurr,ESy,mode);
	});

	$(document).on("click",".delCur", function(){
		var CurID = $(this).data('id');
		$("#modalDelCur").modal("show");
		$("#btnDelCur").val(CurID);
	});

	$("#btnDelCur").on("click",function(){
		var DCurID = $(this).val();
		var mode   = "DelCur";

		delCur(DCurID,mode);
	});

})

function loadCurriculum(){
	$(document).ready(function(){
		$("#cur_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...")

		var curList = $.get("curriculum_data.php");

		curList.done(function(data){
			$("#cur_content").html(data);
			return false;
		});

		curList.fail(function(){
			$("#cur_content").html("Error: There was problem loading the page!");
		});
	});
}

function AddCur(){
	$(document).ready(function(){
		var ACurr	= $("#txtcurr").val();
		var ASy 	= $("#sltSy").val();
		var mode 	= "AddNewCurriculum";
		$.post(
			"DataQuery.php",
			{
				ACurr:ACurr,
				ASy:ASy,
				mode:mode
			},
				function(data){
					if(data == 1){
						$("#modalNewCur").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Added New Curriculum'
							  });
						});
						loadCurriculum();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Saving New Curriculum'
							  });
						});
					}
				}
		)
	})
}

function editCur(ECurID,ECurr,ESy,mode){
	$(document).ready(function(){
		$.post(
			"DataQuery.php",
			{
				ECurID:ECurID,
				ECurr:ECurr,
				ESy:ESy,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditCur").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Curriculum Updated Successfully'
							  });
						});
						loadCurriculum();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Updating Curriculum'
							  });
						});
					}
				}
		)
	});
}

function delCur(DCurID,mode){
	$(document).ready(function(){

		$.post(
			"DataQuery.php",
			{
				DCurID:DCurID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelCur").modal("hide");

						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Deleted Curriculum'
							  });

						});
						loadCurriculum();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Deleting User'
							  });
						});

					}
				}
		)
	});
}

// SCRIPT FOR MODULE COURSES //
$(document).ready(function(){
	$("#back").on("click",function(){
		window.location.href = "curriculum.php";
	});

	$("#addCourse").on("click",function(){
		$("#modalNewCourse").modal("show");
		$("#txtcode").val("");
		$("#txttitle").val("");
		$("#txtunit").val("");
		$("#sltSem").val("Select Semester");
		$("#sltYear").val("Select Year Level");
	});

	$(document).on("click",".editCourse",function(){
		var ECourseID = $(this).data('id');
		var ECode	  = $('#code'+ECourseID).text();
		var ETitle	  = $('#title'+ECourseID).text();
		var EUnit	  = $('#unit'+ECourseID).text();
		var ESem	  = $('#sem'+ECourseID).text();
		var EYear	  = $('#year'+ECourseID).text();

		$("#modalEditCourse").modal("show");
		$("#esltSem").val(ESem).change();
		$("#esltYear").val(EYear).change();
		$("#etxtcode").val(ECode);
		$("#etxttitle").val(ETitle);
		$("#etxtunit").val(EUnit);
		$('#btnEditCourse').val(ECourseID);
	});

	$("#btnEditCourse").on("click",function(){
		var ECourseID	= $(this).val();
		var ECode   	= $("#etxtcode").val();
		var ESem 		= $("#esltSem").val();
		var EYear   	= $("#esltYear").val();
		var ETitle  	= $("#etxttitle").val();
		var EUnit   	= $("#etxtunit").val();
		var mode  		= "EditCourse";

		editCourse(ECourseID,ECode,ETitle,EUnit,ESem,EYear,mode);
	});

	$(document).on("click",".delCourse", function(){
		var CourseID = $(this).data('id');
		$("#modalDelCourse").modal("show");
		$("#btnDelCourse").val(CourseID);
	});

	$("#btnDelCourse").on("click",function(){
		var DCourseID = $(this).val();
		var mode   = "DelCourse";

		delCourse(DCourseID,mode);
	});
})

function loadSubject(){
	$(document).ready(function(){
		var id = $("#txtid").val();
		$("#course_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...")
		$.post(
			"course_data.php",
			{
				id:id
			},
				function(data){
					$("#course_content").html(data);
				}
		);
	});
}

function AddCourse(){
	$(document).ready(function(){
		var Aid	  = $("#txtid").val();
		var code  = $("#txtcode").val();
		var title = $("#txttitle").val();
		var unit  = $("#txtunit").val();
		var sem   = $("#sltSem").val();
		var year  = $("#sltYear").val();
		var mode 	= "AddNewCourse";
		$.post(
			"DataQuery.php",
			{
				Aid:Aid,
				code:code,
				title:title,
				unit:unit,
				sem:sem,
				year:year,
				mode:mode
			},
				function(data){
					if(data == 1){
						$("#modalNewCourse").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Added New Subject'
							  });
						});
						loadSubject();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Saving New Subject'
							  });
						});
					}
				}
		)
	})
}

function editCourse(ECourseID,ECode,ETitle,EUnit,ESem,EYear,mode){
	$(document).ready(function(){
		$.post(
			"DataQuery.php",
			{
				ECourseID:ECourseID,
				ECode:ECode,
				ETitle:ETitle,
				EUnit:EUnit,
				ESem:ESem,
				EYear:EYear,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditCourse").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Updated Course Information'
							  });
						});
						loadSubject();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Course Information'
							  });
						});
					}
				}
		)
	});
}

function delCourse(DCourseID,mode){
	$(document).ready(function(){

		$.post(
			"DataQuery.php",
			{
				DCourseID:DCourseID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelCourse").modal("hide");

						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Course Deleted Successfully'
							  });

						});
						loadSubject();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Deleting Course'
							  });
						});
					}
				}
		)
	});
}

// SCRIPT FOR GRADES MODULE //
$(document).ready(function(){
	$(document).on("click","#btngrades",function(){
			window.open('grades_data_import.php', '_blank');
	})

	$(document).on("click",)

		$(document).on("click",".editGrade",function(){
		var EGID 	= $(this).data('id');
		var EGrade	= $('#grade'+EGID).text();

		$("#modalEditGrade").modal("show");
		$("#etxtgrade").val(EGrade);
		$('#btnEditGrade').val(EGID);
	});

	$("#btnEditGrade").on("click",function(){
		var EGID	= $(this).val();
		var EGrade  = $("#etxtgrade").val();
		var mode  	= "EditGrade";

		editGrade(EGID,EGrade,mode);
	});
})

function loadStudent_profile(){
	$(document).ready(function(){
		var studno 	= $("#txtStud").val();
		var sem		= $("#sltSem").val();
		var sy		= $("#sltSy").val();

		$.post(
			"grade_profile_data.php",
			{
				studno:studno,
				sem:sem,
				sy:sy
			},
				function(data){

					$("#stud_info_content").html(data);
				}
		);
	});
}

function loadStudent_grade_details(){
	$(document).ready(function(){
		var studno 	= $("#txtStud").val();
		var sem		= $("#sltSem").val();
		var sy		= $("#sltSy").val();
		$.post(
			"grades_data.php",
			{
				studno:studno,
				sem:sem,
				sy:sy
			},
				function(data){

					$("#stud_grade_details").html(data);
				}
		);
	});
}

function editGrade(EGID,EGrade,mode){
	$(document).ready(function(){
		$.post(
			"DataQuery.php",
			{
				EGID:EGID,
				EGrade:EGrade,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditGrade").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Grade C.Q Successfully Updated'
							  });
						});
						loadStudent_grade_details();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Updating Grade C.Q'
							  });
						});
					}
				}
		)
	});
}

// REPORT CURRICULUM CHECKLIST //
$(document).ready(function(){
	$(document).on("click","#btnfilter",function(){
		filter_loadchecklist();
	})

	$(document).on("click","#btnprint",function(){
		var filter_sem = $("#fsltSem").val();
		var filter_sy	 = $("#fsltSy").val();

		window.open('report_checklist_data_print_list.php?filter_sem='+filter_sem+'&filter_sy='+filter_sy, '_blank');
	})

	$(document).on("click","#btndecrypt",function(){
			$("#modaldecrypt").modal("show");
	})
})

function filter_loadchecklist(){
	$(document).ready(function(){
		var filter_sem = $("#fsltSem").val();
		var filter_sy	 = $("#fsltSy").val();

		$.post(
			"report_checklist_data.php",
			{
				filter_sem:filter_sem,
				filter_sy:filter_sy
			},
				function(data){
					$("#summary_content").html(data);
				}
		)
	})
}

function loadchecklist(){
	$(document).ready(function(){
		var filter_sem = "All"
		var filter_sy	 = "All"

		$.post(
			"report_checklist_data.php",
			{
				filter_sem:filter_sem,
				filter_sy:filter_sy
			},
				function(data){
					$("#summary_content").html(data);
				}
		)
	})
}

//SCRIPT FOR MODULE SUMMARY OF STUDENTS //
$(document).ready(function(){
	$(document).on("click","#btnsum_filter",function(){
		filter_loadsummary();
	})

	$(document).on("click","#btnsum_print",function(){
		var filter_sem = $("#sfsltSem").val();
		var filter_sy	 = $("#sfsltSy").val();

		window.open('report_summary_data_print_list.php?filter_sem='+filter_sem+'&filter_sy='+filter_sy, '_blank');
	})
})

function loadsummary(){
	$(document).ready(function(){
		var filter_sem = "All"
		var filter_sy	 = "All"

		$.post(
			"report_summary_data.php",
			{
				filter_sem:filter_sem,
				filter_sy:filter_sy
			},
				function(data){
					$("#report_summary_content").html(data);
				}
		)
	});
}

function filter_loadsummary(){
	$(document).ready(function(){
		var filter_sem = $("#sfsltSem").val();
		var filter_sy	 = $("#sfsltSy").val();
		$.post(
			"report_summary_data.php",
			{
				filter_sem:filter_sem,
				filter_sy:filter_sy
			},
				function(data){
					$("#report_summary_content").html(data);
				}
		)
	})
}

// SCRIPT FOR REGISTRATION FORM //
$(document).ready(function(){
	$(document).on("click","#btnhome",function(){
		window.location="profile.php";
	})
})

// SCRIPT FOR SAVING PERSONAL DATA //
function pesonal_data(){
	var studNo 	= $("#txtStudNo").val();
	var sem			= $("#sltSem").val();
	var sy			= $("#sltSy").val();
	var curID 	= $("#txtcurID").val();
	var lName		= $("#txtlName").val();
	var fName		= $("#txtfName").val();
	var mName		= $("#txtmName").val();
	var extName = $("#txtextName").val();
	var street	= $("#txtstreet").val();
	var brgy		= $("#txtbgry").val();
	var city		= $("#txtcity").val();
	var prov		= $("#txtprov").val();
	var count 	= $("#txtcountry").val();
	var zip 		= $("#txtzip").val();
	var email 	= $("#txtemail").val();
	var mobile 	= $("#txtmobile").val();
	var pbirth 	= $("#txtpBirth").val();
	var bDate 	= $("#txtbDate").val();
	var citi 		= $("#txtciti").val();
	var stat 		= $("#sltstat").val();
	var sex 		= $("#sltsex").val();
	var occu 		= $("#txtoccu").val();
	var empName = $("#txtempName").val();
	var estreet = $("#txtestreet").val();
	var ebrgy 	= $("#txtebrgy").val();
	var ecity 	= $("#txtecity").val();
	var ezip 		= $("#txtezip").val();
	var eprov 	= $("#txteprov").val();
	var ecount 	= $("#txtecountry").val();
	var emobile = $("#txtemobile").val();
	var plan    = $("#txtplan").val();

	mode = "NewRegister";

	$.post(
		"DataQuery.php",
		{
			studNo:studNo,
			sem:sem,
			sy:sy,
			curID:curID,
			lName:lName,
			fName:fName,
			mName:mName,
			extName:extName,
			street:street,
			brgy:brgy,
			city:city,
			prov:prov,
			count:count,
			zip:zip,
			email:email,
			mobile:mobile,
			pbirth:pbirth,
			bDate:bDate,
			citi:citi,
			stat:stat,
			sex:sex,
			occu:occu,
			empName:empName,
			estreet:estreet,
			ebrgy:ebrgy,
			ecity:ecity,
			ezip:ezip,
			eprov:eprov,
			ecount:ecount,
			emobile:emobile,
			plan:plan,
			mode:mode
		},
			function(data){
				if(data == 1){
					add_educ();
					add_pubres();
					add_unpubres();
					add_membership();
					add_scholarship();
					add_seminars();
					upload_pic();
					last_step();
				}else if (data == 3) {

					$("#modal_duplicate").modal("show");

				}
			}
	)
}

function add_educ(){
	var formdata = $("#add_educ").serialize();
	var studNo 	= $("#txtStudNo").val();
	var mode = "NewEduc";

	$.ajax({
		url		: "DataQuery.php",
		type	: "POST",
		data	: formdata + "&mode="+mode + "&studNo="+studNo,
		cache	: false,
		success: function(data){
			$("#add_educ")[0].reset();
		}
	})
}

function add_pubres(){
	var formdata = $("#add_pubres").serialize();
	var studNo 	= $("#txtStudNo").val();
	var mode = "NewPubRes";

	$.ajax({
		url		: "DataQuery.php",
		type	: "POST",
		data	: formdata + "&mode="+mode + "&studNo="+studNo,
		cache	: false,
		success: function(data){
			$("#add_pubres")[0].reset();
		}
	})
}

function add_unpubres(){
	var formdata = $("#add_unpubres").serialize();
	var studNo 	= $("#txtStudNo").val();
	var mode = "NewUnPubRes";

	$.ajax({
		url		: "DataQuery.php",
		type	: "POST",
		data	: formdata + "&mode="+mode + "&studNo="+studNo,
		cache	: false,
		success: function(data){
			$("#add_unpubres")[0].reset();
		}
	})
}

function add_membership(){
	var formdata = $("#add_organization").serialize();
	var studNo 	= $("#txtStudNo").val();
	var mode = "NewOrgMember";

	$.ajax({
		url		: "DataQuery.php",
		type	: "POST",
		data	: formdata + "&mode="+mode + "&studNo="+studNo,
		cache	: false,
		success: function(data){
			$("#add_organization")[0].reset();
		}
	})
}

//SCRIPT FOR SAVING SCHOLARSHIPS //
function add_scholarship(){
	var formdata = $("#add_awards").serialize();
	var studNo 	= $("#txtStudNo").val();
	var mode = "NewAwards";

	$.ajax({
		url		: "DataQuery.php",
		type	: "POST",
		data	: formdata + "&mode="+mode + "&studNo="+studNo,
		cache	: false,
		success: function(data){
			$("#add_awards")[0].reset();
		}
	})
}

// SCRIPT FOR SAVING SEMINARS //
function add_seminars(){
	var formdata = $("#add_training").serialize();
	var studNo 	= $("#txtStudNo").val();
	var mode = "NewSeminar";
	$.ajax({
		url		: "DataQuery.php",
		type	: "POST",
		data	: formdata + "&mode="+mode + "&studNo="+studNo,
		cache	: false,
		success: function(data){
			$("#add_training")[0].reset();
		}
	})
}

// SCRIPT FOR OPENING THE LAST STEP OF THE STEPPER AFTER SUCCESSFULLY SAVING DATA //
function last_step(){
	function triggerClick(elem) {
			$(elem).click();
	}

	var $progressWizard = $('.stepper'),
			$tab_active,
			$tab_prev,
			$tab_next,
			$btn_prev = $progressWizard.find('.prev-step'),
			$btn_next = $progressWizard.find('.next-step'),
			$tab_toggle = $progressWizard.find('[data-toggle="tab"]'),
			$tooltips = $progressWizard.find('[data-toggle="tab"][title]');

	$tab_active = $progressWizard.find('.active');

	$tab_active.next().removeClass('disabled');

	$tab_next = $tab_active.next().find('a[data-toggle="tab"]');
	triggerClick($tab_next);
}

// SCRIPT FOR UPLOADING PICTURE TO DATABASE //
function upload_pic(){
	var studNo 	= $("#txtStudNo").val();
	var mode = "UploadPic";
	var image = $('#customFile');
	var image_data = image.prop('files')[0];
	var formData = new FormData();
	formData.append("studNo",$("#txtStudNo").val());
	formData.append('image', image_data);
	$.ajax({
		url: "UploadQuery.php",
		type: "POST",
		data: formData,
		contentType:false,
		cache: false,
		processData: false,
		success: function(data){
		}
	});
}

// SCRIPT FOR PREVIEW UPLOADED IMAGE //
function preview_image(event){
	var reader =  new FileReader();
	reader.onload = function(){
		var output = document.getElementById('output_image');
		output.src = reader.result;
	}
	reader.readAsDataURL(event.target.files[0]);
}

$(document).ready(function(){
	$("#btndecrypt_code").on("click", function(){
		decrypt_data();
	})
})

function decrypt_data(){
	$(document).ready(function(){
		var code = $("#txtcode").val();
		var mode = "Decrypt";

		$.post(
			"DataQuery.php",
			{
				code:code,
				mode:mode
			},
				function(data){
					if(data = 1){
						loadchecklist();
					}else{

					}
				}
		)
	})
}


// SCRIPT FOR EDITING STUDENT PROFILE //

$(document).ready(function(){
	$(document).on("click","#btnEdit",function(){
		$( ".pdata" ).prop( "disabled", false );
		$("#btnEdit").hide();
		$("#control_button").html("<a href='#' class='btn btn-primary btn-sm' id='btnSave'><span class='fas fa-save'></span><b> Save</b></a> &nbsp;<a href='#' class='btn btn-danger btn-sm' id='btnCancel'><span class='fas fa-ban'></span><b> Cancel</b></a>")
	})

	$(document).on("click","#btnCancel",function(){
			$( ".pdata" ).prop( "disabled", true );
			$("#btnSave").hide();
			$("#btnCancel").hide();
			$("#control_button").html("	<a href='#' class='btn btn-warning btn-sm' id='btnEdit'><span class='fas fa-edit'></span><b> Edit</b></a>")
	})

	$(document).on("click","#btnhome",function(){
		window.location="profile.php";
	})

	$(document).on("click","#btnSave",function(){
		EditProfile();
	})
})

function EditProfile(){
	var studNo 	= $("#txtstudNo").val();
	var lName		= $("#txtlName").val();
	var fName		= $("#txtfName").val();
	var mName		= $("#txtmName").val();
	var extName = $("#txtextName").val();
	var street	= $("#txtstreet").val();
	var count 	= $("#txtcountry").val();
	var zip 		= $("#txtzip").val();
	var email 	= $("#txtemail").val();
	var mobile 	= $("#txtmobile").val();
	var pbirth 	= $("#txtpBirth").val();
	var bDate 	= $("#txtbDate").val();
	var citi 		= $("#txtciti").val();
	var stat 		= $("#sltstat").val();
	var sex 		= $("#sltsex").val();
	var occu 		= $("#txtoccu").val();
	var empName = $("#txtempName").val();
	var estreet = $("#txtestreet").val();
	var ezip 		= $("#txtezip").val();
	var ecount 	= $("#txtecountry").val();
	var emobile = $("#txtemobile").val();
	var plan    = $("#txtplan").val();

	mode = "EditProfile";

	$.post(
		"DataQuery.php",
		{
			studNo:studNo,
			lName:lName,
			fName:fName,
			mName:mName,
			extName:extName,
			street:street,
			count:count,
			zip:zip,
			email:email,
			mobile:mobile,
			pbirth:pbirth,
			bDate:bDate,
			citi:citi,
			stat:stat,
			sex:sex,
			occu:occu,
			empName:empName,
			estreet:estreet,
			ezip:ezip,
			ecount:ecount,
			emobile:emobile,
			mode:mode
		},
			function(data){
				if(data == 2){
					$(function() {
						var Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						});
							Toast.fire({
							icon: 'success',
							title: 'Profile Successfully Updated'
							});
					});
					$(".pdata" ).prop( "disabled", true );
					$("#btnSave").hide();
					$("#btnCancel").hide();
					$("#control_button").html("	<a href='#' class='btn btn-warning btn-sm' id='btnEdit'><span class='fas fa-edit'></span><b> Edit</b></a>")
				}else {
					$(function() {
						var Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						});
							Toast.fire({
							icon: 'error',
							title: 'Error Updating Profile'
							});
					});
				}

			}
	)
}

//EDUCATIONAL BACKGROUND //
$(document).ready(function(){
	$(document).on("click","#btnAddEduc",function(){
		$("#modalAddEduc").modal("show");
	})

	$("#btnSaveEduc").on("click",function(){
		var formdata = $("#add_educ").serialize();
		var studNo 	= $("#txtstudNo").val();
		var mode = "NewEduc";

		$.ajax({
			url		: "DataQuery.php",
			type	: "POST",
			data	: formdata + "&mode="+mode + "&studNo="+studNo,
			cache	: false,
			success: function(){
				$("#add_educ")[0].reset();
				$("#modalAddEduc").modal("hide");
					$(function() {
						var Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						})
							Toast.fire({
							icon: 'success',
							title: 'New Educational Background Successfully Added'
							})
					})
					$("#educ_data").load(location.href + " #educ_data");
			},
			error: function(){
				$(function() {
					var Toast = Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					})
						Toast.fire({
						icon: 'error',
						title: 'Error Adding New Educational Background'
						})
				})
			}
		})
	})

	$(document).on("click",".btndelEduc",function(){
		var scID = $(this).data('id');
		$("#modalDelEduc").modal("show");
		$("#btnDel_Educ").val(scID);
	})

	$("#btnDel_Educ").on("click",function(){
		var DscID = $(this).val();
		var mode   = "DelEduc";

		$.post(
			"DataQuery.php",
			{
				DscID:DscID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelEduc").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Educational Background Successfully Deleted'
							  });
						});
						$("#educ_data").load(location.href + " #educ_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Deleting Educational Background'
							  });
						});
					}
				}
		)
	});

	$(document).on("click",".btneditEduc",function(){
		var EscID 		= $(this).data('id');
		var EscName 	= $('#scName'+EscID).text();
		var EscAdd		= $('#scAdd'+EscID).text();
		var EscMajor 	= $('#scMajor'+EscID).text();
		var EscDegree	= $('#scDegree'+EscID).text();
		var EscDate 	= $('#scDate'+EscID).text();

		$("#modalEditEduc").modal("show");
		$("#etxtschoolName").val(EscName);
		$("#etxtschoolAdd").val(EscAdd);
		$("#etxtmajor").val(EscMajor);
		$("#etxtdegree").val(EscDegree);
		$("#etxtdatere").val(EscDate);
		$('#btnEdit_Educ').val(EscID);
	})

	$("#btnEdit_Educ").on("click",function(){
		var EscID 		= $(this).val();
		var EscName 	= $("#etxtschoolName").val();
		var EscAdd		= $("#etxtschoolAdd").val();
		var EscMajor 	= $("#etxtmajor").val();
		var EscDegree	= $("#etxtdegree").val();
		var EscDate 	= $("#etxtdatere").val();

		var mode  = "EditEduc";

		$.post(
			"DataQuery.php",
			{
				EscID:EscID,
				EscName:EscName,
				EscAdd:EscAdd,
				EscMajor:EscMajor,
				EscDegree:EscDegree,
				EscDate:EscDate,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditEduc").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Educational Background Updated Successfully'
							  });
						});
						$("#educ_data").load(location.href + " #educ_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Updating Educational Background'
							  });
						});
					}
				}
		)
	})
})

//PUBLISHED RESEARCHES //
$(document).ready(function(){
	$(document).on("click","#btnAddPub",function(){
		$("#modalAddPub").modal("show");
	})

	$("#btnSave_Pub").on("click",function(){
		var formdata = $("#add_pubres").serialize();
		var studNo 	= $("#txtstudNo").val();
		var mode = "NewPubRes";

		$.ajax({
			url		: "DataQuery.php",
			type	: "POST",
			data	: formdata + "&mode="+mode + "&studNo="+studNo,
			cache	: false,
			success: function(){
				$("#add_pubres")[0].reset();
				$("#modalAddPub").modal("hide");
					$(function() {
						var Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						})
							Toast.fire({
							icon: 'success',
							title: 'Successfully Added New Published Research'
							})
					})
						$("#pub_data").load(location.href + " #pub_data");
			},
			error: function(){
				$(function() {
					var Toast = Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					})
						Toast.fire({
						icon: 'error',
						title: 'Error Adding New Published Research'
						})
				})
			}
		})
	})

	$(document).on("click",".btndelPub",function(){
		var PubID = $(this).data('id');
		$("#modalDelPub").modal("show");
		$("#btnDel_Pub").val(PubID);
	})

	$("#btnDel_Pub").on("click",function(){
		var DPubID = $(this).val();
		var mode   = "DelPubRes";

		$.post(
			"DataQuery.php",
			{
				DPubID:DPubID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelPub").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Published Research Successfully Deleted'
							  });
						});
						$("#pub_data").load(location.href + " #pub_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Deleting Published Research'
							  });
						});
					}
				}
		)
	});

	$(document).on("click",".btneditPub",function(){
		var EPubID 		= $(this).data('id');
		var EartTitle 	= $('#Title'+EPubID).text();
		var EpubTitle		= $('#TitlePub'+EPubID).text();
		var EpubYear 	= $('#PubYear'+EPubID).text();

		$("#modalEditPub").modal("show");
		$("#etxttitle").val(EartTitle);
		$("#etxtpub").val(EpubTitle);
		$("#etxtyearpub").val(EpubYear);
		$('#btnEdit_Pub').val(EPubID);

	})

	$("#btnEdit_Pub").on("click",function(){
		var EPubID 			= $(this).val();
		var EartTitle 	= $("#etxttitle").val();
		var EpubTitle		= $("#etxtpub").val();
		var EpubYear 		= $("#etxtyearpub").val();

		var mode  = "EditPub";

		$.post(
			"DataQuery.php",
			{
				EPubID:EPubID,
				EartTitle:EartTitle,
				EpubTitle:EpubTitle,
				EpubYear:EpubYear,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditPub").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Educational Background Updated Successfully'
							  });
						});
						$("#pub_data").load(location.href + " #pub_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Updating Educational Background'
							  });
						});
					}
				}
		)
	})
})

//UNPUBLISHED RESEARCHES //
$(document).ready(function(){
	$(document).on("click","#btnAddUnpub",function(){
		$("#modalAddUnpub").modal("show");
	})

	$("#btnSaveUnpub").on("click",function(){
		var formdata = $("#add_unpubres").serialize();
		var studNo 	= $("#txtstudNo").val();
		var mode = "NewUnPubRes";

		$.ajax({
			url		: "DataQuery.php",
			type	: "POST",
			data	: formdata + "&mode="+mode + "&studNo="+studNo,
			cache	: false,
			success: function(data){
				$("#add_unpubres")[0].reset();
				$("#modalAddUnpub").modal("hide");
					$(function() {
						var Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						})
							Toast.fire({
							icon: 'success',
							title: 'Successfully Added New Unpublished Research'
							})
					})
						$("#pub_data").load(location.href + " #pub_data");
			},
			error: function(){
				$(function() {
					var Toast = Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					})
						Toast.fire({
						icon: 'error',
						title: 'Error Adding New Unpublished Research'
						})
				})
			}
		})
	})

	$(document).on("click",".btndelUnpub",function(){
		var UnpubID = $(this).data('id');
		$("#modalDelUnpub").modal("show");
		$("#btnDel_Unpub").val(UnpubID);
	})

	$("#btnDel_Unpub").on("click",function(){
		var DUnpubID = $(this).val();
		var mode   = "DelUnPubRes";

		$.post(
			"DataQuery.php",
			{
				DUnpubID:DUnpubID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelUnpub").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Unpublished Research Successfully Deleted'
							  });
						});
						$("#pub_data").load(location.href + " #pub_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Deleting Unpublished Research'
							  });
						});
					}
				}
		)
	})

	$(document).on("click",".btneditUnpub",function(){
		var EUnPubID 		= $(this).data('id');
		var ETitle 	= $('#desc'+EUnPubID).text();
		$("#modalEditUnpub").modal("show");
		$("#etxtunpub_res").val(ETitle);
		$("#btnEdit_Unpub").val(EUnPubID);
	})

	$("#btnEdit_Unpub").on("click",function(){
		var EUnPubID 		= $(this).val();
		var ETitle		 	= $("#etxtunpub_res").val();

		var mode  = "EditUnPub";

		$.post(
			"DataQuery.php",
			{
				EUnPubID:EUnPubID,
				ETitle:ETitle,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditUnpub").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Unpublished Research Updated Successfully'
							  });
						});
						$("#pub_data").load(location.href + " #pub_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Updating Unpublished Research'
							  });
						});
					}
				}
		)
	})
})

//ORGANIZATIONS //
$(document).ready(function(){
	$(document).on("click","#btnAddOrg",function(){
		$("#modalAddOrg").modal("show");
	})

	$("#btnSaveOrg").on("click",function(){
		var formdata = $("#add_organization").serialize();
		var studNo 	= $("#txtstudNo").val();
		var mode = "NewOrgMember";

		$.ajax({
			url		: "DataQuery.php",
			type	: "POST",
			data	: formdata + "&mode="+mode + "&studNo="+studNo,
			cache	: false,
			success: function(data){
				$("#add_organization")[0].reset();
				$("#modalAddOrg").modal("hide");
					$(function() {
						var Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						})
							Toast.fire({
							icon: 'success',
							title: 'Successfully Added New Organizations'
							})
					})
						$("#org_data").load(location.href + " #org_data");
			},
			error: function(){
				$(function() {
					var Toast = Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					})
						Toast.fire({
						icon: 'error',
						title: 'Error Adding New Organizations'
						})
				})
			}
		})
	})

	$(document).on("click",".btndelOrg",function(){
		var DOrgID = $(this).data('id');
		$("#modalDelOrg").modal("show");
		$("#btnDel_Org").val(DOrgID);
	})

	$("#btnDel_Org").on("click",function(){
		var DOrgID = $(this).val();
		var mode   = "DelOrg";

		$.post(
			"DataQuery.php",
			{
				DOrgID:DOrgID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelOrg").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Organization Successfully Deleted'
							  });
						});
						$("#org_data").load(location.href + " #org_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Deleting Unpublished Research'
							  });
						});
					}
				}
		)
	})

	$(document).on("click",".btneditOrg",function(){
		var EOrgID	= $(this).data('id');
		var EOrg		= $('#orgDesc'+EOrgID).text();
		$("#modalEditOrg").modal("show");
		$("#etxtorg").val(EOrg);
		$("#btnEdit_Org").val(EOrgID)
	})

	$("#btnEdit_Org").on("click",function(){
		var EOrgID 	= $(this).val();
		var EOrg	 	= $("#etxtorg").val();
		var mode  = "EditOrg";

		$.post(
			"DataQuery.php",
			{
				EOrgID:EOrgID,
				EOrg:EOrg,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditOrg").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Organization Updated Successfully'
							  });
						});
						$("#org_data").load(location.href + " #org_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Updating Organization'
							  });
						});
					}
				}
		)
	})
})

//SEMINAR //
$(document).ready(function(){
	$(document).on("click","#btnAddSem",function(){
		$("#modalAddSem").modal("show");
	})

	$("#btnSaveSem").on("click",function(){
		var formdata = $("#add_training").serialize();
		var studNo 	= $("#txtstudNo").val();
		var mode = "NewSeminar";
		$.ajax({
			url		: "DataQuery.php",
			type	: "POST",
			data	: formdata + "&mode="+mode + "&studNo="+studNo,
			cache	: false,
			success: function(data){
				$("#add_training")[0].reset();
				$("#modalAddSem").modal("hide");
					$(function() {
						var Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						})
							Toast.fire({
							icon: 'success',
							title: 'Successfully Added New Seminar or Training'
							})
					})
						$("#sem_data").load(location.href + " #sem_data");
			},
			error: function(){
				$(function() {
					var Toast = Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					})
						Toast.fire({
						icon: 'error',
						title: 'Error Adding New Seminar or Training'
						})
				})
			}
		})
	})

	$(document).on("click",".btndelSem",function(){
		var DSemID = $(this).data('id');
		$("#modalDelSem").modal("show");
		$("#btnDel_Sem").val(DSemID);
	})

	$("#btnDel_Sem").on("click",function(){
		var DSemID = $(this).val();
		var mode   = "DelSem";

		$.post(
			"DataQuery.php",
			{
				DSemID:DSemID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelSem").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Seminar Or Training Successfully Deleted'
							  });
						});
						$("#sem_data").load(location.href + " #sem_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'Error Deleting Seminar Or Training'
							  });
						});
					}
				}
		)
	})

	$(document).on("click",".btneditSem",function(){
		var ESemID 	= $(this).data('id');
		var Train		= $('#train'+ESemID).text();
		$("#modalEditSem").modal("show");
		$("#etxttraining").val(Train);
		$("#btnEdit_Sem").val(ESemID);
	})

	$("#btnEdit_Sem").on("click",function(){
		var ESemID 		= $(this).val();
		var ETrain		= $("#etxttraining").val();

		var mode  = "EditSem";

		$.post(
			"DataQuery.php",
			{
				ESemID:ESemID,
				ETrain:ETrain,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditSem").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000
							});
								Toast.fire({
								icon: 'success',
								title: 'Seminar Or Training Updated Successfully'
								});
						});
						$("#sem_data").load(location.href + " #sem_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000
							});
								Toast.fire({
								icon: 'error',
								title: 'Error Updating Seminar Or Training'
								});
						});
					}
				}
		)
	})
})

//SCHOLARSHIPS //
$(document).ready(function(){
	$(document).on("click","#btnAddScho",function(){
		$("#modalAddScho").modal("show");
	})

	$("#btnSaveScho").on("click",function(){
		var formdata = $("#add_awards").serialize();
		var studNo 	= $("#txtstudNo").val();
		var mode = "NewAwards";

		$.ajax({
			url		: "DataQuery.php",
			type	: "POST",
			data	: formdata + "&mode="+mode + "&studNo="+studNo,
			cache	: false,
			success: function(data){
				$("#add_awards")[0].reset();
				$("#modalAddScho").modal("hide");
					$(function() {
						var Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						})
							Toast.fire({
							icon: 'success',
							title: 'Successfully Added New Award Or Scholarship'
							})
					})
					$("#award_data").load(location.href + " #award_data");
			},
			error: function(){
				$(function() {
					var Toast = Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					})
						Toast.fire({
						icon: 'error',
						title: 'Error Adding New Award Or Scholarship'
						})
				})
			}
		})
	})

	$(document).on("click",".btndelScho",function(){
		var SchoID = $(this).data('id');
		$("#modalDelScho").modal("show");
		$("#btnDel_Scho").val(SchoID);
	})

	$("#btnDel_Scho").on("click",function(){
		var DSchoID = $(this).val();
		var mode   = "DelScho";

		$.post(
			"DataQuery.php",
			{
				DSchoID:DSchoID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelScho").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000
							});
								Toast.fire({
								icon: 'success',
								title: 'Organization Successfully Deleted'
								});
						});
						$("#award_data").load(location.href + " #award_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000
							});
								Toast.fire({
								icon: 'error',
								title: 'Error Deleting Unpublished Research'
								});
						});
					}
				}
		)
	})

	$(document).on("click",".btneditScho",function(){
		var ESchoID	= $(this).data('id');
		var EScho		= $('#award'+ESchoID).text();
		$("#modalEditScho").modal("show");
		$("#etxtprize").val(EScho);
		$("#btnEdit_Scho").val(ESchoID);
	})

	$("#btnEdit_Scho").on("click",function(){
		var ESchoID 	= $(this).val();
		var EScho	 	= $("#etxtprize").val();
		var mode  = "EditScho";

		$.post(
			"DataQuery.php",
			{
				ESchoID:ESchoID,
				EScho:EScho,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditScho").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000
							});
								Toast.fire({
								icon: 'success',
								title: 'Award or scholarship Updated Successfully'
								});
						});
						$("#award_data").load(location.href + " #award_data");
					}else{
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000
							});
								Toast.fire({
								icon: 'error',
								title: 'Error Updating Award or scholarship'
								});
						});
					}
				}
		)
	})
})

// SCRIPT FOR PLAN //
$(document).ready(function(){
	$(document).on("click","#btnEditPlan",function(){
		$( ".data_plan" ).prop( "disabled", false );
		$("#btnEditPlan").hide();
		$("#btnControl").html("<a href='#' class='btn btn-primary btn-sm' id='btnSavePlan'><span class='fas fa-save'></span><b> Save</b></a> &nbsp;<a href='#' class='btn btn-danger btn-sm' id='btnCancelPlan'><span class='fas fa-ban'></span><b> Cancel</b></a>")
	})

	$(document).on("click","#btnCancelPlan",function(){
			$( ".data_plan" ).prop( "disabled", true );
			$("#btnSavePlan").hide();
			$("#btnCancelPlan").hide();
			$("#btnControl").html("	<a href='#' class='btn btn-warning btn-sm' id='btnEditPlan'><span class='fas fa-edit'></span><b> Edit</b></a>")
	})

	$(document).on("click","#btnSavePlan",function(){
		var studNo 	= $("#txtstudNo").val();
		var plan    = $("#txtplan").val();

		mode = "EditPlan";

		$.post(
			"DataQuery.php",
			{
				studNo:studNo,
				plan:plan,
				mode:mode
			},
				function(data){
					if(data == 2){
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000
							});
								Toast.fire({
								icon: 'success',
								title: 'Plan Successfully Updated'
								});
						});
						$(".data_plan" ).prop( "disabled", true );
						$("#btnSavePlan").hide();
						$("#btnCancelPlan").hide();
						$("#btnControl").html("	<a href='#' class='btn btn-warning btn-sm' id='btnEditPlan'><span class='fas fa-edit'></span><b> Edit</b></a>")
					}else {
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000
							});
								Toast.fire({
								icon: 'error',
								title: 'Error Updating Plan'
								});
						});
					}
				}
		)
	})
})

$(document).ready(function(){
	$(document).on("click","#btnEditPic",function(){
		var studNo 	= $("#txtstudNo").val();
		var mode = "UploadPic";
		var image = $('#customFile');
		var image_data = image.prop('files')[0];

		var formData = new FormData();
		formData.append("studNo",$("#txtstudNo").val());
		formData.append('image', image_data);
		$.ajax({
			url: "UploadQuery.php",
			type: "POST",
			data: formData,
			contentType:false,
			cache: false,
			processData: false,
			success: function(data){
					$(function() {
						var Toast = Swal.mixin({
							toast: true,
							position: 'top-end',
							showConfirmButton: false,
							timer: 3000
						})
							Toast.fire({
							icon: 'success',
							title: 'Successfully Added New Seminar or Training'
							})
					})
						$("#pic_data").load(location.href + " #pic_data");
			},
			error: function(){
				$(function() {
					var Toast = Swal.mixin({
						toast: true,
						position: 'top-end',
						showConfirmButton: false,
						timer: 3000
					})
						Toast.fire({
						icon: 'error',
						title: 'Error Adding New Seminar or Training'
						})
				})
			}
		});
	})
})


// SCRIPT FOR MODULE COURSES //
$(document).ready(function(){
	$("#back").on("click",function(){
		window.location.href = "curriculum.php";
	});

	$(document).on("click",".btnOffer",function(){
		var subjID 		= $(this).data('id');
		var subjCode 	= $('#code'+subjID).text();
		var subjDesc	= $('#desc'+subjID).text();
		var subjUnit	= $('#unit'+subjID).text();
		var curID			= $("#txtcurID").val();
		var mode			= "Offer";

		$.post(
			"DataQuery.php",
			{
				subjID:subjID,
				subjCode:subjCode,
				subjDesc:subjDesc,
				subjUnit:subjUnit,
				curID:curID,
				mode:mode
			},
				function(data){
					if(data == 1){
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000
							});
								Toast.fire({
								icon: 'success',
								title: 'Successfully Added New Subject'
								});
						});
					location.reload();
					}else{
						$(function() {
							var Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000
							});
								Toast.fire({
								icon: 'error',
								title: 'There was an Error Saving New Subject'
								});
						});
					}
				}
		)
	})

	$(document).on("click",".editOffer",function(){
		var EOfferID = $(this).data('id');
		var ECode	  = $('#code'+EOfferID).text();
		var ETitle	  = $('#title'+EOfferID).text();
		var EUnit	  = $('#unit'+EOfferID).text();
		var ESem	  = $('#sem'+EOfferID).text();
		var EYear	  = $('#year'+EOfferID).text();

		$("#modalEditOffer").modal("show");
		$("#esltSem").val(ESem).change();
		$("#esltYear").val(EYear).change();
		$("#etxtcode").val(ECode);
		$("#etxttitle").val(ETitle);
		$("#etxtunit").val(EUnit);
		$('#btnEditOffer').val(EOfferID);
	});

	$("#btnEditOffer").on("click",function(){
		var EOfferID	= $(this).val();
		var ECode   	= $("#etxtcode").val();
		var ESem 		= $("#esltSem").val();
		var EYear   	= $("#esltYear").val();
		var ETitle  	= $("#etxttitle").val();
		var EUnit   	= $("#etxtunit").val();
		var mode  		= "EditOffer";

		editOffer(EOfferID,ECode,ETitle,EUnit,ESem,EYear,mode);
	});

	$(document).on("click",".delOffer", function(){
		var DOfferID = $(this).data('id');
		$("#modalDelOffer").modal("show");
		$("#btnDelOffer").val(DOfferID);

	});

	$("#btnDelOffer").on("click",function(){
		var DOfferID = $(this).val();
		var mode   = "DelOffer";

		delOffer(DOfferID,mode);
	});
})

function loadSubject_Offered(){
	$(document).ready(function(){
		var id = $("#txtid").val();
		$("#offered_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...")
		$.post(
			"subject_offered_data.php",
			{
				id:id
			},
				function(data){
					$("#offered_content").html(data);
				}
		);
	});
}

function AddCourse(){
	$(document).ready(function(){
		var Aid	  = $("#txtid").val();
		var code  = $("#txtcode").val();
		var title = $("#txttitle").val();
		var unit  = $("#txtunit").val();
		var sem   = $("#sltSem").val();
		var year  = $("#sltYear").val();
		var mode 	= "AddNewCourse";
		$.post(
			"DataQuery.php",
			{
				Aid:Aid,
				code:code,
				title:title,
				unit:unit,
				sem:sem,
				year:year,
				mode:mode
			},
				function(data){
					if(data == 1){
						$("#modalNewCourse").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Added New Subject'
							  });
						});
						loadSubject();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Saving New Subject'
							  });
						});
					}
				}
		)
	})
}

function editOffer(EOfferID,ECode,ETitle,EUnit,ESem,EYear,mode){
	$(document).ready(function(){
		$.post(
			"DataQuery.php",
			{
				EOfferID:EOfferID,
				ECode:ECode,
				ETitle:ETitle,
				EUnit:EUnit,
				ESem:ESem,
				EYear:EYear,
				mode:mode
			},
				function(data){
					if(data == 2){
						$("#modalEditOffer").modal("hide");
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Successfully Updated Offered Subject'
							  });
						});
						loadSubject_Offered();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Updating Offered Subject'
							  });
						});
					}
				}
		)
	});
}

function delOffer(DOfferID,mode){
	$(document).ready(function(){

		$.post(
			"DataQuery.php",
			{
				DOfferID:DOfferID,
				mode:mode
			},
				function(data){
					if(data == 3){
						$("#modalDelOffer").modal("hide");

						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'success',
								title: 'Courses Offered Deleted Successfully'
							  });

						});
						loadSubject_Offered();
					}else{
						$(function() {
							var Toast = Swal.mixin({
							  toast: true,
							  position: 'top-end',
							  showConfirmButton: false,
							  timer: 3000
							});
							  Toast.fire({
								icon: 'error',
								title: 'There was an Error Deleting Courses Offered'
							  });
						});
					}
				}
		)
	});
}

function loadChart(){
	$(document).ready(function(){
		$("#chart_data").html("enrolment_trends_data.php");
	});
}
