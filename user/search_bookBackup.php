<?php
	include("auth.php");
	include('../connect/db.php');
	$user_id=$_SESSION['SESS_CUSTOMER_ID'];
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
				
				<!-- Row -->
				<div class="row">

					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                       <div class="panel panel-default card-view panel-refresh">
							<div class="refresh-container">
								<div class="la-anim-1"></div>
							</div>
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Search Books</h6>
                                    <hr class="light-grey-hr row mt-10 mb-15"/>
								</div>								
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									
									<form action="search_books_view.php" autocomplete="off" method="post">
                                    	<hr class="light-grey-hr"/>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Name</label>
                                                    <input list="name" required class="form-control" name="name" placeholder="Search">
														<datalist id="name">
															<option value="">Select</option> 
															 <?php
																$result = $db->prepare("SELECT distinct(product_name) FROM books where user_id!='$user_id'");
																$result->execute();
																for($i=0; $rows = $result->fetch(); $i++)
																{
																echo '<option>'.$rows['product_name'].'</option>';
																}
															?>	                                         					
														</datalist>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <input type="submit" value="Search" class="btn btn-block btn-danger">
                                                </div>
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
	
	<?php include("include\js.php");?>
</body>

</html>
