$(document).ready(function(){
		$(document).on("click","#btnlogin",function(){
		 login();
		});

		const passField = document.querySelector("#txtupass");
		const showBtn = document.querySelector("span i");
		showBtn.onclick = (()=>{
		  if(passField.type === "password"){
		    passField.type = "text";
		    showBtn.classList.add("hide-btn");
		  }else{
		    passField.type = "password";
		    showBtn.classList.remove("hide-btn");
		  }
		});

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
		});
});

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
