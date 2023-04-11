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
				<h2>Order Request</h2>
					<hr>
       			<?php
                        $result = $db->prepare("select * from booking_books where SLog_Id='$user_id' and sstatus='Pending'");
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
											<a href="javascript:void(0);"> <img src="../photos/<?php echo $rows['photo_1'] ?>" class="img-responsive" style="width:400px; height:250px;" /> </a>
										</div>
										<div class="info">
                                        	
											<table class="table table-bordered">
                                            	<thead>
                                                	<tr>
                                                    	<th>
                                                        	NAME
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['product_name'];?>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                    	<th>
                                                        	AUTHOR
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['product_sub'];?>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                    	<th>
                                                        	PUBLISH
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['pblsh'];?>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                    	<th>
                                                        	YEAR
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['pyr'];?>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                    	<th>
                                                        	QTY
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['qty'];?>
                                                        </th>
                                                    </tr>
                                                     <tr>
                                                    	<th>
                                                        	PRICE
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['price'];?>
                                                        </th>
                                                    </tr>
                                                     <tr>
                                                    	<th>
                                                        	CUMSTOMER
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['cname'];?>
                                                        </th>
                                                    </tr>                                                    
                                                    <tr>
                                                    	<th>
                                                        	DEPARTMENT
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['cdprmnt'];?>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                    	<th>
                                                        	SEMESTER
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['csemester'];?>
                                                        </th>
                                                    </tr>
                                                     <tr>
                                                    	<th>
                                                        	CONTACT
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['cphone'];?>
                                                        </th>
                                                    </tr>
                                                     <tr>
                                                    	<th>
                                                        	ADDRESS
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['caddrs'];?>
                                                        </th>
                                                    </tr>
                                                      <tr>
                                                    	<th>
                                                        	REQUEST
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['sstatus'];?>
                                                        </th>
                                                    </tr>
                                                      <tr>
                                                    	<th>
                                                        	DELIVERY
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['dstats'];?>
                                                        </th>
                                                    </tr>
                                                      <tr>
                                                    	<th>
                                                        	DATE
                                                        </th>
                                                        <th>
                                                        	<?php echo $rows['date'];?>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>    
                                            <div class="row">
                                            	<div class="col-lg-6">
                                                	<a href="actions/request_prdct_accept.php?prbk_id=<?php echo $rows['prbk_id'];?>" class="btn btn-block btn-success">ACCEPT</a>
                                                </div>
                                                <div class="col-lg-6">
                                                
												<a href="actions/request_prdct_cancel.php?prbk_id=<?php echo $rows['prbk_id'];?>" class="btn btn-block btn-danger">CANCEL</a>
                                                </div>
                                            </div>  
										
											<br><br>
											<input type="submit" class="btn btn-block btn-primary" value="Print" onclick="window.print();">
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
