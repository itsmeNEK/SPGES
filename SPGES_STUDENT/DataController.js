// SCRIPT FOR MODULE STUDENT PROFILE //
$(document).ready(function(){
	$(document).on("click",".addEnr",function(){
			window.location = "registration_form.php";
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

function enrForm(){
	$(document).ready(function(){
		var id = $("#txtstudNo").val();
		$("#enr_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...>")
		$.post(
			"profile_data.php",
			{
				id:id
			},
				function(data){
					$("#enr_content").html(data);
				}
		);
	});
}


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


// SCRIPT FOR MODULE REGISTRATION_FORM //

$(document).ready(function(){
	var i = 1;
 $(document).on("click","#add",function(){
		i++;
	 $("#dynamic_field").append('<tr id="row'+i+'"><td><input type="text" name="txtschoolName[]" class="form-control form-control-sm" id="txtschoolName"></td><td><input type="text" name="txtschoolAdd[]" class="form-control form-control-sm" id="txtschoolAdd"></td><td><input type="text" name="txtmajor[]" class="form-control form-control-sm" id="txtmajor"></td><td><input type="text" name="txtdegree[]" class="form-control form-control-sm" id="txtdegree"></td><td><input type="text" name="txtdatere[]" class="form-control form-control-sm" id="txtdatere"></td><td><a class="btn btn-danger btn-sm remove" id="'+i+'"><span class="fas fa-minus"></span></a></td></tr>');
 });

 $(document).on("click",".remove",function(){
	 var btn_id = $(this).attr("id");
	 $('#row'+btn_id+'').remove();
 });

 var a = 1;
 $(document).on("click","#add_pub",function(){
		a++;
	 $("#pub_res_field").append('<tr id="row'+a+'"><td><input type="text" name="txttitle[]" class="form-control form-control-sm" id="txttitle[]"></td><td><input type="text" name="txtpub[]" class="form-control form-control-sm" id="txtpub[]"></td><td><input type="text" name="txtyearpub[]" class="form-control form-control-sm" id="txtyearpub[]"></td><td><a class="btn btn-danger btn-sm remove_pub" id="'+a+'"><span class="fas fa-minus"></span></a></td></tr>');
 });

 $(document).on("click",".remove_pub",function(){
	 var btn_id = $(this).attr("id");
	 $('#row'+btn_id+'').remove();
 });

 var b = 1;
 $(document).on("click","#add_unpub",function(){
		b++;
	 $("#unpub_res_field").append('<tr id="row'+b+'"><td><input type="text" name="txtunpub_res[]" class="form-control form-control-sm" id="txtunpub_res[]"></td><td><a class="btn btn-danger btn-sm remove_unpub" id="'+b+'"><span class="fas fa-minus"></span></a></td></tr>');
 });

 $(document).on("click",".remove_unpub",function(){
	 var btn_id = $(this).attr("id");
	 $('#row'+btn_id+'').remove();
 });

 var c = 1;
 $(document).on("click","#add_org",function(){
		c++;
	 $("#org_field").append('<tr id="row'+c+'"><td><input type="text" name="txtorg[]" class="form-control form-control-sm" id="txtorg[]"></td><td><a class="btn btn-danger btn-sm remove_org" id="'+c+'"><span class="fas fa-minus"></span></a></td></tr>');
 });

 $(document).on("click",".remove_org",function(){
	 var btn_id = $(this).attr("id");
	 $('#row'+btn_id+'').remove();
 });

 var d = 1;
 $(document).on("click","#add_award",function(){
		d++;
	 $("#awards_field").append('<tr id="row'+d+'"><td><input type="text" name="txtprize[]" class="form-control form-control-sm" id="txtprize[]"></td><td><a class="btn btn-danger btn-sm remove_award" id="'+d+'"><span class="fas fa-minus"></span></a></td></tr>');
 });

 $(document).on("click",".remove_award",function(){
	 var btn_id = $(this).attr("id");
	 $('#row'+btn_id+'').remove();
 });

 var e = 1;
 $(document).on("click","#add_train",function(){
		e++;
	 $("#training_field").append('<tr id="row'+e+'"><td><input type="text" name="txttraining[]" class="form-control form-control-sm" id="txttraining[]"></td><td><a class="btn btn-danger btn-sm remove_award" id="'+e+'"><span class="fas fa-minus"></span></a></td></tr>');
 });

 $(document).on("click",".remove_train",function(){
	 var btn_id = $(this).attr("id");
	 $('#row'+btn_id+'').remove();
 });

})

function pesonal_data(){
	var studNo 	= $("#txtstudNo").val();
	var sem			= $("#txtcursem").val();
	var sy			= $("#txtcursy").val();
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
	var studNo 	= $("#txtstudNo").val();
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
	var studNo 	= $("#txtstudNo").val();
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
	var studNo 	= $("#txtstudNo").val();
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
	var studNo 	= $("#txtstudNo").val();
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

function add_scholarship(){
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
		}
	})
}

function add_seminars(){
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
		}
	})
}

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


function upload_pic(){
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
		}
	});

}

function preview_image(event){
	var reader =  new FileReader();
	reader.onload = function(){
		var output = document.getElementById('output_image');
		output.src = reader.result;
	}
	reader.readAsDataURL(event.target.files[0]);
}

// SCRIPT FOR MODULE COURSE OFFERED //
function loadsubj_offered(){
	$(document).ready(function(){
		var sy  = $("#txtcursy").val();
		var sem = $("#txtcursem").val();
		$("#subj_offered").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...")
		$.post(
			"course_offered_data.php",
			{
				sy:sy,
				sem:sem
			},
				function(data){
					$("#subj_offered").html(data);
				}
		);

	});
}

// SCRIPT FOR MODULE SUMMARY OF ENROLLED COURSES //
function enr_course(){
	$(document).ready(function(){
		var id = $("#txtstudNo").val();
		$("#enr_courses_content").html("<i class='fa fa-spinner fa-spin'></i> Fetching Records Please Wait...>")
		$.post(
			"enrolled_courses_data.php",
			{
				id:id
			},
				function(data){
					$("#enr_courses_content").html(data);
				}
		);
	});
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
							title: 'Profile Picture Successfully Update'
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
						title: 'Error Updating Profile Picture'
						})
				})
			}
		});
	})
})
