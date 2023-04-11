<?php
	include("auth.php");
	include('../connect/db.php');
	$user_id=$_SESSION['SESS_CUSTOMER_ID'];
	
	$name=$_POST["name"];
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
       			<?php
                        $result = $db->prepare("select * from books where product_name='$name' and user_id!='$user_id'");
                        $result->execute();
                        for($i=0; $rows = $result->fetch(); $i++)
                        {							
						?>	
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 well">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<article class="col-item">
										<div class="photo">											
											<a href="javascript:void(0);"> <img src="../photos/<?php echo $rows['photo_1'] ?>" class="img-responsive" style="width:250px; height:250px;" /> </a>
										</div>
										<div class="info">
											<h6>NAME <?php echo $rows['product_name'];?></h6>
                                            <h6>AUTHOR <?php echo $rows['product_sub'];?></h6>
                                            <h6>PUBLISH <?php echo $rows['pblsh'];?></h6>
                                            <h6>YEAR <?php echo $rows['pyr'];?></h6>
											<div class="product-rating inline-block">
												QTY <?php echo $rows['qty'];?>
											</div>
											<span class="head-font block text-warning font-16">PRICE <?php echo $rows['price'];?></span>
											<span class="head-font block text-warning font-16">DIS <?php echo $rows['discount'];?></span>
											<div class="product-rating inline-block">
												PHONE <?php echo $rows['cntno'];?>
											</div>	
                                            <br>
											<div class="product-rating inline-block">
												DESCRIPTION <br><?php echo $rows['description'];?>
											</div>											
											<a href="search_books_view_payment.php?id=<?php echo $rows['id'] ?>" class="btn btn-block btn-danger">REQUEST</a>
										</div>
									</article>
								</div>
							</div>	
						</div>	
					</div>	
						<?php }?>
										
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
