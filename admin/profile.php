<?php
	include("auth.php");
	include('../connect/db.php');
	$user_id=$_SESSION['SESS_ADMIN_ID'];

	$qry_user = $db->prepare("SELECT * FROM users WHERE user_id = '$user_id'");
	$qry_user->execute();
	$rows_user = $qry_user->fetch();
	$fname = $rows_user['fname'];
	$lname = $rows_user['lname'];
	$phone = $rows_user['phone'];
	$email = $rows_user['semail'];
	$photo = $rows_user['photo'];
	?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="UTF-8" />
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 	<title>Share It Books</title>
 	<meta name="description" content="" />
 	<meta name="author" content="hencework" />
 	<!-- Favicon -->
 	<link rel="shortcut icon" href="favicon.ico">
 	<link rel="icon" href="favicon.ico" type="image/x-icon">
 	<?php include("include\css.php"); ?>
 </head>

 <body>
 	<!-- Preloader -->
 	<div class="preloader-it">
 		<div class="la-anim-1"></div>
 	</div>
 	<!-- /Preloader -->
 	<div class="wrapper theme-1-active pimary-color-red">

 		<!-- Top Menu Items -->
 		<?php include("include\menu.php"); ?>
 		<!-- /Top Menu Items -->

 		<!-- Left Sidebar Menu -->
 		<?php include("include\leftmenu.php"); ?>
 		<!-- /Left Sidebar Menu -->

 		<!-- Main Content -->
 		<div class="page-wrapper">
 			<div class="container-fluid pt-25">

 				<!-- Row -->
 				<div class="row">

 					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
 						<div class="panel panel-default card-view panel-refresh">
 							<div class="refresh-container">
 								<div class="la-anim-1"></div>
 							</div>
 							<!-- <div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Profile Photo</h6>
								</div>								
							</div> -->
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body text-center">
 									<div>
 										<?php if ($photo != '') {
												echo '<img src="../photos/' . $photo . '" width="100%">';
											} else {
												echo '<img src="../admin/dist/img/avatar.jpg" style="width:100%">';
											} ?>
 									</div>
 									<hr class="light-grey-hr row mt-10 mb-15" />
 									<div class="label-chatrs">
 										<div class="">
 											<h4><?php echo ucwords($fname . ' ' . $lname) ?></h4>
 											<div class="clearfix"></div>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>


 					<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
 						<div class="panel panel-default card-view">
 							<div class="panel-heading">
 								<div class="pull-left">
 									<h6 class="panel-title txt-dark">Other information</h6>
 								</div>
 								<div class="clearfix"></div>
 							</div>
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body">
 									<?php
										if (isset($_GET['updated'])) {
											echo '<h4 class="alert bg-success text-center">PROFILE UPDATED</h4>';
										}
										?>
 									<form action="actions/profile.php" method="post" enctype="multipart/form-data" autocomplete="off">
 										<div class="row">
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Firstname</label>
 													<input type="text" class="form-control" placeholder="Firstname" name="fname" value="<?php echo $fname ?>" required pattern="[a-zA-Z1 _]{3,50}">
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Lastname</label>
 													<input type="text" class="form-control" placeholder="Lastname" name="lname" value="<?php echo $lname ?>" required pattern="[a-zA-Z1 _]{1,50}">
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Phone Number</label>
 													<input type="number" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo $phone ?>" required pattern="[0-9]{10,10}" maxlength="10" minlength="10" >
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Email</label>
 													<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email ?>" required readonly>
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Photo</label>
 													<input class="form-control" name="photo" type="file" required />
 												</div>
 											</div>
 											<div class="col-md-6">
 												<div class="form-group">
 													<label class="control-label mb-10">Password</label>
 													<input type="password" class="form-control" placeholder="Password" name="password" id="password1" required>
 												</div>
 											</div>
 											<div class="clearfix"></div>
 											<div class="col-md-12 text-center">
 												<input type="submit" value="Update" class="btn btn-danger">
 											</div>
 										</div>
 									</form>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<!-- /Row -->
 			</div>

 			<!-- Footer -->
 			<footer class="footer container-fluid pl-30 pr-30">
 				<div class="row">
 					<div class="col-sm-12">
 						<p>2023 &copy; Share It Books. All Right Reserved</p>
 					</div>
 				</div>
 			</footer>
 			<!-- /Footer -->

 		</div>
 		<!-- /Main Content -->

 	</div>
 	<!-- /#wrapper -->

 	<?php include("include\js.php"); ?>
 </body>

 </html>