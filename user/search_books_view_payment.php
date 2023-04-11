<?php
	include("auth.php");
	include('../connect/db.php');
	$user_id=$_SESSION['SESS_CUSTOMER_ID'];
	$id=$_GET['id'];
	$result = $db->prepare("select * from books where id='$id'");
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++)
	{		
		$price=$rows['price'];
		$qty=$rows['qty'];	
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
 					<div class="col-sm-6">
 						<div class="panel panel-default card-view">
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body">
 									<div class="form-wrap">
 										<form action="actions/booking_prdt.php" method="get" enctype="multipart/form-data" autocomplete="off">
 											<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>Payment</h6>
 											<hr class="light-grey-hr" />
 											<div class="row">
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Bank Name</label>
 														<input type="text" name="product_name" class="form-control" required pattern="[a-zA-Z1 _]{3,50}">
														<input type="hidden" name="id" value="<?php echo $id;?>">
 													</div>
 												</div>
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Account No</label>
 														<input type="text" name="product_sub" class="form-control"  maxlength="20" minlength="10" >
 													</div>
 												</div>
												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Card No</label>
 														<input type="text" name="product_sub" class="form-control" maxlength="6" minlength="6" >
 													</div>
 												</div>
												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Expiry Date</label>
 														<input type="date" name="product_sub" class="form-control" required min="<?php echo date("Y-m-d");?>">
 													</div>
 												</div>
 												<!--/span-->
 											</div>
											
 											<!--/row-->
 											<div class="row">
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Amount</label>
 														<div class="input-group">
 															<div class="input-group-addon"><i class="ti-money"></i></div>
 															<input type="number" class="form-control" name="price" readonly value="<?php echo $price;?>">
 														</div>
 													</div>
 												</div>
 												<!--/span-->
 												<div class="col-md-6">
 													<div class="form-group">
 														<label class="control-label mb-10">Date</label>
 														<div class="input-group">
 															<div class="input-group-addon"><i class="ti-date"></i></div>
 															<input type="text" class="form-control" name="discount" value="<?php echo date("Y-m-d");?>">
 														</div>
 													</div>
 												</div>
 												<!--/span-->
 											</div> 											
 											<div class="form-actions">
 												<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>Pay</span></button>
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