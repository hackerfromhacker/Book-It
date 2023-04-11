<?php
	include("auth.php");
	include('../connect/db.php');
	$user_id=$_SESSION['SESS_CUSTOMER_ID'];
	$result = $db->prepare("select * from users where user_id='$user_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$fname=$row["fname"];
		$cntno=$row["phone"];
		$addrs=$row["addrs"];
		$dprmnt=$row["dprtmnt"];
		$semester=$row["semester"];
		$email=$row["semail"];
	}
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="UTF-8" />
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 	<title>Share It Books</title>
 	<meta name="description" content />
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
 					<div class="col-sm-9">
 						<div class="panel panel-default card-view">
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body">
 									<div class="form-wrap">
 										<form action="actions/book_post.php" method="post" enctype="multipart/form-data" autocomplete="off">
 											<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about books</h6>
 											<hr class="light-grey-hr" />
 											<div class="row">
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Name</label>
 														<input type="text" name="product_name" class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
 													</div>
 												</div>
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Author</label>
 														<input type="text" name="product_sub" class="form-control" required pattern="[a-zA-Z1 _]{1,50}">
 													</div>
 												</div>
 												<!--/span-->
 											</div>
 											<!-- Row -->
 											<div class="row">
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Category</label>
 														<select class="form-control" name="category" data-placeholder="Choose a Category" tabindex="1" required>
															<option value="">Select</option>
 															<option>Books</option>
 															<option>Accessories</option>
 														</select>
 													</div>
 												</div>
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Publish</label>
 														<input type="text" name="pblsh" class="form-control" required>
 													</div>
 												</div>
 												<!--/span-->
 											</div>
                                            <!-- Row -->
 											<div class="row">
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Year</label>
 														<input type="date" name="pyr" class="form-control" required max="<?php echo date("Y-m-d");?>">
 													</div>
 												</div>
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Quantity</label>
 														<input type="number" name="qty" class="form-control" required min="0" step="0.01">
 													</div>
 												</div>
 												<!--/span-->
 											</div>
 											<!--/row-->
 											<div class="row">
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Price</label>
 														<div class="input-group">
 															<div class="input-group-addon"><i class="ti-money"></i></div>
 															<input type="number" class="form-control" name="price" required min="0" step="0.01">
 														</div>
 													</div>
 												</div>
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Discount</label>
 														<div class="input-group">
 															<div class="input-group-addon"><i class="ti-cut"></i></div>
 															<input type="number" class="form-control" name="discount" value="0" required min="0" step="0.01">
 														</div>
 													</div>
 												</div>
 												<!--/span-->
 											</div>
 											<div class="seprator-block"></div>
 											<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Books Description</h6>
 											<hr class="light-grey-hr" />
 											<div class="row">
 												<div class="col-md-12">
 													<div class="form-group">
 														<textarea class="form-control" name="description" required rows="4" placeholder="Product Description"></textarea>
 													</div>
 												</div>
 											</div>
											
											<div class="seprator-block"></div>
 											<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Personal Information</h6>
 											<hr class="light-grey-hr" />
 											<div class="row">
                                           		 <div class="col-md-12">
 													<div class="form-group">
 														<label class="control-label mb-10">Name</label>
 														<input type="text" name="sname" class="form-control" value="<?php echo $fname;?>" readonly>
 													</div>
 												</div>
                                                 <div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Department</label>
 														<input type="text" name="dprmnt" class="form-control" value="<?php echo $dprmnt;?>" readonly>
 													</div>
 												</div>
                                                <div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Semester</label>
 														<input type="text" name="semester" class="form-control" value="<?php echo $semester;?>" readonly>
 													</div>
 												</div>
                                                
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Contact No</label>
 														<input type="text" name="cntno" class="form-control" value="<?php echo $cntno;?>" readonly>
 													</div>
 												</div>
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Email</label>
 														<input type="text" name="email" class="form-control" value="<?php echo $email;?>" readonly>
 													</div>
 												</div>
 												<!--/span-->
												<div class="col-md-12">
 													<div class="form-group">
														<label class="control-label mb-10">Address</label>
 														<textarea class="form-control" name="addrs" required rows="4"></textarea>
 													</div>
 												</div>
 											</div>
 											<!--/row-->
 											<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload image</h6>
 											<hr class="light-grey-hr" />
 											<div class="row">
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Photo 1</label>
 														<div class="input-group">
 															<div class="input-group-addon"><i class="ti-image"></i></div>
 															<input type="file" class="form-control" name="photo_1" required>
 														</div>
 													</div>
 												</div>
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Photo 2</label>
 														<div class="input-group">
 															<div class="input-group-addon"><i class="ti-image"></i></div>
 															<input type="file" class="form-control" name="photo_2" required>
 														</div>
 													</div>
 												</div> 												
 											</div>
 											<div class="form-actions">
 												<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>save</span></button>
 												<button type="button" class="btn btn-warning pull-left">Cancel</button>
 												<div class="clearfix"></div>
 											</div>
 										</form>
 									</div>
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