<?php 
include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>เข้าสู่ระบบ</title>
		<meta name="description" content="Elmer is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Elmer Admin, Elmeradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						
						<!-- <span class="brand-text">Elmer</span> -->
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					
					<a class="inline-block btn btn-primary  btn-rounded btn-outline" href="singup.php">สมัครสมาชิก</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="page-wrapper pa-0 ma-0 auth-page">
						<div class="container-fluid">
							<!-- Row -->
							<div class="table-struct full-width full-height">
								<div class="table-cell vertical-align-middle auth-form-wrap">
									<div class="auth-form  ml-auto mr-auto no-float">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="mb-30">
													<h3 class="text-center txt-dark mb-10">ลงชื่อเข้าสู้ระบบ</h3>
													
												</div>	
												<div class="form-wrap">
												<form  method="post" action="chklogin.php">
														<div class="form-group">
															<label class="control-label mb-10" for="exampleInputEmail_2">อีเมล</label>
															<input  class="form-control" required="" name="cus_email" type="text" id="txtUsername" placeholder="อีเมล"class="form-control form-control-lg <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
															<span class="invalid-feedback"><?php echo $email_err; ?></span>
														</div>
														<div class="form-group">
															<label class="pull-left control-label mb-10" for="exampleInputpwd_2">รหัสผ่าน</label>
															<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">ลืมหรัสผ่าน</a>
															<div class="clearfix"></div>
														
															<input  type="password" name="cus_password" id="txtPassword" class="form-control" required="" placeholder="รหัสผ่าน"  class="form-control form-control-lg <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
															<span class="invalid-feedback"><?php echo $password_err; ?></span>
														</div> 
														<div class="button-list mt-25">
                                            <div class="form-group">

                                                <a class="g-signin2" data-onsuccess="onSignIn" href="goo/google_login.php">login_google</a>
                                            </div>
                                        </div>
														
														<div class="form-group text-center">
															<button type="submit" class="btn btn-primary  btn-rounded" value="">เข้าสู้ระบบ</button>
														</div>
														<!-- <div class="col">
              				  <a href="register.php" class="btn btn-light btn-block">No account? Register</a>
              						</div> -->
													</form>
													
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->	
		
		
						</div>
						
					</div>
					<!-- /Row -->	

				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>