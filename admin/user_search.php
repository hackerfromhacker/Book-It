<?php
	include("auth.php");
	include('../connect/db.php');
	$user_id=$_SESSION['SESS_ADMIN_ID'];
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

 					<div class="col-lg-12">
 						<div class="panel panel-default card-view">
 							<div class="panel-heading">
 								<div class="pull-left">
 									<h6 class="panel-title txt-dark">Users Search</h6>
 								</div>
 								<div class="clearfix"></div>
 							</div>
 							<div class="panel-wrapper collapse in">
 								<div class="panel-body">
								 <table id="datable_1" class="table table-hover display  pb-30">
										<thead>
											<tr>
												<th>Name</th>
												<th>phone</th>
												<th>email</th>
                                                <th>Department</th>
                                                <th>Semester</th>
												<th>Photo</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$qry_user = $db->prepare("SELECT * FROM users WHERE user_type = 'customer' AND user_id != '$user_id'");
											$qry_user->execute();
											for ($i = 0; $rows = $qry_user->fetch(); $i++) {
											?>
												<tr>
													<td><?php echo $rows['fname'] . ' - ' . $rows['lname'] ?></td>
													<td><?php echo $rows['phone'] ?></td>
													<td><?php echo $rows['semail'] ?></td>
                                                    <td><?php echo $rows['dprtmnt'] ?></td>
                                                    <td><?php echo $rows['semester'] ?></td>
													<td><img src="../photos/<?php echo $rows['photo'] ?>" width="150"></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
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