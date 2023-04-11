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

				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Complants</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30">
												<thead>
													<tr>
														<th>Name</th>
														<th>Contact</th>
														<th>Email</th>
														<th>Subject</th>
														<th>Date</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$qry_user = $db->prepare("SELECT * FROM complaint WHERE reply = 'pending'");
													$qry_user->execute();
													for ($i = 0; $rows = $qry_user->fetch(); $i++) {
													?>
														<tr>
															<td><?php echo $rows['name'] ?></td>
															<td><?php echo $rows['phone'] ?></td>
															<td><?php echo $rows['email'] ?></td>
															<td><?php echo $rows['subject'] ?></td>
															<td><?php echo $rows['dated'] ?></td>
															<td><a href="complaint.php?id=<?php echo $rows['id'] ?>" class="btn btn-primary">Reply</a></td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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