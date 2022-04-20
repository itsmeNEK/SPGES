<!DOCTYPE html>
	<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>SPGES | LOGIN</title>
			<link rel="icon" href="dist/dept.jpg" type="image/icon type">

    	<link rel="stylesheet" href="dist/css/login.css">
  		<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
			<link rel="stylesheet" href="dist/css/adminlte.min.css">
			<style media="screen">

				.b{
					font-size: 14px;
					margin-bottom: 0rem
				}
			</style>
  	</head>

  	<body>
    		<div class="container">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<br><br>
							<div class="login-content" >
		        		<form class="form-login">
									<img src="dist/logo.png">
									<img src="dist/dept.jpg">

									<h2 class="title">SPGES</h2>
									<div id="alert_error">

									</div>

		          		<div class="input-div">
		            		<div class="i">
		              		<i class="fas fa-user"></i>
		            		</div>

								  	<div class="div">
			              	<h5>Username</h5>
			              	<input type="text" class="input" id="txtuname">
			            	</div>
		          		</div>

									<div class="input-div pass">
		                <div class="i">
		                  <i class="fas fa-lock"></i>
		                </div>

										<div class="div">
		                  <h5>Password</h5>
		                  <input type="password" class="input" id="txtupass">
											<span class="show-btn" id="showpass"><i class="fas fa-eye" id="pass_icon"></i></span>
		                </div>
		              </div>

									<input type="button" class="btncss" value="Login" id="btnlogin">
		              <a href="#" class="acss" id="register">Dont have an Account? Sign up</a>
		            </form>
		          </div>
							<br><br>
						</div>
						<div class="col-md-4"></div>
					</div>
      </div>

			<div id="myModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">

	            </div>
	            <div class="modal-body">
	                <p align="center" style="font-size:19px;">This is a Secured MIT Student Profiling <br>and Grade Evaluation System</p>

	            </div>
	        </div>
	    </div>
	</div>

			<script src="plugins/jquery/jquery.min.js"></script>
			<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
			<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="dist/js/adminlte.js"></script>
	    <script src="LoginController.js"></script>
			<script type="text/javascript">
					$(document).ready(function(){
					 $("#myModal").modal('show');
			 });
			</script>
  </body>
</html>
