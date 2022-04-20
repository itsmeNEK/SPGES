$(document).ready(function(){
	$(document).on("click","#btnlogin",function(){
		login();
	});

	$(document).on("click","#register",function(){
		window.location = "register.php";
		$("#txtupass").val("");
	});

	$(document).on("click","#showpass",function(){
		if($("#txtupass").attr('type') === "password"){
			$("#txtupass").attr('type','text');
			$("#pass_icon").toggleClass("hide-btn");
		}else{
			$("#txtupass").attr('type','password');
			$("#pass_icon").toggleClass("hide-btn");
		}
	})

	$(document).on("click","#login",function(){
		window.location="index.php";
	});

	$(document).on("click","#btnreg",function(){
		var newpass = $("#txtnewupass").val();
		var conpass = $("#txtcupass").val()
		var stud	= $("#txtIDNo").val();
		var nname = $("#txtnewuname").val();
		var name  = $("#txtnewname").val();
		if(newpass == conpass){
			if((newpass =="") || (stud == "") || (nname == "") || (name == "")){
				var html = "<div class='alert alert-danger' id='mess'><p class='b'><i class='icon fas fa-ban'></i>Please Fiil All Necessary Input </p></div>";
				$(html).hide().appendTo("#alert_error").fadeIn(500);
				$('#mess').delay(1500).fadeOut(function(){
						$("#alert_error").empty();
				});
			}else{
					register();
			}

		}else{
			var html = "<i class='fas fa-exclamation-circle error_text'></i><h3 class='alert_text'>Password didn't matched</h3>";
			$(html).hide().appendTo("#alert").fadeIn(500);
			$('#alert').delay(1500).fadeOut(function(){
				$("#alert").empty();
					$("#alert").removeAttr("style");
				 $("#txtcupass").val('');
				 $("#txtnewupass").val('');
			});
		}
	});


	$(document).on("click","#new_pass",function(){
		if($("#txtnewupass").attr('type') === "password"){
			$("#txtnewupass").attr('type','text');
			$("#newpass_icon").toggleClass("hide-btn");
		}else{
				$("#txtnewupass").attr('type','password');
					$("#newpass_icon").toggleClass("hide-btn");
		}
	})

	$(document).on("click","#confirm_pass",function(){
		if($("#txtcupass").attr('type') === "password"){
			$("#txtcupass").attr('type','text');
			$("#confirm_icon").toggleClass("hide-btn");
		}else{
				$("#txtcupass").attr('type','password');
					$("#confirm_icon").toggleClass("hide-btn");
		}
	})

	const inputs=document.querySelectorAll(".input");
	function addCl() {
		let par=this.parentNode.parentNode;
		par.classList.add("focus");
	}

	function remC1() {
		let par=this.parentNode.parentNode;
		if(this.value=="")
		par.classList.remove("focus");
	}

	inputs.forEach(input=>{
		input.addEventListener("focus",addCl);
		input.addEventListener("blur",remC1);
	})
})

function login(){
	$(document).ready(function() {
    var uname= $("#txtuname").val();
		var upass= $("#txtupass").val();

			$.post(
			"LoginValidation.php",
				{
					uname: uname,
					upass: upass
				},
					function(data){
						if(data == 1){
							window.location ="dashboard.php";
						}else{
							$("#txtuname").val('');
							$("#txtupass").val('');
							var html = "<div class='alert alert-danger' id='message'><p class='b'><i class='icon fas fa-ban'></i>Incorrect Username or Password.</p></div>";
							$(html).hide().appendTo("#alert_error").fadeIn(500);
							$('#message').delay(1500).fadeOut(function(){
									$("#alert_error").empty();
							});
						}
					});
	});
};

function register(){
	$(document).ready(function(){
		var stud	= $("#txtIDNo").val();
		var nname = $("#txtnewuname").val();
		var npass =	$("#txtnewupass").val();
		var name  = $("#txtnewname").val();
		$.post(
		"RegisterValidation.php",
			{
				stud: stud,
				name: name,
				uname: nname,
				upass: npass
			},
				function(data){
					if(data == 1){
						$("#modal_reg").modal("show");
						window.setTimeout(function () {
							window.location = "index.php";
						},3000);

					}else{
						$("#txtIDNo").val('');
						$(".input-div").removeClass("focus");
						$("#txtnewuname").val('');
						$("#txtnewupass").val('');
						$("#txtnewname").val('');
						$("#txtcupass").val('');
						$('#accept').prop('checked', false);

						var html = "<div class='alert alert-danger' id='mess'><p class='b'><i class='icon fas fa-ban'></i>Student ID or Username Already Exist.</p></div>";
						$(html).hide().appendTo("#alert_error").fadeIn(500);
						$('#mess').delay(1500).fadeOut(function(){
								$("#alert_error").empty();
						});
					}

				});


	});

};
