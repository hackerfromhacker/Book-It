<?php
	include("auth.php");
	include('../connect/db.php');
	$fdate=$_POST["fdate"];
	$tdate=$_POST["tdate"];
?> 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Share It Books</title>
	<meta name="description" content="" />
	<meta name="author" content="hencework"/>
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<?php include("include\css.php");?>
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-red">
		
        <!-- Top Menu Items -->
			<?php include("include\menu.php");?>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
			<?php include("include\leftmenu.php");?>
		<!-- /Left Sidebar Menu -->
				
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
				
            <div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Books Report From <?php echo $fdate;?> To <?php echo $tdate;?></h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>Sl No</th>
                                                        <th>Date</th>
                                                        <th>Name</th>
                                                        <th>Author</th>
                                                		<th>Publish</th>
                                                        <th>Year</th>
														<th>Category</th>
														<th>Quantity</th>
														<th>Price</th>
														<th>Discount</th>
                                                        <th>Category</th>
													</tr>
												</thead>												
												<tbody>
													<?php
													$result = $db->prepare("select * from books where date>='$fdate' and date<='$tdate' order by date asc");
														$result->execute();
														for($i=1; $row = $result->fetch(); $i++)
														{
															echo"<tr>";
																echo"<td>".$i."</td>";
																echo"<td>".$row["date"]."</td>";
																echo"<td>".$row["product_name"]."</td>";
																echo"<td>".$row["product_sub"]."</td>";
																echo"<td>".$row["pblsh"]."</td>";
																echo"<td>".$row["pyr"]."</td>";
																echo"<td>".$row["category"]."</td>";
																echo"<td>".$row["qty"]."</td>";
																echo"<td>".$row["price"]."</td>";
																echo"<td>".$row["discount"]."</td>";
																echo"<td>".$row["category"]."</td>";
															echo"</tr>";
														}
													?>
												</tbody>
											</table>
                                            <br>
                                            <input type="submit" value="Print" class="btn btn-sm btn-primary pull-right" onClick="window.print();">
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
	
	<?php include("include\js.php");?>
</body>

</html>
