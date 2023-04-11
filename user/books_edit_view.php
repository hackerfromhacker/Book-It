<?php
	include("auth.php");
	include('../connect/db.php');
	$user_id=$_SESSION['SESS_CUSTOMER_ID'];
	$id = $_GET['id'];
	$qry_user = $db->prepare("SELECT * FROM books WHERE id = '$id'");
	$qry_user->execute();
	$rows = $qry_user->fetch();
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
 					<div class="col-sm-9">
 						<div class="panel panel-default card-view">
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body">
 									<div class="form-wrap">
 										<form action="actions/book_edit_view.php" method="post" enctype="multipart/form-data" autocomplete="off">
 											<input type="hidden" name="id" value="<?php echo $id ?>">
 											<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about product</h6>
 											<hr class="light-grey-hr" />
 											<div class="row">
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Name</label>
 														<input type="text" name="product_name" class="form-control" value="<?php echo $rows['product_name'] ?>" required>
 													</div>
 												</div>
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Author</label>
 														<input type="text" name="product_sub" class="form-control" value="<?php echo $rows['product_sub'] ?>" required>
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
 															<option value="<?php echo $rows['category'] ?>"><?php echo $rows['category'] ?></option>
 															<option value="">Select</option>
 															<option>Books</option>
 															<option>Exam</option>
 														</select>
 													</div>
                                                    <!--/span-->
 												
 												<!--/span-->
 												</div>
                                                
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Quantity</label>
 														<input type="number" name="qty" class="form-control" value="<?php echo $rows['qty'] ?>" required>
 													</div>
 												</div>
                                                <div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Publish</label>
 														<input type="text" name="pblsh" class="form-control" value="<?php echo $rows['pblsh'] ?>">
 													</div>
 												</div>
                                                <div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Year</label>
 														<input type="date" name="pyr" class="form-control" value="<?php echo $rows['pyr'] ?>" max="<?php echo date("Y-m-d");?>">
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
 															<input type="number" class="form-control" name="price" value="<?php echo $rows['price'] ?>" id="exampleInputuname" required>
 														</div>
 													</div>
 												</div>
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Discount</label>
 														<div class="input-group">
 															<div class="input-group-addon"><i class="ti-cut"></i></div>
 															<input type="number" class="form-control" name="discount" value="<?php echo $rows['discount'] ?>" required>
 														</div>
 													</div>
 												</div>
 												<!--/span-->
 											</div>
 											<div class="seprator-block"></div>
 											<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Product Description</h6>
 											<hr class="light-grey-hr" />
 											<div class="row">
 												<div class="col-md-12">
 													<div class="form-group">
 														<textarea class="form-control" name="description" required rows="4"><?php echo $rows['description'] ?></textarea>
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
 														<input type="text" name="sname" class="form-control" value="<?php echo $rows['sname'] ;?>" readonly>
 													</div>
 												</div>
                                                 <div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Department</label>
 														<input type="text" name="dprmnt" class="form-control" value="<?php echo $rows['dprmnt'] ;?>" readonly>
 													</div>
 												</div>
                                                <div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Semester</label>
 														<input type="text" name="semester" class="form-control" value="<?php echo $rows['semester'] ;?>" readonly>
 													</div>
 												</div>
                                                
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Contact No</label>
 														<input type="text" name="cntno" class="form-control" value="<?php echo $rows['cntno'] ?>" readonly>
 													</div>
 												</div>
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Email</label>
 														<input type="text" name="email" class="form-control" value="<?php echo $rows['email'] ;?>" readonly>
 													</div>
 												</div>
 												 												
 												<!--/span-->
												<div class="col-md-12">
 													<div class="form-group">
														<label class="control-label mb-10">Address</label>
 														<textarea class="form-control" name="addrs" required rows="4"><?php echo $rows['addrs'] ?></textarea>
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
 														<img src="../photos/<?php echo $rows['photo_1'] ?>" style="width:100%; height:350px;">
 														<div class="input-group">
 															<div class="input-group-addon"><i class="ti-image"></i></div>
 															<input type="file" class="form-control" name="photo_1">
 														</div>
 													</div>
 												</div>
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Photo 2</label>
 														<img src="../photos/<?php echo $rows['photo_2'] ?>" style="width:100%; height:350px;">
 														<div class="input-group">
 															<div class="input-group-addon"><i class="ti-image"></i></div>
 															<input type="file" class="form-control" name="photo_2">
 														</div>
 													</div>
 												</div>
 											</div> 											
 											<div class="form-actions">
 												<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>update</span></button>
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