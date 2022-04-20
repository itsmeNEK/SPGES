<!DOCTYPE html>
	<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>SPGES | REGISTER</title>
			<link rel="icon" href="dist/dept.jpg" type="image/icon type">

    	<link rel="stylesheet" href="dist/css/login.css">
  		<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
			<link rel="stylesheet" href="dist/css/adminlte.min.css">
			<link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
						<br>
						<div class="register-content">
        			<form class="form-login">
								<img src="dist/logo.png">
								<img src="dist/dept.jpg">

								<h2 class="regtitle">SPGES</h2>
								<div id="alert_error">

								</div>
								<div class="input-div">
									<div class="i">
										<i class="fas fa-user"></i>
									</div>
									<div class="div">
										<h5>Student ID No.</h5>
										<input type="text" class="input" id="txtIDNo">
									</div>
								</div>
          			<div class="input-div">
            			<div class="i">
              			<i class="fas fa-user"></i>
            			</div>
							  	<div class="div">
		              	<h5>Full Name</h5>
		              	<input type="text" class="input" id="txtnewname">
		            	</div>
          			</div>

							<div class="input-div">
            		<div class="i">
              		<i class="fas fa-envelope"></i>
            		</div>

						  	<div class="div">
	              	<h5>Username</h5>
	              	<input type="text" class="input" id="txtnewuname">
	            	</div>
          		</div>

							<div class="input-div">
                <div class="i">
                  <i class="fas fa-lock"></i>
                </div>

								<div class="div">
                  <h5>Password</h5>
                  <input type="password" class="input" id="txtnewupass">
									<span class="show-btn" id="new_pass"><i class="fas fa-eye" id="newpass_icon"></i></span>
                </div>

              </div>

							<div class="input-div">
                <div class="i">
                  <i class="fas fa-lock"></i>
                </div>

								<div class="div">
                  <h5>Confirm Password</h5>
                  <input type="password" class="input" id="txtcupass">
									<span class="show-btn" id="confirm_pass"><i class="fas fa-eye" id="confirm_icon"></i></span>
                </div>
              </div>

							<div class="alert_div" id="alert">

							</div>

							<div class="policy">
         				<input type="checkbox" id="accept">
         				<h3 class="h3css">I accept all terms & condition</h3>
       				</div>


							<input type="button" class="btncss" id="btnreg" value="Sign Up">
              <a href="#" class="acss" id="login">Already have an Account? Log In</a>
            </form>
          </div>
						<br>
				</div>
					<div class="col-md-4"></div>
				</div>
			</div>


			<div class="modal fade" id="modal_reg">
        <div class="modal-dialog">
          <div class="modal-content">
							<div class="alert_custom alert-success">
								<h5><i class="icon fas fa-check"></i> Account Successfully Registered!</h5>
								Please wait while we rediredct to login page.
							</div>
          </div>
        </div>
      </div>
			<script src="plugins/jquery/jquery.min.js"></script>
			<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="LoginController.js"></script>
  </body>
</html>
